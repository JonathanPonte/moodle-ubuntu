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
 * Strings for component 'blog', language 'pt_br', version '4.2'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Acrescentar novo texto';
$string['addnewexternalblog'] = 'Registrar um blog externo';
$string['assocdescription'] = 'Se estiver escrevendo sobre um curso e/ou sobre módulos de atividades, selecione-os aqui.';
$string['associated'] = 'Associado {$a}';
$string['associatewithcourse'] = 'Blog sobre o curso {$a->coursename}';
$string['associatewithmodule'] = '	
Blog sobre {$a->modtype}: {$a->modname}';
$string['association'] = 'Associação';
$string['associations'] = 'Associações';
$string['associationunviewable'] = 'Esta entrada não pode ser vista por outras pessoas até que um curso seja associado a ela ou o campo \'Publicar\' for modificado.';
$string['autotags'] = 'Adicione estas tags';
$string['autotags_help'] = 'Informe uma ou mais tags locais (separadas por vírgulas) que você deseja adicionar automaticamente a cada entrada de blog copiada do blog externo para seu blog local.';
$string['backupblogshelp'] = 'Se habilitada, os blogs serão incluídos no backup automático do site';
$string['blockexternalstitle'] = 'Blogs externos';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = '	
Blog sobre este {$a->type}';
$string['blogaboutthiscourse'] = 'Adicionar uma entrada sobre este curso.';
$string['blogaboutthismodule'] = '	
Adicionar uma entrada sobre este {$a}';
$string['blogadministration'] = 'Administração do blog';
$string['blogattachment'] = 'Anexo do blog';
$string['blogdeleteconfirm'] = 'Excluir a entrada do blog \'{$a}\'?';
$string['blogdisable'] = 'Utilização de blogs desabilitada.';
$string['blogentries'] = 'Mensagens do blog';
$string['blogentriesabout'] = 'Mensagens do blog sobre {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Mensagns do blog sobre {$a->course} por {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Mensagens do blog sobre {$a->mod} por {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Mensagens do blog sobre {$a->course} por {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Mensagens do blog sobre {$a->mod} por {$a->user}';
$string['blogentrybyuser'] = 'Mensagens do blog por {$a}';
$string['blogpreferences'] = 'Configuração do Blog';
$string['blogs'] = 'Blogs';
$string['blogscourse'] = 'Blogs do curso';
$string['blogssite'] = 'Blogs do site';
$string['blogtags'] = 'Tags do blog';
$string['cannotviewcourseblog'] = 'Você não tem permissões para visualizar blogs neste curso';
$string['cannotviewcourseorgroupblog'] = 'Você não tem permissões para visualizar blogs neste curso/grupo';
$string['cannotviewsiteblog'] = 'Você não tem permissões para visualizar todos os blogs do site';
$string['cannotviewuserblog'] = 'Você não tem as permissões necessárias para ler blogs de usuários';
$string['configexternalblogcrontime'] = 'Frequência com que o Moodle verifica se há novas mensagens nos blogs externos.';
$string['configmaxexternalblogsperuser'] = 'Número máximo de blogs externos que cada usuário pode associar a seu blog no Moodle.';
$string['configuseblogassociations'] = 'Habilita a associação de mensagens de blog com cursos e módulos de cursos.';
$string['configuseexternalblogs'] = 'Permite que o usuário especifique alimentadores de blogs externos. O Moodle verifica periodicamente estes alimentadores e copia novas mensagens para o blogo local do usuário.';
$string['courseblog'] = 'Blog do Curso: {$a}';
$string['courseblogdisable'] = 'Os blogs de curso não estão habilitados';
$string['courseblogs'] = 'Os usuários podem acessar apenas os blogs de outros participantes do curso';
$string['deleteblogassociations'] = 'Apagar associações de blog';
$string['deleteblogassociations_help'] = 'Se selecionado, as mensagens do blog não serão mais asssociadas a este curso ou a atividades ou recursos do curso. As mensagens não serão apagadas.';
$string['deleteentry'] = 'Apagar entrada';
$string['deleteexternalblog'] = 'Apagar o registro deste blog externo';
$string['deleteotagswarn'] = 'Você tem certeza que deseja excluir estas tags de todas as mensagens do blog e removê-las do sistema?';
$string['description'] = 'Descrição';
$string['description_help'] = 'Descreva em uma ou duas frases o conteúdo de seu blog externo. (Se ficar em branco, será usada a descrição registrada no seu blog externo).';
$string['donothaveblog'] = 'Desculpe, você não tem um blog próprio.';
$string['editentry'] = 'Editar uma mensagem de blog';
$string['editexternalblog'] = 'Editar este blog externo';
$string['emptybody'] = 'O corpo do texto não pode ficar em branco';
$string['emptyrssfeed'] = 'A URL fornecida não aponta para um alimentador RSS válido';
$string['emptytitle'] = 'O título do texto não pode ficar em branco';
$string['emptyurl'] = 'Você deve especificar a URL de um alimentador RSS válido';
$string['entrybody'] = 'Corpo do texto';
$string['entrybodyonlydesc'] = 'Descrição do texto';
$string['entryerrornotyours'] = 'Este texto não é seu';
$string['entrysaved'] = 'O seu texto foi gravado';
$string['entrytitle'] = 'Título do texto';
$string['eventblogassociationadded'] = 'Associação do blog criada';
$string['eventblogassociationdeleted'] = 'Associação de blog excluída';
$string['eventblogentriesviewed'] = 'Entradas do blog visualizadas';
$string['eventblogexternaladded'] = 'Blog externo registrado';
$string['eventblogexternalremoved'] = 'Blog externo desregistrado';
$string['eventblogexternalupdated'] = 'Blog externo atualizado';
$string['evententryadded'] = 'Post do blog adicionado';
$string['evententrydeleted'] = 'Post do blog apagado';
$string['evententryupdated'] = 'Texto atualizado';
$string['eventexternalblogsviewed'] = 'Blogs registrados externos visualizados';
$string['externalblogcrontime'] = 'Agendamento de cron para blog externo';
$string['externalblogdeleteconfirm'] = 'Apagar registro deste blog externo?';
$string['externalblogdeleted'] = 'Blog externo não registrado';
$string['externalblogs'] = 'Blog externo';
$string['feedisinvalid'] = 'Este alimentador de notícias é inválido';
$string['feedisvalid'] = 'Este alimentador de notícias é válido';
$string['filterblogsby'] = 'Filtrar mensagens por ...';
$string['filtertags'] = 'Filtrar por tags';
$string['filtertags_help'] = 'Você pode usar esta funcionalidade para filtrar mensagens que quiser utilizar. Se especificar tags, separadas por vírgulas, só as mensagens com estas tags serão copiadas do blog externo.';
$string['groupblog'] = 'Blog do grupo: {$a}';
$string['groupblogdisable'] = 'O blog do grupo não está habilitado';
$string['groupblogentries'] = 'Mensagens do blog associadas a {$a->coursename} pelo grupo {$a->groupname}';
$string['groupblogs'] = 'Os usuários podem acessar apenas os Blogs de participantes do mesmo grupo';
$string['incorrectblogfilter'] = 'Especificação incorreta do tipo de filtro do blog';
$string['intro'] = 'Este alimentador RSS foi criado automaticamente a partir de um ou mais blogs.';
$string['invalidgroupid'] = 'ID do grupo inválida';
$string['invalidurl'] = 'This URL is unreachable';
$string['linktooriginalentry'] = 'Aponta para a mensagem original do blog';
$string['maxexternalblogsperuser'] = 'O número máximo de blogs externos por usuário';
$string['myprofileuserblogs'] = 'Ver todas os posts do blog';
$string['name'] = 'Nome';
$string['name_help'] = 'Digite um nome descritivo para o seu blog externo. (Se nenhum nome for fornecido, o título do seu blog externo será usado).';
$string['noentriesyet'] = 'Nenhum ítem visível';
$string['noguestpost'] = 'Visitantes não podem publicar textos!';
$string['nopermissionstodeleteentry'] = 'Você não tem a permissão necessária para apagar esta mensagem do blog';
$string['norighttodeletetag'] = 'Você não tem permissão para excluir esta tag - {$a}';
$string['nosuchentry'] = 'Mensagem do blog inexistente';
$string['notallowedtoedit'] = 'Você não tem permissão para editar este texto';
$string['numberofentries'] = 'Itens: {$a}';
$string['numberoftags'] = 'Número de tags mostradas';
$string['page-blog-edit'] = 'Páginas de edição de Blog';
$string['page-blog-index'] = 'Páginas de listas de Blogs';
$string['page-blog-x'] = 'Todas páginas de Blogs';
$string['pagesize'] = 'Número de mensagens do blog por página';
$string['permalink'] = 'Permalink';
$string['personalblogs'] = 'Os usuários podem acessar apenas o próprio blog';
$string['preferences'] = 'Preferências do Blog';
$string['privacy:metadata:core_comments'] = 'Comentários associados às entradas do blog';
$string['privacy:metadata:core_files'] = 'Arquivos anexados às entradas do blog';
$string['privacy:metadata:core_tag'] = 'Tags associadas às entradas do blog';
$string['privacy:metadata:external'] = 'Um link para um feed RSS externo';
$string['privacy:metadata:external:description'] = 'A descrição do feed';
$string['privacy:metadata:external:filtertags'] = 'A lista de tags para filtrar as entradas com';
$string['privacy:metadata:external:name'] = 'O nome do feed';
$string['privacy:metadata:external:timefetched'] = 'A hora em que o feed foi recuperado pela última vez';
$string['privacy:metadata:external:timemodified'] = 'O horário em que a associação foi modificada pela última vez';
$string['privacy:metadata:external:url'] = 'A URL do feed';
$string['privacy:metadata:external:userid'] = 'O ID do usuário que adicionou a entrada de blog externo';
$string['privacy:metadata:post'] = 'As informações relacionadas às entradas do blog';
$string['privacy:metadata:post:content'] = 'O conteúdo de uma entrada de blog externo';
$string['privacy:metadata:post:created'] = 'A data em que a entrada do blog foi criada';
$string['privacy:metadata:post:lastmodified'] = 'A data em que a entrada do blog foi modificada pela última vez';
$string['privacy:metadata:post:publishstate'] = 'Se a entrada é visível para outras pessoas ou não';
$string['privacy:metadata:post:subject'] = 'O título da entrada do blog';
$string['privacy:metadata:post:summary'] = 'O texto de entrada do blog';
$string['privacy:metadata:post:uniquehash'] = 'Um identificador único para uma entrada externa, geralmente uma URL';
$string['privacy:metadata:post:userid'] = 'O ID do usuário que adicionou a entrada do blog';
$string['privacy:metadata:post:usermodified'] = 'O usuário que modificou pela última vez a entrada';
$string['privacy:path:blogassociations'] = 'Postagens associadas do blog';
$string['privacy:unknown'] = 'Desconhecido';
$string['publishto'] = 'Publicar em';
$string['publishto_help'] = '<p>Existem 3 opções:</p>

<p><b>Para si mesmo (rascunho)</b> - Apenas você e os administradores do site podem acessar este texto.</p>

<p><b>Todos os usuários do site</b> - Todos os usuários deste site podem acessar este texto.</p>

<p><b>Todo mundo</b> - Qualquer pessoa, inclusive os visitantes, podem acessar este texto.</p>';
$string['publishtocourse'] = 'Usuários que compartilham o curso com você';
$string['publishtocourseassoc'] = 'Membros do curso associado';
$string['publishtocourseassocparam'] = 'Membros de {$a}';
$string['publishtogroup'] = 'Usuários que compartilham seu grupo';
$string['publishtogroupassoc'] = 'Membros de seu grupo no curso associado';
$string['publishtogroupassocparam'] = 'Os membros de seu grupo são {$a}';
$string['publishtonoone'] = 'Rascunho (você mesmo)';
$string['publishtosite'] = 'Todos os usuários deste site';
$string['publishtoworld'] = 'Todo o mundo';
$string['readfirst'] = 'Leia este primeiro';
$string['relatedblogentries'] = 'Mensagens do blog relacionadas';
$string['retrievedfrom'] = 'Obtido em';
$string['rssfeed'] = 'Blog RSS feed';
$string['searchterm'] = 'Busca: {$a}';
$string['settingsupdatederror'] = 'Ocorreu um erro, a configuração não foi atualizada';
$string['siteblogdisable'] = 'O blog do ambiente não está habilitado';
$string['siteblogheading'] = 'Blog do site';
$string['siteblogs'] = 'Todos os usuários do site podem ler os textos do blog';
$string['tagdatelastused'] = 'Data da última vez em que a tag foi usada';
$string['tagparam'] = 'Tag: {$a}';
$string['tags'] = 'Tags';
$string['tagsort'] = 'Ordenar as tags por';
$string['tagtext'] = 'Texto da tag';
$string['timefetched'] = 'Hora da última sincronização';
$string['timewithin'] = 'Mostrar tags usadas neste período (número de dias)';
$string['updateentrywithid'] = 'Atualizando texto';
$string['url'] = 'URL do RSS';
$string['url_help'] = 'Digite a URL do RSS para seu blog externo.';
$string['useblogassociations'] = 'Habilitar associações de blog';
$string['useexternalblogs'] = 'Habilitar blogs externos';
$string['userblog'] = 'Blog do usuário: {$a}';
$string['userblogentries'] = 'Mensagens de {$a}';
$string['valid'] = 'Válido';
$string['viewallblogentries'] = 'Todas as mensagens sobre este {$a}';
$string['viewallmodentries'] = 'Ver todas as mensagens sobre este {$a->type}';
$string['viewallmyentries'] = 'Ver todas minhas mensagens';
$string['viewblogentries'] = 'Mensagens sobre este {$a->type}';
$string['viewblogsfor'] = 'Ver todas as mensagens de ...';
$string['viewcourseblogs'] = 'Ver todas as mensagens deste curso';
$string['viewentriesbyuseraboutcourse'] = 'Ver mensagens sobre este curso por {$a}';
$string['viewgroupblogs'] = 'Ver mensagens do grupo...';
$string['viewgroupentries'] = 'Mensagens do grupo';
$string['viewmodblogs'] = 'Ver mensagens neste módulo...';
$string['viewmodentries'] = 'Mensagens no módulo';
$string['viewmyentries'] = 'Minhas mensagens';
$string['viewmyentriesaboutcourse'] = 'Ver minhas mensagens sobre este curso';
$string['viewmyentriesaboutmodule'] = 'Ver minhas mensagens sobre este {$a}';
$string['viewsiteentries'] = 'Ver todas as mensagens';
$string['viewuserentries'] = 'Ver todas as mensagens de {$a}';
$string['worldblogs'] = 'Qualquer pessoa, mesmo se não for um usuário do site, pode ler os textos configurados como acessíveis por todos';
$string['wrongexternalid'] = 'Identificador do blog externo incorreto';
$string['wrongpostid'] = 'ID errada da mensagem no blog';
