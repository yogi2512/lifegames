<!doctype html>
<html lang="en">

<?php
include"websiteincludes/header.php";
?>

<body>






    <!-----form----->
    <section>
        <div class="container">

            <h5>
                My Account
            </h5>
            <div class="row">
                <form class="account-form">
                    <div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img
                                src="Images/ac-element.png" class="center"></a>
                    </div>



                    <!-----------Name input----->




                    <div class="form-group form-inline mb-4">
                        <label class="form-label label1" for="name">Name</label>
                        <input type="text" class="account-form-input" id="loginName" class="form-control" placeholder="Name" />

                    </div>

                    <!-- Email input -->
                    <div class="form-group form-inline mb-4">
                        <label class="form-label label2" for="loginEmail">Email</label>
                        <input type="email" class="account-form-input" id="loginEmail" class="form-control" placeholder="Email" />

                    </div>


                    <!-- Password input -->
                    <div class="form-group form-inline mb-4">
                        <label class="form-label label3" for="loginPassword">Change Password</label>
                        <input type="password" class="account-form-input" id="loginPassword" class="form-control" placeholder="Change Password" />

                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 save">Save</button>
                    <br>

                    <button type="submit" class="btn btn-block mb-4 cancel"><span class="plan">Cancel your
                            plan</span></button>

                </form>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body avtar">

                    <b class="choice">Choose your Avatar</b>

                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/1.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/7.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/3.png">
                                </a>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/4.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/5.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/6.png"> </a>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/11.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/8.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/9.png"> </a>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/10.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/13.png"></a>
                            </div>
                            <div class="col-md-4 col-4">
                                <a href="#"><img src="Images/2.png"> </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>