<?php

$pageTitle = "Registration";

//Header
include 'includes/header.php';

//Nav Bar
include 'includes/navbar.php';

//logical section

if ($_SERVER['REQUEST_METHOD'] = 'POST'){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        echo'Please Fill the Form';
    }

    print_r($email, $password);

}


?>

<!-- Registration Form -->


<div class="row mt-5">
    <div class="col-6 offset-md-3">
        <div class="alert alert-success my-2" role="alert">
            Registration Successfull!
        </div>
        <div class="alert alert-danger my-2" role="alert">
            Invalid Credentials!!!
        </div>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>


<?php
include 'includes/footer.php';
?>