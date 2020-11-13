
<link rel="icon" href="https://i2.wp.com/makitweb.com/wp-content/uploads/2016/02/cropped-sitelogo.png?fit=32%2C32&#038;ssl=1" sizes="32x32" />
<link rel="icon" href="https://i2.wp.com/makitweb.com/wp-content/uploads/2016/02/cropped-sitelogo.png?fit=192%2C192&#038;ssl=1" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://i2.wp.com/makitweb.com/wp-content/uploads/2016/02/cropped-sitelogo.png?fit=180%2C180&#038;ssl=1" />
<meta name="msapplication-TileImage" content="https://i2.wp.com/makitweb.com/wp-content/uploads/2016/02/cropped-sitelogo.png?fit=270%2C270&#038;ssl=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!doctype html>
<html>
<head>
    <title>How to Auto populate dropdown with jQuery AJAX</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../jquery.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#sel_depart").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'getUsers.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#sel_user").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['name'];

                            $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");

                        }
                    }
                });
            });

        });
    </script>
</head>
<body>


        <div>Departments </div>
        <select id="sel_depart">
            <option value="0">- Select -</option>
        <option value='1' >Finance</option><option value='2' >IT</option><option value='3' >Marketing</option><option value='4' >Operational</option><option value='5' >Sales</option><option value='6' >Staff</option>        </select>
        <div class="clear"></div>

        <div>Users </div>
        <select id="sel_user">
            <option value="0">- Select -</option>
        </select>

</body>
</html>

<?php
 require('config.php');
 //2.khai báo truy vấn
 $sql = " SELECT * FROM department ";
 mysqli_set_charset($conn, ' UTH8');
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result))
 {
     echo " <option value ='".$row['id']. " '> ".$row['depart_name']."</option>";
 }
 ?>