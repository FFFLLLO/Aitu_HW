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

    <link rel="stylesheet" href="/home.css">
   <link rel="stylesheet" href="/upload.css">

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
                <a class="nav-link" href="/admin/dashboard">Main menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Information.html">Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.html">Contacts</a>
            <li class="nav-item">
                <a class="nav-link" ><?php echo e($LoggedUserInfo['email']); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('auth.logout')); ?>">Log out</a>
            </li>
            </li>
        </ul>
    </div>
</nav>
<form action="<?php echo e(route('send.email')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php if(Session::has('error')): ?>
        <div  class="alert alert-danger">
            <?php echo e(Session::get('error')); ?>

        </div>
    <?php endif; ?>

    <?php if(Session::has('success')): ?>
        <div class = "alert alert-sucess">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <div class="form-group">
        <label for="">Course name</label>
        <input type="text" class="form-control" name="CourseName" placeholder="Enter your course name" value="<?php echo e(old('CourseName')); ?>">
        <?php $__errorArgs = ['CourseName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="">Topic</label>
        <input type="text" class="form-control" name="topic" placeholder="Enter your topic name" value="<?php echo e(old('topic')); ?>">
        <?php $__errorArgs = ['topic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="">Link of Video</label>
        <input type="text" class="form-control" name="lnk" placeholder="Enter your link of video" value="<?php echo e(old('lnk')); ?>">
        <?php $__errorArgs = ['lnk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="">Message</label>
        <textarea name="message" class="form-control" cols="4" rows="4"><?php echo e(old('message')); ?></textarea>
        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <button class="btn btn-primary">Send</button>
</form>

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

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);font-size:1.5rem;">© 2022 Copyright:
            <a class="text-dark" href="home.html">GO-Help.com</a>
        </div>
    </footer>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="javascript.js" charset="utf-8"></script>
<script src="java.js" charset="utf-8"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\дÑlabka\resources\views/upload.blade.php ENDPATH**/ ?>