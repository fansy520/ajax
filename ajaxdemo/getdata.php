<?php
	
	header("Content-type:text/html;charset=gb2312");
	//��ݿ�������Ϣ(�û���,���룬��ݿ����ǰ׺��)
	$cfg_dbhost = "localhost";
	$cfg_dbuser =	"root";
	$cfg_dbpwd = "admin";
	$cfg_dbname = "test";
	$cfg_dbprefix = "";

	$link = mysql_connect($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd);
	mysql_select_db($cfg_dbname);
	mysql_query("set names gbk");
	//��ֹ����
	$keywords = iconv("utf-8","gb2312//IGNORE",$_POST['keywords']);
	//ƥ������Ĺؼ�����صı��⣬���������������Խ�������ǰ��
	$sql = "select title from ".$cfg_dbprefix."article where title like '%".$keywords."%' order by click desc limit 0,9;";
	//echo $sql;
	$res = mysql_query($sql,$link);
	
	$mNums = mysql_num_rows($res);
	//echo $mNums;
	$row=mysql_fetch_array($res);
	if($mNums<1){
		echo "no";
		exit();
	}else if($mNums==1){
		//����json���
		echo "[{'keywords':'".iconv_substr($row['title'],0,14,"gbk")."'}]";
	}else{
		$result="[{'keywords':'".iconv_substr($row['title'],0,14,"gbk")."'}";
		while($row=mysql_fetch_array($res)){
			$result.=",{'keywords':'".iconv_substr($row['title'],0,14,"gbk")."'}";
		}
		$result.=']';
		echo $result;
	}
	mysql_free_result($res);

?>

