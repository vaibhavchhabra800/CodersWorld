    <!DOCTYPE html>
    <head lang="en">
    <meta charset="UTF-8">

    <link rel="icon" href="../HelloWorldFavicon.jpg">
    <title>HELLO WORLD</title>

    <script src="../jquery.js"></script>



    <!-- JQQUEY EFFECTS FILE -->
    <script type="text/javascript" src="../jquery%20effects.js">

    </script>

    <link rel="stylesheet" type="text/css" href="../stylevcmainpage.css">
        <link rel="stylesheet" type="text/css" href="./aman_sharma.css">
        <link rel="stylesheet" type="text/css" href="./searchstlye.css">


</head>

    <body id="body">

    <?php
    session_start();
    ob_start();

    if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
    {


        if ($_SESSION['user_id'] == 3)
        {
            //header("Location:../aman_sharma/aman.php");

        } else {
            header("Location:../NewUser/user1.php");
            exit();
        }
    }
    else
    {
        header('Location:../in2dex.php');
    }

    ?>
    <div id="TopFixedPlace">

    <a href ="../in2dex.php">

        <img alt="Hello World Logo" id="HelloWorldLogo"   src="../hwlogo.jpg" >

    </a>


    <div id="mainlinks">
        <p>
            <a  id="LOGINREGISTER" href="../gogo/logout.php">LOG OUT</a>


    </div>
    </div>


<br><br><br><br><br><br>
<br>
<br>
<br>
<div>
<div id="sendafile" class="myfilesadminfiles">Send File</div>
    <br>

    <form method="post" action="./adminupload.php" enctype="multipart/form-data" id="uploadmiddle" >

    Select file to upload:<br><br>

        <?php
        $content ='<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function()
{
var searchid = $(this).val();
var dataString = \'search=\'+ searchid;
if(searchid!=\'\')
{
    $.ajax({
    type: "POST",
    url: "search.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;
});

jQuery("#result").live("click",function(e){
    var $clicked = $(e.target);
    var $name = $clicked.find(\'.name\').html();
    var decoded = $("<div/>").html($name).text();
    $(\'#searchid\').val(decoded);
});
jQuery(document).live("click", function(e) {
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut();
    }
});
$(\'#searchid\').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>

<style type="text/css">
    .content{
        width:900px;
        margin:0 auto;
    }
    #searchid
    {
        width:500px;
        border:solid 1px #000;
        padding:10px;
        font-size:14px;
    }
    #result
    {
        position:absolute;
        width:500px;
        padding:10px;
        display:none;
        margin-top:-1px;
        border-top:0px;
        overflow:hidden;
        border:1px #CCC solid;
        background-color: white;
    }
    .show
    {
        padding:10px;
        border-bottom:1px #999 dashed;
        font-size:15px;
        height:50px;
    }
    .show:hover
    {
        background:#4c66a4;
        background:#4c66a4;
        color:#FFF;
        cursor:pointer;
    }
</style>

<div class="content">

<input type="text" class="search"  name="searchherevc" id="searchid" placeholder="Search for people" /><br />

<div id="result"></div>
</div>';
        $pre = 1;
        ?>

        <p>
            <?php if(!isset($pre)) {;?>
        <pre>
        <?php print_r($content);

        ?>
      </pre>
    <?php }else{ ?>
        <?php print_r($content);

        ?>
    <?php } ?>
        </p>




        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Send File" name="submit">

    </form>

</div>
<br>
<br>
<br>


<?php

include('main_files_location.php');

?>

    <div id="uploadsdiv" >
        <div class="myfilesadminfiles">Recieved Files</div>
        <br>
        <table id ='uploads'>
            <tr id="tbchnggreem">
                <th class="th">File Name</th>
                <th class="th">Date</th>
                <th class="th">Sent By</th>
                <th class="th">Delete File</th>
            </tr>

            <?php

            include('../gogo/connect.inc.php');


            $query2="select * from userfiles where by_admin=0;";
            $queryresult=mysql_query( $query2, $conn );

            if($queryresult)
            {
                while ($row = mysql_fetch_array($queryresult, MYSQL_ASSOC))
                {
                    $file_name = $row['file_name'];
                    $date_added = $row['date_added'];
                    $sent_by = $row['sent_by'];

                    ?>

                    <tr class="tbhovchngcol">

                        <td class="td"><a href ="./recievedfiles/<?php echo $sent_by?>/<?php echo $file_name ?>"><?php echo $file_name?></a></td>
                        <td class="td"><?php echo $date_added ?></td>
                        <td class="td"><?php echo $sent_by ?></td>
                        <td class="td"><a href="deleteafile.php?filetobedeleted=./recievedfiles/<?php echo $sent_by ?>/<?php echo $file_name; ?>&filetobedeletedname=<?php echo $file_name; ?>&sent_by=<?php echo $sent_by; ?>"><img id="deletefile" src="../teamfotos/Close-icon.png"></a></td>
                    </tr>


                <?php
                }
            }
            else{
                die("Couldn't get data ".mysql_error());
            }
            mysql_query($query2);

            mysql_close($conn);


            ?>


        </table>

    </div>
<br>
<br>
<br>
<br>


    <div id="uploadsdiv" >
        <div class="myfilesadminfiles">ALL USERS</div>
        <br>
        <table id ='userss'>
            <tr id="tbchnggreem">
                <th class="th">id</th>
                <th class="th">Full Name</th>
                <th class="th">User Name</th>
                <th class="th">Facebook id</th>
                <th class="th">Delete him</th>
            </tr>

            <?php

            include('../gogo/connect.inc.php');


            $query2="select * from userlist where is_active=1;";
            $queryresult=mysql_query( $query2, $conn );

            if($queryresult)
            {
                while ($row = mysql_fetch_array($queryresult, MYSQL_ASSOC))
                {
                    $user__id = $row['id'];
                    $full__name = $row['full_name'];
                    $user__name = $row['username'];
                    $fb__id = $row['fb_id'];
                    $is__active = $row['is_active'];

                    ?>
                    <tr class="tbhovchngcol">

                        <td class="td"><?php echo $user__id ?></td>
                        <td class="td"><?php echo $full__name ?></td>
                        <td class="td"><?php echo $user__name ?></td>
                        <td class="td"><?php echo $fb__id ?></td>
                        <td class="td"><a href="deleteuseradmin.php?sendid=<?php echo $user__id ?>"><img id="deletefile" src="../teamfotos/Close-icon.png"></a><td>
                    </tr>


                <?php
                }
            }
            else{
                die("Couldn't get data ".mysql_error());
            }
            mysql_query($query2);

            mysql_close($conn);


            ?>


        </table>

    </div>
<br>

<br>
    <br><br><br>
<!--
//Requesting users
-->

    <div id="uploadsdiv" >
        <div class="myfilesadminfiles">Requesting USERS</div>
        <br>
        <table id ='userss'>
            <tr id="tbchnggreem">
                <th class="th">id</th>
                <th class="th">Full Name</th>
                <th class="th">User Name</th>
                <th class="th">Facebook id</th>
                <th class="th">Allow him</th>
                <th class="th">Delete him</th>
            </tr>

            <?php

            include('../gogo/connect.inc.php');


            $query2="select * from userlist where is_active=0;";
            $queryresult=mysql_query( $query2, $conn );

            if($queryresult)
            {
                while ($row = mysql_fetch_array($queryresult, MYSQL_ASSOC))
                {
                    $user__id = $row['id'];
                    $full__name = $row['full_name'];
                    $user__name = $row['username'];
                    $fb__id = $row['fb_id'];
                    $is__active = $row['is_active'];

                    ?>
                    <tr class="tbhovchngcol">

                        <td class="td"><?php echo $user__id ?></td>
                        <td class="td"><?php echo $full__name ?></td>
                        <td class="td"><?php echo $user__name ?></td>
                        <td class="td"><?php echo $fb__id ?></td>
                        <td class="td"><a href="acceptuseradmin.php?sendid=<?php echo $user__id ?>"><img id="deletefile" src="../teamfotos/tick.png"></a></td>
                        <td class="td"><a href="deleteuseradmin.php?sendid=<?php echo $user__id ?>"><img id="deletefile" src="../teamfotos/Close-icon.png"></a></td>
                    </tr>




                <?php
                }
            }
            else{
                die("Couldn't get data ".mysql_error());
            }
            mysql_query($query2);

            mysql_close($conn);


            ?>


        </table>

    </div>


    <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<footer id="footer">
    <br>
    <p id="contactus">CONTACT US</p>

    <a id="end" href="https://www.facebook.com/programmerscore/?fref=ts">
        <img src="../facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png" id="fblastlogo">

    </a>
    <br><br>

    <p id ="reportbug">Report a bug:<br><p id="jmail">jaintanisha01@gmail.com</p></p>
    <p id="copyright">
        © 2016 HELLO WORLD All Rights Reserved.

    </p>


</footer>


</body>
</html>
