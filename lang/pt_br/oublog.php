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
 * Strings for component 'oublog', language 'pt_br', version '4.2'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Desculpe: Você não tem permissão para olhar esta página.';
$string['addcomment'] = 'Adicionar comentário';
$string['addlink'] = 'Adicionar link';
$string['addpost'] = 'Adicionar mensagem';
$string['allowcomments'] = 'Permitir comentário';
$string['allowcomments_help'] = '<p>Se você escolher \'Não, comentários não permitidos\', ninguém poderá comentar. Você preferirá fazer isto em casos especiais, tais como quando ocorrer uma postagem controversa que possa gerar muitos comentários.</p> <p>Quando você escolhe \'Sim, de usuários logados\' isto significa que pessoas podem comentar se elas tiverem permissão de visualizar o blog, e quiserem logar no sistema.</p> <p>Se optar por tornar a postagem pública ao mundo, você pode escolher \'Sim, de qualquer um\'. Esta opção permite comentários de qualquer usuário logado no ambiente e de pessoas em geral. Quando o usuário adiciona um comentario sem estar logado, o comentário não aparecerá imediatamente; um email será enviado para a pessoa que fez a postagem para aprovar ou rejeitar o comentário. Não escolha esta opção para suas postagens a menos que você tenha certeza de gerenciar estas mensagens.</p>';
$string['allowcommentsmax'] = 'Permitir comentários';
$string['atom'] = 'Atom';
$string['atomfeed'] = 'Feed Atom';
$string['attachments'] = 'Anexos';
$string['blogfeed'] = 'Blog feeds';
$string['bloginfo'] = 'Informações do blog';
$string['blogname'] = 'Nome do blog';
$string['blogoptions'] = 'Opções do blog';
$string['blogsummary'] = 'Sumario do blog';
$string['comment'] = 'Adicione seu comentário';
$string['commentonby'] = 'Comentário em <u>{$a->title}</u> feito por <u>{$a->author}</u>';
$string['comments'] = 'Comentários';
$string['commentsby'] = 'Comentários por {$a}';
$string['commentsfeed'] = 'Comentários somente';
$string['commentsnotallowed'] = 'Comentários não são permitidos';
$string['completioncomments'] = 'Usuário deve fazer comentários as mensagens postadas';
$string['completioncommentsgroup'] = 'Requer comentário';
$string['completioncommentsgroup_help'] = 'Se você ativar esta opção, o blog será marcado como concluída para um estudante, uma vez que deixaram o número especificado de comentários.';
$string['completionposts'] = 'Usuário deve postar mensagem';
$string['completionpostsgroup'] = 'Requer postagem';
$string['completionpostsgroup_help'] = 'Se você habilitar esta opção, o blog será marcado como concluída por um estudante, uma vez que eles tenham feito o número definido de mensagens.';
$string['computingguide'] = 'Guia para OU blogs';
$string['computingguideurl'] = 'URL do Guia';
$string['computingguideurlexplained'] = 'Entre com a URL para o guia do OU blog';
$string['confirmdeletecomment'] = 'Você tem certeza que deseja apagar este comentário?';
$string['confirmdeletelink'] = 'Você tem certeza que deseja apagar este link?';
$string['confirmdeletepost'] = 'Você tem certeza que deseja apagar esta mensagem?';
$string['couldnotaddcomment'] = 'Não pode adicionar comentario';
$string['couldnotaddlink'] = 'Não pode adicionar link';
$string['defaultpersonalblogname'] = 'blog de {$a}';
$string['delete'] = 'Apagar';
$string['deletedby'] = 'Apagado por {$a->fullname}, {$a->timedeleted}';
$string['deleteglobalblog'] = 'Você não pode apagar o blog global';
$string['details'] = 'Detalhes';
$string['displayversion'] = 'OU blog versão: <strong>{$a}</strong>';
$string['downloadas'] = 'Download de dados como';
$string['edit'] = 'Editar';
$string['editlink'] = 'Editar link';
$string['editonsummary'] = 'Editado em {$a->editdate}';
$string['editpost'] = 'Atualizar mensagem';
$string['editsummary'] = 'Editado por {$a->editby}, {$a->editdate}';
$string['error_alreadyapproved'] = 'Comentário já aprovado ou rejeitado';
$string['error_grouppubliccomments'] = 'Você não pode permitir comentários públicos quando o blog é de grupo';
$string['error_moderatednotallowed'] = 'Comentários moderados não são mais permitidos neste blog ou em mensagens';
$string['error_noconfirm'] = 'Enter the bold text above, exactly as given, into this box.';
$string['error_toomanycomments'] = 'Você realizou muitos comentários na última hora do mesmo endereço da Internet. Por favor aguarde e tente novamente.';
$string['error_unspecified'] = 'O sistema não pode completar sua requisição pois ocorreu um error ({$a})';
$string['error_wrongkey'] = 'Chave de comentário incorreta';
$string['event:commentdeleted'] = 'Comentário excluído';
$string['externaldashboardadd'] = 'Adicionar blog ao dashboard';
$string['externaldashboardremove'] = 'Remover blog do dashboard';
$string['extranavolderposts'] = 'Última postagem: {$a->from}-{$a->to}';
$string['extranavtag'] = 'Marca: {$a}';
$string['feedhelp'] = 'feeds';
$string['feedhelp_help'] = '<p> Se você usa um programa leitor de noticias ou página web, você pode adicionar o endereço web do Atom ou link RSS para ficar atualizado sobre as novas postagens. </p> <p> Se o blog mermitir comentários, você poderá ver os novos comentários realizados.</p> <p> Seu curso não requer que você use esse recurso.</p> <h3>Atom e RSS</h3> <p> Atom e RSS são dois formatos com a mesma finalidade. O primeiro é um modelo tecnologicamente mais puro, o último é mais conhecido. A maioria dos leitores de notícias suportam ambos os formatos. Tente o link Atom, se isto não funcionar, tente o RSS.</p>';
$string['feeds'] = 'Feeds';
$string['feedsnotenabled'] = 'Feeds não estão habilitadas';
$string['foruser'] = 'para {$a}';
$string['globalblogmissing'] = 'Blog Global faltando';
$string['gradesupdated'] = 'Notas atualizadas';
$string['guestblog'] = 'Se você tem uma conta no sistema, por favor <a href=\'{$a}\'>logue para ter total acesso</a>.';
$string['individualblogs'] = 'blogs Individuais';
$string['individualblogs_help'] = '<p><strong>Não(blog em grupo)</strong>: <em>Blogs individuais não são usados</em> &ndash; Todos são parte de uma grande comunidade (dependendo das configurações de grupos).</p> <p><strong>Blogs individuais separados</strong>: <em>Blogs individuais são usadas em caráter privado</em> &ndash; Usuários individuais somente podem postar e ver seus próprios blogs, a menos que eles tenham permissão para ver outros blogs individuais.</p> <p><strong>Blogs individuais visíveis</strong>: <em>Blogs individuais são vistos publicamente</em> &ndash; Usuários individuais podem somente postar nos seus próprios blogs, mas podem ver postagens em outros blogs individuais.</p>';
$string['invalidblog'] = 'Identificador de blog inválido';
$string['invalidblogdetails'] = 'Não posso encontrar detalhes da mensagem do blog {$a}';
$string['invalidcomment'] = 'Identificador de comentário inválido';
$string['invalidedit'] = 'Identificador de Edição inválido';
$string['invalidformat'] = 'Formato deve ser atom ou rss';
$string['invalidlink'] = 'identificador de Link inválido';
$string['invalidpost'] = 'Identificador de mensagem inválido';
$string['invalidpostid'] = 'Identificador de mensagem inválido';
$string['invalidvisbilitylevel'] = 'Nível de visibilidade inválido {$a}';
$string['invalidvisibility'] = 'Nível de visibilidade inválido';
$string['lastcomment'] = '(último por {$a->fullname}, {$a->timeposted})';
$string['links'] = 'Links relacionados';
$string['logincomments'] = 'Sim, de usuários logados';
$string['maxvisibility'] = 'Máxima visibilidade';
$string['maxvisibility_help'] = '<p><em>No blog pessoal:</em> <strong>Visível somente para o proprietário do blog (privado)</strong> &ndash; ninguem mais pode ver suas postagens.</p> <p><em>No blog do curso:</em> <strong>Visivel para participantes do curso</strong> &ndash; para visualizar as mensagens você deve ser um participante do curso onde o blog foi disponibilizado.</p> <p><strong>Visível para qualquer um que esteja logado no ambiente</strong> &ndash; Qualquer usuário pode ver suas postagens, mesmo que este não faça parte de um curso em específico.</p> <p><strong>Visivel para todos</strong> &ndash; qualquer usuário da Internet pode ver suas postagens se você der a ele o endereço do seu blog.</p> <p>Esta opção existe para o blog como um todo, assim como para mensagens individuais. Se a opção é configurada para todo o blog, ela se torna máxima. Por exemplo, Se o blog for configurado para visivel para todos, você não poderá mudar essa decisão para as mensagens individualmente.</p>';
$string['maybehiddenposts'] = 'Este blog contem mensagens que são visíveis somente para usuários logados. Se você tem um conta, por favor, <a href=\'{$a}\'>logue nela</a>.';
$string['message'] = 'Mensagem';
$string['moderated_addedcomment'] = 'Obrigado por adicionar seu comentário, que foi recebido com sucesso. Seu comentário não aparecerá até que seja aprovado pelo autor da mensagem.';
$string['moderated_approve'] = 'Aprovar este comentário';
$string['moderated_authorname'] = 'Seu nome';
$string['moderated_awaiting'] = 'Comentário aguardando aprovação';
$string['moderated_awaitingnote'] = 'Estes comentários não são visíveis para outros usuários a menos que você os aprove. Tenha em mente que o sistema não conhece a identidade de quem comentou e comentários podem conter links que, se seguidos, podem <strong>danificar seu computador</strong> seriamente. Se você tiver dúvidas, por favor rejeite o comentário <strong>sem seguir qualquer link</strong>.';
$string['moderated_confirm'] = 'Confirmação';
$string['moderated_confirminfo'] = 'Por favor entre <strong>Sim</strong> abaixo para confirmar que você é uma pessoa.';
$string['moderated_confirmvalue'] = 'Sim';
$string['moderated_emailhtml'] = '<p>(Esta é uma mensagem de email automática. Por favor não responda.)</p> <p>Alguem adicionaou um comentário a sua mensagem no blog: {$a->postlink}</p> <p>Você precisa <strong>aprovar o comentário</strong> antes que ela possa ser visualizado por outros.</p> <p>O sistema não conhece a identidade do autor do comentário e o comentário poderá conter links que se seguidos, poderão <strong>danificar seriamente seu computador</strong>. Se você tem dúvidas, por favor rejeite o comentário <strong>sem seguir nenhum dos seus links</strong>.</p> <p>Se você aprovar o comentário, você assume a responsabiliade por ele. Tenha certeza que ele não contem nenhum conteúdo que fira qualquer norma.</p> <hr/> <p>Nome dado: {$a->commenter}</p> <hr/> <h3>{$a->commenttitle}</h3> {$a->comment} <hr/> <ul class=\'oublog-approvereject\'> <li><a href=\'{$a->approvelink}\'>{$a->approvetext}</a></li> <li><a href=\'{$a->rejectlink}\'>{$a->rejecttext}</a></li> </ul> <p> Você pode também ignorar este email. O comentário será rejeitado automaticamente depois de 30 dias.</p><p>Se você recebe muitos emails deste tipo, você desejará restringir os comentários somente para usuário logados. </p> <ul class=\'oublog-restrict\'> <li><a href=\'{$a->restrictpostlink}\'>{$a->restrictposttext}</a></li> <li><a href=\'{$a->restrictbloglink}\'>{$a->restrictblogtext}</a></li> </ul>';
$string['moderated_emailsubject'] = 'Comentário aguardando aprovação em: {$a->blog} ({$a->commenter})';
$string['moderated_emailtext'] = 'Esta é uma mensagem de email automática. Por favor não responda. Alguem adicionaou um comentário a sua mensagem no blog: {$a->postlink} Você precisa aprovar o comentário antes que ela possa ser visualizado por outros. O sistema não conhece a identidade do autor do comentário e o comentário poderá conter links que se seguidos, poderão danificar seriamente seu computador. Se você tem dúvidas, por favor rejeite o comentário sem seguir nenhum dos seus links. Se você aprovar o comentário, você assume a responsabiliade por ele. Tenha certeza que ele não contem nenhum conteúdo que fira qualquer norma. ----------------------------------------------------------------------- Nome dado: {$a->commenter} ----------------------------------------------------------------------- {$a->commenttitle} {$a->comment} ----------------------------------------------------------------------- * {$a->approvetext}: {$a->approvelink} * {$a->rejecttext}: {$a->rejectlink} Você pode também ignorar este email. O comentário será rejeitado automaticamente depois de 30 dias. Se você recebe muitos emails deste tipo, você desejará restringir os comentários somente para usuário logados. * {$a->restrictposttext}: {$a->restrictpostlink} * {$a->restrictblogtext}: {$a->restrictbloglink}';
$string['moderated_info'] = 'Porque você não está logado, seus comentários somente serão mostrados depois de serem aprovados. Se você tem uma conta no sistema, por favor <a href=\'{$a}\'>logue para um completo acesso ao blog</a>.';
$string['moderated_postername'] = 'Usando o nome <strong>{$a}</strong>';
$string['moderated_reject'] = 'Rejeitar este comentário';
$string['moderated_rejectedon'] = 'Rejeitado {$a}:';
$string['moderated_restrictblog'] = 'Restringir comentários a todas suas mensagens neste blog';
$string['moderated_restrictblog_info'] = 'Você gostaria de restringir comentários a todas as suas mensagens neste blog e permitir somente para pessoas que estão logados no sistema?';
$string['moderated_restrictpage'] = 'Restringir comentários';
$string['moderated_restrictpost'] = 'Restringir comentários a esta mensagem';
$string['moderated_restrictpost_info'] = 'Você gostaria de restringir comentários a esta mensagem permitindo somente que pessoas logadas no sistema possam fazê-lo?';
$string['moderated_submitted'] = 'Aguardando moderação';
$string['moderated_typicaltime'] = 'No passado, isto levava por volta de {$a}.';
$string['modulename'] = 'OU blog';
$string['modulenameplural'] = 'OU blogs';
$string['mustprovidepost'] = 'Deve providenciar postagem';
$string['myparticipation'] = 'Minha participação';
$string['ncomments'] = '{$a} comentários';
$string['newblogposts'] = 'Novas mensagens';
$string['newcomment'] = 'Novo comentário';
$string['newerposts'] = 'Mensagens Mais novas &gt;';
$string['newpost'] = 'Nova mensagem';
$string['no'] = 'Não';
$string['no_blogtogetheroringroups'] = 'Não (em grupo)';
$string['noblogposts'] = 'Nenhuma mensagem';
$string['nocomments'] = 'Não, Comentários não permitidos';
$string['noposts'] = 'Não há mensagens visíveis neste blog.';
$string['notaddpost'] = 'Não foi possível adicionar mensagem';
$string['notaddpostnogroup'] = 'Não posso adicionar mensagem sem grupo';
$string['nousercomments'] = 'Este usuário não adicionou comentários neste blog.';
$string['nouserposts'] = 'Este usuário não fez posts neste blog.';
$string['npending'] = '{$a} comentários aguardando aprovação';
$string['npendingafter'] = ', {$a} aguardando aprovação';
$string['numposts'] = '{$a} mensagens';
$string['olderposts'] = '&lt; mensagens mais velhas';
$string['onecomment'] = '{$a} comentário';
$string['onepending'] = '{$a} comentário aguardando aprovação';
$string['onependingafter'] = ', {$a} aguardando aprovação';
$string['onlyworkspersonal'] = 'Somente funciona para blogs pessoais';
$string['oublog'] = 'OU blog';
$string['oublog:addinstance'] = 'Adicionar um novo OU Blog';
$string['oublog:audit'] = 'Visualizar mensagens apagadas e versões velhas';
$string['oublog:comment'] = 'Comentar uma mensagem';
$string['oublog:contributepersonal'] = 'Poste e comente nos blogs pessoais';
$string['oublog:exportownpost'] = 'Exportar proprias mensagens';
$string['oublog:exportpost'] = 'Exportar mensagens';
$string['oublog:grade'] = 'Avaliar a participação dos usuários no OU Blog2';
$string['oublog:managecomments'] = 'Administrar comentários';
$string['oublog:managelinks'] = 'Administrar links';
$string['oublog:manageposts'] = 'Administrar mensagens';
$string['oublog:post'] = 'Crie uma nova mensagem';
$string['oublog:view'] = 'Visualizar mensagem';
$string['oublog:viewindividual'] = 'Blogs individuais visíveis';
$string['oublog:viewparticipation'] = 'Ver participação dos usuários do OU Blog';
$string['oublog:viewpersonal'] = 'Visualizar mensagens de blogs pessoais';
$string['overviewnumentrylog'] = 'Registros desde o último login';
$string['overviewnumentrylog1'] = 'Registro desde o último login';
$string['overviewnumentryvw'] = 'Registros desde última visualização';
$string['overviewnumentryvw1'] = 'Registro desde última visualização';
$string['participation'] = 'Participação';
$string['participationbyuser'] = 'Participação por usuário';
$string['permalink'] = 'Link permanente';
$string['personalblognotsetup'] = 'Blogs pessoais não configurados';
$string['pluginadministration'] = 'Administração do OU Blog';
$string['pluginname'] = 'OU Blog';
$string['postauthor'] = 'Autor da mensagem';
$string['postdate'] = 'Data da mensagem';
$string['postedby'] = 'por {$a}';
$string['postedbymoderated'] = 'por {$a->commenter} (aprovado por by {$a->approver}, {$a->approvedate})';
$string['postedbymoderatedaudit'] = 'por {$a->commenter} [{$a->ip}] (aprovado por {$a->approver}, {$a->approvedate})';
$string['posts'] = 'Mensagens';
$string['postsby'] = 'Mensagens de {$a}';
$string['posttime'] = 'Hora da mensagem';
$string['posttitle'] = 'Título da mensagem';
$string['publiccomments'] = 'Sim, de qualquer um (mesmo se não logado)';
$string['publiccomments_info'] = 'Se alguem adicionar um comentário quando não esta logado, você receberá um e-mail de notificação e poderá aprovar o comentario para exibição, ou rejeitá-lo. Isso é preciso para se prevenir de spam.';
$string['re'] = 'Re: {$a}';
$string['rss'] = 'RSS';
$string['rssfeed'] = 'RSS feed';
$string['savegrades'] = 'Salvar notas';
$string['searchblogs'] = 'Pesquisar nos Blogs';
$string['searchthisblog'] = 'Pesquisar este blog';
$string['separateindividual'] = 'Individual&nbsp;separado';
$string['separateindividualblogs'] = 'Blogs individuais separados';
$string['siteentries'] = 'Visualizar entradas de sites';
$string['subscribefeed'] = 'Assinar uma feed (requer software apropriado) para receber notificações quando for atualizado.';
$string['summary'] = 'Sumário';
$string['tags'] = 'Marcas';
$string['tags_help'] = '<p>Marcas são pequenos trechos de texto que podem ser usados para categorizar as mensagens do seu blog. Elas são geralmente mostradas em caixa baixa. A maioria das marcas são um única palavra, mas você pode também usar multiplas palavras se preferir.</p>';
$string['tagsfield'] = 'Marcas (separadas por vírgula)';
$string['tagupdatefailed'] = 'Falha ao atualizar Marcas';
$string['title'] = 'Título';
$string['unsupportedbrowser'] = '<p>Seu navegador não pode mostrar feeds Atom ou RSS diretamente.</p> <p>Feeds são mais úteis usando um programa específico ou site. Se você que usar este feed em tal programa, copie e cole o endereço da barra de endereços do seu navegador.</p>';
$string['url'] = 'Endereço Web completo (URL)';
$string['usergrade'] = 'Avaliação do usuário';
$string['userparticipation'] = 'Participação do usuário';
$string['viewallusers'] = 'Visualizar todos os usuários';
$string['viewallusersingroup'] = 'Visualizar todos os usuários do grupo';
$string['viewblogdetails'] = 'Ver detalhes do blog';
$string['viewblogposts'] = 'Retornar ao blog';
$string['viewedit'] = 'Visualizar edição';
$string['views'] = 'Total de visitas a este blog:';
$string['visibility'] = 'Quem pode ler isto?';
$string['visibility_help'] = '<p><strong>Visível para participantes deste curso</strong> &ndash; para visualizar a mensagem você deve ter permissão de acesso ao blog, geralmente membros do curso a tem.</p> <p><strong>Visivel para qualquer um que esteja logado no sistema</strong> &ndash; qualquer um que esteja logado pode ver as mensagens, mesmo se ele não for membro do curso.</p> <p><strong>Visível para qualquer um no mundo</strong> &ndash; qualquer usuário da internet pode ver sua mensagem se você der o endereço do seu blog.</p>';
$string['visibleblogusers'] = 'Visível somente para membros do blog';
$string['visiblecourseusers'] = 'Visível para participantes deste curso';
$string['visibleindividual'] = 'Individuais visíveis';
$string['visibleindividualblogs'] = 'Blogs individuais visíveis';
$string['visibleloggedinusers'] = 'Visivel para todos os que estiverem logados no sistema';
$string['visiblepublic'] = 'Visível para todos';
$string['visibleyou'] = 'Visível somente para o proprietário';
$string['yes'] = 'Sim';
