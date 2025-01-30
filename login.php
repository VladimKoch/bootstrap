<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Soundwave Template</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./public/css/login.css">
    
</head>

<body>
    <main class="text-white">
    <h1 class=" text-center h2 pt-3 pb-2"> <i class="bi bi-soundwave" ></i> Soundwave underworld</h1>
    <div class="content row mx-auto">
        <div class="img-container p-0 col-sm-6">
            <img src="./public/images/image9.jpg" class="fx-animate-rotate" alt="">
        </div>

        <div class="righ-form col-sm-6" style=" position:relative; height: 100%; background-color:#203349;" >    
            
            
            <div onclick="show_login()" class="login-button button-selected">Login</div>
            <div onclick="show_signup()" class="signup-button">Signup</div>

            <div class="">
                <form action="" class="js-login-form pt-4 p-4 fx-animate-1" >
                    <h2 class="mt-5">Login</h2>
                    <h5>Please enter you details</h5>
                    <div class="input-group mb-4 fx-animate-1">
                        <input type="text" class="form-control p-2" placeholder="Email">
                        <span class="input-group-text" id="basic-addon2"> <i class="bi bi-envelope"></i> </span>
                    </div>
                    <div class="input-group mb-4 fx-animate-2">
                        <input type="password" class="form-control p-2" placeholder="Password">
                        <span class="input-group-text" id="basic-addon2"> <i class="bi bi-key"></i> </span>
                    </div>
                    <div class="mb-3 fx-animate-3">
                        <button class="btn btn-lg btn-outline-warning">Login</button>
                        <div class="mb-3">
                            <a class="text-warning" href="#">Forgot password?</a> or <a href="#" onclick="show_signup()" class="text-warning">Signup</a> or want to go <a class="text-warning" href="../bootstrap/index.php">Home?</a>
                        </div>

                        <hr>

                        <div class="follow-us">
                            Follow us:
                            <div  class="bi d-flex">
                                <div class="fx-animate-4 ms-2"><a href=""> <i class="h3 text-white bi bi-facebook"></i> </a></div>
                                <div class="fx-animate-5 ms-2"><a href=""> <i class="h3 text-white bi bi-twitter"></i> </a></div>
                                <div class="fx-animate-6 ms-2"><a href=""> <i class="h3 text-white bi bi-instagram"></i> </a></div>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="" class="js-signup-form hide pt-4 p-4 fx-animate-1" >
                    <h2 class="mt-5">Signup</h2>
                    <h5>Create an account</h5>
                    <div class="input-group mb-3 fx-animate-1">
                        <input type="text" class="form-control p-2" placeholder="First name">
                        <span class="input-group-text" id="basic-addon2"> <i class="bi bi-person"></i> </span>
                    </div>
                    <div class="input-group mb-3 fx-animate-2">
                        <input type="text" class="form-control p-2" placeholder="Last name">
                        <span class="input-group-text" id="basic-addon2"> <i class="bi bi-person-fill"></i> </span>
                    </div>
                    <div class="input-group mb-3 fx-animate-3">
                        <input type="text" class="form-control p-2" placeholder="Email">
                        <span class="input-group-text" id="basic-addon2"> <i class="bi bi-envelope"></i> </span>
                    </div>
                    <div class="input-group mb-3 fx-animate-4">
                        <input type="password" class="form-control p-2" placeholder="Password">
                        <span class="input-group-text" id="basic-addon2"> <i class="bi bi-key"></i> </span>
                    </div>
                    <div class="mb-3 fx-animate-3">
                        <button class="btn btn-lg btn-outline-warning">Create an account</button>
                        <div class="mb-3">
                            <a class="text-warning" href="#">Forgot password?</a> or <a href="#" onclick="show_login()" class="text-warning">Login</a> or want to go <a class="text-warning" href="../bootstrap/index.php">Home?</a>
                        </div>

                        <hr>

                        <div class="follow-us">
                            Follow us:
                            <div  class="bi d-flex">
                                <div class="fx-animate-4 ms-2"><a href=""> <i class="h3 text-white bi bi-facebook"></i> </a></div>
                                <div class="fx-animate-5 ms-2"><a href=""> <i class="h3 text-white bi bi-twitter"></i> </a></div>
                                <div class="fx-animate-6 ms-2"><a href=""> <i class="h3 text-white bi bi-instagram"></i> </a></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>
</body>


<script>
    function show_login()
    {
        document.querySelector(".js-login-form").classList.remove("hide");
        document.querySelector(".js-signup-form").classList.add("hide");

        document.querySelector(".login-button").classList.add("button-selected");
        document.querySelector(".signup-button").classList.remove("button-selected");
    }
    
    function show_signup()
    {
        document.querySelector(".js-login-form").classList.add("hide");
        document.querySelector(".js-signup-form").classList.remove("hide");

        document.querySelector(".signup-button").classList.add("button-selected");
        document.querySelector(".login-button").classList.remove("button-selected");
    }
</script>

</html>