<?php
session_start();
include("header.php");
include("main.php");
$obj = new connection();
{

if (isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = $_POST['psw'];
         if( $username=='admin' && $password=='admin123@')
         {
                 $sql = $obj->fetch($username,$password);
                 $_SESSION['username']=$username;
               header("location:admin.php");
         }
         else{
                $_SESSION['username']=$username;
               header("location:user.php");
           }  


}
}

?>

<div>
    <div>
        <form action="login.php" method="POST">
            <div class="container">
                <h1>LOGIN</h1>
                <hr>

                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <button type="submit" class="btn" name="login">Login</button>
            </div>

            <div id="display" style="text-align: center;"></div>

            <div class="container signin">
                <p>Already have an account? <a href="registration.php">Sign up</a>.</p>
            </div>
        </form>

    </div>
</div>

<?php include("footer.php"); ?>