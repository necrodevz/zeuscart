<?php 
//***************** Do not Edit / Change anything in this file ********************// 
class Bin_Configuration extends Bin_Security {  
var $config = array();  
function Bin_Configuration() {  
$this->config["HOST"] = 'localhost';  
$this->config["USER"] = 'mystore';  
$this->config["PASSWORD"] = 'mystore';  
$this->config["DB"] = 'mystore';  
} }  
define("IMAGE2_WIDTH",800);  
define("IMAGE2_HEIGHT",868);  
define("IMAGE1_WIDTH",350);  
define("IMAGE1_HEIGHT",358);  
define("THUMB_WIDTH", 68);  
define("THUMB_HEIGHT",68);  
$_SESSION["base_url"]= 'http://kappy-d.kapildevprojects.com/sites/projects/ecommerce/zeuscart'; 
?>