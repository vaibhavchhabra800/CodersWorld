<?php
include('db.php');
if($_POST)
{
    $q = mysqli_real_escape_string($connection,$_POST['search']);
    $strSQL_Result = mysqli_query($connection,"select id,full_name,username from userlist where full_name like '%$q%' or username like '%$q%' order by id LIMIT 5");
    while($row=mysqli_fetch_array($strSQL_Result))
    {
        $fullname   = $row['full_name'];
        $username2      = $row['username'];
        $b_fullname = '<strong>'.$q.'</strong>';
        $b_username2   = '<strong>'.$q.'</strong>';
        $final_fullname = str_ireplace($q, $b_fullname, $fullname);
        $final_username2 = str_ireplace($q, $b_username2, $username2);
        ?>
            <div class="show" align="left">
                <img src="usericon.jpg" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username2; ?></span><br/><?php echo $final_username2; ?><br/>
            </div>
        <?php
    }
}
?>