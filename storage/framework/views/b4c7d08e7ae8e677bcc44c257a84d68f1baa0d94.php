<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>" type="Text/css">
    <script src="https://kit.fontawesome.com/463fbc9bd5.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="navbar">
     <nav>
      <h1>Joblingo</h1>
          <ul>
            <li>Home</li>
            <li>Find Jobs</li>
            <li>About</li>
            <li>Contact</li>
            <li>Register</li>
            <li>Login</li>
          </ul>
     </nav>
    </div>    
    <div class="seeker-container">
            <p class="seeker-head">Are you Job Seeker?</p>
            <p>Find the most Exciting Jobs</p>
            <form>
                <input type="text" placeholder="Job Title or Keyword">
                <button type="submit">Find Jobs</button>
            </form>
    </div>
    <div class="poster-container">
           <p class="poster-head">Are you an Employer?</p>
           <p>Post your job openings and find the best talent</p>
        <form>
           <input type="text" placeholder="Job Title or Company Name">
           <button type="submit">Post Jobs</button>
        </form>
    </div>
    <div class="resume">
        <p>Make a Difference with your Online Resume!</p>
        <button type="submit">UPLOAD RESUME</button>
    </div>
    <div class="apply-container">
    <p id="apply-head">APPLY PROCESS</p>
    <p id="how-apply">How it Works</p>    
    <div class="apply-process">
        <div class="step-1">
            <h3>1.Search a job</h3>
            <i class="fa-solid fa-magnifying-glass"></i>
            <p>Select the Perfect Job according to your skills and interest</p>
        </div>
        <div class="step-2">
            <h3>2.Apply for job</h3>
            <i class="fa-solid fa-users"></i>
            <p>Apply the Job which interests you</p>
        </div>
        <div class="step-3">
            <h3>3.Get your job</h3>
            <i class="fa-solid fa-circle-check"></i>
            <p>Get your most liked and favourite Job</p>
        </div>
    </div>
    </div>
    <div class="footer">
        <h3>NEWSLETTER</h3>
        <p>To receive our latest news and updates</p>
        <input type="email" placeholder="Enter your email">
        <button type="submit">SUBSCRIBE</button>
    </div> 
</body>
</html><?php /**PATH /home/kishorekumar/jobportal_website/jobportal/resources/views/Home.blade.php ENDPATH**/ ?>