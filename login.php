<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="websiteassets/css/login.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Life Games</title>

</head>

<body>
    <p class="welcome">Welcome to
        <h5 class="game"> i-life Games!</h5>
    </p><br>
    <p class="account">Please Login your account.</p>
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" id="loginName" class="form-control" placeholder="Email" />
        <label class="form-label label1" for="loginName">Email</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" placeholder="Password" />
        <label class="form-label label2" for="loginPassword">Password</label>
    </div>

    <!-- 2 column grid layout -->
    <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="loginCheck">
                <label class="form-check-label" for="loginCheck">Remember me</label>
            </div>
        </div>



        <div class="col-md-6 d-flex justify-content-center">
            <!-- Simple link -->
            <a href="#!" class="forgot">Forgot password?</a>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Don't have a account?<a href="#!" class="signup">SignUp</a></p>
    </div>
    </form>
    </div>
</body>

</html>