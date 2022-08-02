<!doctype html>
<html lang="en">

<?php
include"websiteincludes/header.php";
?>

<body>
    <section>
        <div class="container ">
            <div  class="mb-5 pb-2 mx-auto signin-heading">
                <p class="welcome mt-5 ">Create Account

                </p>
                <p class="account">Let’s get started with your <span class="game">7 Days free trial.</span> </p>
            </div>
			<form class="signin-form mx-auto" accept-charset="UTF-8" role="form" data-parsley-validate="" action="signupsubmit.html" method="post" id="signupform">

                <!-----------Name input----->
                <div class="form-group form-inline mb-4">
                    <label class="form-label label1" for="name">Name<span class="red-star">*</span></label>
                    <input type="text" id="loginName" name="txtName" required class="form-control logininput" placeholder="Name" />
                </div>

                <!-- Email input -->
                <div class="form-group form-inline mb-4">
                    <label class="form-label label2" for="loginEmail">Email<span class="red-star">*</span></label>
                    <input type="email" id="loginEmail" name="txtEmail" required class="form-control logininput" placeholder="Email" />

                </div>
				
				<!-- Email input -->
                <div class="form-group form-inline mb-4">
                    <label class="form-label label2" for="txtPassword">Password<span class="red-star">*</span></label>
                    <input type="password" id="txtPassword" name="txtPassword" required class="form-control logininput" placeholder="Password" />
                </div>

				
             

                <!-- Submit button -->
                <button type="submit" name="btnSubmit" class="btn sign btn-block signbtn mb-4">Sign Up</button>

                <!-- Register buttons -->
                <div class="text-center text-grey">
                    <p>Already have an account?<a href="signin.html" style="color: #FF4932;">Sign in</a></p>
                </div>
            </form>
        </div>
    </section>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
	    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>


<script type="text/javascript" src="assets/js/parsley.js"></script> 
<script type="text/javascript" >
     
		$('#signupform').parsley().on('field:validated', function() {
			var ok = $('.parsley-error').length === 0;
		})
		.on('form:submit', function() {
			ShowProgressAnimation();									  
			return true; // Don't submit form for this demo
		});



    </script>
</body>

</html>