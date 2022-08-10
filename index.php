<!DOCTYPE html>
<html>
<body>
<?php   
$password= "pass123";  //at time of entering password 
$passwordenc=md5($password); //password to send in db and than to fetch from db to compare

if (isset($_POST['password']) && !empty($_POST['password']))
{
    $new_password=$_POST['password'];
    if(md5($new_password)==$passwordenc)
    {
        echo "<br> Correct password and send to web site ";
    }
    else{
        echo "<br> Incorrect password redirect to login ";
    }
}
?>  
<form action="index.php" method="post">
<input type="text" name="password">
<br>
<input type="submit" >
</form> 

</body>
</html>






<?php 
// session_start();
// session_regenerate_id(true);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


// include("pdo_db.php");
// if(isset($_POST['login'])){
//     $entered_email=$_POST['email'];
//     $entered_pass=MD5($_POST['password']);
//     $sql="select * FROM user WHERE email = ?";
//     $result=$conn->prepare($sql);
//     $result->execute(array($entered_email));
//     foreach($result as $row){
//         $email=$row['email'];
//         $password=$row['password'];
//         if($email == $entered_email && $password == $entered_pass){
//             $_SESSION["user"]= $row['user_name'];
//             $_SESSION["email"]=$row['email'];
//             $_SESSION["id"]=$row['id'];
//             header("Location: index.php"); 
//         }
//         else{
//             echo ('wrong email or password');
//         }
//     }


// }

?>

<!-- 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stickers</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row header">
            <div class="col-md-6 ">
                <h3 class="header_heading">
                    <a href="index.php">
                        <img src="images/back.png" alt="">
                    </a>
                    Sign In
                </h3>
            </div>

        </div>
        <div class="form_data">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size:35px;font-weight:700;">
                        Let Sign you in
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size:20px;font-weight:400;">
                        Welcome Back, <br> You have been missed.
                    </h3>
                </div>
            </div>
            <div class="row">

                <form action="" class="login_form" method="post">
                    <input type="email" name="email" placeholder="Email ,phone & username"> <br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <div style="display:flex;justify-content:end;"><a href="recover.php" class="forget">Forgot Password ?</a></div>
                    <input type="submit" name="login" value="Sign In">
                    <div class="row">
                        <div class="col-md-5">
                            <hr>
                        </div>
                        <div class="col-md-2">
                            <h3 style="font-size:22px;font-weight:500;">
                                or
                            </h3>
                        </div>
                        <div class="col-md-5">
                            <hr>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5" style="padding-left:0px;padding-right:0px;">
                            <button class="google_btn"><img src="images/google.png" alt=""
                                    >Google</button>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5" style="padding-left:0px;padding-right:0px;">
                            <button class="facebook_btn"><img src="images/facebook.png" alt=""
                                    >Facebook</button>
                        </div>

                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="donot_div">
                            Don’t have an account ? <a href="signup.php">Sign Up</a>
                            </h3>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html> -->
