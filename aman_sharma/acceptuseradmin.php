<?php
$user___id=$_GET['sendid'];
$new = mkdir('../Users' . '/'.$user___id, 0777);
$new = mkdir('../Users' . '/'.$user___id.'/'.'files'  , 0777);
$new = mkdir('../Users' . '/'.$user___id.'/'.'filesadmin'  , 0777);

if ( $new ) {
    echo '<p>Directory created</p><br>';

    include('../gogo/connect.inc.php');
    $query2="UPDATE userlist SET is_active=1 WHERE id='$user___id';";
    $queryresult=mysql_query( $query2, $conn );

    if($queryresult)
    {
        echo 'Activated';
        mysql_close($conn);

    }
    else
    {
        echo 'not activated';
        mysql_close($conn);

    }
} else {
    echo '<p>Directory not created</p>';
}

?>

