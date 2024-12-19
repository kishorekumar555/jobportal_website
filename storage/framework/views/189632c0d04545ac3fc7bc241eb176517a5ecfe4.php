<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posting Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/addjobs.css')); ?>" type="Text/css">
</head>
<body>
    <div class="container">
        <h1>Add New Job Post</h1>
        <form id="jobPostForm">
            <label for="jobTitle">Job Title:</label>
            <input type="text" id="jobTitle" name="jobTitle" required>

            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" name="companyName" required>

            <label for="jobDescription">Job Description:</label>
            <textarea id="jobDescription" name="jobDescription" rows="4" required></textarea>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="employmentType">Employment Type:</label>
            <select id="employmentType" name="employmentType" required>
                <option value="">Select...</option>
                <option value="full-time">Full-Time</option>
                <option value="part-time">Part-Time</option>
                <option value="contract">Contract</option>
            </select>

            <label for="salaryRange">Salary Range:</label>
            <input type="text" id="salaryRange" name="salaryRange">

            <label for="applicationDeadline">Application Deadline:</label>
            <input type="date" id="applicationDeadline" name="applicationDeadline">

            <button type="submit">Submit Job Post</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="script.js"></script> <!-- Link to your JavaScript file -->
</body>
</html>
<?php /**PATH /home/kishorekumar/Desktop/jobportal_website/jobportal/resources/views/addjobs.blade.php ENDPATH**/ ?>