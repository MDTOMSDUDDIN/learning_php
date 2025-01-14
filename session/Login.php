<?php
session_start([
    'cookie_lifetime'=>120,
]);
$error=false;
// session_destroy();
if(isset($_POST['username']) && isset($_POST['password'])){
    if('admin' == $_POST['username'] && 'rabbit' == $_POST['password']){
        $_SESSION['loggedin']=true;
    }else{
        $error=true;
        $_SESSION['loggedin']=false;
    }
}


if(isset($_POST['logout'])){
    $_SESSION['loggedin']=false;
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM USING SESSION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" />
    <style>
        body {
            margin-top: 30px;
        }
        .contrainer{
            padding-right: 100px;
        }
    </style>
</head>
<body>
<div class="contrainer">
        <div class="row">
            <div class="column column-60 columm-offset-20">
                <h2>Simple Login Form </h2>
            </div>
        </div>



        <div class="row">
            <div class="column column-60 columm-offset-20">
                <?php
                if($error){
                    echo "<strong >user name and password does not match </strong> "."<br>";
                }
                if(true ==$_SESSION['loggedin']){
                    echo " Hello Admin ,Loggin Below";
                }else{  
                    echo" Hello stranger ,Loggin Below";
                }
                ?>
               
            </div>
        </div>
         
    <div class="row">

        <div class="column column-60 columm-offset-20">
            
            <?php 
            // echo md5('rabbit'); //a51e47f646375ab6bf5dd2c42d3e6181
            // echo sha1("rabbit");  //6d0ebbbdce32474db8141d23d2c01bd9628d6e5f
            if(false == $_SESSION['loggedin']):
            ?>

            <form action="" method="post">
                <label for="" name="username">UserName</label>
                <input type="text" name="username" placeholder="UserName">
                <label for="" name="password">Password</label>
                <input type="password" name="password">
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
            <?php
               else :
            ?>
            <form action="Login.php?Logout?ture" method="post">
                <input type="hidden" name="logout" value="1" >
                <button type="submit" class="btn btn-primary" name="submit">Logout</button>
            </form>
          <?php 
            endif ;
          ?>
        </div>
    </div>
        


</div>

</body>
</html>