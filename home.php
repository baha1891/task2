<?php 
    session_start();

    $user=$_SESSION["user"];
    $family=$_SESSION["family"];
    $password=$_SESSION["password"];
    $email_mobile=$_SESSION["email_mobile"];
    $birthday=$_SESSION["birthday"];
    $gender=$_SESSION["gender"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: black;
            height: 50vh;
        }
        p{
            color: white;
            padding: 20px;
            line-height: 40px;

        }
    </style>
</head>
<body>

    <div>
        <p>
            Hello mr/ms <em><?php echo $user." ".$family ;?></em>, you are welcome <br>
            please check your information last time : <br>
            your full name is : <?php echo $user." ".$family ;?> <br>
            your communication way :  <?php echo $email_mobile ;?><br>
            your password : <?php echo $password ;?><br>
            yourbirthday is : <?php echo $birthday ;?><br>
            your gender is : <?php echo $gender ;?><br>
        </p>
    </div>
    
</body>
</html>
