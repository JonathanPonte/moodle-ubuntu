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
 * Strings for component 'filter_tex', language 'pt_br', version '4.2'.
 *
 * @package     filter_tex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configconvertformat'] = 'Se <i>latex</i> e <i>dvips</i> estiverem disponíveis, juntamente com o utilitário <i>convert</i> e/ou <i>dvisvgm</i>, selecione o tipo de imagem preferido (<i>convert</i> produz GIF ou PNG; <i>dvisvgm</i> produz SVG). Caso contrário, <i>mimeTeX</i> será utilizado para criar imagens GIF.';
$string['convertformat'] = 'Formato de saída da imagem';
$string['filtername'] = 'Notação TeX';
$string['latexpreamble'] = 'Preâmbulo LaTeX';
$string['latexsettings'] = 'Configurações do renderizador LaTeX';
$string['pathconvert'] = 'Caminho do binário <i>convert</i>';
$string['pathdvips'] = 'Caminho do binário <i>dvips</i>';
$string['pathdvisvgm'] = 'Caminho do binário do <i>dvisvgm</i>';
$string['pathlatex'] = 'Caminho do binário <i>latex</i>';
$string['pathmimetex'] = 'Caminho do binário <i>mimetex</i>';
$string['pathmimetexdesc'] = 'O Moodle usará o seu próprio binário mimetex caso nenhum outro caminho for especificado.';
$string['privacy:metadata'] = 'O plugin de notação TeX não armazena nenhum dado pessoal.';
$string['source'] = 'Fonte Tex';
