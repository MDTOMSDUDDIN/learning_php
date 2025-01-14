<?php
session_start([
    'cookie_lifetime'=>120,
]);
if(isset($_POST['username']) && isset($_POST['password'])){
    if('admin'==$_POST['username'] && 'rabbit'==$_POST['password']){
        $_SESSION['loggedin']=true;
    }else{
        $_SESSION['loggedin']=false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form using session </title>

    
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
                if(true ==$_SESSION['loggedin']){
                    echo " Hello Admin ,Loggin Below";
                }else{  
                    echo" Hello stranger ,Loggin Below";
                }
                ?>
               
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 columm-offset-20">
            <form action="" method="post">
                <label for="" name="username">UserName</label>
                <input type="text" name="username" placeholder="UserName">
                <label for="" name="password">Password</label>
                <input type="password" name="password">
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>