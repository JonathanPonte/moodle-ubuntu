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
 * Strings for component 'engagementindicator_login', language 'pt_br', version '4.2'.
 *
 * @package     engagementindicator_login
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eavgsessionlength'] = 'Média de duração da sessão esperada (segundos)';
$string['eloginspastweek'] = 'Acessos esperados na semana passada';
$string['eloginsperweek'] = 'Acessos esperados por semana';
$string['etimesincelast'] = 'Tempo esperado desde último acesso (segundos)';
$string['localrisk'] = 'Risco Local';
$string['localrisk_help'] = 'O percentual de risco somente desse acesso, em 100. O risco local é multiplicado pelo coeficiente de ponderação de acessos para formar a Contribuição de Risco.';
$string['logic'] = 'Lógica';
$string['logic_help'] = 'Este campo fornece algumas dicas sobre a lógica utilizada para se chegar ao valor de Risco Local.';
$string['maxrisktitle'] = 'Nunca acessou';
$string['pluginname'] = 'Atividade Login';
$string['reasonavgsessionlen'] = '0% de risco para duração média da sessão menor que {$a} segundos, 100% para duração da sessão igual a 0.';
$string['reasonloginspastweek'] = '0% de risco para mais de {$a} acessos na semana. 100% para 0 acessos na última semana';
$string['reasonloginsperweek'] = '0% de risco para acessos ao curso >= {$a} vezes por semana. 100% de risco para 0 acessos por semana.';
$string['reasonnologin'] = 'Este usuário nunca acessou o curso, portanto está com o risco de 100%.';
$string['reasontimesincelogin'] = '0% de risco se o último acesso ao curso acabou de acontecer. Subindo para o máximo de 100% de risco após {$a} dias.';
$string['riskcontribution'] = 'Contribuição de risco';
$string['riskcontribution_help'] = 'A quantidade de risco que este login em particular contribui para o risco global retornado pelo indicador de Login. Este é formado pela multiplicação de Risco Local com a ponderação de login. As contribuições de risco de cada sessão são somados para formar o risco global para o indicador.';
$string['sessionlength'] = 'Tempo da sessão (segundos)';
$string['weighting'] = 'Ponderação';
$string['weighting_help'] = 'Esta figura mostra a quantidade que este item contribui para o risco total para o indicador de Login. O risco local será multiplicado por este para formar a contribuição de risco.';
