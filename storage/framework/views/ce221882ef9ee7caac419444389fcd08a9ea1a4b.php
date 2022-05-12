<html>
<head>
    <meta charset="utf-8">
    <title>Go-Help</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,700;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo e(asset('registration.css')); ?>">
    <link rel="stylesheet" title="theme" href="#">

    <script src="https://kit.fontawesome.com/95dda36ed8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</head>

<body>

<section id="section">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><i class="fas fa-user-graduate"></i>GO-help</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.html">Main menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Information.html">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('auth.login')); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.html">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6" id="card">
                    <div class="card" style="border-radius: 15px; height:38rem">
                        <div class="card-body p-5">
                            <div class="container_login">
                                <h4 class="text-uppercase text-center mb-5">Registration</h4>
                                <form action="<?php echo e(route('auth.save')); ?>" method="post">
                                    <?php if(Session::get('success')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(Session::get('success')); ?>

                                        </div>
                                    <?php endif; ?>
                                        <?php if(Session::get('fail')): ?>
                                            <div class="alert alert-danger">
                                                <?php echo e(Session::get('fail')); ?>

                                            </div>
                                        <?php endif; ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" name="fname" placeholder="Enter full first name" value="<?php echo e(old('fname')); ?>">
                                        <span class="text-danger"><?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Second name</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Enter full second name" value="<?php echo e(old('lname')); ?>">
                                        <span class="text-danger"><?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="<?php echo e(old('email')); ?>">
                                        <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                                        <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                                    <br>
                                    <a href="<?php echo e(route('auth.login')); ?>">I already have an account, sign in</a>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Our website</h5>

                <p>
                    GO-Help will help you with time management and with better studying.
                    Students with different degrees can help you!
                    You also can provide course videos and assist others too!
                </p>
            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Follow</h5>

                <p class="par">
                    <a href="#"><i class="fab fa-instagram fa-2x" style="margin-right: 20px;margin-left:100px;"></i></a>
                    <a href="#"><i class="fab fa-telegram-plane fa-2x" style="margin-right: 20px;"></i></a>
                    <a href="#"><i class="fab fa-whatsapp fa-2x" style="margin-right: 100px;"></i></a>
                </p>
            </div>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2022 Copyright:
        <a class="text-dark" href="#">GO-Help.com</a>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="javascript.js" charset="utf-8"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\дÑlabka\resources\views/auth/register.blade.php ENDPATH**/ ?>