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
 * Strings for component 'qformat_xml', language 'pt_br', version '4.2'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Arquivo XML inválido - string esperada (usar CDATA?)';
$string['pluginname'] = 'Formato Moodle XML';
$string['pluginname_help'] = 'Este é um formato específico do Moodle para importar e exportar questões.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'O plugin de formato de questão XML não armazena nenhum dado pessoal.';
$string['truefalseimporterror'] = '<b>Aviso</b>: A questão verdadeiro/falsa \'{$a->questiontext}\' não pode ser importada apropriadamente. Não estava claro se a resposta correta é verdadeiro ou falso. A questão foi importada assumindo que a resposta é \'{$a->answer}\'. Caso não esteja correta, você precisará editar a questão.';
$string['unsupportedexport'] = 'Questões de tipo {$a} não são suportadas pela exportação XML';
$string['xmlimportnoname'] = 'Faltando nome da questão no arquivo XML';
$string['xmlimportnoquestion'] = 'Faltando texto da questão no arquivo XML';
$string['xmltypeunsupported'] = 'Questão do tipo {$a} não é suportada através de importação via XML';
