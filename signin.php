<!doctype html>
<html lang="en">

<?php
include"websiteincludes/header.php";
?>

<body>
    <section>
        <div class="container">
            <div class="mb-5 pb-2 mx-auto signin-heading">
                <p class="welcome mt-5 ">Welcome to <span class="game">i-life Games!</span></p>
                <p class="account">Please Login your account.</p>
            </div>

			    <form class="signin-form mx-auto" accept-charset="UTF-8" role="form" data-parsley-validate="" action="addusersubmit.html" method="post" id="customerForm">


                <!-- Email input -->
                <div class="form-group form-inline mb-4">
                    <label class="form-label label2" for="loginEmail">Email</label>
                    <input type="email" id="loginEmail" class="form-control logininput" placeholder="Email" />

                </div>


                <!-- Password input -->
                <div class="form-group form-inline mb-4">
                    <label class="form-label label3" for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" class="form-control logininput" placeholder="Password" />

                </div>

                <!-- 2 column grid layout -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <!-- Checkbox -->
                        <div class="mb-3 form-check d-flex ">
                            <input type="checkbox" class="signin-form-check-input" id="loginCheck">
                            <label class="signin-form-check-label form-check-label" for="loginCheck">Remember me</label>
                        </div>
                    </div>



                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="#!" class="forgot">Forgot password?</a>
                    </div>
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn signbtn btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-grey text-center">
                    <p>Don't have a account?<a href="signup.html" style="color: #FF4932 !important;"> SignUp</a></p>
                </div>

            </form>
        </div>

    </section>

</body>

</html>