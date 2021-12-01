<?php

// CITATION: https://phppot.com/php/secure-remember-me-for-login-using-php-session-and-cookies/

session_start();

require_once "Auth.php";
require_once "Util.php";

$auth = new Auth();
$db_handle = new DBController();
$util = new Util();

require_once "authCookieSessionValidate.php";

if ($isLoggedIn) {
    $util->redirect("index.php");
}

if (! empty($_POST["login"])) {
    $isAuthenticated = false;
    
    $username = $_POST["member_name"];
    $password = $_POST["member_password"];
    
    $user = $auth->getMemberByUsername($username);
    
    if (!empty($user)) {
        if (password_verify($password, $user[0]["member_password"])) {
            $isAuthenticated = true;
        }
    }
    
    if ($isAuthenticated) {
        $_SESSION["member_id"] = $user[0]["member_id"];
        
        // Set Auth Cookies if 'Remember Me' checked
        if (! empty($_POST["remember"])) {
            setcookie("member_login", $username, $cookie_expiration_time);
            
            $random_password = $util->getToken(16);
            setcookie("random_password", $random_password, $cookie_expiration_time);
            
            $random_selector = $util->getToken(32);
            setcookie("random_selector", $random_selector, $cookie_expiration_time);
            
            $random_password_hash = password_hash($random_password, PASSWORD_DEFAULT);
            $random_selector_hash = password_hash($random_selector, PASSWORD_DEFAULT);
            
            $expiry_date = date("Y-m-d H:i:s", $cookie_expiration_time);
            
            // mark existing token as expired
            $userToken = $auth->getTokenByUsername($username, 0);
            if (! empty($userToken[0]["id"])) {
                $auth->markAsExpired($userToken[0]["id"]);
            }
            // Insert new token
            $auth->insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date);
        } else {
            $util->clearAuthCookie();
        }
        $util->redirect("index.php");
    } else {
        $message = "Invalid Login";
    }
}
?>
<style>

.field-group {
    margin-top: 15px;
}

.input-field {
    padding: 12px 10px;
    width: 100%;
    border: #A3C3E7 1px solid;
    border-radius: 2px;
    margin-top: 5px
}

.form-submit-button {
    background: #3a96d6;
    border: 0;
    padding: 10px 0px;
    border-radius: 2px;
    color: #FFF;
    text-transform: uppercase;
    width: 100%;
}

</style>
<!DOCTYPE html>
<html>
    <head>
        <title>Netflix Nowledge</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color:#434343">
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="control.php" style="color:red"><strong>Netflix Nowledge</strong></a>
                </div>
            </nav>
        </header>
            <div class="row justify-content-center" style="margin-top:3%;">
                <h1 style="text-align:center; color:white; margin-bottom:2%">Login</h1>
                <form action="" method="post" style="width:40%; padding: 40px 50px 50px 50px; background: white;">
                    <div class="error" style="text-align: center;color: #FF0000;">
                        <?php if(isset($message)) { echo $message; } ?>
                    </div>
                    <div class="field-group">
                        <div>
                            <label for="login">Username</label>
                        </div>
                        <div>
                            <input name="member_name" type="text"  class="form-control" style="width: 100%;" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
                        </div>
                    </div>
                    <div class="field-group">
                        <div>
                            <label for="password">Password</label>
                        </div>
                        <div>
                            <input name="member_password"class="form-control" type="password" style="width: 100%;" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
                        </div>
                    </div>
                    <div class="field-group">
                        <div>
                            <input type="checkbox" name="remember" id="remember"
                                <?php if(isset($_COOKIE["member_login"])) { ?> checked
                                <?php } ?> /> 
                                <label for="remember-me">Remember me</label>
                        </div>
                    </div>
                    <div class="field-group">
                        <div>
                            <input type="submit" name="login" value="Login"
                                class="btn btn-danger align-center px-5 mt-3"></span>
                        </div>
                    </div>
                </form>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
