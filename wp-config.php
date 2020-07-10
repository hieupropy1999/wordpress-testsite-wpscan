<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wpscan' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0+Yv&0Nk{,nuU0CjpR/!$dnx=~Y*(LMILGXv5v6PEXgZN={7#oVOO{V]K-Z7}Ky/' );
define( 'SECURE_AUTH_KEY',  'j8<{zjh}xAE`:3RkU01bYiyPHC&b33(]cQaGPTeu$^|fe2oy;PtzeyggSJ&6imKv' );
define( 'LOGGED_IN_KEY',    '{}lXm;AQb*X@PwbNKNUMN5X;5X_pRS Sz37U!}%bl;-&3MhGm.OgH5VMzlPhuQZe' );
define( 'NONCE_KEY',        '<+ Nf`tVY+b%rl7|c|6@};]JIp&_]uW[;P_,)1bz$?NT{yt1D{bY`YhC_q<+Dpe;' );
define( 'AUTH_SALT',        '82-q9z5-fHFqZ(n~iZ~:>/;>]P(]_wlW~Dq9^6}`liWE)lM6VxkiMy8n=j!vApb/' );
define( 'SECURE_AUTH_SALT', 'BJ+w69WWnq).6.u>mDmv0z;mqAKz G]y[?F42hS6J=20wGI,2CocKJ#z:CR<$qK?' );
define( 'LOGGED_IN_SALT',   ')&q%8~<]o>rAB1CbY%8}voZnQHeiV9dTxDcs B2lD00n>Vs/f-5Wbx6 4}Tk7@$3' );
define( 'NONCE_SALT',       '@l~/S13hEI9GILU)b|efX?T%6Fft{zj`BP6HOB:97.dKHc[)=tAN&>t^[tXq|m.x' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
