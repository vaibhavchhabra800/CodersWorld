<?php
include("../gogo/connect.inc.php");


$idtodelte=$_GET['sendid'];
$query2=" DELETE FROM userlist  WHERE id='$idtodelte';";
if(mysql_query( $query2, $conn ) )
{
    function removeFolder($folder)
    {
        if(is_dir($folder)==true)
        {
            $folderContents=scandir($folder);
            unset($folderContents[0],$folderContents[1]);
            foreach($folderContents as $content=>$contentName)
            {
                $currentpath=$folder.'/'.$contentName;
                $filetype=filetype($currentpath);
                if ($filetype=='dir')
                {
                    removeFolder($currentpath);
                }
                else
                    unlink($currentpath);
            }
            unset($folderContents[$content]);
        }
        rmdir($folder);

    }
    removeFolder('../Users/'.$idtodelte);
        //delete this folder if exists  down

    $target_dirtodelete='./recievedfiles/'.$idtodelte;
    if (file_exists($target_dirtodelete)) {
        removeFolder('./recievedfiles/'.$idtodelte);

    } else {
        //do nothing
        }




    echo "Folders have been deleted";
   // header('Location:aman.php');

}

else
{
    mysql_error();
}
    mysql_close($conn);





?>