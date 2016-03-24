<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'kyudaisai');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'kyudaisai');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'momokatan');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1Q6FjyxZ%;7[r77$W~ee`{e+I-7HHjLJyVk}$v9Az~wrdug-Xgy-6&Tc5dx-!:I{');
define('SECURE_AUTH_KEY',  'GdyOg|eWgt1qOvM0.yOxnMi!)EO8=N`cU#c2.b-q.eBL-JyY?,CyU! ;9|G/MSyH');
define('LOGGED_IN_KEY',    'o7v~UWbPE,{= Z&j[ P)lO|nVO1..gx&5[afw@XOc1;`iBv7X.i.bp0t|_,B<.3o');
define('NONCE_KEY',        'e9=8:50XW3A1oDZh,wKGB+xL7N+@5opS=|T7w;3Xebnq<_J^5kc%F.?t7iwd(+sg');
define('AUTH_SALT',        '-nl [|v{SxjGTv=`-Y_811>D>Cb^7^J[O?xJe+gb!GU-|]3@]nM:KrdEc%6{8,Im');
define('SECURE_AUTH_SALT', ')!F{:m2SNQKZGezSq~-+4n(@dy81Bw;Crtd+K-$RJE7JeG;Mxis~HJI9,@^tZ2Su');
define('LOGGED_IN_SALT',   'kH*L+7/Ux|3i>[O!z6NE7`($CYuO:fN+?&atyB-w8495#y:D&E>^ScKt>4F:,<U ');
define('NONCE_SALT',       '5R3|bq5MYy,xXbZKN:J|O(n5[(otwA8j%YR=xBv,$oxUrNB#G~CfPxmfic!V#oZJ');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = '69pre_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
