<?php
error_reporting(0);
set_time_limit(0);
date_default_timezone_set('Europe/London');
require_once('../../../include/config.php');


/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . '../../Classes/');
/** PHPExcel_IOFactory */
require_once('../../../library/PHPExcel/IOFactory.php');


?>