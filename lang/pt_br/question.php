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
 * Strings for component 'question', language 'pt_br', version '4.2'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['addanotherhint'] = 'Adicionar outra dica';
$string['addcategory'] = 'Adicionar categoria';
$string['addmorechoiceblanks'] = 'Espaços em branco para {no} mais escolhas';
$string['adminreport'] = 'Reportar possíveis problemas no banco de questões.';
$string['advancedsearchoptions'] = 'Opções de pesquisa';
$string['alltries'] = 'Todas as tentativas';
$string['answer'] = 'Resposta';
$string['answers'] = 'Respostas';
$string['answersaved'] = 'Resposta salva';
$string['answerx'] = 'Resposta {$a}';
$string['attemptfinished'] = 'Tentativa finalizada';
$string['attemptfinishedsubmitting'] = 'Tentativa de envio finalizada: {$a}';
$string['attemptoptions'] = 'Opções de tentativa';
$string['availableq'] = 'Disponível?';
$string['badbase'] = 'Base errada antes de **: {$a}**';
$string['behaviour'] = 'Comportamento';
$string['behaviourbeingused'] = 'Comportamento sendo usado: {$a}';
$string['broken'] = 'Este é um "link quebrado", ele aponta para um arquivo inexistente.';
$string['byandon'] = 'por <em>{$a->user}</em> em <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Não foi possível copiar o arquivo de backup';
$string['cannotcreate'] = 'Não foi possível criar uma nova entrada na tabela question_attempts';
$string['cannotcreatepath'] = 'Não se pode criar o caminho: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Você não pode apagar o comportamento \'{$a}\'. Ele está sendo usado em tentativas.';
$string['cannotdeletecate'] = 'Você não pode excluir essa categoria, ela é a categoria padrão para este contexto.';
$string['cannotdeleteneededbehaviour'] = 'Impossível apagar o comportamento de questão \'{$a}\'. Há outros comportamentos instalados que dependem deste.';
$string['cannotdeleteqtypeinuse'] = 'Você não pode apagar o tipo de questão \'{$a}\'. Existem questões desse tipo no banco de questões.';
$string['cannotdeleteqtypeneeded'] = 'Você não pode excluir o tipo de questão \'{$a}\'. Existem outros tipos de questão instalados que dependem dele.';
$string['cannotdeletetopcat'] = 'As categorias principais não podem ser excluídas.';
$string['cannotedittopcat'] = 'As categorias principais não podem ser editadas.';
$string['cannotenable'] = 'O tipo de questão {$a} não pode ser criado diretamente.';
$string['cannotenablebehaviour'] = 'O comportamento de questão {$a} não pode ser usado diretamente. Ele é somente para uso interno.';
$string['cannotfindcate'] = 'Não foi possível encontrar o registro da categoria.';
$string['cannotfindquestionfile'] = 'Não foi possível encontrar o arquivo de perguntas no zip';
$string['cannotgetdsfordependent'] = 'Não foi possível obter o conjunto de dados especificado para uma pergunta dependente de conjunto de dados! (pergunta: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Não foi possível obter o conjunto de dados para uma questão calculada! (questão: {$a})';
$string['cannothidequestion'] = 'Não foi capaz de esconder a pergunta';
$string['cannotimportformat'] = 'Desculpe, a importação deste formato ainda não foi desenvolvida!';
$string['cannotinsertquestion'] = 'Não foi possível inserir nova questão!';
$string['cannotinsertquestioncatecontext'] = 'Não foi possível inserir a nova categoría de perguntas {$a->cat} contextid ilegal {$a->ctx}';
$string['cannotloadquestion'] = 'Não foi possível carregar questão';
$string['cannotmovequestion'] = 'Você não pode utilizar este script para mover questões que têm arquivos associados de diferentes áreas.';
$string['cannotopenforwriting'] = 'Impossível abrir para escrever: {$a}';
$string['cannotpreview'] = 'Você não pode pré-visualizar estas questões!';
$string['cannotread'] = 'Impossível ler arquivo de importação (ou o arquivo é vazio)';
$string['cannotregradedifferentqtype'] = 'Não é possível reavaliar com uma questão de um tipo diferente.';
$string['cannotretrieveqcat'] = 'Não foi possível recuperar a categoria de pergunta';
$string['cannotunhidequestion'] = 'Falha ao exibir a pergunta.';
$string['cannotunzip'] = 'Não foi possível descompactar o arquivo.';
$string['cannotwriteto'] = 'Não foi possível escrever questões exportadas para {$a}';
$string['categories'] = 'Categorias';
$string['category'] = 'Categoria';
$string['categorycurrent'] = 'Categoria atual';
$string['categorycurrentuse'] = 'Usar esta categoria';
$string['categorydoesnotexist'] = 'Esta categoria não existe';
$string['categoryinfo'] = 'Informações da categoria';
$string['categorymove'] = 'A categoria \'{$a->name}\' contém {$a->count} questões (algumas das quais podem ser questões ocultas ou questões aleatórias que ainda estão em uso em um questionário). Escolha outra categoria para movê-la para.';
$string['categorymoveto'] = 'Gravar na categoria';
$string['categorynamecantbeblank'] = 'O nome da categoria não pode ser deixado em branco.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}]';
$string['changeoptions'] = 'Alterar opções';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">A categoria "{$a->name}"</a> no curso "{$a->coursename}" terá seu status de compartilhamento trocado de {$a->changefrom} para {$a->changeto}.';
$string['check'] = 'Verificar';
$string['chooseqtypetoadd'] = 'Escolha um tipo de questão para adicionar';
$string['clearwrongparts'] = 'Limpar respostas incorretas';
$string['clickflag'] = 'Marcar questão';
$string['clicktoflag'] = 'Marcar questão para referência futura';
$string['clicktounflag'] = 'Remover marcação';
$string['clickunflag'] = 'Remover marcação';
$string['closepreview'] = 'Fechar pré-visualização';
$string['combinedfeedback'] = 'Feedback combinado';
$string['comment'] = 'Comentário';
$string['commented'] = 'Comentado : {$a}';
$string['commentormark'] = 'Faça um comentário ou modifique a avaliação';
$string['comments'] = 'Comentários';
$string['commentx'] = 'Comentário: {$a}';
$string['complete'] = 'Completo';
$string['contexterror'] = 'Você não deveria estar aqui se você não está movendo uma categoria para outro contexto.';
$string['copy'] = 'Copiar de {$a} e mudar links.';
$string['correct'] = 'Correto';
$string['correctfeedback'] = 'Para cada resposta correta';
$string['correctfeedbackdefault'] = 'Sua resposta está correta.';
$string['created'] = 'Criado';
$string['createdby'] = 'Criado por';
$string['createdmodifiedheader'] = 'Criado/Salvo pela última vez';
$string['createnewquestion'] = 'Criar uma nova questão ...';
$string['cwrqpfs'] = 'Questões aleatórias selecionando questões de subcategorias.';
$string['cwrqpfsinfo'] = '<p>Durante a migração para o Moodle 1.9 iremos separar categorias de questões em diferentes contextos. Algumas categorias de questões e algumas questões terão seu status de compartilhamento alterado. Isto é necessário em um caso raro quando uma ou mais questões \'aleatória\' em um questionário são configuradas para selecionar de uma mistura de categorias compartilhadas e não compartilhadas(como é o caso neste site).Isto acontece quando uma questão \'aleatória\' é configurada para selecionar de subcategorias e uma ou mais subcategorias tem status diferentes de compartilhamento com a categoria ascendente na qual a questão \'aleatória\' é criada.</p><p>As categorias de questões seguintes, das quais as questões \'aleatórias\' em categorias ascendentes são selecionadas, terão o seu status de compartilhamento alterado para o mesmo status de compartilhamento da categoria que contém a questão \'aleatória\' quando da migração para o Moodle 1.9. As categorias seguintes terão seus status de compartilhamento alterado. Questões que são afetadas continuarão a funcionar em todos os questionários até que você as remova destes questionários.</p>';
$string['cwrqpfsnoprob'] = 'Nenhuma categoria de questões no seu site é afetada pelo problema de \'Selecionar questões aleatórias de subcategorias\'.';
$string['decimalplacesingrades'] = 'Casas decimais nas notas';
$string['defaultfor'] = 'Padrão para {$a}';
$string['defaultinfofor'] = 'A categoria padrão para as questões compartilhadas no contexto \'{$a}\'.';
$string['defaultmark'] = 'Marcação padrão';
$string['defaultmarkmustbepositive'] = 'A nota padrão precisa ser positiva.';
$string['deletecoursecategorywithquestions'] = 'Existem questões deste banco associadas a esta categoria de curso. Se você continuar, serão excluídas. Use a interface de administração do banco de questões para transferir as questões.';
$string['deletequestioncheck'] = 'Você tem absoluta certeza que deseja excluir \'{$a}\'?';
$string['deletequestionscheck'] = 'Você está absolutamente certo que deseja excluir as seguintes questões?<br /><br />{$a}';
$string['deletingbehaviour'] = 'Eliminando comportamento da questão \'{$a}\'';
$string['deletingqtype'] = 'Excluindo tipo de questão \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Não confere com nenhuma resposta ]';
$string['disabled'] = 'Desativado';
$string['displayoptions'] = 'Opções de exibição';
$string['disterror'] = 'A distribuição {$a} causou problemas';
$string['donothing'] = 'Não copie, mova arquivos ou mude os links.';
$string['editcategories'] = 'Editar categorias';
$string['editcategories_help'] = 'Em vez de manter todas as questões em uma lista grande, você pode criar categorias e sub-categorias.

Cada categoria possui um contexto que determina onde a questão pode ser usada:

*Contexto da atividade - Questões somente disponíveis no módulo da atividade
*Contexto do curso - Questões disponíveis em todos os módulos de atividade daquele curso
*Contexto da categoria de curso - Questões disponíveis em todos os módulos de atividade de todos os cursos daquela categoria

Categorias também são utilizadas em questionários com questões aleatórias que são selecionadas de uma categoria particular.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'Editar categoria';
$string['editingcategory'] = 'Editando a categoria';
$string['editingquestion'] = 'Editando uma questão';
$string['editquestion'] = 'Editar questão';
$string['editquestions'] = 'Editar questões';
$string['editthiscategory'] = 'Editar esta categoria';
$string['emptyxml'] = 'Erro desconhecido - imsmanifest.xml vazio';
$string['enabled'] = 'Ativado';
$string['erroraccessingcontext'] = 'Não pode acessar o contexto';
$string['errordeletingquestionsfromcategory'] = 'Erro excluindo questões da categoria {$a}.';
$string['errorduringpost'] = 'Erro ocorreu durante o pós-processamento!';
$string['errorduringpre'] = 'Erro ocorreu durante o pré-processamento!';
$string['errorduringproc'] = 'Erro ocorreu durante o processamento!';
$string['errorduringregrade'] = 'Não foi possível reavaliar a questão {$a->qid}, indo para o estado {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Erro: impossível copiar arquivo {$a}.';
$string['errorfilecannotbemoved'] = 'Erro: impossível mover arquivo {$a}.';
$string['errorfileschanged'] = 'Erro: os arquivos ligados às questões foram mudados depois que o formulário foi mostrado.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'A questão ({$a}) aparece mais de uma vez com pesos diferentes em diferentes posições do questionário. Isso não é suportado pelo relatório de estatísticas e pode tornar as estatísticas para esta questão não confiáveis.';
$string['errormanualgradeoutofrange'] = 'A nota {$a->grade} não está entre 0 e {$a->maxgrade} na questão {$a->name}. A pontuação e o comentário não foram salvos.';
$string['errormovingquestions'] = 'Erro movendo as questões com id {$a}.';
$string['errorpostprocess'] = 'Erro ocorreu durante o pós-processamento!';
$string['errorpreprocess'] = 'Erro ocorreu durante o pré-processamento!';
$string['errorprocess'] = 'Erro ocorreu durante o processamento!';
$string['errorprocessingresponses'] = 'Um erro ocorreu durante o processamento de suas respostas ({$a}). Clique em continuar para retornar à página em que você estava e tente novamente.';
$string['errorsavingcomment'] = 'Erro salvando o comentário da questão {$a->name}.';
$string['errorsavingflags'] = 'Erro ao salvar o estado da marcação.';
$string['errorupdatingattempt'] = 'Erro atualizando a tentativa {$a->id}.';
$string['eventquestioncategorycreated'] = 'Categoria de questão criada';
$string['eventquestioncategorydeleted'] = 'Categoria da questão excluída';
$string['eventquestioncategorymoved'] = 'Categoria da questão movida';
$string['eventquestioncategoryupdated'] = 'Categoria da questão atualizada';
$string['eventquestioncategoryviewed'] = 'Categoria da questão visualizada';
$string['eventquestioncreated'] = 'Questão criada';
$string['eventquestiondeleted'] = 'Questão excluída';
$string['eventquestionmoved'] = 'Questão movida';
$string['eventquestionsexported'] = 'Questão exportada';
$string['eventquestionsimported'] = 'Questões importadas';
$string['eventquestionupdated'] = 'Questão atualizada';
$string['eventquestionviewed'] = 'Questão visualizada';
$string['export'] = 'Exportar';
$string['exportasxml'] = 'Exportar como Moodle XML';
$string['exportcategory'] = 'Exportar categoria';
$string['exportcategory_help'] = '<h2>Categoria de Exportação</h2>

<p>A lista <b>Categoria:</b> que se abre é usada para selocionar a categoria da qual as questões para exportação serão tiradas.</p>

<p>Alguns formatos de importação (GIFT e Formato XML) permitem a categoria ser incluída no arquivo gravado, possibilitando que as categorias (opcionalmente) sejam recriadas na importação. Para que esta informação seja incluída a caixa <b>para o arquivo</b> deve ser marcada.</p>';
$string['exporterror'] = 'Erros ocorreram durante a exportação!';
$string['exportfilename'] = 'questões';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Faça o download desta questão no formato XML do Moodle';
$string['exportquestions'] = 'Exportar questões para arquivo';
$string['exportquestions_help'] = 'Esta função permite exportar completamente uma categoria (e quaisquer subcategorias) de questões para um arquivo. Por favor, note que, dependendo do tipo de arquivo selecionado, alguns tipos de questões e alguns dados das questões podem não ser exportados.';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'Feedback';
$string['fieldinquestion'] = '{$a->fieldname} {$a->questionindentifier}';
$string['fieldinquestionpre'] = '{$a->questionindentifier} {$a->fieldname}';
$string['filecantmovefrom'] = 'Os arquivos de questões não podem ser movidos porque você não tem permissão para remover arquivos do local do qual você está tentando mover questões.';
$string['filecantmoveto'] = 'Os arquivos de questões não podem ser movidos ou copiados porque você não tem permissão para adicionar arquivos no local para onde está tentando mover questões.';
$string['fileformat'] = 'Formato de aquivo';
$string['filesareacourse'] = 'a área de arquivos do curso';
$string['filesareasite'] = 'a área de arquivos do site';
$string['filestomove'] = 'Mover / copiar arquivos para {$a}?';
$string['fillincorrect'] = 'Preencher com respostas corretas';
$string['filterbytags'] = 'Filtrar por tags ...';
$string['firsttry'] = 'Primeira tentativa';
$string['flagged'] = 'Marcada';
$string['flagthisquestion'] = 'Marcar esta pergunta';
$string['formquestionnotinids'] = 'O formulário continha questões que não estavam entre os questionids';
$string['fractionsnomax'] = 'Uma das respostas deve ter valor de 100% para que seja possível obter a nota total.';
$string['generalfeedback'] = 'Feedback geral';
$string['generalfeedback_help'] = 'Feedback geral é mostrado ao estudante após ele completar a questão. Diferentemente do feedback, que depende do tipo de questão e da resposta do estudante , o mesmo feedback geral aparece para todos os estudantes.

Você pode usar o feedback geral para dar aos estudantes algumas informações sobre o tipo de conhecimento que a questão está testando, ou dá-los um link com mais informações que eles possam usar caso não tenham entendido a questão.';
$string['getcategoryfromfile'] = 'Obter categoria do arquivo';
$string['getcontextfromfile'] = 'Obter contexto do arquivo';
$string['hintn'] = 'Dica {no}';
$string['hintnoptions'] = 'Dica {no} opções';
$string['hinttext'] = 'Texto da dica';
$string['howquestionsbehave'] = 'Como as questões se comportam';
$string['howquestionsbehave_help'] = 'Estudantes podem interagir com as questões no questionário de várias formas. Por exemplo, você pode querer que os estudantes dêem uma resposta para todas as questões e depois submetam o questionário inteiro, antes de ser avaliado ou receber qualquer feedback. Esse é o modo \'Feedbak adiado\'. Alternativamente, você pode querer que seus estudantes submetam cada questão à medida que eles avançam para receber feedback imediato, e se eles não acertarem de primeira, tenham outra chance por uma pontuação menor. Esse é o modo \'Interativo com múltiplas tentativas\'.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = 'ID number';
$string['idnumber_help'] = 'Se usado, o ID number deve ser exclusivo dentro de cada categoria de pergunta. Ele fornece outra maneira de identificar uma questão que às vezes é útil, mas geralmente pode ser deixada em branco.';
$string['ignorebroken'] = 'Ignorar links quebrados';
$string['import'] = 'Importação';
$string['importcategory'] = 'Importar categoria';
$string['importcategory_help'] = '<p>A lista <b>Categoria:</b> que se abre é usada para selecionar a categoria na qual as questões da Importação serão colocadas.</p>

<p>Alguns formatos de importação (GIFT e Formato XML) permitem que a categoria seja específicada no arquivo de importação. Para que isto aconteça a caixa <b>vindo do arquivo</b> deve ser marcada. Se não for, as questões irão para as categorias selecionadas independente de qualquer instrução dentro do arquivo.</p>

<p>Quando categorias são especificadas dentro do arquivo de importação e não existem, elas são criadas automáticamente.</p>';
$string['importerror'] = 'Ocorreu um erro durante o processo de importação';
$string['importerrorquestion'] = 'Erro importando questão';
$string['importfromcoursefiles'] = '...ou escolha um arquivo de curso para importar.';
$string['importfromupload'] = 'Selecione um arquivo para enviar...';
$string['importingquestions'] = 'Importando {$a} questões do arquivo';
$string['importparseerror'] = 'Um ou mais erros foram encontrados ao ler o arquivo de importação. Nenhuma questão foi importada. Para importar as questões em bom estado tente novamente com a configuração "Parar se houver erro" definida como "Não".';
$string['importquestions'] = 'Importar questões do arquivo';
$string['importquestions_help'] = 'Esta função possibilita a importação de perguntas em distintos formatos por meio de um arquivo de texto. Observe que o arquivo deve ter a codificação UTF-8.';
$string['importquestions_link'] = 'question/import';
$string['importwrongfileencoding'] = 'O arquivo selecionado não usa a codificação de caracteres UTF-8. Os arquivos {$a} devem usar UTF-8.';
$string['importwrongfiletype'] = 'O tipo do arquivo selecionado ({$a->actualtype}) não corresponde ao tipo de arquivo esperado para o formato de importação ({$a->expectedtype}).';
$string['impossiblechar'] = 'Detectado o caractere impossível {$a} como parênteses';
$string['includesubcategories'] = 'Também mostrar questões de subcategorias';
$string['incorrect'] = 'Incorreto';
$string['incorrectfeedback'] = 'Para qualquer resposta incorreta';
$string['incorrectfeedbackdefault'] = 'Sua resposta está incorreta.';
$string['information'] = 'Informação';
$string['invalidanswer'] = 'Resposta incompleta';
$string['invalidarg'] = 'Nenhum argumento válido fornecido ou configuração incorreta do servidor';
$string['invalidcategoryidforparent'] = 'Id inválido para categoria pai!';
$string['invalidcategoryidtomove'] = 'Id inválido da categoria a mover!';
$string['invalidconfirm'] = 'String de confirmação estava incorreta';
$string['invalidcontextinhasanyquestions'] = 'Contexto inválido para question_context_has_any_questions.';
$string['invalidgrade'] = 'Avaliações ({$a}) não correspondem às opções de avaliação - pergunta ignorada.';
$string['invalidpenalty'] = 'Penalidade inválida';
$string['invalidwizardpage'] = 'A página de ajuda é incorreta ou não está especificada!';
$string['lastmodifiedby'] = 'Última modificação por';
$string['lasttry'] = 'Última tentativa';
$string['linkedfiledoesntexist'] = 'Arquivo associado {$a} não existe';
$string['makechildof'] = 'Criar descendente de \'{$a}\'';
$string['makecopy'] = 'Criar cópia';
$string['maketoplevelitem'] = 'Mover para o nível mais alto';
$string['manualgradeinvalidformat'] = 'Esse não é um número válido.';
$string['manualgradeoutofrange'] = 'Esta nota está fora do intervalo válido.';
$string['manuallygraded'] = 'Avaliado manualmente com {$a->mark} e comentário: {$a->comment}';
$string['mark'] = 'Nota';
$string['markedoutof'] = 'Valor da questão';
$string['markedoutofmax'] = 'Vale {$a} ponto(s).';
$string['markoutofmax'] = 'Atingiu {$a->mark} de {$a->max}';
$string['marks'] = 'Pontos';
$string['matchgrades'] = 'Avaliações associadas';
$string['matchgrades_help'] = '<p>As notas importadas <b>devem</b> coincidir com uma das notas
válidas da lista predeterminada, como abaixo...</p>

<ul>
  <li>100%</li>
  <li>90%</li>
  <li>80%</li>
  <li>75%</li>
  <li>70%</li>
  <li>66.666%</li>
  <li>60%</li>
  <li>50%</li>
  <li>40%</li>
  <li>33.333</li>
  <li>30%</li>
  <li>25%</li>
  <li>20%</li>
  <li>16.666%</li>
  <li>14.2857</li>
  <li>12.5%</li>
  <li>11.111%</li>
  <li>10%</li>
  <li>5%</li>
  <li>0%</li>
</ul>

<p>Valores negativos da lista também são
permitidos.</p>

<p>Há duas configurações para esta chave. Elas afetam como
a rotina de importação trata os valores que não coincidem <strong>exatamente</strong>
com um dos valores da lista acima.</p>

<ul>
  <li><strong>Erro se a nota não está na lista</strong><br />
  Se a pergunta contem qualquer nota não encontrada na lista um erro é mostrado
  e a pergunta não será importada.</li>
  <li><strong>Nota mais próxima se não está na lista</strong><br />

  Se a nota não coincide com um valor da lista, a nota é alterada
  para o valor mais próximo da lista.</li>
</ul>

<p><i>Nota: alguns formatos personalizados de importação escrevem diretamente no banco de dados e podem ignorar esta checagem.</i></p>';
$string['matchgradeserror'] = 'Erro caso notas não estejam listadas';
$string['matchgradesnearest'] = 'Nota mais próxima, se não listada';
$string['missingcourseorcmid'] = 'É necessário fornecer o courseid ou cmid para print_question.';
$string['missingcourseorcmidtolink'] = 'É necessário fornecer o courseid ou cmid para get_question_edit_link.';
$string['missingimportantcode'] = 'Neste tipo de questão falta um código importante: {$a}.';
$string['missingoption'] = 'A questão cloze {$a} está sem opções';
$string['modified'] = 'Salvo pela última vez';
$string['move'] = 'Mover de {$a} e mudar links.';
$string['movecategory'] = 'Mover categoria';
$string['movedquestionsandcategories'] = 'Questões e categorias de questões movidas de {$a->oldplace} para {$a->newplace}.';
$string['movelinksonly'] = 'Apenas mudar para onde os links apontam, não mover ou copiar arquivos.';
$string['moveq'] = 'Mover questões(s)';
$string['moveqtoanothercontext'] = 'Mover questão para outro contexto.';
$string['moveto'] = 'Mover para';
$string['movingcategory'] = 'Movendo categoria';
$string['movingcategoryandfiles'] = 'Você tem certeza que deseja mover a categoria {$a->name} e todas as categorias descendentes para o contexto "{$a->contextto}"?<br /> Foram detectados {$a->urlcount} arquivos ligados a questões em {$a->fromareaname}, você gostaria de copiar ou mover isto para {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Você tem certeza que deseja mover a categoria "{$a->name}" e todas as categorias descendentes para o contexto "{$a->contextto}"?';
$string['movingquestions'] = 'Movendo questões e quaisquer arquivos';
$string['movingquestionsandfiles'] = 'Você tem certeza que deseja mover a(s) questõe(s) {$a->questions} para o contexto de <strong>"{$a->tocontext}"</strong>?<br /> Foram detectados <strong>{$a->urlcount} arquivos</strong> ligados a esta(s) questão(s) em {$a->fromareaname}, você quer copiar ou mover isto para {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Você tem certeza que deseja mudar as questões {$a->questions} para o contexto <strong>"{$a->tocontext}"</strong>?<br />  <strong>Não existem arquivos</strong> ligados a estas questões em {$a->fromareaname}.';
$string['needtochoosecat'] = 'Você precisa escolher uma categoria para mover as questões, ou então clicar em \'cancelar\'.';
$string['nocate'] = 'Categoría {$a} inexistente!';
$string['nopermissionadd'] = 'Você não tem permissão para adicionar questões aqui.';
$string['nopermissionedit'] = 'Você não tem permissão para editar questões aqui.';
$string['nopermissionmove'] = 'Você não tem permissão para remover estas questões. Você pode salvar a questão nesta categoria ou salvá-la como nova questão.';
$string['noprobs'] = 'Nenhum problema encontrado no seu banco de dados de questões.';
$string['noquestionbanks'] = 'Nenhum plugin de banco de questões encontrado.';
$string['noquestions'] = 'Nenhuma questão encontrada pode ser exportada. Certifique-se de que você selecionou uma categoria que contem questões para exportar.';
$string['noquestionsinfile'] = 'Nenhuma questão presente no arquivo importado';
$string['noresponse'] = '[Não há resposta]';
$string['notagfiltersapplied'] = 'Nenhum filtro de tag aplicado';
$string['notanswered'] = 'Não respondido';
$string['notchanged'] = 'Não mudou desde a última tentativa';
$string['notenoughanswers'] = 'Este tipo de questão requer pelo menos {$a} respostas';
$string['notenoughdatatoeditaquestion'] = 'Não foram especificados: id da questão, id da categoria e tipo de questão.';
$string['notenoughdatatomovequestions'] = 'Você precisa fornecer os ids das questões que você quer mover.';
$string['notflagged'] = 'Não marcada';
$string['notgraded'] = 'Não avaliada';
$string['notshown'] = 'Não exibido';
$string['notyetanswered'] = 'Ainda não respondida';
$string['notyourpreview'] = 'Esta pré-visualização não pertence a você';
$string['novirtualquestiontype'] = 'Nenhum tipo de questão virtual para o tipo de questão {$a}';
$string['numqas'] = 'Número de tentativas de questão';
$string['numquestions'] = 'Número de questões';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} ocultas +{$a->numdraft} rascunho)';
$string['options'] = 'Opções';
$string['page-question-category'] = 'Página de categorias de questões';
$string['page-question-edit'] = 'Página de edição de questões';
$string['page-question-export'] = 'Página de exportação de questões';
$string['page-question-import'] = 'Página de importação de questões';
$string['page-question-x'] = 'Página de qualquer questão';
$string['parent'] = 'Nível superior';
$string['parentcategory'] = 'Categoria mãe';
$string['parentcategory_help'] = 'A categoria mãe é aquela na qual a nova categoria será colocada. "Início" significa qua categoria não está contida por nenhuma outra categoria. Contextos de categorias são mostrados em negrito. Deve existir pelo menos uma categoria em cada contexto.';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = 'Os parênteses antes de ** não foram fechados corretamente em {$a}**';
$string['parenthesisinproperstart'] = 'Os parênteses antes de ** não foram abertos corretamente em {$a}**';
$string['parsingquestions'] = 'Processando questões do arquivo de importação.';
$string['partiallycorrect'] = 'Parcialmente correto';
$string['partiallycorrectfeedback'] = 'Para qualquer resposta parcialmente correta';
$string['partiallycorrectfeedbackdefault'] = 'Sua resposta está parcialmente correta.';
$string['penaltyfactor'] = 'Fator de penalidade';
$string['penaltyfactor_help'] = '<P>Pode-se especificar qual a fração da nota obtida deverá ser subtraída para
cada resposta errada. Isto somente é relevante se o questionário estiver rodando no modo adaptativo
onde o estudante pode fazer repetidas respostas à pergunta. O fator de
penalidade deverá ser um número entre 0 e 1. Um fator de penalidade de 1 significa
que o estudante tem que conseguir a resposta correta na primeira resposta para obter qualquer
crédito por isso no total. Um fator de penalidade de 0 significa que o estudante pode tentar tantas vezes quantas desejar e ainda obter as marcas totais.</P>';
$string['penaltyforeachincorrecttry'] = 'Penalidade para cada tentativa incorreta';
$string['penaltyforeachincorrecttry_help'] = 'Quando as questões são executadas usando o comportamento \'Interativo com várias tentativas\' ou \'Modo adaptativo\', para que o estudante tenha várias tentativas para acertar a questão, essa opção controla o quanto eles são penalizados por cada tentativa incorreta.

A penalidade é uma proporção da nota total da questão; portanto, se a questão vale 3 pontos e a penalidade é de 0,3333333, o estudante receberá 3 pontos se acertar a questão na primeira vez, 2 se acertar na segunda tentativa, e 1 se acertar na terceira tentativa.

Para algumas questões com várias partes, essa lógica de pontuação é aplicada separadamente a cada parte da questão. Os detalhes dependem do tipo de questão e podem ser complexos, mas o princípio é dar aos estudantes o crédito pelo conhecimento que demonstraram da maneira mais justa possível.';
$string['permissionedit'] = 'Editar essa questão';
$string['permissionmove'] = 'Mover essa questão';
$string['permissionsaveasnew'] = 'Salvar essa como uma nova questão';
$string['permissionto'] = 'Você tem permissão para:';
$string['previewquestion'] = 'Pré-visualizar questão: {$a}';
$string['privacy:metadata:database:question'] = 'Os detalhes sobre uma questão específica.';
$string['privacy:metadata:database:question:createdby'] = 'A pessoa que criou a questão.';
$string['privacy:metadata:database:question:generalfeedback'] = 'O feedback geral para esta questão.';
$string['privacy:metadata:database:question:modifiedby'] = 'A pessoa que atualizou a questão pela última vez.';
$string['privacy:metadata:database:question:name'] = 'O nome da questão.';
$string['privacy:metadata:database:question:questiontext'] = 'O texto da questão.';
$string['privacy:metadata:database:question:timecreated'] = 'A data e a hora em que esta questão foi criada.';
$string['privacy:metadata:database:question:timemodified'] = 'A data e hora em que esta questão foi atualizada.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'As etapas de tentativa de questão podem ter dados adicionais específicos para essa etapa. Os dados são armazenados na tabela step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'O nome do item de dados.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'O valor do item de dados.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Cada tentativa de pergunta tem várias etapas para indicar as diferentes fases, desde o início até a conclusão até a marcação. Esta tabela armazena as informações para cada uma dessas etapas.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'A nota atribuída a essa questão foi dimensionada para um valor de 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'O estado dessa pergunta tenta passar no final da transição da etapa.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'A data e a hora em que esta transição de etapas foi iniciada.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'O usuário que realizou a transição da etapa.';
$string['privacy:metadata:database:question_attempts'] = 'As informações sobre uma tentativa de uma questão específica.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Uma indicação de que o usuário sinalizou essa questão dentro da tentativa.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Um resumo da resposta da questão.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'O horário que a tentativa da questão foi atualizada.';
$string['privacy:metadata:database:question_bank_entries'] = 'Os detalhes sobre uma questão específica do banco de questões.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'A pessoa que tem uma questão no banco de questões.';
$string['privacy:metadata:link:qbehaviour'] = 'O subsistema de questões usa o tipo de plugin Comportamentos de questão.';
$string['privacy:metadata:link:qformat'] = 'O subsistema de questão usa o plugin tipo de formatos de importação/exportação de Questões para importar e exportar questões em diferentes formatos.';
$string['privacy:metadata:link:qtype'] = 'O Subsistema de Questões interage com o plugin de Tipos de Questão que contém os diversos tipos de questão.';
$string['published'] = 'compartilhado';
$string['qbanknotfound'] = 'O plugin de banco de questões \'{$a}\' não existe ou não é reconhecido.';
$string['qtypeveryshort'] = 'T';
$string['question_version'] = 'Versão da questão';
$string['questionaffected'] = '<a href="{$a->qurl}">Questão "{$a->name}" ({$a->qtype})</a> está nesta categoria de questão mas também está na <a href="{$a->qurl}">questão "{$a->quizname}"</a> no curso "{$a->coursename}".';
$string['questionbank'] = 'Banco de questões';
$string['questionbehaviouradminsetting'] = 'Configurações de comportamento de questão';
$string['questionbehavioursdisabled'] = 'Comportamentos da questão para desabilitar';
$string['questionbehavioursdisabledexplained'] = 'Digite uma lista separada por vírgula de comportamentos que você não deseja que apareça no menu suspenso.';
$string['questionbehavioursorder'] = 'Ordem dos comportamentos da questão';
$string['questionbehavioursorderexplained'] = 'Digite uma lista separada por vírgula de comportamentos na ordem em que deseja que eles apareçam no menu suspenso.';
$string['questioncategories'] = 'Categorias de questão';
$string['questioncategory'] = 'Categoria de questões';
$string['questioncatsfor'] = 'Categorias de questão para \'{$a}\'';
$string['questiondoesnotexist'] = 'Esta questão não existe';
$string['questionformtagheader'] = '{$a} tags';
$string['questionidmismatch'] = 'Ids de questão não conferem';
$string['questionloaderror'] = 'Não foi possível carregar as opções da questão.';
$string['questionname'] = 'Nome da questão';
$string['questionnamecopy'] = '{$a} (cópia)';
$string['questionno'] = 'Questão {$a}';
$string['questionpreviewdefaults'] = 'Padrões de pré-visualização de questão';
$string['questionpreviewdefaults_desc'] = 'Esses padrões são usados quando um usuário visualiza primeiro uma questão no banco de questões. Uma vez que um usuário tenha inspecionado uma questão, suas preferências pessoais são armazenadas como preferências do usuário.';
$string['questions'] = 'Questões';
$string['questionsaveerror'] = 'Ocorrerem erros durante salvar questão - ({$a})';
$string['questionsinuse'] = '(*Questões marcadas com um asterisco já estão em uso em alguns questionários. Estas questões não serão excluídas dos questionários, mas somente da lista da categoria.)';
$string['questionsmovedto'] = 'Questões ainda utilizadas movidas para "{$a}" na categoria de curso correspondente.';
$string['questionsrescuedfrom'] = 'Questões copiadas do contexto {$a}.';
$string['questionsrescuedfrominfo'] = 'Estas questões (algumas podem estar escondidas) foram salvas quando o contexto {$a} foi excluído, porque ainda são utilizadas por alguns questionários ou outras atividades.';
$string['questiontags'] = 'Tags da questão';
$string['questiontext'] = 'Texto da questão';
$string['questiontype'] = 'Tipo de questão';
$string['questionuse'] = 'Usar questão nessa atividade';
$string['questionvariant'] = 'Variante de questão';
$string['questionx'] = 'Questão {$a}';
$string['requiresgrading'] = 'Requer avaliação';
$string['responsehistory'] = 'Histórico de respostas';
$string['restart'] = 'Começar de novo';
$string['restartwiththeseoptions'] = 'Comece novamente com estas opções';
$string['restoremultipletopcats'] = 'O arquivo de backup contém mais de uma categoria de questão de nível superior para o contexto {$a}.';
$string['reviewresponse'] = 'Revisão da resposta';
$string['rightanswer'] = 'Resposta correta';
$string['rightanswer_help'] = 'Um resumo gerado automaticamente com as respostas corretas. Isso pode ser limitado, portanto você pode pensar em explicar a solução correta no feedback geral para a questão desativando esta opção.';
$string['save'] = 'Salvar';
$string['savechangesandcontinueediting'] = 'Salvar alterações e continuar editando';
$string['saved'] = 'Salvou: {$a}';
$string['saveflags'] = 'Gravar o estado das marcas';
$string['selectacategory'] = 'Selecione uma categoria:';
$string['selectaqtypefordescription'] = 'Selecione um tipo de questão para ver a sua descrição.';
$string['selectcategoryabove'] = 'Selecione uma categoria acima';
$string['selectquestionsforbulk'] = 'Selecionar perguntas para ações em massa';
$string['settingsformultipletries'] = 'Múltiplas tentativas';
$string['shareincontext'] = 'Compartilhar o contexto com {$a}';
$string['showhidden'] = 'Também exibir questões antigas';
$string['showmarkandmax'] = 'Exibir marcação e máximo';
$string['showmaxmarkonly'] = 'Exibir marcação máxima apenas';
$string['shown'] = 'Exibir';
$string['shownumpartscorrect'] = 'Mostrar o número de respostas corretas';
$string['shownumpartscorrectwhenfinished'] = 'Mostrar o número de respostas corretas uma vez terminada a questão';
$string['showquestiontext'] = 'Mostrar texto da questão na lista de questões?';
$string['showquestiontext_full'] = 'Sim, com imagens, mídia, etc.';
$string['showquestiontext_off'] = 'Não';
$string['showquestiontext_plain'] = 'Sim, somente texto';
$string['specificfeedback'] = 'Feedback específico';
$string['specificfeedback_help'] = 'Feedback que depende da resposta dada pelo estudante.';
$string['started'] = 'Iniciada';
$string['state'] = 'Estado';
$string['step'] = 'Passo';
$string['steps'] = 'Passos';
$string['stoponerror'] = 'Parar se houver erro';
$string['stoponerror_help'] = 'Esta opção determina se o processo de importação deve parar quando um erro é detectado, resultando em nenhuma questão importada, ou se quaisquer perguntas que contenham erros sejam ignoradas e somente perguntas válidas sejam importadas.';
$string['submissionoutofsequence'] = 'Acesso fora da sequência. Por favor não clique no botão voltar do seu navegador enquanto responde às questões.';
$string['submissionoutofsequencefriendlymessage'] = 'Você enviou dados fora da sequência normal. Isso pode acontecer se você usar o botão voltar ou avançar do seu navegador; por favor não os utilize durante a tentativa. Isso também pode acontecer se você clicar em algo durante o carregamento da página. Clique em <strong>Continuar </strong>para retomar.';
$string['submit'] = 'Enviar';
$string['submitandfinish'] = 'Enviar e finalizar';
$string['submitted'] = 'Enviar: {$a}';
$string['tagarea_question'] = 'Questões';
$string['technicalinfo'] = 'Informação técnica';
$string['technicalinfo_help'] = 'Esta informação técnica só é provavelmente útil para desenvolvedores trabalhando em novos tipos de questão. Isso também pode ser de auxílio enquanto se busca por problemas em questões.';
$string['technicalinfomaxfraction'] = 'Fração máxima: {$a}';
$string['technicalinfominfraction'] = 'Fração mínima: {$a}';
$string['technicalinfoquestionsummary'] = 'Sumário da questão: {$a}';
$string['technicalinforesponsesummary'] = 'Resumo da resposta: {$a}';
$string['technicalinforightsummary'] = 'Sumário da resposta correta: {$a}';
$string['technicalinfostate'] = 'Estado da questão: {$a}';
$string['technicalinfovariant'] = 'Pergunta variável: {$a}';
$string['tofilecategory'] = 'Escrever categoria em arquivo';
$string['tofilecontext'] = 'Escrever contexto em arquivo';
$string['topfor'] = 'Topo para {$a}';
$string['uninstallbehaviour'] = 'Desinstalar este comportamento do questionário.';
$string['uninstallqtype'] = 'Desinstalar este tipo de questão.';
$string['unknown'] = 'Desconhecido';
$string['unknownbehaviour'] = 'Comportamento desconhecido: {$a}.';
$string['unknownorunhandledtype'] = 'Tipo de questão desconhecida ou não tratada: {$a}';
$string['unknownquestion'] = 'Questão desconhecida: {$a}.';
$string['unknownquestioncatregory'] = 'Categoria de questão desconhecida: {$a}.';
$string['unknownquestiontype'] = 'Tipo de questão desconhecido: {$a}.';
$string['unknowntolerance'] = 'Tipo de tolerância desconhecido {$a}';
$string['unpublished'] = 'Não-compartilhado';
$string['unusedcategorydeleted'] = 'Esta categoria foi excluída porque depois da exclusão do curso as questões não foram mais usadas.';
$string['updatedisplayoptions'] = 'Atualizar opções de exibição';
$string['upgradeproblemcategoryloop'] = 'Problema atualizando categorias de questões. Loop na árvore de categorias. O id da categoria com problemas é {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Não foi possível modificar a categoria {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Problema atualizando categorias de questões. A categoria {$a->id} aponta para {$a->parent},que não existe. O problema foi resolvido apontando para uma categoria existente.';
$string['version_selection'] = 'Versão {$a->version}';
$string['whethercorrect'] = 'Acertos/Erros';
$string['whethercorrect_help'] = 'Este diz a respeito de todas, \'Correto\', \'Parcialmente correto\' or \'Incorreto\' e qualquer outro texto destacado junto da mesma informação.';
$string['whichtries'] = 'Quais tentativas';
$string['withselected'] = 'Com as questões selecionadas:';
$string['wrongprefix'] = 'Erroneamente formatado nameprefix {$a}';
$string['xoutofmax'] = '{$a->mark} de {$a->max}';
$string['yougotnright'] = 'Você selecionou corretamente {$a->num}.';
$string['youmustselectaqtype'] = 'Você deve selecionar um tipo de questão.';
$string['yourfileshoulddownload'] = 'O download do seu arquivo deve começar automaticamente, caso contrário <a href="{$a}">clique aqui</a>.';
