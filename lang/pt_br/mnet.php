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
 * Strings for component 'mnet', language 'pt_br', version '4.2'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-assinado)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (assinado)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP decriptado';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-assinado)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (assinado)';
$string['aboutyourhost'] = 'O seu servidor';
$string['accesslevel'] = 'Nível de acesso';
$string['addhost'] = 'Adicionar host';
$string['addnewhost'] = 'Adicionar novo host';
$string['addtoacl'] = 'Adicionar ao controle de acesso';
$string['allhosts'] = 'Todos os hosts';
$string['allhosts_no_options'] = 'Nenhuma opção disponível quando visualizando vários hosts';
$string['allow'] = 'Permitir';
$string['applicationtype'] = 'Tipo de aplicação';
$string['authfail_nosessionexists'] = 'Autorização falida: a sessão mnet não existe.';
$string['authfail_sessiontimedout'] = 'Autorização falida: a sessão mnet superou o limite de tempo.';
$string['authfail_usermismatch'] = 'Autorização falida: o usuário não tem equivalentes.';
$string['authmnetdisabled'] = 'O plugin de autenticação MNet está <strong>desabilitado</strong>.';
$string['badcert'] = 'Este certificado não é válido.';
$string['certdetails'] = 'Detalhes do cert';
$string['configmnet'] = 'A Rede MNet permite a comunicação de seu servidor com outros servidores ou serviços.';
$string['couldnotgetcert'] = 'Nenhum certificado encontrado em <br />{$a}. <br />O host pode estar desligado ou configurado em modo errado.';
$string['couldnotmatchcert'] = 'Isto não combina com o certificado publicado atualmente pelo servidor web';
$string['courses'] = 'cursos';
$string['courseson'] = 'cursos em';
$string['current_transport'] = 'Transporte atual';
$string['currentkey'] = 'Chave pública atual';
$string['databaseerror'] = 'Não foi possível escrever os detalhes no banco de dados';
$string['deleteaserver'] = 'Excluindo um servidor';
$string['deletedhostinfo'] = 'Este host foi apagado. Se você quer desfazer a deleção, altere o status de apagado para \'Não\'.';
$string['deletedhosts'] = 'Hosts apagados: {$a}';
$string['deletehost'] = 'Excluindo o host';
$string['deletekeycheck'] = 'tem certeza que quer excluir esta chave?';
$string['deleteoutoftime'] = 'Tente novamente. O limite de 60 segundos para excluir esta chave acabou.';
$string['deleteuserrecord'] = 'SSO ACL: excluir registro do usuário \'{$a->user}\' de {$a->host}.';
$string['deletewrongkeyvalue'] = 'Erro. Se você não estava tentando excluir a chave SSL do seu servidor, é possível que tenha ocorrido um ataque malicioso.';
$string['deny'] = 'Negar';
$string['description'] = 'Descrição';
$string['duplicate_usernames'] = 'Erro ao criar um índice nas colunas "mnethostid" e "username" na tabela de usuários.<br /> Isto acontece quando há <a href="{$a}" target="_blank">nomes de usuários duplicados</a>.<br />O upgrade vai continuar com sucesso. Clicando o link acima é possível acessar instruções para a resolução deste problema. Você pode esperar o fim do upgrade antes de fazer isto.<br />';
$string['enabled_for_all'] = '(Este serviço foi habilitado para todos os hosts)';
$string['enterausername'] = 'Favor inserir uma identificação de usuário ou uma lista de identificações separadas por vírgulas.';
$string['error7020'] = 'Esse erro normalmente ocorre se o site remoto tiver criado um registro para você com o wwwroot errado, por exemplo, https://seusite.com em vez de https://www.seusite.com. Entre em contato com o administrador do site remoto com seu wwwroot (conforme definido em config.php) e peça para atualizar o registro de seu host.';
$string['error7022'] = 'A mensagem enviada para o site remoto foi criptografada corretamente, mas não assinada. Isto é muito estranho, e provavelmente se trata de um bug. Se isso ocorrer você deve registrar a ocorrência (fornecendo o máximo de informação possível sobre as versões da aplicação em questão, etc.)';
$string['error7023'] = 'O site remoto não conseguiu decriptar a sua mensagem com as chaves que tem. Tente reconfigurar as chaves no site remoto. Isto acontece quando as comunicações entre os sites são interrompidas por períodos longos.';
$string['error7024'] = 'Você envia uma mensagem não criptografada para o site remoto, mas o site remoto não aceita comunicação não criptografada do seu site. Isso é estranho; você provavelmente deve registrar um bug se isso ocorrer (fornecendo o máximo de informações possível sobre as versões do aplicativo em questão, etc).';
$string['error7026'] = 'A chave che marcou a sua mensagem é diferente da chave que host remote tem registrada. O host tentou obter a nova chave mas falhou. Reconfigure manualmente a comunicação da chave.';
$string['error709'] = 'O site remoto não conseguiu obter a sua chave SSL.';
$string['eventaccesscontrolcreated'] = 'Controle de acesso criado';
$string['eventaccesscontrolupdated'] = 'Controle de acesso atualizado';
$string['expired'] = 'Esta chave terminou em';
$string['expires'] = 'Válido até';
$string['expireyourkey'] = 'Excluir esta chave';
$string['expireyourkeyexplain'] = 'O Moodle alterna automaticamente suas chaves a cada 28 dias (por padrão). Mas você tem a opção de expirar essa <em>chave</em> manualmente a qualquer momento. Isto é útil se você achar que essa chave esteja por algum motivo comprometida. Imediatamente uma chave substituta é gerada automaticamente. <br />Excluindo esta chave será impossível que outros aplicativos se comuniquem com você, até que você entre em contato com cada administrador e forneça sua nova chave.';
$string['exportfields'] = 'Campos para exportar';
$string['failedaclwrite'] = 'Erro ao escrever na lista de controle de acesso MNet para o usuário \'{$a}\'.';
$string['findlogin'] = 'Buscar login';
$string['forbidden-function'] = 'Esta funcionalidade não está habilitada para RPC.';
$string['forbidden-transport'] = 'O método de transporte usado não é autorizado.';
$string['forcesavechanges'] = 'Forçar salvar mudanças';
$string['helpnetworksettings'] = 'Configura comunicação Mnet';
$string['hidelocal'] = 'Oculta usuários locais';
$string['hideremote'] = 'Oculta usuários remotos';
$string['host'] = 'host';
$string['hostcoursenotfound'] = 'Host ou curso não encontrado';
$string['hostdeleted'] = 'Host excluído';
$string['hostexists'] = 'Um registro já existe para um host com esse hostname  que pode ser excluído. <a href="{$a}">Clique aqui</a> para editar esse registro.';
$string['hostlist'] = 'Lista dos hosts da rede';
$string['hostname'] = 'Nome do host';
$string['hostnamehelp'] = 'O nome do domínio do site remoto, ex. www.exemplo.com';
$string['hostnotconfiguredforsso'] = 'Este servidor não está configurado para login remoto.';
$string['hostsettings'] = 'Configurações do host';
$string['http_self_signed_help'] = 'Permitir conexões usando um certificado DIY SSL auto-assinado no servidor remoto.';
$string['http_verified_help'] = 'Permitir conexões usando um certificado SSL verificado em PHP no host remoto, mas em http (não https).';
$string['https_self_signed_help'] = 'Permitir conexões usando um certificado DIY SSL auto-assinado no servidor remoto usando http.';
$string['https_verified_help'] = 'Permitir conexões usando um certificado SSL verificado no host remoto.';
$string['id'] = 'ID';
$string['idhelp'] = 'Este valor é designado automaticamente e não pode ser mudado';
$string['importfields'] = 'Campos para importar';
$string['inspect'] = 'Inspecionar';
$string['installnosuchfunction'] = 'Erro de codificação! Algo está tentando instalar uma função Mnet xmlrpc ({$a->method}) de um arquivo ({$a->file}) e não pode ser encontrado!';
$string['installnosuchmethod'] = 'Erro de codificação! Algo está tentando instalar um método Mnet xmlrpc ({$a->method}) de uma classe ({$a->class}) e não pode ser encontrado!';
$string['installreflectionclasserror'] = 'Codificação de erro! Introspecção MNet falhou para o método \'{$a->method}\' na classe \'{$a->class}\'. A mensagem de erro original, em caso de ajuda, é: \'{$a->error}\'
';
$string['installreflectionfunctionerror'] = 'Codificação de erro! Introspecção MNet falhou para a função \'{$a->method}\' no arquivo \'{$a->file}\'. A mensagem de erro original, em caso de ajuda, é: \'{$a->error}\'
';
$string['invalidaccessparam'] = 'Parâmetro de acesso inválido';
$string['invalidactionparam'] = 'Parâmetro de ação inválido';
$string['invalidhost'] = 'Você tem que fornecer uma identificação de host válida';
$string['invalidpubkey'] = 'A chave não é uma chave SSL valida. ({$a})';
$string['invalidurl'] = 'URL não válido';
$string['ipaddress'] = 'endereço IP';
$string['is_in_range'] = 'O endereço IP  <code>{$a}</code>  representa um host válido.';
$string['ispublished'] = '{$a} habilitou este serviço para você.';
$string['issubscribed'] = '{$a} subscreve este serviço no seu host.';
$string['keydeleted'] = 'Sua chave foi apagada e substituída.';
$string['keydeletedcancelled'] = 'O processo de exclusão da chave foi cancelado.';
$string['keymismatch'] = 'A chave pública deste host que você está administrando é diferente da chave pública que ele está publicando.';
$string['last_connect_time'] = 'Última data de conexão';
$string['last_connect_time_help'] = 'A última vez que você se conectou a este site.';
$string['last_transport_help'] = 'O transporte que você usou na última conexão a este site.';
$string['leavedefault'] = 'Usar as configurações padrão';
$string['listservices'] = 'Listar serviços';
$string['loginlinkmnetuser'] = '<br/>Se você é um usuário remoto MNet e pode<a href="{$a}">confirmar o seu endereço aqui</a>, você pode ser redirecionado para a página de login.<br />';
$string['logs'] = 'logs';
$string['managemnetpeers'] = 'Gerencie os parceiros';
$string['method'] = 'Método';
$string['methodhelp'] = 'Ajuda do método para {$a}';
$string['methodsavailableonhost'] = 'Métodos disponíveis em {$a}';
$string['methodsavailableonhostinservice'] = 'Métodos disponíveis para {$a->service} em {$a->host}';
$string['methodsignature'] = 'Assinatura do método para {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Concatenar até 3 strings e retornar o resultado';
$string['mnet_session_prohibited'] = 'Usuários do seu servidor não tem autorização para acessar com roaming o  {$a}.';
$string['mnetdisabled'] = 'MNet <strong>está desabilitada</strong>.';
$string['mnetidprovider'] = 'Provedor de MNet ID';
$string['mnetidproviderdesc'] = 'Você pode usar este recurso para obter um link no qual você pode fazer login se puder informar o endereço correto de email que case com o nome de usuário com o qual você tentou efetuar o login anteriormente.';
$string['mnetidprovidermsg'] = 'Você deve poder efetuar o login no seu provedor {$a}.';
$string['mnetidprovidernotfound'] = 'Desculpe, mas nenhuma informação mais detalhada pode ser encontrada.';
$string['mnetpeers'] = 'Pares';
$string['mnetservices'] = 'Serviços';
$string['mnetsettings'] = 'Configuração da Rede Moodle';
$string['moodle_home_help'] = 'O caminho para a página principal da aplicação MNet, por exemplo, /moodle/.';
$string['name'] = 'Nome';
$string['net'] = 'Rede MNet';
$string['networksettings'] = 'Configuração da Rede';
$string['never'] = 'Nunca';
$string['noaclentries'] = 'Nenhuma item na lista de controle SSO';
$string['noaddressforhost'] = 'Desculpe, mas o nome deste host ({$a}) não pode ser resolvido!';
$string['nocurl'] = 'O cURL não está instalado no PHP';
$string['nolocaluser'] = 'Nenhum registro local foi encontrado para este usuário remoto.';
$string['nomodifyacl'] = 'Você não tem permissão para mudar a lista de controle MNet.';
$string['nonmatchingcert'] = 'O assunto do certificado: <br /><em>{$a->subject}</em><br />não coincide com o host que o emitiu:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Problema obtendo uma chave pública.<br />Talvez o host não permite a rede Moodle ou a chave não é válida.';
$string['nosite'] = 'Não foi achado o curso principal (site)';
$string['nosuchfile'] = 'O arquivo ou a funcionalidade {$a} não existe.';
$string['nosuchfunction'] = 'Impossível encontrar a função ou função proibida para RPC.';
$string['nosuchmodule'] = 'A função foi endereçada em modo errado e não foi possível entrá-la. Por favor use o formato mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Impossível obter chave pública para verificar a assinatura.';
$string['nosuchservice'] = 'O serviço RPC não está ativado neste servidor.';
$string['nosuchtransport'] = 'Nenhum transporte foi achado com este ID.';
$string['notBASE64'] = 'Esta string não é codificada como base64. Não é uma chave válida.';
$string['notPEM'] = 'Esta chave não é em formato PEM. Não funciona.';
$string['not_in_range'] = 'O endereço IP <code>{$a}</code> não representa um host confiável.';
$string['notenoughidpinfo'] = 'Seu provedor de identidade não está nos fornecendo informação suficiente para criar ou atualizar sua conta localmente. Desculpe!';
$string['notinxmlrpcserver'] = 'Tente acessar o cliente remoto MNet, não durante a execução do servidor XMLRPC';
$string['notmoodleapplication'] = 'AVISO: Isto não é uma aplicação Moodle, logo alguns dos métodos de inspeção podem não funcionar de maneira apropriada.';
$string['notpermittedtojump'] = 'Você não tem permissão para iniciar uma sessão remota partindo deste servidor Moodle.';
$string['notpermittedtojumpas'] = 'Você não pode iniciar uma seção remota enquanto estiver logado como um outro usuário.';
$string['notpermittedtoland'] = 'Você não tem permissão para iniciar uma sessão remota.';
$string['off'] = 'Desativar';
$string['on'] = 'Ativar';
$string['options'] = 'Opções';
$string['peerprofilefielddesc'] = 'Aqui você pode sobrescrever as configurações globais de maneira que possa exportar e importar os campos de perfis quando novos usuários são criados';
$string['permittedtransports'] = 'Transportes autorizados';
$string['phperror'] = 'Um erro interno de PHP interrompeu o seu pedido.';
$string['position'] = 'Posição';
$string['postrequired'] = 'A função de exclusão requer uma interrogação POST';
$string['privacy:metadata'] = 'O plugin MNet não armazena nenhum dado pessoal.';
$string['profileexportfields'] = 'Campos para enviar';
$string['profilefielddesc'] = 'Aqui você pode configurar a lista de campos do perfil que são enviados e recebidos via MNet quando contas de usuários são criadas ou atualizadas. Voce também pode sobrescrever esses dados para cada parceiro MNet individualmente. Note que os campos a seguir sempre são enviados e não são opcionais: {$a}';
$string['profilefields'] = 'Campos do perfil';
$string['profileimportfields'] = 'Campos para importar';
$string['promiscuous'] = 'Promiscuo';
$string['publickey'] = 'Chave pública';
$string['publickey_help'] = 'A chave pública é recebida automaticamente do servidor remoto.';
$string['publickeyrequired'] = 'Você precisa inserir uma chave pública.';
$string['publish'] = 'Publicar';
$string['reallydeleteserver'] = 'Tem certeza que deseja excluir este servidor?';
$string['receivedwarnings'] = 'Os seguintes avisos foram recebidos';
$string['recordnoexists'] = 'O registro não existe';
$string['reenableserver'] = 'Não - selecionar esta opção para reabilitar este servidor.';
$string['registerallhosts'] = 'Registrar todos os host (<em>modo Hub</em>)';
$string['registerallhostsexplain'] = 'Você pode escolher se registrar todos os host que tentem conectar com o seu moodle automaticamente. Um registro vai ser criado na sua lista de host para cada site Moodle que requer uma chave pública..<br />Você tem a opção de configurar serviços para todos os hosts e, habilitando alguns serviços, você pode fornecer serviços a todos estes servidores remotos.';
$string['registerhostsoff'] = 'O registro de todos os hosts está setado em <b>off</b>';
$string['registerhostson'] = 'O registro de todos os hosts está setado em <b>on</b>';
$string['remotecourses'] = 'Cursos remotos';
$string['remotehost'] = 'Host remoto';
$string['remotehosts'] = 'Host Remotos';
$string['remoteuser'] = 'Usuário remoto {$a->remotetype}';
$string['remoteuserinfo'] = 'Perfil obtido de <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'A Rede requer a extensão OpenSSL';
$string['restore'] = 'Restaurar';
$string['returnvalue'] = 'Valor de retorno';
$string['reviewhostdetails'] = 'Rever detalhes do host';
$string['reviewhostservices'] = 'Rever serviços do host';
$string['selectaccesslevel'] = 'Selecionar um nível de acesso na lista.';
$string['selectahost'] = 'Selecionar um host de Moodle remoto.';
$string['service'] = 'Nome do serviço';
$string['serviceid'] = 'ID do serviço';
$string['servicesavailableonhost'] = 'Serviços disponíveis no {$a}';
$string['serviceswepublish'] = 'Serviços que publicamos para {$a}.';
$string['serviceswesubscribeto'] = 'Serviços que assinamos em {$a}.';
$string['settings'] = 'Configurações';
$string['showlocal'] = 'Mostrar usuários locais';
$string['showremote'] = 'Mostrar usuários remotos';
$string['ssl_acl_allow'] = 'SSO ACL: Permitir usuário \'{$a->user}\' de \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: Negar usuário \'{$a->user}\' de \'{$a->host}\'';
$string['sslverification'] = 'Verificação SSL';
$string['sslverification_help'] = 'Esta opção permite configurar o nível de segurança ao se conectar a um ponto usando HTTPS.
* Nenhum: nenhum nível de segurança
* Verifique hospedagem apenas: valida o domínio do certificado SSL
* Verifique hospedagem e pares (recomendado): valida o domínio e emissor do certificado SSL';
$string['ssoaccesscontrol'] = 'Controle de acesso via SSO';
$string['ssoacldescr'] = 'Use esta página para autorizar ou negar o acesso de usuários específicos de Moodles remotos via MNet. Isto serve quando você oferece serviços SSO. Para controlar a habilidade dos seus usuários locais acessarem Moodles remotos, utilize o sistema de papéis para atribuir a permissão <em>mnetlogintoremote</em> aos usuários em questão.';
$string['ssoaclneeds'] = 'Para que isto funcione é preciso ativar a opção Rede MNet, além de habilitar o plugin de autenticação MNet.';
$string['strict'] = 'Restrito';
$string['subscribe'] = 'Inscrever';
$string['system'] = 'Sistema';
$string['testclient'] = 'Cliente teste MNet';
$string['testtrustedhosts'] = 'Testar endereço';
$string['testtrustedhostsexplain'] = 'Inserir endereço IP para verificar se é host confiável.';
$string['theypublish'] = 'Eles publicam';
$string['theysubscribe'] = 'Eles se inscrevem';
$string['transport_help'] = 'Estas opções são recíprocas, então você pode forçar um host remoto a usar o certificado SSL apenas se o seu servidor também tiver um certificado SSL';
$string['trustedhosts'] = 'host XML-RPC';
$string['trustedhostsexplain'] = '<p>O mecanismo de host confiáveis permite que máquinas específicas executem chamadas via XML-RPC para qualquer parte do API Moodle.
Assim os roteiros podem controlar o comportamento do Moodle, use com moderação para evitar perigos de ataques.
This</p>
<p>Isto <strong>não</strong> é necessário em Redes Moodle.</p>
<p>Para ativar, inserir lista de endereços IP ou redes,um em cada linha.
Exemplos:</p>O seu host local:<br />127.0.0.1<br />O seu host local(com bloco de Redes):<br />127.0.0.1/32<br />Apenas o host com endereço IP 192.168.0.7:<br />192.168.0.7/32<br />
Qualquer host com endereço IP entre 192.168.0.1 e 192.168.0.255:<br />192.168.0.0/24<br />Qualquer host:<br />192.168.0.0/0<br />
Obviamente o último exemplo<strong>não é</strong> uma configuração ideal.';
$string['turnitoff'] = 'Desligar';
$string['turniton'] = 'Ligar';
$string['type'] = 'Tipo';
$string['unknown'] = 'Desconhecido';
$string['unknownerror'] = 'Erro desconhecido durante a negociação.';
$string['usercannotchangepassword'] = 'Você não pode mudar a senha aqui porque é um usuário remoto.';
$string['userchangepasswordlink'] = '<br /> Voc~e deve mudar a sua senha no seu<a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> provedor.';
$string['usernotfullysetup'] = 'Sua conta de usuário está incompleta. Você precisa <a href="{$a}">voltar ao seu provedor</a> e assegurar-se que o seu perfil esteja completo lá. Pode ser necessário efetuar logoff e em seguida login para que isto tenha efeito.';
$string['usersareonline'] = 'Atenção: {$a} usuários deste servidor estão logados ao seu site.';
$string['validated_by'] = 'Isto é validado pela Rede: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Verifique hospedagem e pares';
$string['verifyhostonly'] = 'Verifique somente hospedagem';
$string['verifysignature-error'] = 'Erro: a assinatura não foi confirmada.';
$string['verifysignature-invalid'] = 'Erro: a assinatura não foi confirmada. Aparentemente esta transação não foi assinada por você.';
$string['version'] = 'Versão';
$string['warning'] = 'Aviso';
$string['wrong-ip'] = 'Seu endereço IP não é aquele registrado.';
$string['xmlrpc-missing'] = 'Você tem que instalar XML-RPC no PHP para usar esta funcionalidade.';
$string['yourhost'] = 'Seu host';
$string['yourpeers'] = 'Seus pares';
