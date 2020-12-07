<?php
    
    include("handlers/config.php");
    include("handlers/Account.php");
	include("handlers/Constants.php");


    $account = new Account($con);
    
    include("handlers/register-handler.php");
    include("handlers/login-handler.php");

    
	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/register.css">
         <link rel="shortcut icon" href="images/iconlogo.png">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/register.js"></script>
        <title>Welcome to Pharmaprix</title>
        
    </head>
    
    <body>
        
        <?php
            if(isset($_POST['registerButton'])) {
                echo '<script>
                        $(document).ready(function() {
                        $("#loginForm").hide();
                        $("#registerForm").show();
                        });
        
                    </script>';
            }else{
                 echo '<script>
                        $(document).ready(function() {
                        $("#loginForm").show();
                        $("#registerForm").hide();
                        });
        
                    </script>';
            }
        ?>
        
        
        <div id="background">
            <div id="loginContainer">
                <div id="inputContainer">

                    <form id="loginForm" action="register.php" method="POST">

                        <h2> Login to your account </h2>
                        <p>
                            <?php echo $account->getError(Constants::$loginFailed); ?>
                             <label for="loginUserName">Username</label>
                             <input id="loginUserName" name="loginUserName" type="text" placeholder="e.g. dianaH" value="<?php getInputValue('loginUserName') ?>" required>
                        </p>
                        <p>
                            <label for="loginPassword"> Password </label>
                            <input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
                        </p>

                        <button type="submit" name="loginButton">LOG IN</button>
                        
                        <div class="hasAccountText">
                            <span id="hideLogin"> Don't have an account yet? Signup here. </span>
                        </div>

                    </form>


                    <form id="registerForm" action="register.php" method="POST">

                        <h2> Create your free account </h2>
                        <p>
                            <?php echo $account->getError(Constants::$usernameCharacters); ?>
                            <?php echo $account->getError(Constants::$usernameTaken); ?>
                             <label for="userName">Username</label>
                             <input id="username" name="username" type="text" placeholder="e.g. dianaH" value="<?php getInputValue('username') ?>" required>
                        </p>
                        <p>
                             <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                             <label for="firstName">First Name</label>
                             <input id="firstName" name="firstName" type="text" placeholder="e.g. Diana"  value="<?php getInputValue('firstName') ?>"  required>
                        </p>

                        <p>
                            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                             <label for="lastName">Last Name</label>
                             <input id="lastName" name="lastName" type="text" placeholder="e.g. Haidar"  value="<?php getInputValue('lastName') ?>"  required>
                        </p>

                        <p>
                            <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                            <?php echo $account->getError(Constants::$emailInvalid); ?>
                            <?php echo $account->getError(Constants::$emailTaken); ?>
                             <label for="email">Email</label>
                             <input id="email" name="email" type="email" placeholder="diana.haidar01@lau.edu.lb"  value="<?php getInputValue('email') ?>"  required>
                        </p>

                        <p>
                             <label for="email2">Email</label>
                             <input id="email2" name="email2" type="email" placeholder="diana.haidar01@lau.edu.lb"  value="<?php getInputValue('email2') ?>"  required>
                        </p>

                        <p>
                            <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                            <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                            <?php echo $account->getError(Constants::$passwordCharacters); ?>
                            <label for="password"> Password </label>
                            <input id="password" name="password" type="password" placeholder="Your Password" required>
                        </p>

                        <p>
                            <label for="password2"> Confirm Password </label>
                            <input id="password2" name="password2" type="password" placeholder="Your Password" required>
                        </p>

                        <button type="submit" name="registerButton">SIGN UP</button>
                        
                        <div class="hasAccountText">
                            <span id="hideRegister"> Already have an account? Login here </span>
                        </div>


                    </form>
                </div>
                <div id="loginText">
                    <h1>It is better to stop something bad from happening than it is to deal with it after it has happened.</h1>
                    <h2> Take care of your family</h2>
                    <ul>
                        <li> Voted best Pharmacy website </li>
                        <li> From the Pharmacy to you door steps </li>
                    </ul>
                </div>
            </div>
        </div>
    
    </body>
</html>