<?php

$dbFile=dirname(__FILE__).'/blog.db';
$sqlFile=dirname(__FILE__).'/schema.mysql.sql';

@unlink($dbFile);
$db=new PDO('mysql:'.$dbFile);
$sqls=file_get_contents($sqlFile);
foreach(explode(';',$sqls) as $sql)
{
	if(trim($sql)!=='')
		$db->exec($sql);
}
