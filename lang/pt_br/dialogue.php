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
 * Strings for component 'dialogue', language 'pt_br', version '4.2'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['ago'] = 'atrás';
$string['attachment'] = 'Anexo';
$string['attachments'] = 'Anexos';
$string['bulkopener'] = 'Iniciador em massa';
$string['bulkopenrule'] = 'Regra para abertura de diálogo em massa';
$string['bulkopenrulenotifymessage'] = '<strong>Nota:</strong><br/>Ao criar regras para abertura de diálogo em massa, novas entradas no diálogo não são criadas imediatamente. As conversas serão abertas quando a função cron do sistema for executada, após 30 min.';
$string['bulkopenrules'] = 'Regras para abertura de diálogo em massa';
$string['cachedef_params'] = 'Parâmetros - Interface do usuário';
$string['cachedef_participants'] = 'Número de identificação dos participantes (informação básica)';
$string['cachedef_unreadcounts'] = 'Quantidade de mensagens não lidas pelos usuários nos diálogos';
$string['cachedef_userdetails'] = 'Detalhes breves do usuário, todos os usuários inscritos';
$string['cannotclosedraftconversation'] = 'Você não pode encerrar um diálogo que não iniciou!';
$string['cannotdeleteopenconversation'] = 'Você não pode deletar um diálogo em andamento';
$string['closeconversation'] = 'Fechar diálogo';
$string['closed'] = 'Fechado';
$string['completed'] = 'Concluído';
$string['configmaxattachments'] = 'Número máximo de arquivos que podem ser anexados por mensagem.';
$string['configmaxbytes'] = 'Tamanho máximo dos aquivos que podem ser anexados por diálogo (sujeito aos limites do curso e de outras configurações locais)';
$string['configtrackunread'] = 'Monitorar as mensagens não lidas dos diálogos na página inicial do curso';
$string['configviewconversationsbyrole'] = 'Experimental: Ver diálogos por perfil, ordenar diálogo pelo perfil do autor';
$string['configviewstudentconversations'] = 'Experimental: lista de estudantes com os diálogos em que estão envolvidos';
$string['conversation'] = 'Diálogo';
$string['conversationcloseconfirm'] = 'Você realmente quer encerrar esse diálogo {$a} ?';
$string['conversationclosed'] = 'O diálogo {$a} foi encerrado';
$string['conversationdeleteconfirm'] = 'Você realmente quer deletar esse diálogo {$a} ? Esta ação não poder ser desfeita';
$string['conversationdeleted'] = 'O diálogo {$a} foi deletado';
$string['conversationdiscarded'] = 'Diálogo descartado';
$string['conversationlistdisplayheader'] = 'Exibindo {$a->show} {$a->state} diálogos {$a->groupname}';
$string['conversationopened'] = 'O diálogo foi iniciado';
$string['conversationopenedcron'] = 'Os diálogos serão iniciados automaticamente';
$string['conversationopenedwith'] = '<strong>1</strong> diálogo iniciado com:';
$string['conversations'] = 'Diálogos';
$string['conversationsopenedwith'] = '<strong>{$a}</strong> diálogos abertos com:';
$string['cutoffdate'] = 'Data limite';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small>';
$string['day'] = 'Dia';
$string['days'] = 'Dias';
$string['deleteallconversations'] = 'Excluir todos os diálogos';
$string['deletealldrafts'] = 'Excluir todos os rascunhos';
$string['deleteallrules'] = 'Excluir todas as regras de abertura';
$string['deleteconversation'] = 'Excluir diálogo';
$string['deletereply'] = 'Excluir resposta';
$string['dialogue:addinstance'] = 'Adicionar diálogo';
$string['dialogue:bulkopenrulecreate'] = 'Criar regra para iniciar diálogo em massa';
$string['dialogue:bulkopenruleeditany'] = 'Permite ao usuário editar qualquer regra, útil para administradores, etc.';
$string['dialogue:close'] = 'Encerrar diálogo';
$string['dialogue:closeany'] = 'Encerrar qualquer';
$string['dialogue:delete'] = 'Excluir próprio';
$string['dialogue:deleteany'] = 'Excluir qualquer';
$string['dialogue:open'] = 'Iniciar diálogo';
$string['dialogue:receive'] = 'Aceitar, aquele que pode ser o destinatário ao iniciar um diálogo';
$string['dialogue:reply'] = 'Responder';
$string['dialogue:replyany'] = 'Responder qualquer';
$string['dialogue:viewany'] = 'Ver qualquer';
$string['dialogue:viewbyrole'] = 'Ver diálogos listados por perfil, experimental';
$string['dialoguecron'] = 'Cron do diálogo';
$string['dialogueintro'] = 'Introdução do diálogo';
$string['dialoguename'] = 'Nome do diálogo';
$string['displaybystudent'] = 'Exibir por estudante';
$string['displayconversationsheading'] = 'Exibir {$a} diálogos';
$string['displaying'] = 'Exibindo';
$string['draft'] = 'Rascunho';
$string['draftconversation'] = 'Rascunho de diálogo';
$string['draftconversationtrashed'] = 'Lixeira de rascunho de diálogo';
$string['draftlistdisplayheader'] = 'Exibir meus rascunhos';
$string['draftreply'] = 'Rascunho de resposta';
$string['draftreplytrashed'] = 'Lixeira de rascunho de resposta';
$string['drafts'] = 'Rascunhos';
$string['errorcutoffdateinpast'] = 'Data limite não pode ser definida no passado';
$string['erroremptymessage'] = 'Mensagem não pode ser vazia';
$string['erroremptysubject'] = 'O assunto não pode ser vazio.';
$string['errornoparticipant'] = 'Você deve abrir um diálogo com alguém...';
$string['eventconversationclosed'] = 'Conversas fechadas';
$string['eventconversationcreated'] = 'Conversas criadas';
$string['eventconversationdeleted'] = 'Conversa excluída';
$string['eventconversationviewed'] = 'Conversas vistas';
$string['eventreplycreated'] = 'Resposta enviada';
$string['everybody'] = 'Todos (livre para todos)';
$string['everyone'] = 'Todos';
$string['everyones'] = 'Todos são';
$string['firstname'] = 'Primeiro nome';
$string['fullname'] = 'Nome completo';
$string['groupmodenotifymessage'] = 'Esta atividade está sendo desenvolvida em grupo, isso vai afetar com quem você pode iniciar um diálogo e como os diálogos serão exibidos.';
$string['hasnotrun'] = 'Não foi executado ainda';
$string['hour'] = 'hora';
$string['hours'] = 'horas';
$string['includefuturemembers'] = 'Incluir futuros membros';
$string['incompleteconversation'] = 'Deve selecionar um recipiente para este diálogo, por favor tente novamente.';
$string['ingroup'] = 'no grupo {$a}';
$string['justmy'] = 'só minha';
$string['lastname'] = 'Sobrenome';
$string['lastranon'] = 'Última correu em';
$string['latest'] = 'Recente';
$string['listpaginationheader'] = '{$a->start}-{$a->end} de {$a->total}';
$string['matchingpeople'] = 'Pessoas correspondentes ({$a})';
$string['maxattachments'] = 'Número máximo de anexos';
$string['maxattachments_help'] = 'Esta configuração especifica o número máximo de arquivos que podem ser anexados a uma mensagem de diálogo.';
$string['maxattachmentsize'] = 'Tamanho máximo do anexo';
$string['maxattachmentsize_help'] = 'Esta configuração especifica o tamanho máximo do arquivo que pode ser anexado um diálogo.';
$string['message'] = 'Diálogo';
$string['messageapibasicmessage'] = '<p> {$a->userfrom} postou uma nova mensagem para uma conversa em que está participando,  com o assunto: <i>{$a->subject}</i> <br/><br/> <a href="{$a->url}">Ver em Moodle</a> </p>';
$string['messageapismallmessage'] = '{$a} postou uma nova mensagem numa conversa em que você está participando';
$string['messageprovider:post'] = 'Notificações de diálogo';
$string['messages'] = 'diálogos';
$string['mine'] = 'Meus';
$string['minute'] = 'minuto';
$string['minutes'] = 'minutos';
$string['modulename'] = 'Diálogo';
$string['modulename_help'] = 'Diálogos permitem que estudantes ou professores iniciem conversas. São atividades do curso que podem ser úteis quando o professor quer um lugar para enviar um feedback particular para um estudante em sua atividade online. Por exemplo, se um estudante está participando de um fórum de língua e cometeu um erro gramatical que o professor pretende apontar sem que seja embaraçoso ao estudante, o diálogo é o lugar perfeito. A atividade diálogo também é uma excelente maneira para os orientadores de uma instituição interagirem com os estudantes - todas as atividades são registradas e o e-mail não é necessário';
$string['modulenameplural'] = 'Diálogos';
$string['month'] = 'mês';
$string['months'] = 'meses';
$string['nobulkrulesfound'] = 'Não foram encontradas regras para abertura de diálogos em massa!';
$string['noconversationsfound'] = 'Não foram encontrados diálogos!';
$string['nodraftsfound'] = 'Não foram encontrados rascunhos!';
$string['nomatchingpeople'] = 'Nenhuma pessoa corresponda a \'{$a}\'';
$string['nopermissiontoclose'] = 'Você não tem permissão para encerrar esse diálogo!';
$string['nopermissiontodelete'] = 'Você não tem permissão para excluir!';
$string['nosubject'] = '[sem assunto]';
$string['numberattachments'] = '{$a} anexos';
$string['numberunread'] = '{$a} não lidos';
$string['oldest'] = 'Antigas';
$string['onlydraftscanbetrashed'] = 'Apenas rascunhos podem ser enviados para a lixeira';
$string['open'] = 'Iniciado';
$string['openedbyfullyear'] = '<small>Iniciado por</small> <strong>{$a->fullname}</strong> <small>em</small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small>Iniciado por</small> <strong>{$a->fullname}</strong> <small>em</small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small>Iniciado por</small> <strong>{$a->fullname}</strong> <small>as</small> {$a->time} <small>({$a->timepast}) atras</small>';
$string['openwith'] = 'Iniciar com';
$string['participants'] = 'participantes';
$string['people'] = 'Pessoas';
$string['pluginadministration'] = 'Administração de Diálogo';
$string['pluginname'] = 'Diálogo';
$string['privacy:metadata:authorid'] = 'ID do autor do diálogo';
$string['privacy:metadata:body'] = 'Texto do diálogo';
$string['privacy:metadata:conversationid'] = 'ID do diálogo';
$string['privacy:metadata:conversationindex'] = 'Indicador do diálogo';
$string['privacy:metadata:dialogue_messages'] = 'Mensagens do Diálogo';
$string['privacy:metadata:dialogue_participants'] = 'Participantes do Diálogo';
$string['privacy:metadata:dialogueflags'] = 'Marcadores do Diálogo';
$string['privacy:metadata:dialogueid'] = 'ID do diálogo';
$string['privacy:metadata:flag'] = 'Marcador';
$string['privacy:metadata:messageid'] = 'ID da mensagem';
$string['privacy:metadata:state'] = 'Estado';
$string['privacy:metadata:timecreated'] = 'Horário de criação';
$string['privacy:metadata:timemodified'] = 'Horário de modificação';
$string['privacy:metadata:userid'] = 'ID do usuário';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small>respondeu</small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>respondeu em</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>respondeu em</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>respondeu as</small> {$a->time} <small>({$a->timepast}) ago</small>';
$string['reply'] = 'Responder';
$string['replydeleteconfirm'] = 'Você tem certeza que quer excluir essa resposta?';
$string['replydeleted'] = 'Resposta foi excluída';
$string['replysent'] = 'Sua resposta foi enviada';
$string['runsuntil'] = 'Vai até';
$string['savedraft'] = 'Salvar rascunho';
$string['searchpotentials'] = 'Pesquisar potenciais...';
$string['second'] = 'segundo';
$string['seconds'] = 'segundos';
$string['send'] = 'Enviar';
$string['senton'] = '<small><strong>Enviado em: </strong></small>';
$string['sortedby'] = 'Organizar por: {$a}';
$string['studenttostudent'] = 'Estudante para estudante';
$string['subject'] = 'Assunto';
$string['teachertostudent'] = 'Professor para o estudante';
$string['trashdraft'] = 'Excluir rascunho';
$string['unread'] = 'Não lido';
$string['unreadmessages'] = 'Diálogos não lidos';
$string['unreadmessagesnumber'] = '{$a} diálogos não lidos';
$string['unreadmessagesone'] = '1 diálogo não lido';
$string['usecoursegroups'] = 'Usar grupos do curso';
$string['usecoursegroups_help'] = 'Se o curso tem grupos definidos, uma restrição será adicionada para com quem um diálogo pode ser aberto. Diálogos só podem ser abertos entre os membros do grupo a não ser que a que pessoa abrir o diálogo tenha permissão para "Acessar todos os grupos"; permissões.';
$string['usesearch'] = 'Use a pesquisa para encontrar  as pessoas com as quais quer iniciar um diálogo';
$string['viewconversations'] = 'Ver diálogos';
$string['viewconversationsbyrole'] = 'Ver diálogos por perfil';
$string['week'] = 'semana';
$string['weeks'] = 'semanas';
$string['year'] = 'ano';
$string['years'] = 'anos';
