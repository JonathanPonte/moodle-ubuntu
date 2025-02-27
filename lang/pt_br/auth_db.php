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
 * Strings for component 'auth_db', language 'pt_br', version '4.2'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Não foi possível estabelecer conexão com o banco de dados externo.';
$string['auth_dbcannotreadtable'] = 'Não foi possível ler a tabela externa.';
$string['auth_dbcantconnect'] = 'Não foi possível conectar ao banco de dados da autenticação especificada...';
$string['auth_dbchangepasswordurl_key'] = 'Página para mudança de senha';
$string['auth_dbcolumnlist'] = 'A tabela externa possui as seguintes colunas: <br />{$a}';
$string['auth_dbdebugauthdb'] = 'Eliminar erros do ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Eliminar erros de conexão para banco de dados externo do ADOdb - use quando ocorrer a abertura de uma página vazia durante o início de uma sessão. Inapropriado para sites de produção.';
$string['auth_dbdeleteuser'] = 'Usuário apagado {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Erro ao excluir usuário {$a}';
$string['auth_dbdescription'] = 'Este método usa uma tabela de uma base de dados externa para verificar se usuário e senha informados são válidos. Se a conta for nova, a informação de outros campos também será copiada para o Moodle.';
$string['auth_dbextencoding'] = 'Codificação do BD externo';
$string['auth_dbextencodinghelp'] = 'Codificação utilizada no banco de dados externo';
$string['auth_dbextrafields'] = 'Estes campos são opcionais. Pode-se optar por preencher alguns dos campos do usuário no Moodle com informação de <b>campos da base de dados externa</b> especificados aqui.<br />Deixando estes campos em branco, serão usados valores predefinidos.<br />Nos dois casos, o usuário poderá editar todos estes campos quando tiver entrado no sistema.';
$string['auth_dbfieldpass'] = 'Nome do campo que contém as senhas';
$string['auth_dbfieldpass_key'] = 'Campo de senha';
$string['auth_dbfielduser'] = 'Nome do campo que contém a identificação do usuário. Este campo deve ser um dado do tipo varchar';
$string['auth_dbfielduser_key'] = 'Campo "username"';
$string['auth_dbhost'] = 'O computador que hospeda o servidor de banco de dados. Utilize uma entrada DSN do sistema se estiver usando o ODBC. Utilize uma entrada PDO DSN se estiver usando PDO.';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Usuário inserido {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Error inserting user {$a->username} - user with this username was already created through \'{$a->auth}\' plugin.';
$string['auth_dbinsertusererror'] = 'Erro ao inserir usuário {$a}';
$string['auth_dbname'] = 'Nome do próprio banco de dados. Deixe vazio se estiver usando um DSN ODBC. Deixe vazio se o seu PDO DSN já contiver o nome do banco de dados.';
$string['auth_dbname_key'] = 'Nome do BD';
$string['auth_dbnoexttable'] = 'Tabela externa não definida.';
$string['auth_dbnouserfield'] = 'Campo de usuário externo não definido';
$string['auth_dbpass'] = 'Senha correspondente ao usuário acima';
$string['auth_dbpass_key'] = 'Senha';
$string['auth_dbpasstype'] = '<p>Especifique o formato que o campo senha está usando.</p><p>Use "interno" se você quiser que o banco de dados externo gerencie identificações de usuários e endereços de email, mas que o Moodle gerencie as senha. Se você utilizar "interno", você deve informar um campo de email preenchido no banco de dados externo e habilitar a tarefa agendada auth/db/cli/sync_users.php. O Moodle enviará um email para novos usuários com uma senha temporária.</p>';
$string['auth_dbpasstype_key'] = 'Formato de senha';
$string['auth_dbreviveduser'] = 'Usuário {$a->name} id {$a->id} reativado';
$string['auth_dbrevivedusererror'] = 'Erro ao reativar usuário {$a}';
$string['auth_dbsaltedcrypt'] = 'Crypt one-way string hashing';
$string['auth_dbsetupsql'] = 'Comando SQL para setup';
$string['auth_dbsetupsqlhelp'] = 'Comando SQL para um setup especial do banco de dados, geralmente usado para configurar a codificação da comunicação - exemplo para MySQL e PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Usuário suspenso {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Erro ao suspender usuário {$a}';
$string['auth_dbsybasequoting'] = 'Usar aspas sybase';
$string['auth_dbsybasequotinghelp'] = 'Estilo de aspas sybase - necessário no Oracle, MS SQL e alguns bancos de dados. Não use no MySQL!';
$string['auth_dbsyncuserstask'] = 'Tarefa de sincronização de usuários';
$string['auth_dbtable'] = 'Nome da tabela na base de dados';
$string['auth_dbtable_key'] = 'Tabela';
$string['auth_dbtableempty'] = 'A tabela externa está vazia.';
$string['auth_dbtype'] = 'O tipo de banco de dados (veja a documentação <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Camada de abstração de banco de dados para PHP</a> para mais detalhes).';
$string['auth_dbtype_key'] = 'Banco de dados';
$string['auth_dbupdateerror'] = 'Erro ao atualizar o banco de dados externo.';
$string['auth_dbupdateusers'] = 'Atualizar usuários';
$string['auth_dbupdateusers_description'] = 'Além de inserir novos usuários, atualizar usuários existentes.';
$string['auth_dbupdatinguser'] = 'Atualizando usuário {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Usuário com permissão de leitura da base de dados';
$string['auth_dbuser_key'] = 'Usuário do BD';
$string['auth_dbuserstoadd'] = 'Entradas de usuário a acrescentar: {$a}';
$string['auth_dbuserstoremove'] = 'Entradas de usuário a remover: {$a}';
$string['pluginname'] = 'Banco de dados externo';
$string['privacy:metadata'] = 'O plugin de autenticação de banco de dados externo não armazena nenhum dado pessoal.';
