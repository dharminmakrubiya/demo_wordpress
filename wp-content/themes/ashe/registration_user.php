<?php
/* Template Name: New User Registration Template */

?>

<?php

// Function to generate OTP
function generateNumericOTP($n) {

	$generator = "1357902468";
	$result = "";

	for ($i = 1; $i <= $n; $i++) {
		$result .= substr($generator, (rand()%(strlen($generator))), 1);
	}
	return $result;
}

?>


<?php


if (isset($_POST['register'])) {
    $n = 6;
    // print_r(generateNumericOTP($n));


$name = $_POST['your_name'];
  $email = $_POST['your_email'];
  $message = generateNumericOTP($n);

//php mailer variables
  $to = get_option('admin_email');
  $subject = "Varification OTP.....";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
 }
$sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if($sent) {
        
      }
      else  {

      }


    $username = $_POST['your_name'];
    $email = $_POST['your_email'];
    $password = $_POST['your_password'];
    $repeat_pwd = $_POST['your_repeat_password'];
    if (username_exists($username) == null && email_exists($email) == false) {
        
        $user_id = wp_create_user($username, $password,$email);

        $user = get_user_by('id', $user_id);


    }


?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">User Registration</p>
                                
                                <form method="post" class="mx-1 mx-md-4">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="your_name" id="form3Example1c" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="your_email" id="txtEmail" class="form-control" required/>
                                            <label class="form-label"  for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="your_password" id="txtPassword" class="form-control" required/>
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="your_repeat_password" id="txtConfirmPassword" class="form-control" required/>
                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row justify-content-center mb-4">
                                    <p class="small fw-bold mt-2 pt-1 mb-0">have an account? <a href="http://mydemo.local/login-user/" class="link-danger">Login</a></p>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    
                                        <button type="submit" name="register" onclick="return Validate()" class="btn btn-primary btn-lg">Register</button>
                                        
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function checkEmail() {
        var email = document.getElementById('txtEmail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
        alert('Please provide a valid email address');
        email.focus;
        return false;
        }
    }


    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        else {
            alert("Congratulations! Your Account Has been Successfully created..");
        }
        
    }
</script>