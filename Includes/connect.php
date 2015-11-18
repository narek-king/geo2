<?php
/**
 * Created by PhpStorm.
 * User: Dditor
 * Date: 11/18/2015
 * Time: 11:53 AM
 */

 $con = mysql_connect("localhost","kingam_narek","!Mh46PTifpT[");
mysql_query('SET NAMES `utf8`');
mysql_query("set character_set_client='utf8'");
mysql_query("set character_set_results='utf8'");
mysql_query("set collation_connection='utf8_bin'");
mysql_select_db("kingam_geo") or die(mysql_error());

?>