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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'y0q~b6~pHB7K, 4:VU,K9a`)k EdWzlqPPt1p89`m~]tPTZKOyvVqa/)$I1Y_.=Z' );
define( 'SECURE_AUTH_KEY',  '4=fZIxJzz!S<hj~>msZ<iG)I1|J6G;O.ZIOpR<}rjo5|^I5JvEr(BTU2yFX#Re+*' );
define( 'LOGGED_IN_KEY',    '?xbgh^fq:;tH)ag^FWd1&&reQp;TmaJrkI]j7|:s6n1cVG?Q-nk3A@h*^xXHw&iQ' );
define( 'NONCE_KEY',        'xsBrVgM^>),ONx!&PLyAq*MMG{2p6/f<D.nkX 02z`;7yL,Yyem_[lz$:-}wDSB;' );
define( 'AUTH_SALT',        ';0zyojGL1r^BP!W+~KP;i6E@?p2(Ts>vV-;c&D@#%te384V+F<}++K0CL]RBcae7' );
define( 'SECURE_AUTH_SALT', 'SAm[70U1:88p{;20^[tN.Z186c3meUIThH9%1@]_YiHF00Q1&v]mF!Oo442|O75b' );
define( 'LOGGED_IN_SALT',   'OzZRo^7]}c:p_QMnb$XHSE 5y6t;|U1R1Ns|f=LXOz^*<PV@!<C9n8*g&(Qj&v,m' );
define( 'NONCE_SALT',       'T}M>L!-PwqG,+{%McaR=@mnPV&O5[e}8M>tI2!J0.U[Y#cOFO!,-gv^HTRw]z-pu' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
