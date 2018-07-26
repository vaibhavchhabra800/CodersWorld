<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
#$http_referer2=$_SERVER['HTTP_REFERER'];

function gertuserfield($field)
{
    $queryasked="select '$field' from userlist where id='".$_SESSION['user_id']."'";
    if($queryresult=mysql_query($queryasked))
    {   $hereisans=mysql_result($queryresult,0,$field);
        if($hereisans)
        {
            return $hereisans;
        }
    }
}

?>