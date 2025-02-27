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
 * Strings for component 'qtype_shortanswer', language 'pt_br', version '4.2'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Vazios em {no} Outras Respostas';
$string['answer'] = 'Resposta: {$a}';
$string['answermustbegiven'] = 'Você tem que definir uma resposta quando existe uma avaliação ou um feedback.';
$string['answerno'] = 'Resposta {$a}';
$string['caseno'] = 'Não, caixa não é importante';
$string['casesensitive'] = 'Sensibilidade à caixa';
$string['caseyes'] = 'Sim, caixa precisa corresponder';
$string['correctansweris'] = 'A resposta correta é: {$a}';
$string['correctanswers'] = 'Resposta correta';
$string['filloutoneanswer'] = 'Você tem que definir pelo menos uma resposta possível. Respostas em branco não são utilizadas.\'*\' pode ser usado como curinga para associar qualquer letra. A primeira resposta correspondente será usada para determinar a pontuação e o <em>feedback</em>.';
$string['notenoughanswers'] = 'Este tipo de questão requer ao menos {$a} resposta(s)';
$string['pleaseenterananswer'] = 'Por favor digite uma resposta.';
$string['pluginname'] = 'resposta curta';
$string['pluginname_help'] = 'Em resposta a uma questão (que pode incluir uma imagem), o respondente digita uma palavra ou frase curta. Podem haver várias possibilidade de respostas corretas, cada uma com uma avaliação diferente. Se a opção "diferenciar maiúsculas e minúsculas" for selecionada, então você pode ter resultados diferentes para "Palavra" ou "palavra ".';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = 'Adicionando uma questão de resposta curta';
$string['pluginnameediting'] = 'Editando uma questão de Resposta curta';
$string['pluginnamesummary'] = 'Permite uma resposta de uma ou de poucas palavras, que é avaliada pela comparação com vários modelos de respostas, os quais podem conter curingas.';
$string['privacy:metadata'] = 'O plugin de tipo de questão Resposta curta não armazena dados pessoais.';
$string['privacy:preference:defaultmark'] = 'A marca padrão definida para uma dada questão.';
$string['privacy:preference:penalty'] = 'A penalidade para cada tentativa incorreta quando as questões são executadas usando o comportamento \'Interativo com múltiplas tentativas\' ou \'Modo adaptativo\'.';
$string['privacy:preference:usecase'] = 'Se as respostas devem ser sensíveis a maiúsculas e minúsculas.';
