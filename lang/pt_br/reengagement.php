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
 * Strings for component 'reengagement', language 'pt_br', version '4.2'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Esta atividade foi marcada como concluída';
$string['afterdelay'] = 'Após atraso';
$string['areyousure'] = 'Você tem certeza que deseja fazer esta alteração?';
$string['completeattimex'] = 'Esta atividade será concluída às {$a}';
$string['completion'] = 'Conclusão';
$string['completiondatesupdated'] = 'Datas de conclusão atualizadas.';
$string['completiontime'] = 'Horário de conclusão';
$string['completionwillturnon'] = 'Note que adicionar esta atividade ao curso irá ativar a conclusão da atividade.';
$string['crontask'] = 'Tarefa Cron do Reengagment';
$string['cronwarning'] = 'A tarefa agendada de Reengajamento não foi executada nas últimas 8 horas - o Cron deve ser configurado para permitir que os Reengajamentos funcionem corretamente.';
$string['days'] = 'Dias';
$string['duration'] = 'Duração';
$string['duration_help'] = '<p>A duração do reengajamento é o período de tempo entre o usuário iniciar um reengajamento, e ele ser marcado como realizado.
A duração do reengajamento é expressa como tamanho do período (ex. Semanas) e o número de períodos (ex. 7).</p>

<p>Este exemplo significaria que um usuário iniciando um período de reengajamento agora seria marcado como completo daqui a 7 semanas.</p>';
$string['emailcontent'] = 'Conteúdo da notificação (Usuário)';
$string['emailcontent_help'] = 'Quando o módulo notifica um usuário, ele usa este campo como o conteúdo da notificação.';
$string['emailcontentdefaultvalue'] = 'Este é uma notificação do curso %coursename%.';
$string['emailcontentmanager'] = 'Conteúdo da notificação (Gerente)';
$string['emailcontentmanager_help'] = 'Quando o módulo notifica um gerente, ele usa este campo como o conteúdo da notificação.';
$string['emailcontentmanagerdefaultvalue'] = 'Este é uma notificação do curso %coursename%, a respeito do usuário %userfirstname% %userlastname%.';
$string['emailcontentthirdparty'] = 'Conteúdo da notificação (terceiro)';
$string['emailcontentthirdparty_help'] = 'Quando o módulo notifica um terceiro, utiliza esse campo como o conteúdo da notificação.';
$string['emailcontentthirdpartydefaultvalue'] = 'Este é um lembrete do curso %courseshortname%, referente ao usuário %userfirstname% %userlastname%.';
$string['emaildelay'] = 'Atraso da notificação';
$string['emaildelay_help'] = 'Quando o módulo é definido para notificar os usuários "após atraso", esta configuração controla quão longo é o atraso.';
$string['emailrecipient'] = 'Notificar destinatário(s)';
$string['emailrecipient_help'] = 'Quando um email precisa ser enviado para incitar um usuário a reengajar com o curso, esta configuração controla se o email é enviado ao usuário, ao gerente, ou ambos.';
$string['emailsubject'] = 'Assunto da notificação (Usuário)';
$string['emailsubject_help'] = 'Quando o módulo notifica um usuário, ele usa este campo como assunto.';
$string['emailsubjectmanager'] = 'Assunto da notificação (Gerente)';
$string['emailsubjectmanager_help'] = 'Quando o módulo notifica o(s) gerente(s) de um usuário, ele pega o assunto da notificação desse campo.';
$string['emailsubjectthirdparty'] = 'Assunto da notificação (terceiro)';
$string['emailsubjectthirdparty_help'] = 'Quando o módulo notifica um terceiro, utiliza esse campo como o assunto da notificação.';
$string['emailtime'] = 'Horário da notificação.';
$string['emailuser'] = 'Usuário da notificação';
$string['emailuser_help'] = 'Quando a atividade deve enviar email a usuários: <ul>
<li>Nunca: Não envie emails.</li>
<li>Na conclusão do reengajamento: Envie email quando a atividade de reengajamento for concluída.</li>
<li>Após atraso: Envie email certo tempo após ele ter iniciado o módulo.</li>
</ul>';
$string['errornoid'] = 'Você deve especificar um ID course_module ou um ID de instância';
$string['errorreengagementnotvalid'] = 'Este módulo de reengajamento não está habilitado para sua conta.
Entre em contato com seu administrador se achar que isso é um erro';
$string['frequencytoohigh'] = 'O número máximo de lembretes com o período de atraso setado é {$a}.';
$string['hours'] = 'Horas';
$string['introdefaultvalue'] = 'Esta é uma atividade de reengajamento. Seu propósito é impor um lapso de tempo entre atividade que precedam ele, e as atividades seguintes.';
$string['messageprovider:mod_reengagement'] = 'Notificações de reengajamento';
$string['minutes'] = 'Minutos';
$string['modulename'] = 'Reengajamento';
$string['modulename_help'] = 'A atividade Reengajamento fornece uma maneira de enviar notificações oportunas para estudantes e terceiros, que podem incluir lembretes para retornar ao curso e concluir as atividades.

O gatilho de notificação é um período de tempo especificado após um evento inicial, que pode ser a inscrição no curso, a conclusão de uma atividade ou outras variáveis do curso.
As notificações podem ser configuradas para repetir por uma execução limitada e/ou até que o objetivo da atividade seja concluído e podem ter intervalos entre as repetições.
Se o usuário já tiver concluído o objetivo da atividade, nenhum email será enviado.

Você pode usar este plugin para: <ul>
<li>Liberar o conteúdo programado seletivamente em um curso.</li>
<li>Lembrar repetidamente aos estudantes que uma tarefa está atrasada.</li>
<li>Informar aos gerentes de treinamento que o curso está concluído.</li>
</ul>

A atividade Reengajamento é muito flexível, explore o que você pode fazer com ela.

<a href=https://docs.moodle.org/39/en/Reengagement_activity>Mais ajuda</a>';
$string['modulenameplural'] = 'Reengajamentos';
$string['mustenablecompletionavailability'] = 'As configurações de monitoramento de conclusão e acesso restrito devem estar habilitadas para usar a atividade de reengajamento.';
$string['never'] = 'Nunca';
$string['newcompletiontime'] = 'Novo tempo de conclusão';
$string['nochange'] = 'Sem alterações';
$string['nochangenoaccess'] = 'Sem alterações (usuário não acessou o curso)';
$string['noemailattimex'] = 'A mensagem agendada para {$a} não será enviada porque você não completou a atividade de destino';
$string['nosuppresstarget'] = 'Nenhuma atividade de destino selecionada';
$string['oncompletion'] = 'Ao completar o reengajamento';
$string['periodtoolow'] = 'O intervalo está muito pequeno - ele deve ser ao menos 5 minutos.';
$string['pluginadministration'] = 'Administração de Reengajamento';
$string['pluginname'] = 'Reengajamento';
$string['privacy:metadata:completiontime'] = 'Quando esse módulo for concluído.';
$string['privacy:metadata:emailsent'] = 'E-mail foi enviado.';
$string['privacy:metadata:emailtime'] = 'Quando este usuário deve ser notificado.';
$string['privacy:metadata:reengagement'] = 'ID do reengajamento.';
$string['privacy:metadata:reengagement_inprogress'] = 'Reengajamento das atividades em progresso.';
$string['privacy:metadata:userid'] = 'ID de usuário relacionado à este registro.';
$string['receiveemailattimex'] = 'A mensagem será enviada em {$a}.';
$string['receiveemailattimexunless'] = 'A mensagem será enviada em {$a}, a não ser que você conclua a atividade.';
$string['reengagement'] = 'reengajamento';
$string['reengagement:addinstance'] = 'reengagement:addinstance';
$string['reengagement:bulkactions'] = 'Realize ações em lote de engajamento';
$string['reengagement:editreengagementduration'] = 'Editar Duração do Reengajamento';
$string['reengagement:startreengagement'] = 'Iniciar Reengajamento';
$string['reengagementduration'] = 'Duração do reengajamento';
$string['reengagementfieldset'] = 'Detalhes do reengajamento';
$string['reengagementintro'] = 'Introdução do reengajamento';
$string['reengagementname'] = 'Nome do Reengajamento';
$string['reengagementsinprogress'] = 'Reengajamentos em progresso';
$string['remindercount'] = 'Contador do lembrete';
$string['remindercount_help'] = 'Este é o número de vezes um e-mail é enviado após cadas período de atraso. Existem algumas limitações nos valores possíveis.<ul>
<li>menos de 24 hrs - limite de 2 lembretes.</li>
<li>menos de 5 dias - limite de 10 lembretes.</li>
<li>menos de 15 dias - limite de 26 lembretes.</li>
<li>acima de 15 dias - limite máximo de 40 lembretes.</li></ul>';
$string['resetbyenrolment'] = 'Pela data da inscrição e duração de: {$a}';
$string['resetbyfirstaccess'] = 'Pelo primeiro acesso ao curso e duração de: {$a}';
$string['resetbyspecificdate'] = 'Por data específica';
$string['resetcompletion'] = 'Resetar data de conclusão';
$string['search:activity'] = 'Reengajamento - Informação sobre a atividade';
$string['seconds'] = 'Segundos';
$string['specifydate'] = 'Definir data de conclusão para:';
$string['suppressemail'] = 'Ocultar notificação se a atividade definida for concluída';
$string['suppressemail_help'] = 'Esta opção informa a atividade para ocultar as notificações aos usuários quando a atividade for definida como concluída.';
$string['suppresstarget'] = 'Atividade de destino';
$string['suppresstarget_help'] = 'Use esta lista suspensa para escolher qual atividade deve ser verificada para conclusão antes de enviar a notificação de lembrete.';
$string['thirdpartyemails'] = 'Destinatários de terceiros';
$string['thirdpartyemails_help'] = 'Uma lista de endereços de emails separados por vírgula dos terceiros que devem receber uma notificação quando o usuário concluir a atividade.';
$string['userandmanager'] = 'Usuário e Gerente(s)';
$string['weeks'] = 'Semanas';
$string['withselectedusers'] = 'Com os usuários selecionados...';
$string['withselectedusers_help'] = '* Enviar mensagem - Para enviar uma mensagem para um ou mais participantes
* Redefinir data de conclusão por acesso ao curso - Para ajustar a data de conclusão do reengajamento com base no primeiro acesso ao curso.';
