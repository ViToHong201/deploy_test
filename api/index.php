<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        body{
            text-align:center;
            font-size: 20px;
        }
        .box{
            display: inline-block;
            padding: 20px 20px;
        }
        .box:hover{
            background-color : lightblue;
            font-size: 30px;
        }
    </style>
</head>
<body>
    
<h1>Bảng Cửu Chương</h2>
    <?php
     for($so = 1; $so < 11; $so++){
        echo"<div class ='box'>";
        for($so_nhan = 1; $so_nhan < 11; $so_nhan++){
            echo "$so * $so_nhan = ".$so*$so_nhan."<br>";
        }  
        echo"</div>";
     }
    ?>

</body>
</html>