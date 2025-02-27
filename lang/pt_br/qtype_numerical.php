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
 * Strings for component 'qtype_numerical', language 'pt_br', version '4.2'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Erro aceitável';
$string['addmoreanswerblanks'] = 'Espaço para mais {no} respostas';
$string['addmoreunitblanks'] = 'Espaço para mais {no} unidades';
$string['answercolon'] = 'Resposta:';
$string['answererror'] = 'Erro';
$string['answermustbenumberorstar'] = 'A resposta precisa ser um número, como por exemplo -1.234 or 3e8, ou \'*\'.';
$string['answerno'] = 'Resposta {$a}';
$string['decfractionofquestiongrade'] = 'como fração decimal (0-1) da avaliação da questão';
$string['decfractionofresponsegrade'] = 'como fração decimal (0-1) da avaliação da resposta';
$string['decimalformat'] = 'decimais';
$string['editableunittext'] = 'elemento campo de uma linha de texto';
$string['errornomultiplier'] = 'Você tem que definir um multiplicador para esta unidade.';
$string['errorrepeatedunit'] = 'Duas unidades não podem ter o mesmo nome.';
$string['geometric'] = 'Geométrico';
$string['invalidnumber'] = 'Você deve digitar um número válido';
$string['invalidnumbernounit'] = 'você precisa digitar um número válido, não inclua a unidade em sua resposta.';
$string['invalidnumericanswer'] = 'Uma das respostas digitadas contem um número inválido.';
$string['invalidnumerictolerance'] = 'Uma das tolerâncias digitadas contem um número inválido.';
$string['leftexample'] = 'na esquerda, por exemplo $1.00 ou £1.00';
$string['manynumerical'] = 'As unidades são opcionais. Se uma unidade for inserida, ela será usada para converter a resposta na Unidade 1 antes da avaliação.';
$string['multiplier'] = 'Multiplicador';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Texto editável NÃO da Unidade No';
$string['nonvalidcharactersinnumber'] = 'Caracteres INVÁLIDOS em números';
$string['notenoughanswers'] = 'Você tem que definir pelo menos uma resposta.';
$string['nounitdisplay'] = 'Sem classificação da unidade';
$string['numericalmultiplier'] = 'Multiplicador';
$string['numericalmultiplier_help'] = 'O multiplicador é o fator pelo qual a resposta numérica correta será multiplicado.

A primeira unidade (Unidade 1) tem um padrão multiplicador de 1, assim, se a resposta numérica correta é 5500 e você definir W como unidade na Unidade 1, que tem como 1 como multiplicador padrão, a resposta correta é 5500 W.

Se você adicionar a unidade de kW com um multiplicador de 0,001, isto irá resultar em uma resposta correta 5,5 kW. Isto significa que tanto as respostas 5500W, como 5.5kW serão consideradas corretas.

Note-se que a margem de erro também é aceita, logo um erro permitido de 100W passa a ser um erro de 0.1kW.';
$string['oneunitshown'] = 'Unidade 1 é automaticamente exibida ao lado da caixa de resposta.';
$string['onlynumerical'] = 'Unidades não são usadas. Apenas valores numéricos são avaliados.';
$string['pleaseenterananswer'] = 'Por favor digite uma resposta.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Por favor digite uma resposta sem o separador de milhar ({$a}).';
$string['pluginname'] = 'Numérico';
$string['pluginname_help'] = 'Na perspectiva do estudante, uma questão numérica parece exatamente uma questão de resposta curta. A diferença é que as respostas numéricas têm permissão de ter uma margem de erro. Isso permite um intervalo fixo de respostas a ser avaliada como uma resposta. Por exemplo, se a resposta é 10, com uma margem de erro 2, então qualquer número entre 8 e 12 serão aceitos como corretos.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Adicionando uma questão numérica';
$string['pluginnameediting'] = 'Editando uma questão Numérica';
$string['pluginnamesummary'] = 'Permite uma resposta numérica, possivelmente com unidades, que é avaliada pela comparação com vários modelos de respostas, possivelmente com tolerâncias.';
$string['privacy:metadata'] = 'O plugin tipo de questão númerica permite que os autores de questões definam opções padrão como preferências de usuários.';
$string['privacy:preference:defaultmark'] = 'A marca padrão definida para uma determinada questão.';
$string['privacy:preference:multichoicedisplay'] = 'Se as unidades são exibidas como elemento de entrada de texto, seleção de múltipla escolha ou um menu suspenso.';
$string['privacy:preference:penalty'] = 'A penalidade para cada tentativa incorreta quando as questões são executadas usando o comportamento \'Interativo com múltiplas tentativas\' ou \'Modo adaptativo\'.';
$string['privacy:preference:unitrole'] = 'Se a unidade é essencial, opcional ou não esperada.';
$string['privacy:preference:unitsleft'] = 'Se a unidade é exibida à esquerda (por exemplo, $, £) ou à direita (por exemplo, kg, km, cm).';
$string['relative'] = 'Relativo';
$string['rightexample'] = 'á direita, por exemplo 1.00cm ou 1.00km';
$string['selectunit'] = 'Seleciocionar uma unidade';
$string['selectunits'] = 'Selecionar unidades';
$string['studentunitanswer'] = 'Unidades são inseridas';
$string['tolerancetype'] = 'Tipo de tolerância';
$string['unit'] = 'Unidade';
$string['unitappliedpenalty'] = 'Estas marcas incluem uma penalidade de {$a} para unidades erradas.';
$string['unitchoice'] = 'uma seleção de múltipla escolha';
$string['unitedit'] = 'Editar unidade';
$string['unitgraded'] = 'A unidade precisa ser fornecida e será avaliada.';
$string['unithandling'] = 'Tratamento de unidade';
$string['unitincorrect'] = 'Você não forneceu a unidade correta.';
$string['unitmandatory'] = 'Obrigatório';
$string['unitmandatory_help'] = '* A resposta vai ser avaliada de acordo com a unidade escrita.

* A penalidade de unidade será aplicada se o campo unidade estiver vazio';
$string['unitnotselected'] = 'Você precisa selecionar uma unidade.';
$string['unitonerequired'] = 'Você precisa digitar pelo menos uma unidade';
$string['unitoptional'] = 'Unidade opcional';
$string['unitoptional_help'] = '* Se o campo unidade não estiver vazio, a resposta vai ser avaliada de acordo com essa unidade.
* Se a unidade for mal escrita ou desconhecida, a resposta será considerada como não válida.';
$string['unitpenalty'] = 'Penalidade de unidade';
$string['unitpenalty_help'] = 'A penalidade é aplicada se:

* o nome da unidade errada for digitada
* O nome da unidade é indicado no elemento de resposta \'Número\'';
$string['unitposition'] = 'Unidades aparecem';
$string['units'] = 'Unidades';
$string['unitselect'] = 'um menu de opções';
$string['unitx'] = 'Unidade {no}';
$string['xmustbenumeric'] = '{$a} deve ser um número.';
$string['xmustnotbenumeric'] = '{$a} não pode ser um número.';
$string['youmustenteramultiplierhere'] = 'Você deve inserir um multiplicador aqui.';
