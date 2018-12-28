<?php 
/*
union
*/

echo date('y-m-d H:i:s',time());
echo '<br>';
$id = $_GET['id']; 

#$temp_sql = "/home/ids/mytools/nginx/html/etest \"SELECT * FROM users where id=" . $id ."\"";
$temp_sql = "SELECT id FROM users where id=" . $id;
#$temp_sql = "./home/ids/intrusion_detect_BRANCH/dtest \"SELECT id FROM users where id=" . $id ."\"";
#$temp_sql = "./etest";
#$temp_sql = "/home/ids/intrusion_detect_BRANCH/dtest";
#$temp_sql = "./etest \"SELECT * FROM users where id=" . $id ."\"";
#$temp_sql = "./etest \"SELECT * FROM users where id=" . $id ."\" >out.txt";
print $temp_sql;

$file0 = 'work.txt';
$fp1 = fopen($file0, 'w');
fwrite($fp1, $temp_sql);
fclose($fp1);

$a = system("./etest",$out);
#$a = passthru($temp_sql,$out);
#$a = system("/home/ids/mytools/nginx/html/etest",$out);
print "</br>xxxxxxxxxxxx start print a xxxxxxxxxxxxxxxxxxx</br>";
print_r($a);
print "</br>xxxxxxxxxxxxx print out  xxxxxxxxxxxxxxxx</br>";
print_r($out);
print "</br>xxxxxxxxxxxx end  xxxxxxxxxxxxxxxxxxx</br>";


$file1 = 'result.txt';
$fp = fopen($file1, 'r');
#fwrite($fp, $content);
#$content = '';
#while(!feof($fp)){
    #$content = fread($fp);
$content = fgets($fp, 2);
#}
#print "</br>xxxxxxxxxxxx before content  xxxxxxxxxxxxxxxxxxx</br>";
echo $content;
#print "</br>xxxxxxxxxxxx after content  xxxxxxxxxxxxxxxxxxx</br>";
fclose($fp);

if ($content > 0)
{
    print "</br>xxxxxxxxxxxx content > 0,returning  xxxxxxxxxxxxxxxxxxx</br>";
    return;
}

$link = mysql_connect("127.0.0.1:10699","root","root");

mysql_select_db("web", $link); 

$q = "SELECT id FROM users where id=" . $id;

#mysql_query("SET NAMES GB2312");           
mysql_query("SET NAMES utf-8");           

$rs = mysql_query($q, $link);

if(!$rs){
    #print mysql_error();
}  
$ddd = False;
while($row = mysql_fetch_row($rs)){
    $ddd = True;
    echo "$row[0] $row[1] $row[2]<br>";
}

mysql_free_result($rs);
#if(!$ddd){
    $n1 = rand(0,26);
    $n2 = rand(0,26);
    $n3 = rand(0,26);
    $n4 = rand(0,26);

    #$xxx = ['a','abc','xxxba','aa','oioeiieuurre','wwwwwwwwwwwwwwww'];
    $xxx = ['a','b','x','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    print $xxx[$n1].$xxx[$n2].$xxx[$n3].$xxx[$n4];
#}

?> 

