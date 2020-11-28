<?php include("header.php");
include("main.php");
       $obj = new connection();
   {

$msg = "";
if (isset($_POST['register'])) {
$username = $_POST['username'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$passwordA = $_POST['pws1'];
$passwordB = $_POST['pws2'];

if($passwordA==$passwordB){

$sql = $obj->insert($username,$name,$mobile,md5($passwordA));
header("location:login.php");
}else{
$msg = "Password is not same please enter same password";
}
}
}

?>

<div>
    <div>
       <form action="registration.php" method="POST">
        <div class="container">
            <h1>REGISTRATION</h1>
            <hr>

            <label><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="username" id="username" required>

             <label><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>

            <label><b>Mobile</b></label>
            <input type="text" placeholder="Enter Mobile No." name="mobile" id="mobile" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pws1" id="pws1" required>

            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pws2" id="pws2" required>

            <button type="submit" class="registerbtn" name="register">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
</form>
    </div>
</div>

<!-- <script>
    $(document).ready(function() {
        $(".registerbtn").click(function() {
            var username = $("#username").val();
            var name = $("#name").val();
            var mobile = $("#mobile").val();
            var passA = $("#pws1").val();
            var passB = $("#pws2").val();
            // console.log($name);

            $.ajax({
                type: 'POST',
                url: 'main.php',
                data: {
                    username: username,
                    name: name,
                    mobile: mobile,
                    passA: passA,
                },
                success: function(msg) {
                    alert('form was submitted' + msg);
                    //$("#display").text("Total Cost is : " + msg);
                }
            });
        });
    });
</script> -->

