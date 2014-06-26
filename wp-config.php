<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '147369');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|*k)7gN|>7I}`g{iY+8$e+m5)@5,0!3$HLTJXqpSX#kooHZq0W-oE2<5Ii~<_JZK');
define('SECURE_AUTH_KEY',  '+)!R{j@jz@%8LHn&3Ef_XUZQr5[68l:xS(,4Z?sn+xBi.lWqV+LizrH>+e!;Cwi#');
define('LOGGED_IN_KEY',    '8-buMvE73OtTB/=5P+:;ud3i`Q,w[mE]O5Kd<7Ma%5A+LzA]}u_l)=i~8$oD{1%D');
define('NONCE_KEY',        '.c8dG_t&8Yog0@Ebc+z+]*PX8s@]l#a8cBql=QY|_xS5b$ OeQ.ocR52{k/~:43w');
define('AUTH_SALT',        ' K0C@m@o-0QXwZ(q5spRQb!t%ibkR@wczDY>HVnf(54^M%Mr25.ve+8LC7.KgVJp');
define('SECURE_AUTH_SALT', '??~r 9{<hq%:;jSRc}JoP<lh>S0EIIwhHbA _u8DqPx9j+U6$fPz%Z+jyazY-q0&');
define('LOGGED_IN_SALT',   '>%1VxMKXB2I<]s<Mc^85!|(e;5R1%Z0h`f,4]RNHs#-)}KQ4+v=JXP5|JsD<MRDx');
define('NONCE_SALT',       'o_w6b+P7-IC~(_zA7r73s90LQ/r2yHm+A+iG:CV,M3naP%ZdCHwFk?=#7&cy5FTP');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
