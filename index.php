<?php
session_start();
if(isset($_SESSION["username"])) header("location: home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html,body{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: monospace;
        }
    </style>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://scontent-xsp1-3.xx.fbcdn.net/v/t1.15752-9/209723446_554872582305942_1897949822701946274_n.png?_nc_cat=107&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeGd8UM5oa2k9c4-Rn9Zzf2iEgVp1r5maCYSBWnWvmZoJl9IVrmPqyfBN94rSMaXWJ_D0wBoX42wPW91VajIdxIS&_nc_ohc=BDSDXzzNYG8AX-za5Lp&_nc_ht=scontent-xsp1-3.xx&oh=2abbb5b9fc0abcfaa5b06a1f921cab9c&oe=60E4CED1">
    
</head>
<body>
    <?php
        include('login.php');
       
    ?>
</body>
</html>