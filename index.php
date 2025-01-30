<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soundwave Template</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./public/css/custom.css">
    
</head>
<body>
    <!-- Start main area -->
    <main>
        <!-- Start navigation -->
        <nav class="mainnav shadow navbar-expand-lg navbar bg-dark border-bottom border-body fixed-top" style="min-width: 350px;" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-soundwave"></i> Soundwave
                    <div style="font-size: 13px;">Unleash your potential</div>
                </a>
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                    <div class="text-white mx-3 mt-1 h5 d-block">
                        <a href=""><i class="bi bi-facebook" style="color:deepskyblue"></i></a>
                        <a href=""><i class="bi bi-twitter" style="color:deepskyblue"></i></a>
                        <a href=""><i class="bi bi-instagram"style="color:deepskyblue"></i></a>
                    </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Discover</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Trending</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">New</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Genre
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pop</a></li>
                                <li><a class="dropdown-item" href="#">R&B</a></li>
                                <li><a class="dropdown-item" href="#">Country</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Musicians</a></li>
                            </ul>
                            </li>
                            <img class=" rounded-circle" src="./public/images/image1.jpg" style="width:40px;height:40px" alt="">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hi, Vladimír
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-person"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-gear"></i> Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-box-arrow-right"></i> Logout</a></li>
                            </ul>
                            </li>
                        </ul>
                    <div>
                 </div>
                </div>
            </div>
        </nav>  <!-- END navigation -->

        
        <!-- Start hero area -->
        <div class="hero-area text-white pt-5 mt-2">

            <div class="nav-spacer"></div>

            <ul class="hero-nav nav m-4 nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Featured</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Trending</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">New Rlease</button>
                </li>
  
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <!-- small song item -->
                    <div class="song-small m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">01</div>
                        <div class="col d-flex">
                            <img src="./public/images/image2.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>My heart will go on</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div>
                    <!-- end small song item -->
                    <!-- small song item -->
                    <div class="song-small mt-2 m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">02</div>
                        <div class="col d-flex">
                            <img src="./public/images/image3.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>All i want is you</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div>
                    <!-- end small song item -->
                    <!-- small song item -->
                    <div class="song-small mt-2 m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">03</div>
                        <div class="col d-flex">
                            <img src="./public/images/image4.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>My lovely things</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div>
                    <!-- end small song item -->
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"> <!-- small song item -->
                    <div class="song-small m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">04</div>
                        <div class="col d-flex">
                            <img src="./public/images/image2.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>My heart will go on</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div><!-- end small song item -->

                    <!-- small song item -->
                    <div class="song-small mt-2 m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">05</div>
                        <div class="col d-flex">
                            <img src="./public/images/image3.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>All i want is you</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div>
                    <!-- end small song item -->
                    <!-- small song item -->
                    <div class="song-small mt-2 m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">06</div>
                        <div class="col d-flex">
                            <img src="./public/images/image4.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>My lovely things</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div><!-- end small song item -->
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0"> <!-- small song item -->
                    <div class="song-small m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">07</div>
                        <div class="col d-flex">
                            <img src="./public/images/image2.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>My heart will go on</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div><!-- end small song item -->
                    <!-- small song item -->
                    <div class="song-small mt-2 m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">08</div>
                        <div class="col d-flex">
                            <img src="./public/images/image3.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>All i want is you</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div><!-- end small song item -->
                    <!-- small song item -->
                    <div class="song-small mt-2 m-1 ms-4 col-md-6 row align-items-center">
                        <div class="col-1 h3">09</div>
                        <div class="col d-flex">
                            <img src="./public/images/image4.jpg"  class="song-small-img rounded m-1" alt="" objet>
                            <div class="ms-1">
                                <div>My lovely things</div>
                                <small>a song description</small> 
                            </div>
                        </div>
                        <div class="col-2">05:00<i class="bi bi-play"></i></div> 
                    </div><!-- end small song item -->
                </div>
                
            </div>
        </div> <!-- end hero area -->

        <!--Start category area -->

        <h5 class="song-category-title mx-5 pt-4">Melody Music <small class="float-end"><a href="#">View more <i class="bi bi-box-arrow-up-right"></i></a></small></h5>

        <section class="pt-2 p-4 mx-5 d-flex justify-content-center" style="flex-wrap:wrap">
            <!-- song card start -->
                <div class="m-4" style="width:200px;">
                    <div style="position:relative;">
                        <img src="./public/images/image2.jpg" class="big-song-img rounded img-fluid">
                            <a href="#">
                                <div class="big-song-hover rounded">
                                    <i class="h1 bi bi-play"></i>
                                </div>
                            </a>
                        <div>
                    </div>
                        <div class="lead text-white">Old Fschool</div>
                        <small>Song description</small>
                    </div>
                </div>
             <!-- song card end -->
        
        
            <!-- song card start -->
                <div class="m-4" style="width:200px;">
                    <div style="position:relative;">
                        <img src="./public/images/image5.jpg" class="big-song-img rounded img-fluid">
                            <a href="#">
                                <div class="big-song-hover rounded">
                                    <i class="h1 bi bi-play"></i>
                                </div>
                            </a>
                        <div>
                    </div>
                        <div class="lead text-white">Prayer title</div>
                        <small>Song description</small>
                    </div>
                </div>
             <!-- song card end -->

            <!-- song card start -->
                <div class="m-4" style="width:200px;">
                    <div style="position:relative;">
                        <img src="./public/images/image6.jpeg" class="big-song-img rounded img-fluid">
                            <a href="#">
                                <div class="big-song-hover rounded">
                                    <i class="h1 bi bi-play"></i>
                                </div>
                            </a>
                        <div>
                    </div>
                        <div class="lead text-white">Napoleon symphony</div>
                        <small>Song description</small>
                    </div>
                </div>
             <!-- song card end -->

            <!-- song card start -->
                <div class="m-4" style="width:200px;">
                    <div style="position:relative;">
                        <img src="./public/images/image7.jpg" class="big-song-img rounded img-fluid">
                            <a href="#">
                                <div class="big-song-hover rounded">
                                    <i class="h1 bi bi-play"></i>
                                </div>
                            </a>
                        <div>
                    </div>
                        <div class="lead text-white">Cavalery theme</div>
                        <small>Song description</small>
                    </div>
                </div>
             <!-- song card end -->

            <!-- song card start -->
                <div class="m-4" style="width:200px;">
                    <div style="position:relative;">
                        <img src="./public/images/image8.jpg" class="big-song-img rounded img-fluid">
                            <a href="#">
                                <div class="big-song-hover rounded">
                                    <i class="h1 bi bi-play"></i>
                                </div>
                            </a>
                        <div>
                    </div>
                        <div class="lead text-white">Bird song</div>
                        <small>Song description</small>
                    </div>
                </div>
             <!-- song card end -->
              
        </section>

        <!-- End Category area -->

          <!--Start category area -->

        <h5 class="song-category-title mx-5 pt-4">Melody Music <small class="float-end"><a href="#">View more <i class="bi bi-box-arrow-up-right"></i></a></small></h5>

<section class="pt-2 p-4 mx-5 d-flex justify-content-center" style="flex-wrap:wrap">
    <!-- song card start -->
        <div class="m-4" style="width:200px;">
            <div style="position:relative;">
                <img src="./public/images/image2.jpg" class="big-song-img rounded img-fluid">
                    <a href="#">
                        <div class="big-song-hover rounded">
                            <i class="h1 bi bi-play"></i>
                        </div>
                    </a>
                <div>
            </div>
                <div class="lead text-white">Old Fschool</div>
                <small>Song description</small>
            </div>
        </div>
     <!-- song card end -->
   
    <!-- song card start -->
        <div class="m-4" style="width:200px;">
            <div style="position:relative;">
                <img src="./public/images/image5.jpg" class="big-song-img rounded img-fluid">
                    <a href="#">
                        <div class="big-song-hover rounded">
                            <i class="h1 bi bi-play"></i>
                        </div>
                    </a>
                <div>
            </div>
                <div class="lead text-white">Prayer title</div>
                <small>Song description</small>
            </div>
        </div>
     <!-- song card end -->

    <!-- song card start -->
        <div class="m-4" style="width:200px;">
            <div style="position:relative;">
                <img src="./public/images/image6.jpeg" class="big-song-img rounded img-fluid">
                    <a href="#">
                        <div class="big-song-hover rounded">
                            <i class="h1 bi bi-play"></i>
                        </div>
                    </a>
                <div>
            </div>
                <div class="lead text-white">Napoleon symphony</div>
                <small>Song description</small>
            </div>
        </div>
     <!-- song card end -->

    <!-- song card start -->
        <div class="m-4" style="width:200px;">
            <div style="position:relative;">
                <img src="./public/images/image7.jpg" class="big-song-img rounded img-fluid">
                    <a href="#">
                        <div class="big-song-hover rounded">
                            <i class="h1 bi bi-play"></i>
                        </div>
                    </a>
                <div>
            </div>
                <div class="lead text-white">Cavalery theme</div>
                <small>Song description</small>
            </div>
        </div>
     <!-- song card end -->

    <!-- song card start -->
        <div class="m-4" style="width:200px;">
            <div style="position:relative;">
                <img src="./public/images/image8.jpg" class="big-song-img rounded img-fluid">
                    <a href="#">
                        <div class="big-song-hover rounded">
                            <i class="h1 bi bi-play"></i>
                        </div>
                    </a>
                <div>
            </div>
                <div class="lead text-white">Bird song</div>
                <small>Song description</small>
            </div>
        </div>
     <!-- song card end -->
      
</section>

<!-- End Category area -->

    </main> <!-- Start main area -->

<footer class="p-5 pt-4 row bg-black text-white">
    <div class="mb-4 col-sm-6 col-md-3">
        <h5>Quick links</h5>
        <ul class="nav flex-column">
            <li><a href="#">Home</a></li>
            <li><a href="#">Latest</a></li>
            <li><a href="#">Signup</a></li>
            <li><a href="../bootstrap/login.php">Login</a></li>
        </ul>
    </div>
    <div class="mb-4 col-sm-6 col-md-3">
        <h5>Quick links</h5>
        <ul class="nav flex-column">
            <li><a href="#">Featured</a></li>
            <li><a href="#">New Relase</a></li>
            <li><a href="#">Signup</a></li>
            <li><a href="../bootstrap/login.php">Login</a></li>
        </ul>

    </div>
    <div class="mb-4 col-md-6">
        <h5>Subscribe to our news letter</h5>
        <div>to receive new content</div>  
        <div class="input-group mb-3 mt-2">
            <input type="text" class="form-control" placeholder="Email">
            <span class="text-white input-group-text" style="background-color: deepskyblue;" id="basic-addon2">Subscribe</span>
        </div>
        <div class="text-white h5 d-block">
            <span>Follow us:</span>
                    <a href=""><i class="bi bi-facebook" style="color:deepskyblue"></i></a>
                    <a href=""><i class="bi bi-twitter" style="color:deepskyblue"></i></a>
                    <a href=""><i class="bi bi-instagram"style="color:deepskyblue"></i></a>
        </div>
    </div>
</footer>


</body>

<script src="./public/js/bootstrap.bundle.min.js"></script>
<script>



</script>

</html>