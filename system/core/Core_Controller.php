<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
/**
*
*/
class Core_Controller
{
  // Đối tượng view
  protected $view     = NULL;

  // Đối tượng model
  protected $model    = NULL;

  // Đối tượng library
  protected $library  = NULL;

  // Đối tượng helper
  protected $helper   = NULL;

  // Đối tượng config
  protected $config   = NULL;

  /**
   * Hàm khởi tạo
   *
   * @desc    Load các thư viện cần thiết
   */
  public function __construct($is_controller = true)
  {

  }
}

?>
