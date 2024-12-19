<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/recruiter.css')); ?>" type="Text/css">
    <script src="https://kit.fontawesome.com/463fbc9bd5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="full-container">
    <div class="sidebar">
        <div class="sidebar-top">
        <h1><i class="fa-solid fa-user"></i>  Profile</h3>
        <hr>
        <div class="sidebar-sub">
            <h2><i class="fa-brands fa-windows"></i>  DashBoard</h2>
        </div>    
        <hr>
        <div class="sidebar-sub">
            <h2><i class="fa-solid fa-users"></i>  New Applicants</h2>
        </div>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-sub">
                <h2><i class="fa-solid fa-gear"></i>  Settings</h2>
            </div>
            <hr>
            <div class="sidebar-sub">
                <h2><i class="fa-solid fa-right-from-bracket"></i>  Sign Out</h2>
            </div> 
        </div>
    </div>
    <div class="applicant-box">
        <div class="search-box">
            <input type="text" id="search" placeholder="Search for applicants">
            <div class="newjob"><i class="fa-solid fa-plus"></i> Add New Job Postings</div>
        </div>
        <div class="applicant-section">
            <div class="latest-apply">
                <div class="lat-head">
                   <h2>Latest applicants</h2>
                   <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>   
                <div class="lat-body">
                    <div class="lat-card">
                        <div class="lat-card-head">
                            <h3><i class="fa-solid fa-square-check"></i>      Kishore Kumar</h3>
                            <p>photo</p>
                        </div>
                        <div class="lat-card-body">
                            <p>New applicant notification</p>
                        </div>
                    </div>
                    <div class="lat-card">
                        <div class="lat-card-head">
                            <h3><i class="fa-solid fa-square-check"></i>      Libin</h3>
                            <p>photo</p>
                        </div>
                        <div class="lat-card-body">
                            <p>New applicant notification</p>
                        </div>
                    </div>
                    <div class="lat-card">
                        <div class="lat-card-head">
                            <h3><i class="fa-solid fa-square-check"></i>      Nishanth</h3>
                            <p>photo</p>
                        </div>
                        <div class="lat-card-body">
                            <p>New applicant notification</p>
                        </div>
                    </div>
                    <div class="lat-card">
                        <div class="lat-card-head">
                            <h3><i class="fa-solid fa-square-check"></i>      Krishna Srinivasan</h3>
                            <p>photo</p>
                        </div>
                        <div class="lat-card-body">
                            <p>New applicant notification</p>
                        </div>
                    </div>
                    <div class="lat-card">
                        <div class="lat-card-head">
                            <h3><i class="fa-solid fa-square-check"></i>      John Osborne</h3>
                            <p>photo</p>
                        </div>
                        <div class="lat-card-body">
                            <p>New applicant notification</p>
                        </div>
                    </div>
                    <div class="lat-card">
                        <div class="lat-card-head">
                            <h3><i class="fa-solid fa-square-check"></i>      Kaameshwar</h3>
                            <p>photo</p>
                        </div>
                        <div class="lat-card-body">
                            <p>New applicant notification</p>
                        </div>
                    </div>
                    <div class="lat-card">
                        <div class="lat-card-head">
                            <h3><i class="fa-solid fa-square-check"></i>      Nithish Kumar</h3>
                            <p>photo</p>
                        </div>
                        <div class="lat-card-body">
                            <p>New applicant notification</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="apply-details">
                <div class="app-details-head">
                    <h1>Applicant Details</h1>
                    <h1><i class="fa-solid fa-xmark"></i></h1>
                </div>
                <div class="app-details-body">
    <div class="applicant-info">
        <h2>Kishore Kumar</h2>
        <p><strong>Email:</strong> kishore.kumar@example.com</p>
        <p><strong>Phone:</strong> +1 (123) 456-7890</p>
        <p><strong>Experience:</strong> 5 years in Software Development</p>
        <p><strong>Skills:</strong> Java, Python, React</p>
        <p><strong>Education:</strong> B.Tech in Computer Science from XYZ University</p>
        <p><strong>LinkedIn Profile:</strong> <a href="https://www.linkedin.com/in/kishorekumar" target="_blank">View Profile</a></p>
        <p><strong>Resume:</strong> 
    <button class="download-button" onclick="window.open('link-to-resume-kishore.pdf', '_blank')">Download Resume</button>
</p>

    </div>


    <div class="applicant-interview">
        <h3>Interview Schedule:</h3>
        <p><strong>Date:</strong> December 20, 2024</p>
        <p><strong>Time:</strong> 10:00 AM IST</p>
        <p><strong>Mode:</strong> Zoom Meeting</p>
    </div>
    <div class="recruiter-actions">
        <h3>Recruiter Actions:</h3>
        <button class="action-button">Schedule Interview</button>
        <button class="action-button">Mark as Reviewed</button>
        <button class="action-button">Add Comment</button>
    </div>
    <button class="contact-button">Contact Applicant</button>
</div>
        </div>
    </div>
    </div>
</body>
</html><?php /**PATH /home/kishorekumar/jobportal_website/jobportal/resources/views/recruiter.blade.php ENDPATH**/ ?>