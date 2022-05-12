<html>
<head>
    <meta charset="utf-8">
    <title>Go-Help</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo e(asset('home.css')); ?>">

    <script src="https://kit.fontawesome.com/95dda36ed8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
</head>
<body>
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"><i class="fas fa-user-graduate"></i>GO-help</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Information.html">Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.html">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><?php echo e($LoggedUserInfo['fname']); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('auth.logout')); ?>">Log out</a>
            </li>
        </ul>
    </div>
</nav>
<section id="test">
    <!-- Top content -->
    <div class="top-content">
        <!-- Carousel -->
        <div id="carousel-example" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
                <li data-target="#carousel-example" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src=\aitu.jpg class="d-block w-100" alt="slide-img-1">
                    <div class="carousel-caption">
                        <a href="/course" style="text-decoration: none; position:relative; bottom:400px;right:500px;font-size:5rem;color:#b4dafa;"><b>Courses</b></a>
                        <div class="carousel-caption-description">
                            <h2><p style=" position:relative;bottom:400px;right:500px;font-size:3rem;color:#b4dafa;">Get all the information here.</p></h2>
                            <div id="overlay" onclick="off()">
                                <div id="text"  style=" position:relative; bottom:400px;right:500px;">Please, login to continue the reading.
                                    <a href="login.html"style="text-decoration: none;">Login now!</a>
                                </div>
                            </div>

                            <button onclick="window.location='<?php echo e(url("/course")); ?>'" type="button" class="btn btn-light btn-lg btn" data-placement="bottom" title="Continue" style="width:150px; height:50px; font-size:2rem; font-family:'Poppins'; position:relative;bottom:400px;right:500px;"> Continue </button>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src=\1.png class="d-block w-100" alt="slide-img-2">
                    <div class="carousel-caption">
                        <h2 style="position:relative;bottom:400px;right:500px;font-size:4rem;color:white;"><b>Upload all the useful</b>
                            <p>links and help each other!</p></h2>
                        <div class="carousel-caption-description">
                            <p  style="position:relative;bottom:400px;right:500px;font-size:3rem;color:white">You should start now!</p>
                        </div>
                        <button onclick="window.location='<?php echo e(url("/upload")); ?>'" type="button" class="btn btn-light btn-lg btn" data-placement="bottom" title="Continue" style="width:150px; height:50px; font-size:2rem; font-family:'Poppins';position:relative;bottom:400px;right:500px;"> Upload </button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src=\2.jpg class="d-block w-100" alt="slide-img-3">
                    <div class="carousel-caption">
                        <button onclick="on()" type="button" class="btn btn-light btn-lg btn" data-placement="bottom" title="Continue" style="width:150px; height:50px; font-size:2rem; font-family:'Poppins';position:relative;bottom:200px;right:200px;">Subjects</button>
                        <div class="carousel-caption-description">
                            <p style="position:relative;bottom:300px;right:200px;font-size:3rem;color:white;"><b>Reach the highest score.Learn faster and easier!</b></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src=\3.jpeg class="d-block w-100" alt="slide-img-4">
                    <div class="carousel-caption">
                        <button onclick="on()" type="button" class="btn btn-light btn-lg btn" data-placement="bottom" title="Continue" style="width:150px; height:50px; font-size:2rem; font-family:'Poppins';position:relative;top:50px;right:-400px;">Topics</button>
                        <div class="carousel-caption-description">
                            <p style="position:relative;bottom:50px;right:-400px;font-size:4rem;color:#b4dafa;"><b>Be the one first who help!</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End carousel -->
    </div>
</section>

<!--Title-->
<section id="info" style="text-align:center; background-color:white;">
    <h1 style="font-style: bold;">Information about web-sites</h1>
    <div class="row">
        <div class="col-lg-6">
            <br><br><br><br><br>
            <h3 class="info">First of all, this project is about helping students
                of the university by providing the access to this site.
                The access to the site means to download
                a links for the relevant course videos and some
                documentation for your course.
                Therefore, the main relevance of our project is to
                enable students to provide them to each other
                who have already completed these courses or
                who have already found information.
                By helping others, you can also
                find answers to your own questions.
                This site will be useful in that
                it will contain only the necessary
                information for a particular lesson or topic.
                On the Internet, you can stumble upon
                a lot of useless information that will
                only take time, but on this site,
                students will collect the necessary
                information themselves, and can also download
                some explanations that they themselves understood very well.
            </h3>
        </div>
        <div class="col-lg-6">
            <div class="img-box">
                <img src=\Logo.jpg alt="">
            </div>
        </div>
    </div>
</section>

<!--Title-->
<section id="main">
    <div class="row">

        <div class="col">
            <div style="position:relative; left:250px;" ><h3>Top students who helped</h3><br></div>
            <div class="container">
                <table>
                    <thead>
                    <tr>
                        <th>1</th>
                        <th>Name of student</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>Name of student</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>Name of student</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>Name of student</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>Name of student</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="col">
            <div class="rating"><h3 style="position:relative; left:200px;">Rating of the web-site</h3></div>
            <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
        </div>


    </div>
</section>

<section id="footer">
    <footer class="bg-light text-center text-lg-start">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h2 class="text-uppercase">Our website</h2>
                <p><h3>
                    GO-Help will help you with time management and with better studying.
                    Students with different degrees can help you!
                    You also can provide course videos and assist others too!
                </h3></p>
            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h2 class="text-uppercase">Follow</h2>

                <p class="par">
                    <a href="#" style="text-decoration: none;"><i class="fab fa-instagram fa-3x" style="margin-right: 20px;margin-left:100px;"></i></a>
                    <a href="#" style="text-decoration: none;"><i class="fab fa-telegram-plane fa-3x" style="margin-right: 20px;"></i></a>
                    <a href="#" style="text-decoration: none;"><i class="fab fa-whatsapp fa-3x" style="margin-right: 100px;"></i></a>
                </p>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);font-size:1.5rem;">© 2020 Copyright:
            <a class="text-dark" href="home.html">GO-Help.com</a>
        </div>
    </footer>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="javascript.js" charset="utf-8"></script>
<script src="java.js" charset="utf-8"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\дÑlabka\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>