<?php
/**
 * Created by PhpStorm.
 * User: cyt
 * Date: 16/6/7 上午10:27
 * Description:
 */
namespace backend\extensions;
use Yii;
define("BASEPATH",\Yii::$app->basePath);
require_once \Yii::$app->basePath."/../vendor/smarty/smarty/libs/Smarty.class.php";
define('SMARTY_TMPDIR',BASEPATH.'/views/');//放置模版的目录 //自己创建
define('SMARTY_CACHEDIR',BASEPATH . '/views/');//缓存文件目录
define('LIFTTIME',1800);
//define('SMARTY_DLEFT', '<{');//左限定符
//define('SMARTY_DRIGHT', '}>');//右限定符

class CSmarty extends \Smarty{

    protected static $_instance = NULL;

    static function getInstance(){
        if(self::$_instance == NULL){
            self::$_instance = new CSmarty();
        }
        return self::$_instance;
    }

    function __construct(){
        parent::__construct();
//
        $this->template_dir = SMARTY_TMPDIR;
//        $this->compile_dir = SMARTY_COMPILE;
//        $this->config_dir = SMARTY_CONFIG;
//        $this->compile_check = true;
//        $this->caching = 1;
//        $this->cache_dir = SMARTY_CACHEDIR;
//        $this->left_delimiter  =  SMARTY_DLEFT;
//        $this->right_delimiter =  SMARTY_DRIGHT;
        $this->cache_lifetime = LIFTTIME;

    }
    function init(){

    }
}