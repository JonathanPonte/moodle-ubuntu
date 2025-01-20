FROM ubuntu:20.04

# Atualizar repositórios e adicionar repositório para PHP 8.2
RUN apt update && apt install -y software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt update && apt install -y --no-install-recommends \
    apache2 \
    php8.2 \
    libapache2-mod-php8.2 \
    php8.2-cli \
    php8.2-common \
    php8.2-ctype \
    php8.2-curl \
    php8.2-dom \
    php8.2-gd \
    php8.2-iconv \
    php8.2-intl \
    php8.2-mbstring \
    php8.2-opcache \
    php8.2-pdo \
    php8.2-xml \
    php8.2-zip \
    php8.2-mysqli \
    php8.2-tokenizer \
    php8.2-fileinfo \
    php8.2-xmlreader \
    php8.2-xmlwriter \
    php8.2-xsl \
    php8.2-soap \
    php8.2-exif \
    php8.2-simplexml \
    php8.2-memcached \
    php8.2-redis \
    php8.2-msgpack \
    php8.2-yaml \
    php8.2-dev \
    php8.2-posix \
    php8.2-tidy \
    php8.2-pspell \
    php8.2-phar \
    php8.2-odbc \
    php8.2-bz2 \
    php8.2-bcmath \
    php8.2-igbinary \
    mariadb-client \
    ghostscript \
    unzip \
    vim \
    cron \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Configurar o Apache e o PHP
RUN rm -fr /var/www/html/index.html \
    && mkdir -p /var/moodle_shared/moodledata \
    && mkdir /moodle \
    && chmod -R 777 /var/moodle_shared /tmp

RUN echo '*/1 * * * * /usr/bin/php8.2 /var/www/html/ava/admin/cli/cron.php' >> /etc/crontab \
    && echo 'ErrorLogFormat "[%{u}t] [%-m:%l] [pid %P] %7F: %E: [client %a] [%{X-Forwarded-For}i] %M , referer %{Referer}i"' >> /etc/apache2/apache2.conf \
    && sed -i 's/Options Indexes FollowSymLinks/#Options Indexes FollowSymLinks/g' /etc/apache2/apache2.conf

# Configuração adicional do PHP
RUN echo "max_input_vars = 5000" >> /etc/php/8.2/apache2/php.ini \
    && sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 120M/' /etc/php/8.2/apache2/php.ini \
    && sed -i 's/post_max_size = 8M/post_max_size = 120M/' /etc/php/8.2/apache2/php.ini \
    && sed -i 's/memory_limit = 128M/memory_limit = 256M/' /etc/php/8.2/apache2/php.ini \
    && sed -i 's/error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT/error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE/' /etc/php/8.2/apache2/php.ini

# Copiar e configurar o Moodle
COPY moodle-MOODLE_404_STABLE.zip /moodle
RUN unzip /moodle/moodle-MOODLE_404_STABLE.zip -d /var/www/html \
    && mv /var/www/html/moodle-MOODLE_404_STABLE /var/www/html/moodle

COPY startup.sh /startup.sh
RUN chmod +x /startup.sh

RUN rm -fr /var/www/html/moodle/.[!.]* \
    && rm -fr /var/www/html/moodle/*.js \
    && rm -fr /var/www/html/moodle/*.json \
    && rm -fr /var/www/html/moodle/*.txt \
    && rm -fr /var/www/html/moodle/*.dist \
    && rm -fr /var/www/html/moodle/*.lock

COPY . /ava
RUN mv /var/www/html/moodle /var/www/html/ava \
    && cp -a /ava/config-dev.php /var/www/html/ava/config.php \
    && cp -a /ava/lang /var/www/html/ava/ \
    && rm -fr /ava

RUN sed -i 's/upload_max_filesize = 120M/upload_max_filesize = 8000M/' /etc/php/8.2/apache2/php.ini \
    && sed -i 's/post_max_size = 120M/post_max_size = 8000M/' /etc/php/8.2/apache2/php.ini \
    && sed -i 's/memory_limit = 256M/memory_limit = 512M/' /etc/php/8.2/apache2/php.ini

CMD printf "###CONFIG###\n" && cat /var/www/html/ava/config.php \
    && service apache2 start \
    && service cron start \
    && /startup.sh
