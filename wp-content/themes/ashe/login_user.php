<?php
/* Template Name: User Login Template */

use function Sodium\compare;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
                
            }
        }
    </style>
</head>

<body>

</body>
</html>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post" action="">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">User Login</p>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="text" name="username" placeholder="Username" class="form-control form-control-lg"/> 
                        <!-- <input type="email" id="form3Example3" class="form-control form-control-lg" /> -->
                        <label class="form-label" for="form3Example3">User Name</label>
                    </div>


                    <div class="form-outline mb-3">
                        <!-- <input type="password" id="form3Example4" class="form-control form-control-lg" /> -->
                        <input type="password" name="password" placeholder="Password" class="form-control form-control-lg"/>
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"value="Login">
                        <!-- <button type="submit" name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button> -->
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="http://mydemo.local/new-user/" class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>



<?php

?>


<?php

 if(isset($_POST['submit'])){
        // print_r($_POST); 
     $user=$_POST['username'];
    //  $user_pass= md5($_POST['password']);

//  $encuser_pass = wp_hash_password( $_POST['password'] );

    echo "<pre>";
    print_r($encuser_pass);
    // die;
    
    $check_user="select * from wp_users WHERE user_login='$user'";
  
    $query = $wpdb->get_row($check_user);

    // echo "<pre>";
    // print_r($query);
    // die;

    // $user = get_user_by( 'login', $username );
    if ( $user && wp_check_password( $_POST['password'], $query->user_pass, $query->ID ) ) {
        echo "<script>alert('Login Successfully..')</script>";
        wp_redirect( get_site_url().'/dashboard/');
    } else {
        echo "<script>alert('Username or Password is wrong')</script>";
             return false;
        die;
    }
   
    // if ( $query != null ) {
    //         echo "<script>alert('Login success')</script>";
    //         wp_redirect( get_site_url().'/dashboard/');
    //         return true;
    //         exit;
    //     } else {
    //         echo "<script>alert('Username or Password is wrong')</script>";
    //         return false;
    //     }
    

    // $run=$wpdb->get_results($check_user, ARRAY_A);
    // print_r($run);
    
    // if(count($run))
    // {   
    //     $_SESSION['username']= $user;

    // // wp_redirect( get_site_url().'/dashboard/');
    // //     exit;

    // }

    // else
    // {
    //     echo "<script>alert('Username or Password is wrong')</script>";
    // }


}       
?>

<?php

// if ( isset( $_POST['submit'] ) ) {
//     if ( !$_POST['username']  ) {
//         echo "You did not complete all of the required fields";
//     }
//      else { 
//         $username=$_POST['username'];
//         // print_r($username);
//         $password= md5( $_POST['password']);
//         // print_r($password);
//         $table_name = $wpdb->prefix . "users";
//         $query = $wpdb->get_row( "select * from wp_users WHERE user_login='$username'AND user_pass='$password"  );
//         if ( $query != null ) {
//             echo "Login success";
//             return true;
//         } else {
//             echo "incorrect password or username";
//             return false;
//         }
//     }
// }
    // $creds = array();
    // $creds['user_login'] = $_POST['username'];
    // $creds['user_password'] =md5( $_POST['password']);
    // $creds['remember'] = true;
    // $user = wp_signon( $creds, false );
    // if ( is_wp_error($user) )
    //     echo $user->get_error_message();
 

?>
