<?php
$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');
if(!defined('base_url')) define('base_url','http://localhost/mvogms/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
if(!defined('dev_data')) define('dev_data',$dev_data);
if(!defined('DB_SERVER')) define('DB_SERVER',"marvaxx-db.c9tlliyq9eni.us-east-2.rds.amazonaws.com");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"admin");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"marihatag");
if(!defined('DB_NAME')) define('DB_NAME',"mvogms_db");
?>