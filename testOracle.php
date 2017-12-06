<?php
/**
 * Created by PhpStorm.
 * User: xiaochengzhao
 * Date: 2017-4-20
 * Time: 14:23
 */
try{
	$id = new PDO( "oci:dbname=//192.168.1.47:1521/bi", 'jiefangqu', 'jiefangqu2bitest',array());
	echo "连接成功";
}catch(PDOException $e){
	echo $e->getMessage();
}
//Echo time();
//$query = 'select id from test';
//$stid = oci_parse($conn, $query);
//$r = oci_execute($stid, OCI_DEFAULT);
//while($row = oci_fetch_array($stid, OCI_RETURN_NULLS)) {
//    Echo $row['ID'];
//}
