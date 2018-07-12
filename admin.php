<?php
  // Đường dẫn tới hệ  thống
  define('PATH_SYSTEM', __DIR__ .'/system');
  define('PATH_APPLICATION', __DIR__ . '/admin');

  // Lấy thông số cấu hình
  require (PATH_SYSTEM . '/config/config.php');

  //mở file Core_Common.php, file này chứa hàm oad() chạy hệ thống
  include_once PATH_SYSTEM . '/core/Core_Common.php';

  // Chương trình chính
  load();
?>
