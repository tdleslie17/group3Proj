<?php 
    include_once('php/includes/session_top.php');
/***************************************
* Authors: Ibraheem, Mathew, Collin, Tim
* Date: February 15, 2019
* Purpose: Login Page
* Requires: Requires getUsers(), getUsername(), getCustomerId()
****************************************/

include_once('php/includes/functions.php');

$error_msg = '';

if (isset($_POST['submit'])) {

    $agent_list = getUsers('users.txt');
    
    $customer_list = getUsers('customers.txt');
    
    $getUsername_list = getUsername('customers.txt');

    if (isset($agent_list[$_POST["username"]])) {

        if ($agent_list[$_POST['username']] === $_POST["password"]){
            // print("You are logged in!");
            $_SESSION["agent_logged_in"] = true;

            header("Location: http://127.0.0.1:8020/newAgent.php");
            
        } else {
            $error_msg .= 'That was not a correct username or password, please try again.';
            // print("<span style='color:red;'>That was not a correct username or password, please try again.</span>");
        }
    } 
    // else {
    //     print("<span style='color:red;'>Please enter a correct user name or password, try again. </span>");
    // }
    elseif (isset($customer_list[$_POST["username"]])) {
        if ($customer_list[$_POST["username"]] === $_POST["password"]){

            $currentCust = $getUsername_list[$_POST['username']];

            $sql = "SELECT CustomerId FROM customers WHERE CustFirstName = '$currentCust' ";

            $customer_id = getCustomerId($sql);

            $_SESSION["customer_logged_in"] = true;

            $_SESSION["customer_logged_in_id"] = $customer_id['CustomerId'];

            // echo $customer_id['CustomerId'];

            header("Location: http://127.0.0.1:8020/packages.php");

        } else {
            $error_msg .= 'That was not a correct username or password, please try again.';
        }
    } else {
        $error_msg .= 'Please enter a correct user name or password, try again.';
    }

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Travel Experts</title>

    <link href="https://fonts.googleapis.com/css?family=Marck+Script|Aclonica|Berkshire+Swash|Metrophobic" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/8.0.0/sanitize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Begin Header -->
<header class="container-header">

    <!-- Begin Bootstrap Nav -->
        <?php
            include('php/includes/nav.php');
        ?>
    <!-- End Bootstrap Nav -->

</div>

<div class="jumbotron jumbotron-fluid jumbotron-login">
    <div class="container">
        <h1 class="display-4 register-greetings h1-responsive">Login</h1>
        <hr class="my-4">
        <p class="lead register-heading">Welcome to Travel Experts, Login to continue</p>
    </div>
</div>

</header>
<!-- End Header -->
<br>

<!-- Begin Main -->
<main>
<div class="container">

<div class="register-main">

    <div class="register-box">
        <div class="row">
            <div class='col-md-8 offset-md-2'>
            <?php 

                if (!empty($error_msg) > 0)
                    print('
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">'
                    . $error_msg .
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            ?>
            <br>
                <form method="POST" action="#">
                    <!-- <div class="form-row"> -->
                        <div class="form-group">

                            <label for="username"> <strong>Username</strong> </label>
                            <input type="text" class="form-control focus validate" name="username" 
                            id="username" maxlength=20 placeholder="Username">
                            
                        </div>
                    <!-- </div> -->
                    <!-- <div class="form-row"> -->
                        <div class="form-group">

                            <label for="password"> <strong>Password</strong> </label>
                            <input type="password" class="form-control focus validate" name="password" 
                            id="password" maxlength=20 placeholder="Password">
                            
                        </div>
                    <!-- </div> -->
                    <?php 
                        print('Don\'t have an account? Kindly <a href="register.php" style="color:green;">Register</a>');

                        print('<br>');
                        print('<br>');
                    ?>
                    <!-- <div class="form-row"> -->
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-success btn-block btn-outline" name='submit' value="Login">
                        </div>
                    <!-- </div> -->
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</main>
<!-- End Main -->

<!-- Begin Footer -->
    <?php
        include('php/includes/footer.php');
    ?>
<!-- End Footer -->

<!-- Begin JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- <script src="js/main-gallery.js"></script> -->
<script src="js/main.js"></script>
<!-- End JavaScript -->
    
</body>
</html>