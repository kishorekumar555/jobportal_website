<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel=stylesheet href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <script>
            function toggleFields(){
                var userType=document.getElementById("user_type").value;
                document.getElementById("job_seeker_fields").style.display=(userType==="job_seeker")?"block":"none";
                document.getElementById("employer_fields").style.display=(userType==="employer")?"block":"none";
            }
            window.onload=toggleFields;
        </script>
    </head>
    <body>
        <div class="container">
            <h2 class=mt-5>Signup</h2>
            <?php if(session("success")): ?>
                <div class="alert alert-success"><?php echo e(session("success")); ?></div>
            <?php endif; ?>
            <form action="<?php echo e(route('register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="user_type" class="form-label">I am a</label>
                    <select class="form-select" id="user_type" name="user_type" onchange="toggleFields()" required>
                        <option value="">Select User Type</option>
                        <option value="job_seeker">Job seeker</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                
                <!--Job Seeker Fields-->
                <div id="job_seeker_fields" style="display:none;">
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="number" class="form-control" id="experience" name="experience" required>
                    </div>
                    <div class="mb-3">
                        <label for="qualification" class="form-label">Highest Quality</label>
                        <input type="text" class="form-control" id="qualification" name="qualification" required>
                    </div>
                </div>

                <!--employer fields-->
                <div id="employer_fields" style="display:none;">
                    <div class="mb-3">
                        <label for="organisation" class="form-label">Organisation name</label>
                        <input type="text" class="form-control" id="organisation" name="organisation" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Signup</button>
            </form>
        </div>
    </body>
</html><?php /**PATH /home/kishorekumar/jobportal_website/jobportal/resources/views/signup.blade.php ENDPATH**/ ?>