<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card p-4">
                    <div class="text-center mb-4">
                        <h3>Welcome Back</h3>
                        <p class="text-muted">Login to your account</p>
                    </div>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="<?php echo e(route('password.request')); ?>" class="text-decoration-none">Forgot Password?</a>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-3">
                    <p>New here? <a href="<?php echo e(route('register')); ?>" class="text-decoration-none">Create an account</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/kishorekumar/Desktop/jobportal_website/jobportal/resources/views/auth/login.blade.php ENDPATH**/ ?>