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
 * Strings for component 'qtype_varnumeric', language 'pt_br', version '4.2'.
 *
 * @package     qtype_varnumeric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['combinedcontrolnamevarnumeric'] = 'Campo numérico';
$string['err_notavalidnumberinanswer'] = 'Insira um número válido no campo de resposta.';
$string['err_notavalidnumberinerrortolerance'] = 'Você digitou um número inválido no campo de resposta errada.';
$string['pluginname'] = 'Variável numérica';
$string['pluginname_help'] = 'Em resposta a uma pergunta o estudante entra com um número.

Os valores usados no enunciado e usados para calcular a resposta são calculados  a partir de expressões matemáticas ou variáveis pré-definidas.

Todas as expressões são calculada em tempo real e podem ser definidos para ser aleatórias e  diferentes para todos os usuários.

Se precisar uma questão com um número fixo de variantes e com valores alelatórios mas igual para todos os estudantes, veja o tipo de questão "Conjunto de variáveis numéricos"';
$string['pluginname_link'] = 'question/type/varnumeric';
$string['pluginnameadding'] = 'Adicionando uma questão Variável numérica';
$string['pluginnameediting'] = 'Editando uma questão variável numérica';
$string['pluginnamesummary'] = 'Permite respostas numéricas; expressões são calculadas cada vez e comparadas com a resposta do estudante';
$string['scinotation'] = 'Notação científica';
$string['value'] = 'Valor';
$string['value_help'] = 'Entre aqui com valores para as "variáveis pré-definidas". Caso contrário, aparecerão os valores calculados para a \'variável calculada\'

Note que para um valor calculado este será diferente para cada estudante.';
