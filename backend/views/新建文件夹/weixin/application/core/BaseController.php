<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \LeanCloud\Client;
use \LeanCloud\Storage\CookieStorage;

class BaseController extends CI_Controller {
	function __construct() {
		parent::__construct();
		// 已废弃，已改用云函数实现，详见：http://blog.it577.net/index.php/archives/7/
		 //参数依次为 AppId, AppKey, MasterKey
//		 Client::initialize("2WJrNFcN5pLaI2Vb3cEdliPj-gzGzoHsz", "LYLdR3sHC6byOMtbMXxYEK8x" ,"fOWxj17PH6Ps5iPtbaetMXfS");
//		 Client::useMasterKey(true);
//		 Client::setStorage(new CookieStorage());
	}

	// 格式化输出
	function echo_json($message, $success = true) {
		$data = ['message' => $message, 'success' => $success];
		header('Content-type: application/json;charset=UTF-8');
		echo json_encode($data);
	}
}
