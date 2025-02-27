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
 * Strings for component 'block', language 'pt_br', version '4.2'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Adicionar bloco {$a}';
$string['anypagematchingtheabove'] = 'Qualquer página casando com a acima';
$string['appearsinsubcontexts'] = 'Aparecer em sub-contextos';
$string['assignrolesinblock'] = 'Atribuir papéis no bloco {$a}';
$string['blocksdrawertoggle'] = 'Esconder/mostrar graveta de blocos';
$string['blocksettings'] = 'Configurações do bloco';
$string['bracketfirst'] = '{$a} (primeiro)';
$string['bracketlast'] = '{$a} (último)';
$string['configureblock'] = 'Configurar bloco {$a}';
$string['contexts'] = 'Contextos da página';
$string['contexts_help'] = 'Contextos são tipos específicos de páginas, onde este bloco pode ser exibido dentro da localização original do bloco. Você terá opções diferentes aqui, dependendo da localização do bloco original e sua localização atual. Por exemplo, você pode restringir um bloco para que apareça apenas nas páginas do fórum em um curso. Para que isso aconteça, você deverá adicionar o bloco ao curso (fazendo com que ele apareça em todas as sub-páginas), em seguida, entrar em um fórum e editar as configurações do bloco novamente para restringir a exibição apenas nas páginas do fórum.';
$string['createdat'] = 'Localização original do bloco';
$string['createdat_help'] = 'O local original onde o bloco foi criado. As configurações de bloqueio podem fazer com que ele apareça em outros locais (contextos) dentro do local original. Por exemplo, um bloco criado na página de um curso pode ser exibido nas atividades desse curso. Um bloco criado na página inicial do site pode ser exibido em todo o site.';
$string['defaultregion'] = 'Região padrão';
$string['defaultregion_help'] = 'Temas podem definir uma ou mais das chamadas regiões de blocos onde os blocos são exibidos. Esta configuração define em qual destas você quer que este bloco apareça por padrão. A região pode ser substituída em páginas específicas, se necessário.';
$string['defaultweight'] = 'Peso padrão';
$string['defaultweight_help'] = 'O peso padrão permite que você escolha mais ou menos onde você deseja que o bloco apareça na região escolhida, quer na parte superior ou inferior. A localização final é calculada em função da localização de todos os demais blocos naquela região (por exemplo, apenas um bloco pode realmente ficar no topo). Este valor pode ser substituído em páginas específicas, se necessário.';
$string['deleteblock'] = 'Apagar bloco {$a}';
$string['deleteblockcheck'] = 'Isso excluirá o bloco {$a}.';
$string['deleteblockinprogress'] = 'Remoção do bloco {$a} em andamento...';
$string['deleteblockwarning'] = '<p> Você está prestes a apagar um bloco que aparece em outro lugar. </p><p> Local do bloco original: {$a->location} <br /> Exibir em tipos de página: {$a->pagetype} </p><p> Tem certeza de que quer continuar? </p>';
$string['deletecheck'] = 'Apagar o bloco {$a}?';
$string['deletecheck_modal'] = 'Excluir bloco?';
$string['hideblock'] = 'Ocultar bloco {$a}';
$string['hidepanel'] = 'Esconder o painel';
$string['moveblock'] = 'Mover o bloco {$a}';
$string['moveblockafter'] = 'Mover o bloco para depois do bloco {$a}';
$string['moveblockbefore'] = 'Mover o bloco para bloco antes {$a}';
$string['moveblockinregion'] = 'Mover bloco para região {$a}';
$string['movingthisblockcancel'] = 'Movendo este bloco ({$a})';
$string['myblocks'] = 'Meus blocos';
$string['onthispage'] = 'Nesta página';
$string['pagetypes'] = 'Tipos de página';
$string['pagetypewarning'] = 'O tipo de página especificado anteriormente não está mais disponível. Por favor, escolha o tipo de página mais adequado a seguir.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Grava quando o usuário pôs um bloco no dock';
$string['privacy:metadata:userpref:hiddenblock'] = 'Registra quando o usuário recolheu/ocultou um bloco';
$string['privacy:request:blockisdocked'] = 'Indica se o bloco foi adicionado';
$string['privacy:request:blockishidden'] = 'Indica se o bloco foi oculto/recolhido';
$string['region'] = 'Região';
$string['restrictpagetypes'] = 'Mostrar nos tipos de página';
$string['showblock'] = 'Mostrar bloco {$a}';
$string['showoncontextandsubs'] = 'Exibir em \'{$a}\' e em todas páginas internas';
$string['showoncontextonly'] = 'Exibir apenas em \'{$a}\'';
$string['showonentiresite'] = 'Exibir no site inteiro';
$string['showonfrontpageandsubs'] = 'Exibir na página inicial e em todas as páginas adicionadas à página inicial.';
$string['showonfrontpageonly'] = 'Exibir apenas na página principal';
$string['subpages'] = 'Selecionar páginas';
$string['thisspecificpage'] = 'Esta página específica';
$string['visible'] = 'Visível';
$string['weight'] = 'Peso';
$string['wherethisblockappears'] = 'Onde exibir este bloco';
