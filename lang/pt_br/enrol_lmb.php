<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_lmb', language 'pt_br', version '4.2'.
 *
 * @package     enrol_lmb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving'] = 'Uma vez que você salvou as suas configurações, você pode desejar';
$string['always'] = 'Sempre';
$string['assignroles'] = 'Atribuir papéis';
$string['authmethod'] = 'Definir método de autorização como';
$string['authmethodhelp'] = 'Selecionar qual método de autorização o módulo LMB deverá aplicar às suas contas.';
$string['bannerextractimport'] = 'Importar banner XML';
$string['bannerxmlfolder'] = 'Local da pasta do banner XML';
$string['bannerxmlfoldercomp'] = 'Tratar o banner XML como compreensivo';
$string['bannerxmlfoldercomphelp'] = 'Se esta opção for selecionada, as inscrições faltantes dos arquivos extraídos serão abandonas.';
$string['bannerxmlfolderhelp'] = 'O caminho (no servidor moodle) para o diretório onde um grupo de arquivos XML serão localizados';
$string['bannerxmllocation'] = 'Local do arquivo banner XML';
$string['bannerxmllocationcomp'] = 'Tratar o arquivo Banner XML como compreensivo';
$string['bannerxmllocationcomphelp'] = 'Se esta opção for selecionada, as inscrições faltantes dos arquivos extraídos serão descartadas.';
$string['bannerxmllocationhelp'] = 'O caminho (no servidor do Moodle) onde ficam os arquivos XML que você gostaria de importar.';
$string['bizdowngracehelp'] = 'Quantos minutos podem ser levados desde a última mensagem LMB antes que e-mail de aviso sejam enviados durante o horário de expediente.';
$string['categorytype'] = 'Categorias de cursos';
$string['categorytypehelp'] = 'Isso permite que você selecione em quais categorias você gostaria que os cursos fossem criados. Opções:
<ul>
<li>Períodos: Esta configuração fará com que os cursos sejam colocados nas categorias com o nome do período/semestre deles.</li>
<li> Departamentos: Esta configuração fará com que os cursos sejam colocados em categorias com o nome do departamento que o hospeda.</li>
<li> Códigos de departamento:  Usa o código de departamento ao invés do nome completo.</li>
<li>  Períodos depois departamento? Esta configuração fará com que os cursos sejam colocados nas categorias com o nome do departamento que os hospeda, que está contido em um termo período com o nome dado para o período/semestre.</li>
<li> Períodos depois Código de departamento: O mesmo que Períodos depois Avaliação, só que usa a abreviatura do departamento ao invés do nome completo.</li>
<li> Selecionado: Com esta configuração, selecione a categoria existente onde você gostaria que o curso fosse colocado, a partir do segundo menu drop down.</li>
</ul>';
$string['cathidden'] = 'Criar novas categorias como ocultas';
$string['cathiddenhelp'] = 'Criar novas categorias como ocultas.';
$string['catselect'] = 'Categoria selecionada';
$string['commadelimit'] = '(separado por vírgula)';
$string['computesections'] = 'Computar o número de sessões';
$string['computesectionshelp'] = 'Computar o número de sessões/tópicos para mostrar, baseado no número de semanas de um curso.';
$string['consolidateusers'] = 'Consolidar identificações de usuários existentes';
$string['consolidateusershelp'] = 'Se o usuário não for localizado com o sourcedid(idnumber) esperado, mas o nome de usuário for identificado, as contas serão consolidadas. Use esta opção apenas se você souber que os identificadores de usuários são únicos e não vão colidir.';
$string['coursehidden'] = 'Criar novos cursos como ocultos';
$string['coursehiddenalways'] = 'Sempre';
$string['coursehiddencron'] = 'Baseado na configuração do cron';
$string['coursehiddennever'] = 'Nunca';
$string['courseshorttitle'] = 'Nome curto do curso';
$string['courseshorttitlehelp'] = 'Isso contém o template para criar o nome curto do curso. Veja acima os tags disponíveis.';
$string['coursetitle'] = 'Nome completo do curso';
$string['createnewusers'] = 'Criar contas de usuários ainda não registrados no moodle';
$string['createnewusershelp'] = 'Esta configuração permitirá que o módulo LMB crie novos usuários no Moodle como direcionado pelo Banner / LMB';
$string['createusersemaildomain'] = 'Só crie usuários com e-mail deste domínio';
$string['createusersemaildomainhelp'] = 'Se esta configuração tiver algum valor, somente usuários que tiverem um endereço de e-mail neste domínio específico terá uma conta gerada pera eles pelo módulo LMB';
$string['cron'] = 'Opções do cron';
$string['cronunhidecourses'] = 'Mostrar cursos';
$string['pluginname'] = 'Banner/Luminis Message Broker';
