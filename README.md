# Template das imagens padrão do moodle

## Changelogs

#### 11/04/2024 - **moodle-template-alpine-3.14.0_m3.11.18:v1**<br>
- Primeira versão para subir o moodle 3.11.18 antes de atualizar pro moodle 4.3

#### 14/07/2023 - **moodle-template-alpine-3.18.2_m4.2.1:v2**<br>
- Novas libs php8 adicionadas

#### 14/07/2023 - **moodle-template-alpine-3.18.2_m4.2.1:v1**<br>
- Template para moodle 4 na versão 1
- Adicionado o php 8
- Adicionado novas bibliotecas

#### 10/07/2023 - **moodle-template-alpine-3.14.0_m3.10.3_tag_v6**<br>
- Deixando somente msg de erro
- Ajustado conceito de tag ao invés de imagem

#### 10/07/2023 - **moodle-template-alpine-3.14.0_m3.10.3_v5**<br>
- Add startup.sh
- Removendo lixo

#### 29/06/2023 - **moodle-template-alpine-3.14.0_m3.10.3_v4**<br>
- Adjust Cron
- Fix ErrorLogFormat remoteip: X-Forwarded-For
- Remove Indexes FollowSymLinks do apache;
- Fix php.ini
- Extract moodle
#### 26/04/2023 - **moodle-template-alpine-3.14.0_m3.10.3_v3**<br>
- Removido lib gd e zip que estão duplicadas, adicionado ghostscript
#### 26/04/2023 - **moodle-template-alpine-3.14.0_m3.10.3_v2**<br>
- Incluso bibliotecas novas para dar suporte ao Excel e cron
- (Nota: Remover lib gd e lib zip que estão duplicadas)
#### 03/04/2023 - **moodle-template-alpine-3.14.0_m3.10.3_v1**<br>
- Incluso arquivo moodle-3.10.3.tgz
#### 29/03/2023 - **moodle-template-alpine-3.14.0**<br>
- Imagem preparada para suportar o moodle 4.0, incluso tais pacotes: php7-simplexml php7-xmlreader php7-fileinfo php7-tokenizer php7-sodium php7-exif

#### 25/07/2024 - **criando versão da unifor do moodle 
- Comentando linha 103 no arquivo /var/www/localhost/htdocs/ava/admin/roles/classes/define_role_table_advanced.php para não limpar o valor do campo shortname ao salvar role.

### Repositório Unifor
nexus3.unifor.br:8080/unifor/

### Comandos uteis
No próprio arquivo...
