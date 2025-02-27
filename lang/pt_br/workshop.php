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
 * Strings for component 'workshop', language 'pt_br', version '4.2'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:assessmentsclose'] = 'Fechar avaliações:';
$string['activitydate:assessmentsclosed'] = 'Avaliações fechadas:';
$string['activitydate:assessmentsopen'] = 'Abrir avaliações:';
$string['activitydate:assessmentsopened'] = 'Avaliações abertas:';
$string['activitydate:submissionsclose'] = 'Fechar submissões:';
$string['activitydate:submissionsclosed'] = 'Submissões fechadas:';
$string['activitydate:submissionsopen'] = 'Abrir submissões:';
$string['activitydate:submissionsopened'] = 'Submissões abertas:';
$string['aggregategrades'] = 'Recalcular notas';
$string['aggregation'] = 'Agregação de notas';
$string['allocate'] = 'Alocar envios';
$string['allocatedetails'] = 'esperados: {$a->expected}<br />enviados: {$a->submitted}<br />a serem alocados: {$a->allocate}';
$string['allocation'] = 'Alocação de envio';
$string['allocationconfigured'] = 'Alocação configurada';
$string['allocationdone'] = 'Alocação concluída';
$string['allocationerror'] = 'Erro de alocação';
$string['allowedfiletypesforoverallfeedback'] = 'Tipos de arquivos permitidos no Feedback';
$string['allowedfiletypesforoverallfeedback_help'] = 'Os tipos de arquivo no Feedback podem ser limitados por uma lista de tipos de arquivos permitidos. Se o campo for deixado vazio, todos os tipos de arquivos são permitidos.';
$string['allowedfiletypesforoverallfeedback_link'] = 'admin/tool/filetypes/index';
$string['allowedfiletypesforsubmission'] = 'Tipos de arquivo anexados permitidos para envio';
$string['allowedfiletypesforsubmission_help'] = 'Os tipos de arquivo anexados para envio podem ser militados por uma lista de tipos de arquivos permitidos. Se o campo for deixado vazio, todos os tipos de arquivos são permitidos.';
$string['allowedfiletypesforsubmission_link'] = 'admin/tool/filetypes/index';
$string['allsubmissions'] = 'Todos os envios ({$a})';
$string['alreadygraded'] = 'Já foi avaliada';
$string['areaconclusion'] = 'Texto de conclusão';
$string['areainstructauthors'] = 'Instruções para envio';
$string['areainstructreviewers'] = 'Instruções para avaliação';
$string['areaoverallfeedbackattachment'] = 'Anexos de feedback geral';
$string['areaoverallfeedbackcontent'] = 'Textos de feedback geral';
$string['areasubmissionattachment'] = 'Anexos do envio';
$string['areasubmissioncontent'] = 'Textos enviados';
$string['assess'] = 'Avaliar';
$string['assessedexample'] = 'Exemplo de envio avaliado';
$string['assessedsubmission'] = 'Envio avaliado';
$string['assessingexample'] = 'Avaliando o exemplo enviado';
$string['assessingsubmission'] = 'Avaliação de envio';
$string['assessment'] = 'Avaliação';
$string['assessmentby'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Avaliação por {$a}';
$string['assessmentbyyourself'] = 'Sua avaliação';
$string['assessmentdeleted'] = 'Avaliação desalocada';
$string['assessmentend'] = 'Prazo limite para avaliação';
$string['assessmentendbeforestart'] = 'Prazo limite para avaliação não pode ser definido para antes da data de abertura para avaliação';
$string['assessmentenddatetime'] = 'Prazo limite da avaliação: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} - prazo limite para avaliação';
$string['assessmentform'] = 'Formulário de avaliação';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Avaliação</a> de <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Avaliação de referência';
$string['assessmentreferenceconflict'] = 'Não é possível avaliar um envio de exemplo para o qual você forneceu uma referência de avaliação.';
$string['assessmentreferenceneeded'] = 'Você precisa avaliar esse envio de exemplo para fornecer uma referência de avaliação. Clique \'Continuar\' para avaliar o envio.';
$string['assessments'] = 'Avaliação';
$string['assessmentsettings'] = 'Configurações da avaliação';
$string['assessmentstart'] = 'Aberto para avaliação a partir de';
$string['assessmentstartdatetime'] = 'Aberto para avaliação de {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} - início para avaliação';
$string['assessmentweight'] = 'Peso da avaliação';
$string['assignedassessments'] = 'Envios atribuídos para avaliação';
$string['assignedassessmentsnone'] = 'Você não recebeu nenhum envio para avaliar';
$string['backtoeditform'] = 'Voltar para formulário de edição';
$string['byfullname'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'por {$a}';
$string['calculategradinggrades'] = 'Calcular notas de avaliação';
$string['calculategradinggradesdetails'] = 'esperado: {$a->expected}<br />calculado: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calcular notas de envios';
$string['calculatesubmissiongradesdetails'] = 'esperado: {$a->expected}<br />calculado: {$a->calculated}';
$string['chooseuser'] = 'Escolher usuário...';
$string['clearaggregatedgrades'] = 'Limpar todas as notas agregadas';
$string['clearaggregatedgrades_help'] = 'As notas agregadas do envio e as notas da avaliação serão zeradas. Você pode voltar a calcular estas notas a partir do zero em fase de avaliação de classificação novamente.';
$string['clearaggregatedgradesconfirm'] = 'Tem certeza de que deseja limpar as notas calculadas dos envios e as notas de avaliação?';
$string['clearassessments'] = 'Limpar avaliações';
$string['clearassessments_help'] = 'As notas calculadas do envio e as notas de avaliação serão zeradas. A informação de como os formulários de avaliação são preenchidos ainda é mantida, mas todos os revisores devem abrir novamente o formulário de avaliação e salvá-lo novamente para obter as notas atribuídas novamente.';
$string['clearassessmentsconfirm'] = 'Tem certeza de que deseja limpar todas as notações de avaliação? Você não poderá recuperar as informações por conta própria, os revisores terão de reavaliar as submissões alocadas.';
$string['conclusion'] = 'Conclusão';
$string['conclusion_help'] = 'O texto de conclusão é mostrado aos participantes no final da atividade.';
$string['configexamplesmode'] = 'O modo padrão de avaliação de exemplos dos laboratórios de avaliação';
$string['configgrade'] = 'Nota máxima padrão para envio nos laboratórios de avaliação';
$string['configgradedecimals'] = 'Número padrão de dígitos que devem ser mostrados após o ponto decimal ao exibir notas.';
$string['configgradinggrade'] = 'Nota máxima padrão para a avaliação nos laboratórios de avaliação';
$string['configmaxbytes'] = 'Padrão máximo de tamanho de arquivo enviado para todos os laboratórios de avaliação no site (sujeito a limites de cursos e outras configurações locais)';
$string['configstrategy'] = 'Estratégia de classificação padrão para os laboratórios de avaliação';
$string['createsubmission'] = 'Adicionar envio';
$string['crontask'] = 'Processamento em segundo plano para o módulo laboratório de avaliação';
$string['daysago'] = '{$a} dias atrás';
$string['daysleft'] = 'faltam {$a} dias';
$string['daystoday'] = 'hoje';
$string['daystomorrow'] = 'amanhã';
$string['daysyesterday'] = 'ontem';
$string['deadlinesignored'] = 'As restrições de tempo não se aplicam a você';
$string['deletesubmission'] = 'Excluir envio';
$string['editassessmentform'] = 'Editar formulário de avaliação';
$string['editassessmentformstrategy'] = 'Editar formulário de avaliação ({$a})';
$string['editingassessmentform'] = 'Editando formulário de avaliação';
$string['editingsubmission'] = 'Edição de envio';
$string['editsubmission'] = 'Editar envio';
$string['err_multiplesubmissions'] = 'Ao editar este formulário, uma outra versão do envio foi salva. Envios múltiplos por usuário não são permitidos.';
$string['err_removegrademappings'] = 'Não foi possível remover os mapeamentos de nota não utilizados';
$string['evaluategradeswait'] = 'Por favor, aguarde até que as avaliações sejam avaliadas e as notas calculadas';
$string['evaluation'] = 'Cálculo da nota da avaliação';
$string['evaluationmethod'] = 'Método do cálculo da nota da avaliação';
$string['evaluationmethod_help'] = 'O método do cálculo da nota da avaliação determina como a nota da avaliação é calculada. Você pode recalcular as notas várias vezes com diferentes configurações, até que você fique satisfeito com o resultado.';
$string['evaluationsettings'] = 'Configurações do cálculo da nota da avaliação';
$string['eventassessableuploaded'] = 'Um envio foi realizado';
$string['eventassessmentevaluated'] = 'Envio avaliado';
$string['eventassessmentevaluationsreset'] = 'Avaliação de envio reconfigurada';
$string['eventassessmentreevaluated'] = 'Envio reavaliado';
$string['eventphaseautomaticallyswitched'] = 'Fase alterada automaticamente';
$string['eventphaseswitched'] = 'Fase alterada';
$string['eventsubmissionassessed'] = 'Envio avaliado';
$string['eventsubmissionassessmentsreset'] = 'Avaliações de submissão canceladas';
$string['eventsubmissioncreated'] = 'Envio criado';
$string['eventsubmissiondeleted'] = 'Envio excluído';
$string['eventsubmissionreassessed'] = 'Envio reavaliado';
$string['eventsubmissionupdated'] = 'Envio atualizado';
$string['eventsubmissionviewed'] = 'Envio visualizado';
$string['example'] = 'Exemplo de um envio';
$string['exampleadd'] = 'Adicionar exemplo de um envio';
$string['exampleassess'] = 'Avaliar exemplo de um envio';
$string['exampleassessments'] = 'Exemplos de envios para avaliar';
$string['exampleassesstask'] = 'Avaliar exemplos';
$string['exampleassesstaskdetails'] = 'esperados: {$a->expected} <br /> avaliados: {$a->assessed}';
$string['examplecomparing'] = 'Comparação de avaliações de exemplos de envios';
$string['exampledelete'] = 'Excluir exemplo';
$string['exampledeleteconfirm'] = 'Tem certeza de que deseja excluir o exemplo de envio a seguir? Clique em "Continuar" botão para excluir o envio.';
$string['exampleedit'] = 'Editar exemplo';
$string['exampleediting'] = 'Edição de exemplo';
$string['exampleneedassessed'] = 'Você tem que avaliar todos os exemplos de envios primeiro';
$string['exampleneedsubmission'] = 'Você tem que enviar seu trabalho e avaliar todos os exemplos de envios primeiro';
$string['examplesbeforeassessment'] = 'Os exemplos estão disponíveis após o envio e devem ser avaliados antes da avaliação por pares';
$string['examplesbeforesubmission'] = 'Exemplos devem ser avaliados antes de seu envio';
$string['examplesmode'] = 'Modo de avaliação de exemplos';
$string['examplesubmissions'] = 'Exemplos de envios';
$string['examplesvoluntary'] = 'A avaliação dos exemplos de envios é voluntária';
$string['exportsubmission'] = 'Exportar esta página';
$string['feedbackauthor'] = 'Retorno para o autor';
$string['feedbackauthorattachment'] = 'Anexo';
$string['feedbackby'] = 'Comentários por {$a}';
$string['feedbackreviewer'] = 'Retorno para o revisor';
$string['feedbacksettings'] = 'Feedback';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Notas dadas';
$string['grade_grading_name'] = 'Avaliação';
$string['grade_submission_name'] = 'Envio';
$string['gradecalculated'] = 'Nota calculada para envio';
$string['gradedecimals'] = 'Casas decimais nas notas';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Nota: {$a->received} de {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (avaliação)';
$string['gradeitemsubmission'] = '{$a->workshopname} (envio)';
$string['gradeover'] = 'Sobrescrever nota para envio';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Relatório de notas do laboratório de avaliação';
$string['gradetopassgrading'] = 'Nota de avaliação para aprovação';
$string['gradetopasssubmission'] = 'Nota de avaliação para aprovação';
$string['gradinggrade'] = 'Nota para avaliação';
$string['gradinggrade_help'] = 'Esta configuração define a nota máxima que pode ser obtida para uma avaliação de envio.';
$string['gradinggradecalculated'] = 'Nota calculada para avaliação';
$string['gradinggradeof'] = 'Nota para avaliação (de{$a})';
$string['gradinggradeover'] = 'Sobrescrever nota para avaliação';
$string['gradingsettings'] = 'Configurações de nota';
$string['groupnoallowed'] = 'Você não tem permissão para acessar qualquer grupo neste laboratório de avaliação';
$string['iamsure'] = 'Sim, eu tenho certeza';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo do Laboratório de Avaliação';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo estudante em uma atividade Laboratório de Avaliação.';
$string['indicator:cognitivedepthdef'] = 'Workshop cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou este porcentual do engajamento cognitivo oferecido pelas atividades Laboratório de Avaliação durante este intervalo de análise (Níveis = Sem visualização, Visualizar, Enviar, Visualizar feedback, Comentário no feedback, Reenviar após visualizar o feedback)';
$string['indicator:socialbreadth'] = 'Indicador social do Laboratório de Avaliação';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em uma atividade Laboratório de Avaliação.';
$string['indicator:socialbreadthdef'] = 'Workshop social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou este percentual de engajamento social oferecido pelas atividades Laboratório de avaliação durante este intervalo de análise (Níveis = Sem participação, Participante único, Participante com outros)';
$string['info'] = 'Informação';
$string['instructauthors'] = 'Instruções para envio';
$string['instructreviewers'] = 'Instruções para avaliação';
$string['introduction'] = 'Descrição';
$string['latesubmissions'] = 'Envios atrasados';
$string['latesubmissions_desc'] = 'Aceitar envios após o prazo limite';
$string['latesubmissions_help'] = 'Se habilitado, um autor pode enviar seu trabalho após o prazo limite de envio ou durante a fase de avaliação. No entanto, envio atrasado não pode ser editado.';
$string['latesubmissionsallowed'] = 'Envios atrasados são permitidos';
$string['legacyallocationplugincron'] = 'Alocação do laboratório de avaliação usando o cron legacy';
$string['maxbytes'] = 'Tamanho máximo do anexo para envio';
$string['modulename'] = 'Laboratório de Avaliação';
$string['modulename_help'] = 'O módulo de atividade Laboratório de Avaliação permite a coleta, revisão e avaliação por pares do trabalho dos estudantes.

Os estudantes podem enviar qualquer conteúdo digital (arquivos), como documentos de texto ou planilhas e também podem digitar um texto diretamente em um campo utilizando o editor de texto.

Os envios são avaliados por um formulário de avaliação com critérios múltiplos, definidos pelo professor. O processo de avaliação por pares e a compreensão do formulário de avaliação podem ser praticados antecipadamente com exemplos de envios fornecidos pelo professor, juntamente com uma avaliação de referência. Os estudantes recebem a oportunidade de avaliar um ou mais dos envios de seus colegas. Os envios e os revisores podem ser anônimos, se necessário.

Os estudantes obtêm duas notas em uma atividade de laboratório de avaliação - uma nota pelo seu envio e uma nota pela avaliação dos envios de seus colegas. Ambas as notas são registradas no livro de notas.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'Laboratórios de Avaliação';
$string['myassessments'] = 'Minhas avaliações';
$string['mysubmission'] = 'Meu envio';
$string['nattachments'] = 'Número máximo de anexos enviados';
$string['noexamples'] = 'Nenhum exemplo ainda neste laboratório de avaliação';
$string['noexamplesformready'] = 'Você deve definir o formulário de avaliação antes de fornecer os envios de exemplo';
$string['nogradeyet'] = 'Nenhuma nota ainda';
$string['nosubmissionfound'] = 'Nenhum envio encontrado para este usuário';
$string['nosubmissions'] = 'Nenhum envio neste laboratório de avaliação';
$string['nosubmissiontype'] = 'Pelo menos um tipo de envio deve estar disponível';
$string['notassessed'] = 'Nada avaliado ainda';
$string['nothingfound'] = 'Nada para ser mostrado';
$string['nothingtoreview'] = 'Nada para o revisor';
$string['notoverridden'] = 'Não sobrescrito';
$string['noworkshops'] = 'Não existem laboratório de avaliação neste curso';
$string['noyoursubmission'] = 'Você não enviou seu trabalho ainda';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Feedback geral';
$string['overallfeedbackfiles'] = 'Número máximo de anexos do feedback geral';
$string['overallfeedbackmaxbytes'] = 'Tamanho máximo do anexo do feedback geral';
$string['overallfeedbackmode'] = 'Modo de feedback geral';
$string['overallfeedbackmode_0'] = 'Desabilitado';
$string['overallfeedbackmode_1'] = 'Habilitado e opcional';
$string['overallfeedbackmode_2'] = 'Ativado e obrigatório';
$string['overallfeedbackmode_help'] = 'Se habilitado, um campo de texto é mostrado na parte inferior do formulário de avaliação. Os revisores podem colocar a avaliação geral do envio lá, ou fornecer explicações adicionais sobre sua avaliação.';
$string['page-mod-workshop-x'] = 'Qualquer página módulo de laboratório de avaliação';
$string['participant'] = 'Participante';
$string['participantrevierof'] = 'Participante é revisor de';
$string['participantreviewedby'] = 'Participante revisado por';
$string['phaseassessment'] = 'Fase de avaliação';
$string['phaseclosed'] = 'Encerrado';
$string['phaseevaluation'] = 'Fase de cálculo da nota da avaliação';
$string['phasesetup'] = 'Fase de configuração';
$string['phasesoverlap'] = 'A fase de envio e a fase de avaliação não podem se sobrepor';
$string['phasesubmission'] = 'Fase de envio';
$string['pluginadministration'] = 'Administração do laboratório de avaliação';
$string['pluginname'] = 'Laboratório de Avaliação';
$string['prepareexamples'] = 'Preparar exemplos de envios';
$string['previewassessmentform'] = 'Pré-visualizar';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Nota agregada de todas as avaliações feitas pelo usuário neste atividade laboratório de avaliação';
$string['privacy:metadata:assessmentgrade'] = 'Nota agregada do envio sugerida por esta avaliação';
$string['privacy:metadata:assessmentgradinggrade'] = 'Nota por ter realizado esta avaliação';
$string['privacy:metadata:assessmentgradinggradeover'] = 'Valor da nota sobreposta manualmente por ter realizado esta avaliação';
$string['privacy:metadata:assessmentid'] = 'ID da avaliação';
$string['privacy:metadata:authorid'] = 'ID do autor do envio';
$string['privacy:metadata:dimensiongrade'] = 'Nota nesta dimensão da avaliação';
$string['privacy:metadata:dimensionid'] = 'ID da dimensão da avaliação';
$string['privacy:metadata:example'] = 'Se este registro representa um exemplo de um envio';
$string['privacy:metadata:feedbackauthor'] = 'Feedback para o autor';
$string['privacy:metadata:feedbackauthorformat'] = 'Formato do texto do feedback para o autor';
$string['privacy:metadata:feedbackreviewer'] = 'Feedback para o usuário fazendo a avaliação';
$string['privacy:metadata:feedbackreviewerformat'] = 'Formato do texto do feedback para o usuário fazendo a avaliação';
$string['privacy:metadata:late'] = 'Se o envio foi com atraso';
$string['privacy:metadata:peercomment'] = 'Comentário sobre a nota dada pelo usuário fazendo a avaliação';
$string['privacy:metadata:peercommentformat'] = 'Formato do texto do comentário sobre a nota dada';
$string['privacy:metadata:preference:perpage'] = 'Número de envios o usuário prefere numa única página';
$string['privacy:metadata:preference:viewlet-allexamples-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Exemplo de envios\'.';
$string['privacy:metadata:preference:viewlet-allsubmissions-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Relatório de envios de workshop\'.';
$string['privacy:metadata:preference:viewlet-assessmentform-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Formulário de avaliação\'.';
$string['privacy:metadata:preference:viewlet-assignedassessments-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Envios atribuídos para avaliação\'.';
$string['privacy:metadata:preference:viewlet-cleargrades-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Workshop toolbox\'.';
$string['privacy:metadata:preference:viewlet-conclusion-collapsed'] = 'O estado contraído/expandido para o viewlet \'Conclusão\'.';
$string['privacy:metadata:preference:viewlet-examples-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Exemplo de envios para avaliação\'.';
$string['privacy:metadata:preference:viewlet-examplesfail-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Exemplo de envios para avaliação\'.';
$string['privacy:metadata:preference:viewlet-gradereport-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Relatório de notas do workshop\'.';
$string['privacy:metadata:preference:viewlet-instructauthors-collapsed'] = 'O estado contraído/expandido para o viewlet \'Instruções para envio\'.';
$string['privacy:metadata:preference:viewlet-instructreviewers-collapsed'] = 'O estado contraído/expandido para o viewlet \'Instruções para avaliação\'.';
$string['privacy:metadata:preference:viewlet-intro-collapsed'] = 'O estado contraído/expandido para o viewlet \'Introdução\'.';
$string['privacy:metadata:preference:viewlet-overallfeedback-collapsed'] = 'O estado recolhido/expandido para a viewlet \'Feedback geral\'.';
$string['privacy:metadata:preference:viewlet-ownsubmission-collapsed'] = 'O estado contraído/expandido para o viewlet \'Seu envio\'.';
$string['privacy:metadata:preference:viewlet-publicsubmissions-collapsed'] = 'O estado contraído/expandido para o viewlet \'Envios publicados\'';
$string['privacy:metadata:preference:viewlet-yourgrades-collapsed'] = 'O estado contraído/expandido para o viewlet \'Suas notas\'.';
$string['privacy:metadata:published'] = 'Se o envio deve ser publicado (a todos os participantes) após o encerramento do laboratório de avaliação';
$string['privacy:metadata:reviewerid'] = 'ID do usuário fazendo a avaliação';
$string['privacy:metadata:strategy'] = 'Nome do subplugin de forma de avaliação que interpreta os valores registrados';
$string['privacy:metadata:submissioncontent'] = 'Conteúdo do envio';
$string['privacy:metadata:submissioncontentformat'] = 'Formato de texto do conteúdo do envio';
$string['privacy:metadata:submissiongrade'] = 'Nota agregada para o envio, escrita como um número decimal do intervalo 0..100';
$string['privacy:metadata:submissiongradeover'] = 'Valor sobreposto manualmente da nota agregada';
$string['privacy:metadata:submissionid'] = 'ID do envio';
$string['privacy:metadata:submissiontitle'] = 'Título do envio';
$string['privacy:metadata:subsystem:corefiles'] = 'O módulo laboratório de avaliação guarda arquivos incorporados / anexados ao envio';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'O módulo laboratório de avaliação pode ter suporte a sistemas de prevenção de plágio';
$string['privacy:metadata:timeaggregated'] = 'Quando a nota agregada foi calculada ple aúltima vez';
$string['privacy:metadata:timecreated'] = 'Quando este registro foi criado no base de dados';
$string['privacy:metadata:timemodified'] = 'Quando este registro foi modificado pela última vez no base de dados';
$string['privacy:metadata:userid'] = 'ID do usuário para qual a nota agregada foi calculada';
$string['privacy:metadata:weight'] = 'Peso da avaliação';
$string['privacy:metadata:workshopaggregations'] = 'Guarda notas agregadas da avaliação';
$string['privacy:metadata:workshopassessments'] = 'Guarda informação sobre as avaliações alocadas para o envio';
$string['privacy:metadata:workshopgrades'] = 'Contem informação sobre como os formulários de avaliação foram preenchidos com notas e comentários';
$string['privacy:metadata:workshopid'] = 'ID da atividade laboratório de avaliação';
$string['privacy:metadata:workshopsubmissions'] = 'Guarda informação sobre os envios do laboratório de avaliação';
$string['privacy:request:delete:content'] = 'O conteúdo foi removido (a pedido do usuário, ou expirou)';
$string['privacy:request:delete:title'] = '[Removido]';
$string['publishedsubmissions'] = 'Envios publicados';
$string['publishsubmission'] = 'Publicar envios';
$string['publishsubmission_help'] = 'Envios publicados ficam disponíveis aos outros quando o laboratório de avaliação for fechado.';
$string['reassess'] = 'Reavaliar';
$string['receivedgrades'] = 'Notas recebidas';
$string['recentassessments'] = 'Avaliações do laboratório de avaliação:';
$string['recentsubmissions'] = 'Envios do laboratório de avaliação:';
$string['resetassessments'] = 'Apagar todas as avaliações';
$string['resetassessments_help'] = 'Você pode optar por excluir apenas as avaliações atribuídas sem afetar os envios. Se os envios devem ser excluídos, suas avaliações serão excluídas implicitamente e esta opção é ignorada.Observe que isso também inclui avaliações de envios de exemplo.';
$string['resetphase'] = 'Mudar para a fase de configuração';
$string['resetphase_help'] = 'Se habilitado, todos os laboratórios de avaliação serão colocados em fase de configuração inicial.';
$string['resetsubmissions'] = 'Apagar todos os envios';
$string['resetsubmissions_help'] = 'Todos os envios e suas avaliações serão excluídos. Isso não afeta envios de exemplo.';
$string['saveandclose'] = 'Salvar e fechar';
$string['saveandcontinue'] = 'Salvar e continuar edição';
$string['saveandpreview'] = 'Salvar e pré-visualizar';
$string['saveandshownext'] = 'Salvar e exibir o próximo';
$string['search:activity'] = 'Laboratório de Avaliação - informação da atividade';
$string['selfassessmentdisabled'] = 'Auto-avaliação desativada';
$string['showingperpage'] = 'Mostrando {$a} itens por página';
$string['showingperpagechange'] = 'Modificar ...';
$string['someuserswosubmission'] = 'Existe pelo menos um autor que ainda não enviou seu trabalho';
$string['sortasc'] = 'Ordenação crescente';
$string['sortdesc'] = 'Ordenação decrescente';
$string['strategy'] = 'Estratégia de classificação';
$string['strategy_help'] = 'A estratégia de classificação determina a forma de avaliação utilizado e do método de classificação de envios. Há 4 opções:

* Classificação acumulativa - Comentários e uma nota são dados de acordo com aspectos específicos
* Comentários - Comentários são feitos levando em conta aspectos específicos, mas nenhuma nota pode ser dada
* Número de erros - Comentários e uma avaliação de sim/não são dados de acordo com afirmações específicas
* Rubrica - Uma avaliação de nível é dada de acordo com critérios específicos';
$string['strategyhaschanged'] = 'A estratégia de classificação oficina mudou desde que o formulário foi aberto para edição.';
$string['submission'] = 'Envio';
$string['submissionattachment'] = 'Anexo';
$string['submissionby'] = 'Envio por {$a}';
$string['submissioncontent'] = 'Conteúdo enviado';
$string['submissiondeleteconfirm'] = 'Você tem certeza de que deseja excluir o envio a seguir?';
$string['submissiondeleteconfirmassess'] = 'Você tem certeza de que deseja excluir o envio a seguir? Note que isso também excluirá {$a->count} avaliações associadas com esse envio, que poderá afetar as notas dos avaliadores.';
$string['submissionend'] = 'Prazo limite dos envios';
$string['submissionendbeforestart'] = 'Prazo limite de inscrições não podem ser especificados antes da abertura para a data submissões';
$string['submissionenddatetime'] = 'Prazo limite dos envios: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} - prazo limite de envios';
$string['submissionendswitch'] = 'Passe para a próxima fase após o prazo limite de envios';
$string['submissionendswitch_help'] = 'Se o prazo limite de envios é especificado e esta opção estiver marcada, o laboratório de avaliação mudará automaticamente para a fase de avaliação após o prazo de envios.

Se você ativar esse recurso, é recomendável configurar o método de alocação programada, também. Se os envios não são alocados, nenhuma avaliação pode ser feita, mesmo se o workshop em si estiver em fase de avaliação.';
$string['submissiongrade'] = 'Nota para envio';
$string['submissiongrade_help'] = 'Esta configuração especifica a nota máxima que pode ser obtida pelos trabalhos enviados.';
$string['submissiongradeof'] = 'Notar para envio (de{$a})';
$string['submissionlastmodified'] = 'Última alteração';
$string['submissionrequiredcontent'] = 'Você precisa inserir algum texto ou adicionar um arquivo.';
$string['submissionrequiredfile'] = 'Você precisa adicionar um arquivo ou inserir algum texto.';
$string['submissionsallocation'] = 'Alocação de envios';
$string['submissionsettings'] = 'Configurações de envio';
$string['submissionsreport'] = 'Relatório de envios do laboratório de avaliação';
$string['submissionstart'] = 'Aberto para envios desde';
$string['submissionstartdatetime'] = 'Aberto para envio de
{$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} - início de envios';
$string['submissiontitle'] = 'Título';
$string['submissiontypedisabled'] = 'Este tipo de envio está desabilitado para este laboratório de avaliação';
$string['submissiontypefileavailable'] = 'Arquivo anexo<span class="accesshide"> disponível</span>';
$string['submissiontypefilerequired'] = '<span class="accesshide">Arquivo anexo  </span> obrigatório';
$string['submissiontypes'] = 'Tipos de envios';
$string['submissiontypetextavailable'] = 'Texto online<span class="accesshide"> disponível</span>';
$string['submissiontypetextrequired'] = '<span class="accesshide">Texto online  </span> obrigatório';
$string['submittednotsubmitted'] = 'Enviado ({$a->submitted}) / não enviado ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Método de alocação de envios';
$string['subplugintype_workshopallocation_plural'] = 'Métodos de alocação de envios';
$string['subplugintype_workshopeval'] = 'Método de calcular as notas da avaliação';
$string['subplugintype_workshopeval_plural'] = 'Métodos de calcular as notas da avaliação';
$string['subplugintype_workshopform'] = 'Forma de avaliação';
$string['subplugintype_workshopform_plural'] = 'Formas de avaliação';
$string['switchingphase'] = 'Mudando a fase';
$string['switchphase'] = 'Mudar fase';
$string['switchphase10'] = 'Mudar para a fase de configuração';
$string['switchphase10info'] = 'Você está prestes a mudar o laboratório de avaliação para <strong>Fase de configuração</strong>. Nessa fase, os usuários não podem modificar os seus envios ou as suas avaliações. Os professores podem utilizar essa fase para alterar as configurações, alterar a forma de avaliação ou ajustar os formulários de avaliação.';
$string['switchphase20'] = 'Mudar para a fase de envio';
$string['switchphase20info'] = 'Você está prestes a mudar o laboratório de avaliação para a  <strong>Fase de envio</strong>. Os estudantes podem enviar os seus trabalhos durante essa fase (dentro das datas de controle de acesso ao envio, se definidas). Os professores podem alocar envios para revisão por colegas.';
$string['switchphase30'] = 'Mudar para a fase de avaliação';
$string['switchphase30auto'] = 'O  laboratório de avaliação mudará automaticamente para a fase de avaliação após {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Você está prestes a mudar o workshop para a <strong>Fase de avaliação</strong>. Nessa fase, os avaliadores podem analisar os envios que lhes foram atribuídos (dentro das datas de controle de acesso de avaliação, se definidas).';
$string['switchphase40'] = 'Mudar para fase de cálculo da nota da avaliação';
$string['switchphase40info'] = 'Você está prestes a mudar o laboratório de avaliação para a <strong>Fase de cálculo da nota da avaliação</strong>. Nessa fase, os usuários não podem modificar os seus envios ou as suas avaliações. Os professores podem utilizar as ferramentas de avaliação para calcular as notas finais e fornecer feedback aos avaliadores.';
$string['switchphase50'] = 'Fechar o laboratório de avaliação';
$string['switchphase50info'] = 'Você está prestes a encerrar o laboratório de avaliação. Como resultado as notas calculadas aparecem no livro de notas, e os estudantes podem ver seus envios e suas avaliações de envios.';
$string['switchphaseauto'] = 'Mudança agendada';
$string['switchphasenext'] = 'Mudar para a próxima fase';
$string['taskassesspeers'] = 'Avaliar colegas';
$string['taskassesspeersdetails'] = 'total: {$a->total}<br />pendente: {$a->todo}';
$string['taskassessself'] = 'Avaliar você mesmo';
$string['taskconclusion'] = 'Forneça uma conclusão da atividade';
$string['taskdone'] = 'Tarefa realizada';
$string['taskfail'] = 'Tarefa pendente';
$string['taskinfo'] = 'Informações da tarefa';
$string['taskinstructauthors'] = 'Forneça instruções para envio';
$string['taskinstructreviewers'] = 'Forneça instruções para avaliação';
$string['taskintro'] = 'Defina a descrição do laboratório de avaliação';
$string['tasksubmit'] = 'Envie seu trabalho';
$string['tasktodo'] = 'Tarefas a fazer';
$string['toolbox'] = 'Barra de ferramentas do workshop';
$string['undersetup'] = 'O workshop atualmente está sendo configurado. Por favor, espere até que ele mude para a próxima fase.';
$string['useexamples'] = 'Usar exemplos';
$string['useexamples_desc'] = 'Envios de exemplo são fornecidos para a prática na avaliação';
$string['useexamples_help'] = 'Se habilitado, os usuários podem tentar avaliar um ou mais envios de exemplo e comparar as suas avaliações com uma avaliação de referência. A nota não é computada na nota para avaliação.';
$string['usepeerassessment'] = 'Usar avaliação por pares';
$string['usepeerassessment_desc'] = 'Estudantes podem avaliar o trabalho dos outros';
$string['usepeerassessment_help'] = 'Se habilitado, um usuário pode ser alocado para avaliar envios de outros usuários e receberá uma nota como avaliador, além da nota para seu próprio envio.';
$string['userdatecreated'] = 'enviado em <span>{$a}</span>';
$string['userdatemodified'] = 'modificado em <span>{$a}</span>';
$string['userplan'] = 'Planejador do laboratório de avaliação';
$string['userplan_help'] = 'O planejador do laboratório de avaliação exibe todas as fases da atividade e lista as tarefas para cada fase. A fase atual é destacada e a conclusão da tarefa é indicada com um visto.';
$string['userplanaccessibilityskip'] = 'Ir para tarefas atuais';
$string['userplanaccessibilitytitle'] = 'Linha do tempo do laboratório de avaliação com {$a} fases';
$string['userplancurrentphase'] = 'Fase atual';
$string['useselfassessment'] = 'Usar auto-avaliação';
$string['useselfassessment_desc'] = 'Estudantes podem avaliar seus próprios trabalhos';
$string['useselfassessment_help'] = 'Se habilitado, um usuário pode ser alocado para avaliar seu próprio envio e receberá uma nota como avaliador, além da nota para o seu próprio envio.';
$string['viewworkshopsummary'] = 'Veja o resumo do laboratório de avaliação';
$string['weightinfo'] = 'Peso: {$a}';
$string['withoutsubmission'] = 'Avaliador sem envio próprio';
$string['workshop:addinstance'] = 'Adicionar novo laboratório de avaliação';
$string['workshop:allocate'] = 'Alocar envios para avaliação';
$string['workshop:deletesubmissions'] = 'Excluir envios';
$string['workshop:editdimensions'] = 'Editar formulários de avaliação';
$string['workshop:exportsubmissions'] = 'Exportar envios';
$string['workshop:ignoredeadlines'] = 'Ignorar restrições de tempo';
$string['workshop:manageexamples'] = 'Gerenciar envios de exemplo';
$string['workshop:overridegrades'] = 'Sobrescrever as notas calculadas';
$string['workshop:peerassess'] = 'Avaliar colega';
$string['workshop:publishsubmissions'] = 'Publicar envios';
$string['workshop:submit'] = 'Enviar';
$string['workshop:switchphase'] = 'Mudar fase';
$string['workshop:view'] = 'Visualizar workshop';
$string['workshop:viewallassessments'] = 'Ver todas as avaliações';
$string['workshop:viewallsubmissions'] = 'Ver todos os envios';
$string['workshop:viewauthornames'] = 'Ver os nomes dos autores';
$string['workshop:viewauthorpublished'] = 'Ver os autores de envios publicados';
$string['workshop:viewpublishedsubmissions'] = 'Visualizar todos os envios publicados';
$string['workshop:viewreviewernames'] = 'Ver os nomes dos revisores';
$string['workshopname'] = 'Nome do laboratório de avaliação';
$string['yourassessmentfor'] = 'Sua avaliação para {$a}';
$string['yourgrades'] = 'Suas notas';
$string['yoursubmission'] = 'Seu envio';
$string['yoursubmissionwithassessments'] = 'Seu envio com avaliações';
