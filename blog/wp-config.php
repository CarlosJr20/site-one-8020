<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'one8020');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'one8020');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'KH5go880vc');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql03-farm15.uni5.net');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' /97HA:U>Tj|f9mesSN.$lGAI9qApw`7]/:f=8Xsb.}E8SKXEB#n{X7SU&=IAtcK');
define('SECURE_AUTH_KEY',  'T[wb6oBP]Vo1[f*HJ4q`C`JRk5V$HK NqZ:~wfdOn1Y+ubch82q89GX]Np!dgKmX');
define('LOGGED_IN_KEY',    '5pk.zzPzV{k/LQe-}ydUIZ7%5)7<pAoO8=B(Tg&g3RKIeIX,mYjk:XNy,M<C|,!w');
define('NONCE_KEY',        '<FV]?x&F~mjSufc)I_./gcC],gf~kG3m{q7K0u]T(zX:L2n=d*p]X]UJ!O 6RUo!');
define('AUTH_SALT',        'M,ZeM|#~7&Q.Xba!j0,Am !O[Xi6,Ubw2Y+G%C-]M4:8:Te?Znt9V<.5Bi#X5sV^');
define('SECURE_AUTH_SALT', 'Q(F^B)QF~m=`MD yPrHr*VrF-u+MF`#Jpx)8C#%@)T{t>|g4;4:kwkD+/Q>~)>|U');
define('LOGGED_IN_SALT',   '<k1|B&{HYK-EV]x=[0c&V&uZsJ{[-F~@cuCi:&jtT:6S[x^+K:$oUH|ZVyY&P`58');
define('NONCE_SALT',       'jRWR5>h|K(eKO|7AM!80=P.wKc7Z84vPb(2fY!vShb^H0|f8C%,^oZm_rQro/3O#');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
