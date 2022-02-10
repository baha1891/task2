<?php

    session_start();


    if(isset($_POST['register'])){
        if(!empty($_POST['first-name'])){
            if (preg_match("/^[a-z_A-Z]{2,20}+$/",$_POST['first-name'])){
                $_SESSION["user"]=$_POST['first-name'];
            }
            else{
                echo "first name must be character (2-20) and you can use (_) <br>";
            }
        }else{
            echo "please insert your first name <br>";
        }
        if(!empty($_POST['last-name'])){
            if (preg_match('/^[a-z_A-Z]{2,20}+$/',$_POST['last-name'])){
                $_SESSION["family"]=$_POST['last-name'];
                
            }
            else{
                echo "last name must be character (2-20) and you can use (_) <br>";
            }

        }else{
            echo "please insert your last name <br>";
        }

        if(!empty($_POST['email-mobile'])){
            if (filter_var($_POST['email-mobile'],FILTER_VALIDATE_EMAIL)){

                $_SESSION["email_mobile"]=$_POST['email-mobile'];
            }
            elseif ((int)$_POST['email-mobile']){
                
                if (10<=strlen($_POST['email-mobile'])||strlen($_POST['email-mobile'])>14){
                $_SESSION["email_mobile"]= $_POST['email-mobile'];
                }
                else{
                    echo "please your number must be just digits with length (10-14)numbers <br>";
                    }}
            else{
                echo "please correct your entry it must be valid email or valid phone num <br>";
            }
        
        
        }
        else{
            echo "enter correct email or phone number with 10-14 digit <br>";}

        if(!empty($_POST['gen'])){

            if ($_POST['gen']=="male"||$_POST['gen']=="female"){

                $_SESSION["gender"]=$_POST['gen'];
            }
            else{
                echo "please dont try to be smart <br>";
            }
        }else{
            echo "please choose your gender <br>";
        }



        
        if(!empty($_POST['up-password'])){
            $password = $_POST['up-password'];
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
            if(!$uppercase || !$lowercase || !$number || !$specialChars ||strlen($password) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number,dont have scripting, and one special character.';
            }else{
                $_SESSION["password"]=$_POST['up-password'];
                echo "yes";
            }

            
            
        }else{
            echo "please insert password <br>";
        }




        
        if (((0<((int)$_POST['birth-day']))&&(((int)$_POST['birth-day'])<32))&&((0<((int)$_POST['birth-month']))&&(((int)$_POST['birth-month'])<13))&&((1919<((int)$_POST['birth-year']))&&((int)$_POST['birth-year'])<2023)){
            $_SESSION["birthday"]=$_POST['birth-day']."/".$_POST['birth-month']."/".$_POST['birth-year'];
        }
        else{
            echo "please dont try to be smart <br>";
        }
        
        if(($_SESSION["user"]=$_POST['first-name'])&&($_SESSION["family"]=$_POST['last-name'])&&($_SESSION["password"]=$_POST['up-password'])&&( $_SESSION["email_mobile"]=$_POST['email-mobile'])&&($_SESSION["gender"]=$_POST['gen'])&&($_SESSION["birthday"]=$_POST['birth-day']."/".$_POST['birth-month']."/".$_POST['birth-year'])){
        header("location:home.php");
        }

    
    }
    else {
        echo "If you invite me to dinner, I will give you the page information <br> ";
    }

?>