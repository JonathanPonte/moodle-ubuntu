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
 * Strings for component 'grades', language 'pt_br', version '4.2'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Atividades';
$string['addcategory'] = 'Adicionar categoria';
$string['addcategoryerror'] = 'Não foi possível adicionar a categoria.';
$string['addexceptionerror'] = 'Erro durante a adição de exceção para userid:gradeitem';
$string['addfeedback'] = 'Adicionar observação';
$string['addgradeletter'] = 'Adicionar uma letra de nota';
$string['addidnumbers'] = 'Adicionar números de identificação';
$string['additem'] = 'Adicionar item de nota';
$string['additionalfeedback'] = 'Comentário adicional';
$string['addoutcome'] = 'Adicione um resultado';
$string['addoutcomeitem'] = 'Adicionar item de resultado de aprendizagem';
$string['addscale'] = 'Adicionar uma escala';
$string['adjustedweight'] = 'Peso ajustado';
$string['aggregateextracreditmean'] = 'Média das notas (com pontos extras)';
$string['aggregatemax'] = 'Maior nota';
$string['aggregatemean'] = 'Média das notas';
$string['aggregatemedian'] = 'Mediana das notas';
$string['aggregatemin'] = 'Menor nota';
$string['aggregatemode'] = 'Moda das notas';
$string['aggregatenotonlygraded'] = 'Incluir notas vazias';
$string['aggregateonlygraded'] = 'Desconsiderar notas vazias';
$string['aggregateonlygraded_help'] = 'Uma nota vazia é uma nota que não está presente no livro de notas. Ela pode ser resultado de uma submissão de tarefa que ainda não tenha sido avaliada, de um questionário que ainda não tenha sido respondido, e assim por diante.

Esta configuração define se as notas vazias devem ou não ser consideradas na agregação de notas (cálculo de média, por exemplo)  ou na hora de descartar as notas mais baixas.';
$string['aggregateoutcomes'] = 'Incluir resultado da aprendizagem na agregação';
$string['aggregateoutcomes_help'] = 'Se habilitado, os resultados de aprendizagem são incluídos na agregação de notas. Isto pode resultar num valor inesperado para o total de uma categoria de notas.';
$string['aggregatesonly'] = 'Mostrar somente totais';
$string['aggregatesubcatsupgradedgrades'] = 'Nota: A definição de agregação "Aggregate incluindo subcategorias" foi removida como parte de uma atualização do site. Desde "agregado incluindo subcategorias" já foi usado neste curso, é recomendável que você reveja esta mudança no livro de notas.';
$string['aggregatesum'] = 'Soma das notas (Natural)';
$string['aggregateweightedmean'] = 'Média ponderada das notas';
$string['aggregateweightedmean2'] = 'Média ponderada simples das notas';
$string['aggregation'] = 'Forma de agregação das notas';
$string['aggregation_help'] = 'A agregação determina como as notas em uma categoria são combinadas, como:

* Média das notas - A soma de todas as notas dividida pelo número total  de notas
* Mediana das notas - A nota mediana quando as notas são ordenadas por tamanho
* Menor nota
* Maior nota
* Moda das notas - A nota que ocorre mais frequentemente
* Soma das notas (Natural) - A soma de todos os valores de notas, com notas em escala sendo ignoradas';
$string['aggregation_link'] = 'grade/aggregation';
$string['aggregationcoef'] = 'Coeficiente de agregação';
$string['aggregationcoefextra'] = 'Crédito extra';
$string['aggregationcoefextra_help'] = 'Se a agregação for \'Natural\' ou \'Média ponderada simples\' e a caixa de crédito extra for marcada, a nota máxima do item não será acrescentada à nota máxima da categoria. Isso resultará na possibilidade de atingir a nota máxima na categoria sem ter a nota máxima em todos atividades. Se o administrador do site permitiu notas acima do máximo, poderão haver notas acima do máximo.

Se a forma de agregação for \'Média das notas (com créditos extra)\' e o crédito extra for um valor maior que zero, o crédito extra será o fator pelo qual será multiplicada a nota, antes de somá-la ao total, depois de calcular a média.';
$string['aggregationcoefextra_link'] = 'grade/aggregation';
$string['aggregationcoefextrasum'] = 'Crédito extra';
$string['aggregationcoefextrasum_help'] = '<p>Quando a soma das notas é utilizada como estratégia de agregação, um item pode ser considerado crédito extra na categoria. Isto significa que a nota máxima do item não será adicionada à nota máxima da categoria mas a nota do item, sim. Por exemplo></p>
<ul>
    <li>Item 1 tem valor entre 0-100</li>
    <li>Item 2 tem valor entre 0-75</li>
    <li>Item 1 tem a opção "crédito extra" selecionada, Item 2 não.</li>
    <li>Os dois itens pertencem à categoria 1, que tem "soma das notas" como estratégia de agregação</li>
    <li>O total da Categoria 1\'s é entre 0-75</li>
    <li>Um estudante obtém a nota 20 no Item 1 e 70 no Item 2</li>
    <li>O total da Categoria 1 será 75/75 (20+70 = 90 mas o Item 1 é apenas um crédito extra e portanto aumenta o total até o máximo)</li>
</ul>';
$string['aggregationcoefextrasum_link'] = 'grade/aggregation';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextraweight'] = 'Peso do crédito extra';
$string['aggregationcoefextraweight_help'] = '<p>Um valor maior que 0 trata esta nota como crédito extra durante a agregação. O número é o fator de multiplicação da nota antes que seja somado às outras notas mas o item não será contado na divisão. Por exemplo:</p>

<ul>
    <li>Item 1 é avaliado como 0-100 e o valor do "crédito extra" é 2</li>
    <li>Item 2 é avaliado como 0-100 e o valor do "crédito extra" é 0.0000</li>
    <li>Item 3 é avaliado como 0-100 e o valor do "crédito extra" é 0.0000</li>
    <li>Os 3 items pertencem à Categoria 1, que tem a estratégia de agregação "Média das notas (com crédito extra)"</li>
    <li>Um estudante obtém a nota 20 no Item 1, 40 no Item 2 e 70 no Item 3</li>
    <li>O total da Categoria 1 será 95/100 pois 20*2 + (40 + 70)/2 = 95</li>
</ul>';
$string['aggregationcoefextraweight_link'] = 'grade/aggregation';
$string['aggregationcoefweight'] = 'Peso do item';
$string['aggregationcoefweight_help'] = 'O peso de um item é utilizado na agregação de notas para definir a influência ou importância de item quando comparado com os demais itens de nota de uma mesma categoria.';
$string['aggregationcoefweight_link'] = 'grade/aggregation';
$string['aggregationhintdropped'] = '( Descartada )';
$string['aggregationhintexcluded'] = '(Excluído)';
$string['aggregationhintextra'] = '(Crédito Extra)';
$string['aggregationhintnovalue'] = '(Vazio)';
$string['aggregationofa'] = 'Agregação de {$a}';
$string['aggregationposition'] = 'Posição de agregação';
$string['aggregationposition_help'] = 'Esta opção define se as colunas da categoria do curso e total do curso serão mostradas no começo ou no fim dos relatórios do livro de notas.';
$string['aggregationsvisible'] = 'Tipos de agregação disponíveis';
$string['aggregationsvisiblehelp'] = 'Selecione os tipos de agregação que devem ser disponibilizados. Mantenha a tecla Ctrl pressionada para selecionar mais que um item.';
$string['allgrades'] = 'Todas as notas por categoria';
$string['allstudents'] = 'Todos os estudantes';
$string['allusers'] = 'Todos os usuários';
$string['autosort'] = 'Ordenação automática';
$string['availableidnumbers'] = 'Números de identificação disponíveis';
$string['average'] = 'Média';
$string['averagesdecimalpoints'] = 'Decimais em colunas de médias';
$string['averagesdecimalpoints_help'] = 'Essa configuração determina o número de casas decimais a serem exibidas para cada média ou se a configuração geral de casas decimais para o item de categoria ou de nota é usado(herdado).';
$string['averagesdisplaytype'] = 'Tipo de exibição de colunas de médias';
$string['averagesdisplaytype_help'] = 'Esta configuração define se a média deve apresentada como um número real, uma porcentagem ou uma letra. Outra opção é utilizar o valor valor padrão definido na categoria ou item de nota.';
$string['backupwithoutgradebook'] = 'A cópia de segurança não contém as configurações do livro de notas';
$string['badgrade'] = 'Nota fornecida é inválida';
$string['badlyformattedscale'] = 'Por favor, insira uma lista de valores separados por vírgula (é necessário inserir pelo menos dois valores)';
$string['baduser'] = 'Usuário fornecido é inválido';
$string['bonuspoints'] = 'Pontos bônus';
$string['bulkcheckboxes'] = 'Conjunto de caixas de marcação';
$string['calculatedgrade'] = 'Nota calculada';
$string['calculation'] = 'Cálculo';
$string['calculation_help'] = 'A nota final pode ser calculada usando uma fórmula, que deve começar com um sinal de igual (=) e pode usar os operadores matemáticos usuais, como \'max\', \'min\' e \'sum\' (soma). Se desejado, outros items de nota podem ser incluídos no cálculo, escrevendo os números de ID entre colchetes duplos. Exemplo: =sum([[327]];[[511]])';
$string['calculation_link'] = 'grade/calculation';
$string['calculationadd'] = 'Adicionar cálculo';
$string['calculationedit'] = 'Editar cálculo';
$string['calculationsaved'] = 'Cálculo salvo';
$string['calculationview'] = 'Visualizar cálculo';
$string['cannotaccessgroup'] = 'Não foi possível acessar as notas do grupo selecionado.';
$string['categories'] = 'Categorias';
$string['category'] = 'Categoria';
$string['categoryedit'] = 'Editar categoria';
$string['categoryname'] = 'Nome da categoria';
$string['categorytotal'] = 'Total da categoria';
$string['categorytotalfull'] = '{$a->category} total';
$string['categorytotalname'] = 'Nome para o total da categoria';
$string['changedefaults'] = 'Mudar padrões';
$string['changereportdefaults'] = 'Mudar os padrões de relatório';
$string['chooseaction'] = 'Escolha uma ação...';
$string['choosecategory'] = 'Selecione a categoria';
$string['collapsecriterion'] = 'Recolher critério';
$string['combo'] = 'Abas e menu de opções';
$string['compact'] = 'Compactar';
$string['componentcontrolsvisibility'] = 'A visibilidade deste item de avaliação é controlada por configurações da atividade.';
$string['contract'] = 'Contrair a categoria';
$string['contributiontocoursetotal'] = 'Contribuição para o total do curso';
$string['controls'] = 'Controles';
$string['courseavg'] = 'Média do curso';
$string['coursegradecategory'] = 'Categoria de notas do curso';
$string['coursegradedisplaytype'] = 'Tipo de exibição das notas do curso';
$string['coursegradedisplayupdated'] = 'O tipo de exibição das notas foi atualizado.';
$string['coursegradesettings'] = 'Configuração de notas do curso';
$string['coursename'] = 'Nome do curso';
$string['coursescales'] = 'Escalas do curso';
$string['coursesettings'] = 'Configurações do curso';
$string['coursesettingsexplanation'] = 'As configurações de notas do curso determinam como o livro de notas é exibido para todos os participantes do curso.';
$string['coursesiamtaking'] = 'Cursos que estou cursando';
$string['coursesiamteaching'] = 'Cursos que estou lecionando';
$string['coursetotal'] = 'Total do curso';
$string['createcategory'] = 'Criar categoria';
$string['createcategoryerror'] = 'Não foi possível criar uma nova categoria';
$string['creatinggradebooksettings'] = 'Criando configurações do livro de notas';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Agregação-pai atual';
$string['curveto'] = 'Curvar para';
$string['decimalpoints'] = 'Pontos decimais geral';
$string['decimalpoints_help'] = 'Esta configuração determina o número de casas decimais para mostrar em cada nota. Ela não tem efeito em cálculos de notas, que são feitos com uma precisão de 5 casas decimais.';
$string['default'] = 'Padrão';
$string['defaultprev'] = 'Padrão ({$a})';
$string['deletecategory'] = 'Excluir categoria';
$string['deletescale'] = 'Excluir escala';
$string['disablegradehistory'] = 'Desabilitar histórico de notas';
$string['disablegradehistory_help'] = 'Desativar histórico das mudanças no relatório de notas. Isso pode acelerar um pouco o servidor e conservar espaço no banco de dados.';
$string['displaylettergrade'] = 'Mostrar notas com letras';
$string['displaypercent'] = 'Mostrar porcentagens';
$string['displaypoints'] = 'Mostrar pontuação';
$string['displayweighted'] = 'Mostrar notas ponderadas';
$string['dropdown'] = 'Menu de opções';
$string['droplow'] = 'Descartar as menores';
$string['droplow_help'] = '<p>Se marcada, esta opção permite desconsiderar as X notas mais baixas, sendo X o valor escolhido para esta opção.</p>';
$string['droplowestvalue'] = 'Desprezar menores notas';
$string['droplowestvalues'] = 'Desprezar {$a} menores valores';
$string['dropped'] = 'Descartadas';
$string['dropxlowest'] = 'Descartar  X  piores';
$string['dropxlowestwarning'] = 'Se você usar Descartar X Piores, o cálculo considera como igual o valor dos pontos atribuídos a todos os demais itens da categoria. Se os pontos atribuídos forem diferentes, o resultado será imprevisível.';
$string['duplicatedgradeitem'] = '{$a} (cópia)';
$string['duplicatescale'] = 'Escala duplicada';
$string['edit'] = 'Editar';
$string['editcalculation'] = 'Editar cálculo';
$string['editcalculationverbose'] = 'Editar cálculo para {$a->category} {$a->itemmodule}  {$a->itemname}';
$string['editfeedback'] = 'Editar avaliação';
$string['editgrade'] = 'Editar nota';
$string['editgradeletters'] = 'Editar letras';
$string['editoutcome'] = 'Editar resultado';
$string['editoutcomes'] = 'Editar resultado da aprendizagem';
$string['editscale'] = 'Editar escala';
$string['edittree'] = 'Configurações';
$string['editverbose'] = 'Editar {$a->category}{$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Habilitar AJAX';
$string['enableajax_help'] = 'Colocar uma camada de funcionalidade AJAX no relatório de notas, simplificando e acelerando operações comuns. Depende da ativação do javascript em nível do usuário.';
$string['enableoutcomes'] = 'Habilitar Resultado da aprendizagem';
$string['enableoutcomes_help'] = 'Se ativado, atividades podem receber notas usando uma ou mais escalas vinculadas a declarações de resultado.';
$string['encoding'] = 'Codificação';
$string['encoding_help'] = 'Selecione a codificação de caracteres utilizada para os dados. (A codificação padrão é UTF-8). Se a codificação errada for selecionada por engano, será perceptível quando os dados forem pré-visualizados na importação.';
$string['errorcalculationbroken'] = 'Erro no cálculo do item de nota {$a}.';
$string['errorcalculationnoequal'] = 'Fórmula deve começar com o sinal de igual (=1+2)';
$string['errorcalculationunknown'] = 'Fórmula inválida';
$string['errorgradevaluenonnumeric'] = 'Recebido valor não numérico para nota baixa ou alta';
$string['errornocalculationallowed'] = 'Cálculos não são permitidos para este item';
$string['errornocategorisedid'] = 'Impossível obter id sem categoria!';
$string['errornocourse'] = 'Impossível obter informações do curso';
$string['errorreprintheadersnonnumeric'] = 'Recebido valor não numérico para imprimir novamente os títulos';
$string['errorsavegrade'] = 'Desculpe, mas não foi possível salvar as notas.';
$string['errorsettinggrade'] = 'Erro ao salvar a nota "{$a->itemname}" da identificação do usuário {$a->userid}';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Erro ao atualizar a configuração \'Agregar só notas não vazias\' da categoria de notas ID {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Erro ao atualizar a configuração \'Incluir resultados na agregação\' na categoria de notas de ID {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Erro ao atualizar o tipo de agregação da categoria de notas de ID {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Erro ao atualizar o coeficiente de agregação (peso ou crédito extra) o item de nota de ID {$a->id}';
$string['eventgradedeleted'] = 'Nota excluída';
$string['eventgradeitemcreated'] = 'Item de nota criado';
$string['eventgradeitemdeleted'] = 'Item de nota excluído';
$string['eventgradeitemupdated'] = 'Item de nota atualizado';
$string['eventgradelettercreated'] = 'Carta de notas criada';
$string['eventgradeletterdeleted'] = 'Carta de notas apagada';
$string['eventgradeletterupdated'] = 'Carta de notas atualizada';
$string['eventgradeviewed'] = 'Notas foram visualizadas no livro de notas';
$string['eventscalecreated'] = 'Escala criada';
$string['eventscaledeleted'] = 'Escala apagada';
$string['eventscaleupdated'] = 'Escala atualizada';
$string['eventusergraded'] = 'Usuário recebeu nota';
$string['excluded'] = 'Excluídos';
$string['excluded_help'] = '<p>Se -excluído- estiver ativado, esta nota será excluída de qualquer agregação feita por um item ou categoria de nota pai.</p>';
$string['expand'] = 'Expandir categoria';
$string['expandcriterion'] = 'Expandir critério';
$string['export'] = 'Exportar';
$string['exportalloutcomes'] = 'Exportar todas as metas';
$string['exportas'] = 'Exportar como';
$string['exportfeedback'] = 'Incluir avaliação na exportação';
$string['exportfeedback_desc'] = 'Isso pode ser sobrescrito durante a exportação.';
$string['exportformatoptions'] = 'Opções de formato de exportação';
$string['exportonlyactive'] = 'Excluir usuários suspensos';
$string['exportonlyactive_help'] = 'Apenas incluir estudantes na exportação, cuja matrícula está ativa e não foi suspensa';
$string['exportplugins'] = 'Exportar plugins';
$string['exportsettings'] = 'Exportar configurações';
$string['exportto'] = 'Exportar para';
$string['externalurl'] = 'URL externa';
$string['externalurl_desc'] = 'Se um livro de notas externo é usado, a URL deve ser especificada aqui.';
$string['extracreditvalue'] = 'Valor do crédito extra para {$a}';
$string['extracreditwarning'] = 'Se todos os itens forem atribuídos a uma categoria com créditos adicionais, estes serão removidos do cálculo da avaliação. Não existe, neste caso, uma nota final total';
$string['fail'] = 'Falha';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = '<p>Comentários adicionados à nota pelo professor. Eles podem ser gerais, personalizados ou um comentaŕio simples referente a um sistema interno de feedback.</p>';
$string['feedbackadd'] = 'Adicionar feedback';
$string['feedbackedit'] = 'Editar feedback';
$string['feedbackfiles'] = 'Arquivos de feedback';
$string['feedbackforgradeitems'] = 'Feedback para {$a}';
$string['feedbackhistoryfiles'] = 'Arquivos de histórico de feedback';
$string['feedbackprovided'] = 'Feedback fornecido';
$string['feedbacks'] = 'Feedbacks';
$string['feedbacksaved'] = 'Feedback salvo';
$string['feedbackview'] = 'Ver feedback';
$string['filterbothactive'] = 'Primeiro ({$a->first}) Último ({$a->last})';
$string['filterbyname'] = 'Filtrar por nome';
$string['filterfirstactive'] = 'Primeiro ({$a->first})';
$string['filterlastactive'] = 'Último ({$a->last})';
$string['finalgrade'] = 'Nota final';
$string['finalgrade_help'] = '<p>A média final (memorizada na cache) depois que todos os cálculos são realizados.</p>';
$string['fixedstudents'] = 'Coluna de estudantes estática';
$string['fixedstudents_help'] = 'Permite rolar notas horizontalmente, mantendo sempre visível a coluna estudantes, tornando-a estática.';
$string['forceimport'] = 'Forçar importação';
$string['forceimport_help'] = 'Forçar importação de notas, mesmo que as notas tenham sido atualizadas após o arquivo de importação ser exportado';
$string['forceoff'] = 'Forçar: desativado';
$string['forceon'] = 'Forçar: ativado';
$string['forelementtypes'] = 'para o selecionado {$a}';
$string['forstudents'] = 'Para os estudantes';
$string['full'] = 'Completo';
$string['fullmode'] = 'Mostrar notas e totais';
$string['generalsettings'] = 'Configurações gerais';
$string['grade'] = 'Nota';
$string['grade_help'] = 'A nota a ser dada ao estudante por seu trabalho.';
$string['gradeadministration'] = 'Administração de notas';
$string['gradealreadyupdated'] = '{$a} notas não foram importadas por que as notas no arquivo de importação são mais velhas do que no relatório de notas. Para prosseguir com a importação de notas de mesmo assim, use a opção de forçar importação.';
$string['gradeanalysis'] = 'Análise de nota';
$string['gradebook'] = 'Livro de notas';
$string['gradebookcalculationsfixbutton'] = 'Aceitar as mudanças de notas e corrigir os erros de cálculo';
$string['gradebookcalculationsuptodate'] = 'Os cálculos no livro de notas estão atualizados. Você precisará recarregar esta página para ver as alterações.';
$string['gradebookcalculationswarning'] = 'Nota: Alguns erros foram detectados no cálculo das notas apresentadas no livro de notas. Se seu curso não começou ou está em andamento, recomenda-se que os erros sejam corrigidos clicando no botão abaixo, embora isso resultará na alteração de algumas notas. Se seu curso já foi encerrado e as notas enviadas, você provavelmente não quer corrigir o erro.

A versão mais atual é {$a->currentversion}; você está usando a versão {$a->gradebookversion} do livro de notas. Você pode ver uma lista das mudanças em <a href="{$a->url}">Mudanças no cálculo do livro de notas</a>.';
$string['gradebookhiddenerror'] = 'Atualmente o livro de notas está configurado para esconder tudo dos estudantes.';
$string['gradebookhistories'] = 'Histórico de notas';
$string['gradebooknavigationmenu'] = 'Menu de navegação do livro de notas';
$string['gradebooksetup'] = 'Configuração do Livro de Notas';
$string['gradeboundary'] = 'Limite da letra de nota';
$string['gradeboundary_help'] = '<p>Limites percentuais sobre os quais serão atribuídos notas por letras (se o modo de exibição por Letras estiver sendo usado). </p>';
$string['gradecategories'] = 'Categorias de notas';
$string['gradecategory'] = 'Categoria de notas';
$string['gradecategoryonmodform'] = 'Categoria de notas';
$string['gradecategoryonmodform_help'] = 'Selecione a categoria de notas do livro de notas à qual esta atividade estará subordinada. Esta escolha tem impacto sobre a forma como as notas da atividade serão agregadas com as notas de outras atividades para compor a nota final do curso. Esta categoria pode ser alterada posteriormente, tanto aqui como diretamente no livro de notas.';
$string['gradecategorysettings'] = 'Configurações de categoria de notas';
$string['gradedisplay'] = 'Apresentar a nota';
$string['gradedisplaytype'] = 'Tipo de apresentação da nota';
$string['gradedisplaytype_help'] = 'Esta configuração determina como as notas serão exibidas no relatório de notas e nos relatórios do usuário.

* Letras - Letras ou palavras são usadas para representar um intervalo de notas, conforme definido em \'Letras\' na configuração do livro de notas
* Porcentagem - Relativa às notas máxima e mínima
* Real - notas atuais ou valores da escala';
$string['gradedon'] = 'Avaliado: {$a}';
$string['gradeexport'] = 'Exportação de notas';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'Campos personalizados do perfil na exportação de notas';
$string['gradeexportcustomprofilefields_desc'] = 'Incluir esses campos de perfil personalizados na exportação de nota, separados por vírgulas.';
$string['gradeexportdecimalpoints'] = 'Casas decimais na exportação de notas';
$string['gradeexportdecimalpoints_desc'] = 'O número de casas decimais mostrados ao exportar. Isso pode ser alterado durante a exportação.';
$string['gradeexportdisplaytype'] = 'Tipo de exibição das notas exportadas';
$string['gradeexportdisplaytype_desc'] = 'As notas podem ser mostradas na sua forma própria, como porcentagem (em relação às notas mínimas e máximas) ou como letras na hora de exportar. Isso pode ser reconfigurado nesse momento.';
$string['gradeexportdisplaytypes'] = 'Tipos de exibição de notas na exportação';
$string['gradeexportuserprofilefields'] = 'Campos perfil de usuário na exportação de notas';
$string['gradeexportuserprofilefields_desc'] = 'Incluir esses campos do perfil de usuário na exportação de nota, separados por vírgulas.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'Notas mínimas e máximas iniciais';
$string['gradehelp'] = 'Ajuda sobre notas';
$string['gradehistorylifetime'] = 'Tempo de vida do histórico de notas';
$string['gradehistorylifetime_help'] = 'Isto especifica o intervalo de tempo pelo qual o histórico das alterações de nota deve ser mantidos. É recomendado que seja o maior possível. Se houver problemas de performance ou limites de espaço, tente um número menor.';
$string['gradeimport'] = 'Importação de notas';
$string['gradeimportfailed'] = 'Importação da nota falhou durante o commit. Detalhes:';
$string['gradeitem'] = 'Item de nota';
$string['gradeitemaddusers'] = 'Excluir da avaliação';
$string['gradeitemadvanced'] = 'Opções avançadas de item de nota';
$string['gradeitemadvanced_help'] = 'Escolher todos os elementos que devem ser mostrados como disponíveis na edição de itens de nota.';
$string['gradeitemislocked'] = 'Essa atividade fica travada no livro de notas. Mudanças para as notas não são copiadas ao livro até que ele seja destravado.';
$string['gradeitemlocked'] = 'Avaliação travada';
$string['gradeitemmembersselected'] = 'Excluído da avaliação';
$string['gradeitemminmax'] = 'Notas mínimas e máximas, conforme especificado nas configurações do item de nota';
$string['gradeitemnonmembers'] = 'Incluídos na avaliação';
$string['gradeitemremovemembers'] = 'Incluir na avaliação';
$string['gradeitems'] = 'Itens de nota';
$string['gradeitemsettings'] = 'Configurações de item de nota';
$string['gradeitemsinc'] = 'Itens de nota a serem inclusos';
$string['gradeletter'] = 'Letra de avaliação';
$string['gradeletter_help'] = '<p>Uma letra ou outro símbolo usado para representar um intervalo de notas.</p>';
$string['gradeletternote'] = 'Para remover uma letra de avaliação basta esvaziar<br />uma das três áreas relativas àquela letra e clicar salvar';
$string['gradeletteroverridden'] = 'A escala de letras padrão substituída atualmente.';
$string['gradeletters'] = 'Letras de avaliação';
$string['gradelocked'] = 'Avaliação está travada';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Nota máxima';
$string['grademax_help'] = 'Ao usar um tipo numérico de nota, é possível determinar um máximo. A nota máxima de um item de nota baseado em atividades pode ser configurada na página de atualização de atividades.';
$string['grademin'] = 'Nota mínima';
$string['grademin_help'] = 'Esta configuração determina a nota mínima quando utilizando o tipo de nota "valor".';
$string['gradenotificationmessage'] = 'Você tem novos comentários sobre o seu trabalho "{$a}"';
$string['gradenotificationsubject'] = 'Você foi avaliado';
$string['gradeoutcomeitem'] = 'Item de resultado da aprendizagem';
$string['gradeoutcomes'] = 'Resultado da aprendizagem';
$string['gradeoutcomescourses'] = 'Resultado da aprendizagem de cursos';
$string['gradepass'] = 'Nota para aprovação';
$string['gradepass_help'] = 'Esta configuraãço determina a nota mínima para passar. O valor é usado na conclusão de atividades e do curso e no livro de notas, onde as notas que passaram so destacadas em verde e as que nao falharam em vermelho.';
$string['gradepassgreaterthangrade'] = 'A nota para aprovação não pode ser maior do que o grau máximo possível {$a}';
$string['gradepointdefault'] = 'Selecionar ponto padrão';
$string['gradepointdefault_help'] = 'Esta configuração determina o valor padrão para o valor da pontuação disponível em um item de avaliação.';
$string['gradepointdefault_validateerror'] = 'Essa configuração deve ser um número inteiro entre 1 e o máximo de pontos da categoria.';
$string['gradepointmax'] = 'Máximo de pontos da categoria';
$string['gradepointmax_help'] = 'Esta configuração determina o valor máximo de notas disponíveis em uma atividade.';
$string['gradepointmax_validateerror'] = 'Essa configuração deve ser um número inteiro entre 1 e 10000.';
$string['gradepreferences'] = 'Preferências de nota';
$string['gradepreferenceshelp'] = 'Ajuda sobre preferências de nota';
$string['gradepublishing'] = 'Habilitar publicação';
$string['gradepublishing_help'] = 'A publicação de notas é uma forma de importar e exportar notas por meio de um URL sem estar conectado ao Moodle. Se habilitado, administradores e usuários com permissão para publicar notas (por padrão, apenas usuários com papel de gerente) recebem configurações de publicação de exportação de notas no livro de notas de cada curso.';
$string['gradepublishinglink'] = 'Download: {$a}';
$string['gradereport'] = 'Relatório de notas';
$string['graderreport'] = 'Relatório de notas';
$string['grades'] = 'Notas';
$string['gradesforuser'] = 'Notas para {$a->user}';
$string['gradesmoduledeletionpendingwarning'] = 'Aviso: A atividade está sendo apagada! Algumas notas estão prestes a ser removidas.';
$string['gradesmoduledeletionprefix'] = '[Remoção em progresso]';
$string['gradesonly'] = 'Mostrar somente notas';
$string['gradessettings'] = 'Configurações de notas';
$string['gradetype'] = 'Tipo de notas';
$string['gradetype_help'] = '<p>Especifica o tipo de nota usado: nenhuma (sem notas), numérico (permite configurações de máximo e mínimo), escala (permite configurações de escala) ou texto (somente feedback). Sómente as notas numéricas e as de escala podem ser agregadas. O tipo de nota para um item de nota baseado em atividades é configurado na página de atualizações das atividades.</p>';
$string['gradevaluetoobig'] = 'Um dos valores de nota é maior que a máxima nota permitida, que é {$a}';
$string['gradeview'] = 'Visualizar nota';
$string['gradewasmodifiedduringediting'] = 'A nota que entrou de {$a->itemname} para {$a->username} foi ignorada porque foi recentemente atualizada por outra pessoa.';
$string['gradeweighthelp'] = 'Ajuda sobre peso de ponderação das notas';
$string['gradingmodulename'] = 'Avaliando ({$a})';
$string['groupavg'] = 'Média do grupo';
$string['hidden'] = 'Oculto';
$string['hidden_help'] = 'Se marcado, as notas permanecerão ocultas para os cursistas. Se desejado, pode-se fixar uma data a partir da qual as notas ficarão visíveis, por exemplo, quando as avaliações forem concluídas.';
$string['hiddenasdate'] = 'Mostrar data de apresentação para notas ocultas';
$string['hiddenasdate_help'] = 'Se usuários não podem ver notas ocultas, mostrar data do envio em vez de \'-\'.';
$string['hiddenuntil'] = 'Oculto até';
$string['hiddenuntildate'] = 'Oculto até: {$a}';
$string['hideadvanced'] = 'Ocultar características avançadas';
$string['hideaverages'] = 'Ocultar médias';
$string['hidecalculations'] = 'Ocultar cálculos';
$string['hidecategory'] = 'Oculto';
$string['hideeyecons'] = 'Ocultar ícones mostrar/ocultar';
$string['hidefeedback'] = 'Ocultar feedback';
$string['hideforcedsettings'] = 'Ocultar configurações forçadas';
$string['hideforcedsettings_help'] = 'Não mostrar as definições forçadas na interface de usuário do caderno de notas.';
$string['hidegroups'] = 'Ocultar grupos';
$string['hidelocks'] = 'Ocultar travas';
$string['hidenooutcomes'] = 'Mostrar resultados da aprendizagem';
$string['hidequickfeedback'] = 'Ocultar o retorno rápido';
$string['hideranges'] = 'Ocultar intervalos';
$string['hidetotalifhiddenitems'] = 'Esconder totais caso contenham itens escondidos';
$string['hidetotalifhiddenitems_help'] = 'Esta opção define se os totais que incluem itens com notas ocultas serão mostrados aos cursistas ou se serão substituidospor um hífen (-). Se exibido, o total pode ser calculado excluindo ou incluindo os itens ocultos.

Se os itens ocultos forem excluídos, o total será diferente do total visto pelo professor no relatório de notas, já que este sempre vê os totais calculados sobre todos os itens, visíveis ou ocultos. Se os itens ocultos forem incluídos, os cursistas poderão calcular os itens ocultos.';
$string['hidetotalshowexhiddenitems'] = 'Mostar totais excluindo itens escondidos';
$string['hidetotalshowinchiddenitems'] = 'Mostar totais incluindo itens escondidos';
$string['hideverbose'] = 'Ocultar {$a->category} {$a->itemmodule}  {$a->itemname}';
$string['highgradeascending'] = 'Ordem crescente por melhor nota';
$string['highgradedescending'] = 'Ordem decrescente por melhor nota';
$string['highgradeletter'] = 'Alta';
$string['identifier'] = 'Identificar usuário por';
$string['idnumbers'] = 'Números de ID';
$string['ignore'] = 'Ignorar';
$string['import'] = 'Importar';
$string['importas'] = 'Importar como';
$string['importcsv'] = 'Importar CSV';
$string['importcsv_help'] = 'As notas podem ser importadas por um arquivo CSV com o seguinte formato:

* Cada linha do arquivo contém um registro
* Cada registro é uma sequência de dados separados pelo  separador selecionado
* O primeiro registro contém uma lista de nomes dos campos que definem o formato do resto do arquivo
* O nome do campo que contém dados que identificam um usuário é obrigatório - ou nome de usuário ou número de identificação ou o endereço de e-mail

Um arquivo de formato correto pode ser obtido inicialmente na exportação de algumas notas. Esse arquivo pode ser editado e salvo como um arquivo CSV.';
$string['importcsv_link'] = 'grade/import/csv/index';
$string['importcustom'] = 'Importar como resultados personalizados (somente nesse curso)';
$string['importdata'] = 'Dados';
$string['importdata_help'] = 'As notas podem ser coladas diretamente de uma planilha OpenDocument ou Excel com o formato a seguir:

* Pelo menos uma coluna deve conter dados de identificação do usuário - nome de usuário, endereço de e-mail ou número de ID.
* As outras colunas devem ter cabeçalhos para atividades existentes ou itens de notas.

Uma planilha formatada corretamente pode ser obtida exportando primeiro algumas notas. A planilha pode então ser editada para adicionar mais notas e salva.

Selecione e copie as colunas que deseja importar da planilha e cole-as neste campo.';
$string['importerror'] = 'Um erro ocorreu, o script não foi chamado com os parâmetros corretos.';
$string['importfailed'] = 'Falha na importação. Nenhum dado foi importado.';
$string['importfeedback'] = 'Importar feedback';
$string['importfile'] = 'Importar arquivo';
$string['importfilemissing'] = 'Nenhum arquivo foi recebido, volte ao formulário e envie um arquivo válido.';
$string['importfrom'] = 'Importar de';
$string['importoutcomenofile'] = 'O arquivo enviado está vazio ou corrompido. Por favor verifique se é um arquivo válido. O problema foi detectado na linha {$a}; isso ocorreu porque as linhas de dados (não todas as colunas da primeira linha), a linha principal, ou o arquivo importado tem o cabeçalho incompleto. Procure nos arquivos exportados por um exemplo de arquivo válido.';
$string['importoutcomes'] = 'Importar resultados da aprendizagem';
$string['importoutcomes_help'] = 'Os resultados podem ser importados de um arquivo CSV com o mesmo formato que o arquivo CSV em que são exportados resultados.';
$string['importoutcomes_link'] = 'grade/outcome';
$string['importoutcomesuccess'] = 'Meta "{$a->name}" importada com o ID #{$a->id}';
$string['importplugins'] = 'Importar plugins';
$string['importpreview'] = 'Importar amostra';
$string['importsettings'] = 'Importar configurações';
$string['importskippednomanagescale'] = 'Você não tem permissão para criar uma nova escala, então a meta "{$a}" não foi passada, já que necessitava dessa criação.';
$string['importskippedoutcome'] = 'Um resultado de nome "{$a}" já existe nesse contexto, então saltamos o que foi importado.';
$string['importstandard'] = 'Importar como resultados padrão';
$string['importsuccess'] = 'Notas importadas com sucesso';
$string['importxml'] = 'Importar XML';
$string['includescalesinaggregation'] = 'Incluir escalas na agregação';
$string['includescalesinaggregation_help'] = 'Você pode mudar se as escalas devem ser incluídas como números em todas as notas agregadas de todos os livros de notas de todos os cursos.
CUIDADO: alterar essa opção fará com que todas as notas agregadas sejam recalculadas.';
$string['incorrectcourseid'] = 'O ID do curso não era correto';
$string['incorrectcustomscale'] = '(Escala personalizada incorreta, por favor altere.)';
$string['incorrectminmax'] = 'O mínimo precisa ser menor que o máximo';
$string['inherit'] = 'Herdar';
$string['intersectioninfo'] = 'Informações sobre estudante/nota';
$string['invalidgradeexporteddate'] = 'A data de exportação é inválida porque é superior a um ano no passado, ou no futuro, ou porque o formato é inválido.';
$string['item'] = 'Item';
$string['iteminfo'] = 'Informação do item';
$string['iteminfo_help'] = '<p>Um espaço para adicionar informações sobre o item. Esse texto não aparece em nenhum outro lugar.</p>';
$string['itemname'] = 'Nome do Item';
$string['itemnamehelp'] = 'O nome do item, utilizado no módulo.';
$string['items'] = 'Itens';
$string['itemsedit'] = 'Editar item de nota';
$string['keephigh'] = 'Manter as maiores';
$string['keephigh_help'] = 'Se marcado, a opção vai manter as X maiores notas, sendo X o valor escolhido na opção';
$string['keephighestvalues'] = 'Mantenha os {$a} maiores valores';
$string['keymanager'] = 'Gerenciador de chaves';
$string['lessthanmin'] = 'A nota digitada para {$a->itemname} de {$a->username} é menor que o mínimo permitido';
$string['letter'] = 'Letra';
$string['lettergrade'] = 'Notas por letras';
$string['lettergradenonnumber'] = 'Avaliações baixas e/ou altas não numéricas';
$string['letterpercentage'] = 'Letra (porcentagem)';
$string['letterreal'] = 'Letra (real)';
$string['letters'] = 'Letras';
$string['linkedactivity'] = 'Atividade ligada';
$string['linkedactivity_help'] = '<p>Especifica uma atividade opcional ao qual esse item de nota está ligado. Isso é usado para medir a performance do estudante em critérios não avaliados pelas notas nas atividades.</p>';
$string['linktoactivity'] = 'Link para {$a->name} atividade {$a->title}';
$string['lock'] = 'Travar';
$string['locked'] = 'Travado';
$string['locked_help'] = 'Se marcado, as notas não podem mais ser atualizadas automaticamente pela atividade relacionada.';
$string['locktime'] = 'Travar depois de';
$string['locktimedate'] = 'Travado depois de: {$a}';
$string['lockverbose'] = 'Travar {$a->category}{$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Pior';
$string['lowgradeletter'] = 'Baixa';
$string['manageoutcomes'] = 'Gerenciar resultados';
$string['manualitem'] = 'Item manual';
$string['mapfrom'] = 'Mapear de';
$string['mapfrom_help'] = 'Selecione a coluna na planilha que contém os dados para a identificar o usuário, como identificação de usuário (username), ID do usuário ou endereço de e-mail.';
$string['mappings'] = 'Mapeamento de itens de nota';
$string['mappings_help'] = 'Para cada coluna de notas na planilha, selecione o item de nota correspondente a nota que será importada.';
$string['mapto'] = 'Mapear para';
$string['mapto_help'] = 'Selecione os mesmos dados de identificação como selecionados para \'Map from\'.';
$string['max'] = 'Melhor';
$string['maxgrade'] = 'Nota máxima';
$string['meanall'] = 'Todas as notas';
$string['meangraded'] = 'Notas não vazias';
$string['meanselection'] = 'Notas selecionadas para colunas de médias';
$string['meanselection_help'] = 'Notas em branco devem ser incluídas na hora de calcular médias de cada coluna.';
$string['median'] = 'Mediana';
$string['min'] = 'Pior';
$string['minimum_show'] = 'Mostrar nota mínima';
$string['minimum_show_help'] = 'Nota mínima é usada no cálculo de notas e pesos. Se não for mostrada, a nota mínima será igual a zero e não poderá ser editada.';
$string['minmaxtouse'] = 'Notas mínimas e máximas utilizadas no cálculo';
$string['minmaxtouse_desc'] = 'Essa configuração determina se devem ser usadas as notas mínimas e máximas de quando a nota foi dada, ou as notas mínimas e máximas especificadas nas configurações para o item de nota, ao calcular a nota exibida no livro de notas. Recomenda-se que esta definição seja modificada em um momento fora de pico, pois todas as notas serão recalculadas, o que pode resultar em uma alta carga no servidor.';
$string['minmaxtouse_help'] = 'Essa configuração determina se devem ser usadas as notas mínimas e máximas de quando a nota foi dada, ou as notas mínimas e máximas especificadas nas configurações para o item de nota, ao calcular a nota exibida no livro de notas.';
$string['minmaxupgradedgrades'] = 'Nota: Algumas notas foram alteradas, a fim de resolver uma incoerência no livro de notas causada por uma alteração nas notas mínimas e máximas utilizadas no cálculo da nota exibida. Recomenda-se que as alterações sejam revistas e aceitas.';
$string['minmaxupgradefixbutton'] = 'Resolver inconsistências';
$string['minmaxupgradewarning'] = 'Nota: uma inconsistência foi detectada com algumas notas, devido a uma alteração nas notas mínimas e máximas utilizadas no cálculo da nota apresentada no livro de notas. Recomenda-se que a incoerência seja resolvida clicando no botão abaixo, embora isso resultará na alteração de algumas notas.';
$string['missingitemtypeoreid'] = 'Chave do Array (itemtype ou eid) faltando o segundo parâmetro  de grade_edit_tree_column_select::get_item_cell($item, $params)';
$string['missingscale'] = 'Uma escala deve ser escolhida';
$string['mode'] = 'Tendência';
$string['modgrade'] = 'Nota';
$string['modgrade_help'] = 'Selecione o tipo de avaliação para esta atividade (escala ou pontos). Se escala for escolhido, você pode escolher a escala em um menu suspenso. Se usar avaliação por pontos, você pode inserir a nota máxima disponível para esta atividade.';
$string['modgradecantchangegradetype'] = 'Você não pode mudar o tipo, pois já existem notas neste item.';
$string['modgradecantchangegradetypemsg'] = 'Algumas notas já foram atribuídas, de modo que o tipo de nota não pode ser alterado. Se você quiser alterar a nota máxima, você deve primeiro escolher se quer ou não redimensionar os tipos existentes.';
$string['modgradecantchangegradetyporscalemsg'] = 'Algumas notas já foram atribuídas, de modo que a nota e o tipo de escala não podem ser alterados.';
$string['modgradecantchangeratingmaxgrade'] = 'Você não pode alterar a nota máxima quando as notas já existem para uma atividade com avaliações.';
$string['modgradecantchangescale'] = 'Você não pode mudar a escala, pois já existem notas para este item';
$string['modgradecategorycantchangegradetypemsg'] = 'Esta categoria possui itens de avaliação que foram ajustados. Por conseguinte, como algumas notas já foram atribuídas, o tipo de nota não pode ser alterado. Se pretender alterar a nota máxima, deve primeiro escolher se quer ou não reajustar as notas já existentes.';
$string['modgradecategorycantchangegradetyporscalemsg'] = 'Esta categoria possui itens de avaliação que foram ajustados. Por conseguinte, como algumas notas já foram atribuídas, o tipo de nota e a escala não podem ser alterados.';
$string['modgradecategoryrescalegrades'] = 'Recalcular ajustamento de notas';
$string['modgradecategoryrescalegrades_help'] = 'Ao alterar as notas máximas de um item da pauta, deve indicar se pretende que esta ação altere, ou não, a percentagem das notas já existentes.

Se definir esta configuração como \'Sim\', quaisquer notas reajustadas já existentes serão novamente reajustadas para que a percentagem da nota permaneça igual.

Por exemplo, se esta configuração for definida como \'Sim\', ao mudar a nota máxima de um item de 10 para 20, isto levaria a que uma nota de 6/10 (60%) fosse ajustada para 12/20 (60%). Se esta configuração for definida como \'Não\', a nota permanecerá inalterada, o que requer um ajuste manual dos itens de avaliação para garantir pontuações corretas.';
$string['modgradedonotmodify'] = 'Não modificar as notas existentes';
$string['modgradeerrorbadpoint'] = 'Valor da nota inválido. Este valor deve ser um número inteiro entre 1 e {$a}';
$string['modgradeerrorbadscale'] = 'Escala selecionada inválida. Por favor, certifique-se de selecionar uma escala das opções abaixo.';
$string['modgrademaxgrade'] = 'Nota máxima';
$string['modgraderescalegrades'] = 'Reajustar notas existentes';
$string['modgraderescalegrades_help'] = 'Ao alterar as notas máximas de um item da pauta, deve indicar se pretende que esta ação altere, ou não, a percentagem das notas já existentes.

Se definir esta configuração como \'Sim\', quaisquer notas existentes serão reajustadas para que a percentagem da nota permaneça igual.

Por exemplo, se esta configuração for definida como \'Sim\', ao mudar a nota máxima de um item de 10 para 20, isto levaria a que uma nota de 6/10 (60%) fosse ajustada para 12/20 (60%). Se esta configuração for definida como \'Não\', a nota passará de 6/10 (60%) para 6/20 (30%), o que requer um ajuste manual dos itens de avaliação para garantir pontuações corretas.';
$string['modgradetype'] = 'Tipo';
$string['modgradetypenone'] = 'Nenhum';
$string['modgradetypepoint'] = 'Pontos';
$string['modgradetypescale'] = 'Escala';
$string['morethanmax'] = 'A nota digitada para {$a->itemname} de {$a->username} é maior que o máximo permitido.';
$string['moveselectedto'] = 'Mover itens selecionados para';
$string['movingelement'] = 'Movendo {$a}';
$string['multfactor'] = 'Multiplicador';
$string['multfactor_help'] = '<p>Fator pelo qual todas as notas desse item serão multiplicadas.</p>';
$string['multfactorvalue'] = 'Valor Multiplicador {$a}';
$string['mustchooserescaleyesorno'] = 'Deve selecionar se pretende, ou não, reajustar as notas existentes.';
$string['mygrades'] = 'Link notas do menu do usuário';
$string['mygrades_desc'] = 'Esta configuração permite a opção de acionar um livro de notas externo a partir do menu do usuário.';
$string['mypreferences'] = 'Minhas preferências';
$string['myreportpreferences'] = 'Minhas preferências para o quadro de notas';
$string['myself'] = 'Eu mesmo';
$string['navmethod'] = 'Método de navegação';
$string['neverdeletehistory'] = 'Nunca remova o histórico de notas';
$string['newcategory'] = 'Nova categoria';
$string['newitem'] = 'Novo item de nota';
$string['newoutcomeitem'] = 'Novo item de resultados';
$string['no'] = 'Não';
$string['nocategories'] = 'Não foi possível encontrar ou adicionar categorias de nota neste curso';
$string['nocategoryname'] = 'Nenhum nome de categoria foi dado.';
$string['nocategoryview'] = 'Nenhuma categoria a ser mostrada por';
$string['nocourses'] = 'Ainda não existem cursos';
$string['noexistingoutcomes'] = 'Não há resultados existentes.';
$string['noexistingscales'] = 'Não há escalas existentes.';
$string['noforce'] = 'Não forçar';
$string['nogradeletters'] = 'Não foi configurada nenhuma escala';
$string['nogradesreturned'] = 'Nenhuma avaliação calculada';
$string['noidnumber'] = 'Nenhum número de ID';
$string['nolettergrade'] = 'Não foram definidas as letras em';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Recebido valor não numérico para';
$string['nonunhideableverbose'] = 'Para mostrar esta nota, você precisa mostrar {$a->itemname}.';
$string['nonunlockableverbose'] = 'Para desbloquear esta nota, você precisa desbloquear {$a->itemname}.';
$string['nonweightedpct'] = 'não ponderada %';
$string['nooutcome'] = 'Nenhum resultado de aprendizagem';
$string['nooutcomes'] = 'Os itens de resultados devem apontar para o resultado de um curso, mas não há resultados para esse curso. Deseja acrescentar um?';
$string['nopermissiontoresetweights'] = 'Sem permissão para redefinir os pesos';
$string['nopublish'] = 'Não publicar';
$string['noreports'] = 'Você não está inscrito, nem lecionando nos cursos disponíveis neste site.';
$string['noresultsfor'] = 'Sem resultados para "{$a}"';
$string['norolesdefined'] = 'Não há papéis definidos em Administração > Notas > Configuração Geral > Papéis de Avaliação';
$string['noscales'] = 'Os resultados devem apontar para uma escala de curso ou uma escala global, mas não há nenhuma. Deseja acrescentar uma?';
$string['noselectedcategories'] = 'nenhuma categoria foi selecionada.';
$string['noselecteditems'] = 'nenhum item foi selecionado.';
$string['notenrolled'] = 'No momento você não está inscrito em nenhum curso.';
$string['notteachererror'] = 'Você deve ser um professor para fazer isto.';
$string['nousersloaded'] = 'Não foram carregados usuários';
$string['nouserstograde'] = 'Sem estudantes para avaliar';
$string['numberofgrades'] = 'Número de notas';
$string['onascaleof'] = 'em uma escala de {$a->grademin} até {$a->grademax}';
$string['operations'] = 'Operações';
$string['options'] = 'Opções';
$string['others'] = 'Outros';
$string['otheruser'] = 'Usuário';
$string['outcome'] = 'Meta';
$string['outcome_help'] = 'Especificar o resultado que o item de nota vai representar no livro de notas. Somente resultaods associados a esse curso e ao site podem ser usados.';
$string['outcomeassigntocourse'] = 'Atribuir um outro resultado para este curso';
$string['outcomecategory'] = 'Criar resultados na categoria';
$string['outcomecategorynew'] = 'Nova categoria';
$string['outcomeconfirmdelete'] = 'Voce tem certeza que deseja excluir a meta "{$a}"?';
$string['outcomecreate'] = 'Adicionar uma novo resultado';
$string['outcomedelete'] = 'Excluir resultado';
$string['outcomefullname'] = 'Nome completo';
$string['outcomeitem'] = 'Item de resultado da aprendizagem';
$string['outcomeitemsedit'] = 'Editar item de resultado da aprendizagem';
$string['outcomereport'] = 'Quadro de resultado da aprendizagem';
$string['outcomes'] = 'Resultado da aprendizagem';
$string['outcomescourse'] = 'Resultado da aprendizagem utilizados no curso';
$string['outcomescoursecustom'] = 'Utilizado o resultado escolhida (sem remoção)';
$string['outcomescoursenotused'] = 'Padrão não utilizado';
$string['outcomescourseused'] = 'Padrão utilizado (sem remoção)';
$string['outcomescustom'] = 'Resultados escolhidos';
$string['outcomesdisabled'] = 'Os resultados não estão habilitados';
$string['outcomeshortname'] = 'Nome breve';
$string['outcomesstandard'] = 'Resultados padrão';
$string['outcomesstandardavailable'] = 'Padrão de resultados disponível';
$string['outcomestandard'] = 'Resultado padrão';
$string['outcomestandard_help'] = '<p>Um Resultado padrão fica disponível a nível do site, para todos os cursos.</p>';
$string['overallaverage'] = 'Média geral';
$string['overridden'] = 'Sobreposto';
$string['overridden_help'] = '<p>Quando ativado, a marca de sobreposição previne tentativas futuras de ajustar automaticamente o valor da nota. Isso é geralmente definido no relatório de notas, mas pode ser desativado ou ativado manualmente usando esse formulário.</p>';
$string['overriddennotice'] = 'Sua nota final para esta atividade foi ajustada manualmente.';
$string['overridecat'] = 'Permitir que a notas de categoria sejam substituídas manualmente';
$string['overridecat_help'] = 'Desabilitar essa configuração faz com que seja impossível para os usuários substituir notas das categorias.';
$string['overridesitedefaultgradedisplaytype'] = 'Sobrepor os padrões do site';
$string['overridesitedefaultgradedisplaytype_help'] = '<p>Marque essa opção para permitir a sobreposição de padrões na exibição de notas do relatório. Isso ativa os formulários, permitindo que você defina as letras de nota e os limites associados a elas.</p>';
$string['overrideweightofa'] = 'Substituir peso de {$a}';
$string['parentcategory'] = 'Categoria pai';
$string['pass'] = 'Avançar';
$string['pctoftotalgrade'] = '% da nota total';
$string['percent'] = 'Percentual';
$string['percentage'] = 'Porcentagem';
$string['percentageletter'] = 'Porcentagem (letra)';
$string['percentagereal'] = 'Porcentagem (real)';
$string['percentascending'] = 'Ordem crescente por porcentagem';
$string['percentdescending'] = 'Ordem decrescente por porcentagem';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Compensação';
$string['plusfactor_help'] = '<p>Fator que será somado a todas as notas desse item, depois que o multiplicador é aplicado.</p>';
$string['plusfactorvalue'] = 'Valor de compensação para {$a}';
$string['points'] = 'pontos';
$string['pointsascending'] = 'Ordem crescente por pontuação';
$string['pointsdescending'] = 'Ordem decrescente por pontuação';
$string['positionfirst'] = 'Primeiro';
$string['positionlast'] = 'Último';
$string['preferences'] = 'Preferências';
$string['prefgeneral'] = 'Geral';
$string['prefletters'] = 'Letras de notas e limites';
$string['prefrows'] = 'Colunas especiais';
$string['prefshow'] = 'Mostrar/ocultar seletor';
$string['previewrows'] = 'Linhas de pré-visualização';
$string['privacy:metadata:categorieshistory'] = 'Um registro de versões anteriores de categorias de notas';
$string['privacy:metadata:filepurpose'] = 'Arquivos de feedback armazenados no lançamento de notas para um usuário.';
$string['privacy:metadata:grade_import_newitem'] = 'Tabela temporária para armazenar novos nomes grade_item da Importação de notas';
$string['privacy:metadata:grade_import_newitem:importcode'] = 'Um código de lote exclusivo para identificar um lote de importações';
$string['privacy:metadata:grade_import_newitem:importer'] = 'Usuário importando os dados';
$string['privacy:metadata:grade_import_newitem:itemname'] = 'Novo nome do item de nota';
$string['privacy:metadata:grade_import_values'] = 'Tabela temporária para importar notas';
$string['privacy:metadata:grade_import_values:feedback'] = 'Feedback de notas';
$string['privacy:metadata:grade_import_values:finalgrade'] = 'Valor de nota bruto';
$string['privacy:metadata:grade_import_values:importcode'] = 'Um código de lote exclusivo para identificar um lote de importações';
$string['privacy:metadata:grade_import_values:importer'] = 'Usuário importando os dados';
$string['privacy:metadata:grade_import_values:importonlyfeedback'] = 'Sinalizar se apenas o feedback foi importado';
$string['privacy:metadata:grade_import_values:userid'] = 'Usuário cuja nota foi importada';
$string['privacy:metadata:grades'] = 'Um registro de notas';
$string['privacy:metadata:grades:aggregationstatus'] = 'O status de agregação';
$string['privacy:metadata:grades:aggregationweight'] = 'O peso em agregação';
$string['privacy:metadata:grades:feedback'] = 'Feedback';
$string['privacy:metadata:grades:finalgrade'] = 'A nota';
$string['privacy:metadata:grades:information'] = 'Informações adicionais sobre a nota';
$string['privacy:metadata:grades:timemodified'] = 'O horário em que a nota foi modificada pela última vez';
$string['privacy:metadata:grades:userid'] = 'O ID do usuário cuja nota é';
$string['privacy:metadata:grades:usermodified'] = 'O ID do usuário que modificou o registro pela última vez';
$string['privacy:metadata:gradeshistory'] = 'Um registro das notas anteriores';
$string['privacy:metadata:history:loggeduser'] = 'O ID do usuário que fez login quando ocorreu o controle de versão';
$string['privacy:metadata:history:timemodified'] = 'A data em que o versionamento da nota ocorreu';
$string['privacy:metadata:itemshistory'] = 'Um registro de versões anteriores de itens de notas';
$string['privacy:metadata:outcomes'] = 'Um registro de resultados';
$string['privacy:metadata:outcomes:timemodified'] = 'A hora em que o registro foi modificado';
$string['privacy:metadata:outcomes:usermodified'] = 'O usuário que modificou o registro pela última vez';
$string['privacy:metadata:outcomeshistory'] = 'Um registro de versões anteriores de resultados';
$string['privacy:metadata:scale'] = 'Um registro de escalas';
$string['privacy:metadata:scale:timemodified'] = 'A hora em que o registro foi modificado pela última vez';
$string['privacy:metadata:scale:userid'] = 'O usuário que modificou o registro pela última vez';
$string['privacy:metadata:scalehistory'] = 'Um registro de versões anteriores de escalas';
$string['privacy:path:relatedtome'] = 'Relacionado comigo';
$string['privacy:request:historyactiondelete'] = 'Excluir';
$string['privacy:request:historyactioninsert'] = 'Inserir';
$string['privacy:request:historyactionupdate'] = 'Atualizar';
$string['privacy:request:unknowndeletedgradeitem'] = 'Desconhecido (o item de nota foi excluído)';
$string['profilereport'] = 'Relatório de perfil do usuário';
$string['profilereport_help'] = 'Relatório de notas no perfil do usuários.';
$string['publishing'] = 'Publicando';
$string['publishingoptions'] = 'Opções de publicação de nota';
$string['quickfeedback'] = 'Feedback rápido';
$string['quickgrading'] = 'Avaliação rápida';
$string['quickgrading_help'] = '<p>A opção Notas Rápidas abre um campo de texto para cada célula de nota do relatório, permitindo a edição simultânea. Aí é só clicar no botão Atualizar e fazer todas as mudanças de uma vez.</p>';
$string['range'] = 'Intervalo';
$string['rangedecimals'] = 'Intervalo de casas decimais';
$string['rangedecimals_help'] = 'O número de casas decimais exibidas no intervalo.';
$string['rangesdecimalpoints'] = 'Casas decimais mostradas nos intervalos';
$string['rangesdecimalpoints_help'] = 'Esta configuração especifica o número de casas decimais a serem mostradas para cada intervalo ou se a configuração geral do número de casas decimais da categoria ou do item de nota é usado (herdar).';
$string['rangesdisplaytype'] = 'Modo de exibição dos intervalos';
$string['rangesdisplaytype_help'] = '<p>Determina como mostrar os intervalos. Caso a herança esteja ativada, será usado o mesmo modo de exibição para cada coluna.</p>';
$string['rank'] = 'Classificação';
$string['rawpct'] = 'Bruto %';
$string['real'] = 'Real';
$string['realletter'] = 'Real (letra)';
$string['realpercentage'] = 'Real (porcentagem)';
$string['recalculatinggrades'] = 'A recalcular as notas';
$string['recovergradesdefault'] = 'Recuperar notas antigas';
$string['recovergradesdefault_help'] = 'Por padrão recuperar notas antigas ao reinscrever um estudante em um curso.';
$string['refreshpreview'] = 'Atualizar pré-visualização';
$string['regradeanyway'] = 'Recálculo obrigatório';
$string['removeallcoursegrades'] = 'Remova todas as notas';
$string['removeallcoursegrades_help'] = 'Se marcada, todos os itens de nota  e notas que foram adicionados manualmente ao livro de notas serão excluídos, juntamente com as notas e os dados que foram substituídos, excluídos, escondidos e com notas bloqueadas. Apenas os itens de nota e notas associadas às atividades permanecerão.';
$string['removeallcourseitems'] = 'Remova todos os itens e categorias';
$string['removeallcourseitems_help'] = 'Se marcada, todas as categorias e itens de nota que foram adicionados manualmente ao livro de notas serão excluídos, juntamente com as notas e os dados que foram substituídos, excluídos, escondidos e com notas trancadas. Apenas itens de nota associados às atividades permanecerão.';
$string['report'] = 'Relatório';
$string['reportdefault'] = 'Relatório padrão ({$a})';
$string['reportplugins'] = 'Plugins de relatório';
$string['reportsettings'] = 'Configurações dos relatórios de notas';
$string['reprintheaders'] = 'Mostrar novamente os cabeçalhos';
$string['resetweights'] = 'Redefinir pesos de {$a->itemname}';
$string['resetweightsshort'] = 'Redefinir pesos';
$string['respectingcurrentdata'] = 'deixando a configuração atual inalterada';
$string['rowpreviewnum'] = 'Linhas de pré-visualização';
$string['rowpreviewnum_help'] = 'Dados para importação podem ser visualizados antes da confirmação da importação. Essa configuração determina quantas linhas serão exibidas na visualização.';
$string['savechanges'] = 'Salvar mudanças';
$string['savepreferences'] = 'Salvar preferências';
$string['scaleconfirmdelete'] = 'Tem certeza que deseja excluir a escala "{$a}"?';
$string['scaledpct'] = 'ponderado %';
$string['searchcollapsedcolumns'] = 'Pesquisar colunas recolhidas';
$string['searchgroups'] = 'Buscar grupos';
$string['searchusers'] = 'Buscar usuários';
$string['seeallcoursegrades'] = 'Ver todas as notas de curso';
$string['select'] = 'Selecione {$a}';
$string['selectalloroneuser'] = 'Ver todos ou apenas um usuário';
$string['selectauser'] = 'Selecionar um usuário';
$string['selectdestination'] = 'Escolher destino do(a) {$a}';
$string['selectgrouplink'] = 'Selecionar um grupo';
$string['selectuserlink'] = 'Selecionar um usuário';
$string['separator'] = 'Separador';
$string['separator_help'] = 'Selecione o separador usado no arquivo CSV. (Normalmente, este é uma vírgula.)';
$string['sepcolon'] = 'Dois pontos';
$string['sepcomma'] = 'Vírgula';
$string['sepsemicolon'] = 'Ponto e vírgula';
$string['septab'] = 'Tabulação';
$string['setcategories'] = 'Definir categorias';
$string['setcategorieserror'] = 'É necessário definir categorias para o seu curso antes de atribuir pesos às mesmas.';
$string['setgradeletters'] = 'Definir letras de avaliação';
$string['setpreferences'] = 'Definir preferências';
$string['setting'] = 'Configuração';
$string['settings'] = 'Configurações';
$string['setup'] = 'Configuração';
$string['setweights'] = 'Definir pesos';
$string['showactivityicons'] = 'Mostrar ícones de atividades';
$string['showactivityicons_help'] = '<p>Mostrar ícones das atividades próximos aos respectivos nomes.</p>';
$string['showallgrades'] = 'Mostrar todas as notas';
$string['showallhidden'] = 'Mostrar ocultos';
$string['showallstudents'] = 'Mostrar todos os cursistas';
$string['showanalysisicon'] = 'Mostra ícone de análise de nota';
$string['showanalysisicon_desc'] = 'Mostra ou não o ícone de análise de nota por padrão. Se o módulo de atividade suportar, o ícone de análise de nota levará a uma página com uma explicação mais detalhada da nota e como ela foi obtida.';
$string['showanalysisicon_help'] = 'Caso este módulo de atividade suporte, o link de análise de nota levará para uma página com uma explicação mais detalhada da nota e como ela foi obtida.';
$string['showaverage'] = 'Exibir média';
$string['showaverage_help'] = 'Mostrar a coluna de média. Observe que os participantes podem estimar as notas dos outros se a média for calculada a partir de um pequeno número de notas. Por motivos de desempenho a média é aproximada se ela depende de algum item oculto.';
$string['showaverages'] = 'Mostrar médias das colunas';
$string['showaverages_help'] = 'Mostrar a média de cada coluna.';
$string['showcalculations'] = 'Mostrar cálculos';
$string['showcalculations_help'] = 'Se habilitado, quando editando, um ícone de uma calculadora é mostrado para cada atividade e categoria com um indicador visual que uma atividade é calculada.';
$string['showcontributiontocoursetotal'] = 'Mostrar contribuição para o total do curso';
$string['showcontributiontocoursetotal_help'] = 'Se deve mostrar uma coluna de porcentagens indicando para o usuário quanto cada atividade contribui para a porcentagem total de nota do curso (depois do peso ser aplicado).';
$string['showeyecons'] = 'Mostrar ícones mostrar/ocultar';
$string['showeyecons_help'] = 'Mostrar um ícone de exibir/ocultar perto de cada nota (controlando a visibilidade do usuário).';
$string['showfeedback'] = 'Mostrar feedback';
$string['showfeedback_help'] = 'Se deve mostrar uma coluna de feedback.';
$string['showgrade'] = 'Mostrar notas';
$string['showgrade_help'] = 'Se deve mostrar uma coluna de notas.';
$string['showgroups'] = 'Mostrar grupos';
$string['showhiddenitems'] = 'Mostrar itens ocultos';
$string['showhiddenitems_help'] = 'Selecionar se as notas ocultas serão totalmente invisíveis para os cursistas ou se eles poderão ver os nomes dos itens.

* Mostrar ocultas - Os nomes dos itens são visíveis mas as notas permanecem ocultas.

* Ocultas até - Os itens permanecem totalmente ocultos até a data fixada.

* Não mostrar - Os itens permanecem totalmente ocultos, nomes e notas.';
$string['showhiddenuntilonly'] = 'Somente ocultos até';
$string['showingaggregatesonly'] = 'Mostrar apenas totais';
$string['showingfullmode'] = 'Mostrar visão completa (notas e totais)';
$string['showinggradesonly'] = 'Mostrar apenas notas';
$string['showlettergrade'] = 'Exibir letras das notas';
$string['showlettergrade_help'] = 'Mostrar a coluna de notas de letras?';
$string['showlocks'] = 'Mostrar travas';
$string['showlocks_help'] = 'Mostrar um ícone de Travar/Destravar perto de cada nota';
$string['shownohidden'] = 'Não mostrar';
$string['shownooutcomes'] = 'Oculte resultados da aprendizagem';
$string['shownumberofgrades'] = 'Mostrar número de notas nas médias';
$string['shownumberofgrades_help'] = 'Mostrar o número de notas utilizadas no cálculo da média em parênteses, por exemplo 45 (34).';
$string['showonlyactiveenrol'] = 'Mostrar apenas inscrições ativas';
$string['showonlyactiveenrol_help'] = 'Esta opção define se apenas inscrições ativas (não suspensas) serão mostradas nos relatórios do livro de notas. Se habilitado, usuários suspensosã no serão mostrados no livro de notas.';
$string['showpercentage'] = 'Mostrar porcentagem';
$string['showpercentage_help'] = 'Se deve mostrar a porcentagem para cada atividade.';
$string['showquickfeedback'] = 'Mostrar retorno rápido';
$string['showquickfeedback_help'] = 'Feedback Rápido abre um campo de texto para cada célula de nota do livro, permitindo que você edite o feedback de várias notas de uma vez. Então, você pode clicar no botão Atualizar e fazer todas as mudanças simultaneamente.';
$string['showrange'] = 'Exibir intervalos';
$string['showrange_help'] = 'Se deve mostrar uma coluna com o intervalo.';
$string['showranges'] = 'Mostrar intervalos';
$string['showranges_help'] = 'Mostrar o intervalo de notas para cada coluna em uma linha adicional.';
$string['showrank'] = 'Mostrar classificação';
$string['showrank_help'] = 'Mostrar a posição do usuário em relação ao resto da turma, para cada item de avaliação?';
$string['showuserimage'] = 'Mostrar imagens do perfil do usuário';
$string['showuserimage_help'] = 'Mostrar a imagem do perfil do usuário próximo ao seu nome no relatório de notas.';
$string['showverbose'] = 'Mostrar {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'Mostrar pesos';
$string['showweight_help'] = 'Se deve mostrar a coluna de pesos de notas.';
$string['simpleview'] = 'Visão única';
$string['sitewide'] = 'Em todo o site';
$string['sort'] = 'Ordenar';
$string['sortasc'] = 'Ordem crescente';
$string['sortbyfirstname'] = 'Ordenar pelo primeiro nome';
$string['sortbylastname'] = 'Ordenar por sobrenome';
$string['sortdesc'] = 'Ordem Decrescente';
$string['standarddeviation'] = 'Desvio padrão';
$string['stats'] = 'Estatísticas';
$string['statslink'] = 'estat.';
$string['student'] = 'Estudante';
$string['studentsperpage'] = 'Estudantes por página';
$string['studentsperpage_help'] = 'O número de estudantes a ser mostrado por página no relatório de notas.';
$string['studentsperpagereduced'] = 'Máximo de estudantes por página de {$a->originalstudentsperpage} para {$a->studentsperpage}. Considere aumentar a configuração do PHP max_input_vars alem de {$a->maxinputvars}.';
$string['subcategory'] = 'Categoria normal';
$string['submissions'] = 'Envios';
$string['submittedon'] = 'Enviado(s): {$a}';
$string['sumofgradesupgradedgrades'] = 'Nota: O método de agregação "Soma das notas" foi alterado para "Natural", como parte de uma atualização do site. Uma vez que "Soma das notas" era usado anteriormente neste curso, é recomendável que você reveja esta mudança no Livro de notas.';
$string['switchtofullview'] = 'Mudar para visão completa';
$string['switchtosimpleview'] = 'Mudar para visão simples';
$string['tabs'] = 'Abas';
$string['topcategory'] = 'Super categoria';
$string['total'] = 'Total';
$string['totalweight100'] = 'O peso total é igual a 100';
$string['totalweightnot100'] = 'O peso total não é igual a 100';
$string['turnfeedbackoff'] = 'Desativar feedback';
$string['turnfeedbackon'] = 'Ativar feedback';
$string['typenone'] = 'Nenhum';
$string['typescale'] = 'Escala';
$string['typescale_help'] = '<p>Depois de selecionar um tipo de escala, escalas de avaliação de itens serão vísiveis na página de atualização de atividades.</p>';
$string['typetext'] = 'Texto';
$string['typevalue'] = 'Valor';
$string['uncategorised'] = 'Não categorizado';
$string['unchangedgrade'] = 'Nota não alterada';
$string['unenrolledusersinimport'] = 'Essa importação incluiu as seguintes notas para usuários ainda não inscritos no curso: {$a}';
$string['unlimitedgrades'] = 'Notas ilimitadas';
$string['unlimitedgrades_help'] = 'Por padrão as notas são limitadas por valores máximos e mínimos da atividade. Habilitar esta opção remove este limite e permite que notas acima de 100% sejam incluídas diretamente no livro de notas.';
$string['unlock'] = 'Destravar';
$string['unlockverbose'] = 'Desbloquear {$a->category} : {$a->itemmodule} : {$a->itemname}';
$string['unused'] = 'Não usado';
$string['updatedgradesonly'] = 'Exportar novas ou apenas notas atualizadas';
$string['upgradedgradeshidemessage'] = 'Dispensar aviso';
$string['upgradedminmaxrevertmessage'] = 'Reverter as alterações';
$string['uploadgrades'] = 'Enviar notas';
$string['useadvanced'] = 'Usar instrumentos avançados';
$string['usedcourses'] = 'Cursos utilizados';
$string['usedgradeitem'] = 'Itens de nota utilizados';
$string['usenooutcome'] = 'Não usar resultados da aprendizagem';
$string['usenoscale'] = 'Não usar escalas';
$string['usepercent'] = 'Usar percentagem';
$string['user'] = 'Usuário';
$string['userenrolmentsuspended'] = 'Inscrição de usuário suspensa';
$string['userfields_show'] = 'Mostrar campos de usuários';
$string['userfields_show_help'] = 'Mostrar campos adicionais do usuário, como endereço de e-mail no relatório de notas. Os campos específicos apresentados são controlados pela configuração do site "showuseridentity"';
$string['usergrade'] = 'Usuário {$a->fullname} ({$a->useridnumber}) no item {$a->gradeidnumber}';
$string['userid'] = 'ID de usuário';
$string['useridnumberwarning'] = 'Usuários sem um número de identificação são excluídos da exportação, pois não podem ser importados';
$string['usermappingerror'] = 'Erro de mapeamento de usuário: não foi possível encontrar o usuário com {$a->field} de "{$a->value}".';
$string['usermappingerrorcurrentgroup'] = 'O usuário não é um membro do grupo atual.';
$string['usermappingerrormultipleusersfound'] = 'Erro de mapeamento do usuário: foram encontrados vários usuários com {$a->field} de "{$a->value}". Por favor, use um campo de mapeamento mais único.';
$string['usermappingerrorusernotfound'] = 'Erro de mapeamento de usuário. Não foi possível encontrar usuário.';
$string['usermatchedon'] = 'Este usuário corresponde à pesquisa por meio do seguinte campo';
$string['userpreferences'] = 'Preferências de usuário';
$string['useweighted'] = 'Usar ponderação';
$string['verbosescales'] = 'Escalas não numéricas';
$string['verbosescales_help'] = 'A escala verbose usa palavras em vez de números. Defina como \'Sim\' se ambas as escalas numéricas e verbose forem importadas. Defina como \'Não\' se somente as escalas numéricas forem importadas.';
$string['viewas'] = 'Visualizar relatório como';
$string['viewbygroup'] = 'Grupo';
$string['viewfeedback'] = 'Ver feedback';
$string['viewgrades'] = 'Ver notas';
$string['weight'] = 'Peso';
$string['weight_help'] = 'Valor usado para determinar o valor relativo dos vários itens de nota de uma categoria ou curso.';
$string['weightcourse'] = 'Usar médias ponderadas nesse curso';
$string['weightedascending'] = 'Ordem crescente por percentagens ponderadas';
$string['weighteddescending'] = 'Ordem decrescente por percentagens ponderadas';
$string['weightedpct'] = 'ponderadas %';
$string['weightedpctcontribution'] = 'ponderadas % contribuição';
$string['weightofa'] = 'Peso de {$a}';
$string['weightorextracredit'] = 'Peso ou crédito extra';
$string['weightoverride'] = 'ajuste de peso';
$string['weightoverride_help'] = 'Desmarque esta para redefinir um peso ao item de nota para que seu valor seja calculado automaticamente. Isso impedirá que o peso não seja ajustado automaticamente.';
$string['weights'] = 'Pesos';
$string['weightsadjusted'] = 'Seus pesos foram ajustadas para o total de 100.';
$string['weightsedit'] = 'Editar pesos e créditos extras';
$string['weightuc'] = 'Peso calculado';
$string['writinggradebookinfo'] = 'Escrevendo configurações do Livro de notas';
$string['xml'] = 'XML';
$string['yes'] = 'Sim';
$string['yourgrade'] = 'Sua nota';
