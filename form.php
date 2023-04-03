<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
        $first_name = $_POST       ["first_name"];
        $last_name = $_POST        ["last_name"];
        $userName = $_POST         ["userName"];
        $email = $_POST            ["email"];
        $password = $_POST         ["password"];
        $confirm_password = $_POST ["confirm_password"];
    
                echo "Welcome". $first_name . " " . $last_name . "<br>";
                echo "Welcome, your email is". $email. "<br>";
    
        $password_length = strlen("$password");

                echo "The size of your password is". $password_length. "<br>";
                if ($password == $confirm_password) {
                    echo "Your password has matched";
                } else {
                    die("Your password does not match");
                }
                
    }else 
    {
        echo "Invalid request method";
    }
  
  ?>
    

</body>
</html>