<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Jobs</title>
    <link rel="stylesheet" href="{{asset('css/jobs.css') }}" type="text/css">
</head>

<body>
    <div class="navbar">
        <nav>
        <img class="logo" src="{{asset('/logo.png')}}">
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
    <div class="flex-container">
        <div class="filter-container">
            <h4>Apply Filters</h4>
            <form action="" method="post">
                <p class="filter-sub">Working Type</p>
                <input type="checkbox" name="remote" value="remote">
                <label for="remote">Remote</label>
                <br>
                <input type="checkbox" name="hybrid" value="hybrid">
                <label for="hybrid">Hybrid</label>
                <br>
                <input type="checkbox" name="on-site" value="on-site">
                <label for="on-site">On-site</label>
                <br>
                <br>
                <hr>
                <p class="filter-sub">Job Type</p>
                <input type="checkbox" name="fulltime" value="fulltime">
                <label for="fulltime">Full-time</label>
                <br>
                <input type="checkbox" name="parttime" value="parttime">
                <label for="parttime">Part-time</label>
                <br>
                <input type="checkbox" name="contract" value="contract">
                <label for="contract">Contract</label>
                <br>
                <input type="checkbox" name="internship" value="internship">
                <label for="internship">Internship</label>
                <br>
                <br>
                <hr>
                <p class="filter-sub">Location</p>
                <input type="checkbox" name="chennai" value="chennai">
                <label for="chennai">Chennai</label>
                <br>
                <input type="checkbox" name="mumbai" value="mumbai">
                <label for="mumbai">Mumbai</label>
                <br>
                <input type="checkbox" name="kolkata" value="kolkata">
                <label for="kolkata">Kolkata</label>
                <br>
                <input type="checkbox" name="internship" value="internship">
                <label for="internship">Delhi</label>
                <br>
                <br>
                <hr>
                <p class="filter-sub">Domain</p>
                <input type="checkbox" name="software-development" value="software-development">
                <label for="software-development">Software Development</label>
                <br>
                <input type="checkbox" name="data-science" value="data-science">
                <label for="data-science">Data Science</label>
                <br>
                <input type="checkbox" name="financial-services" value="financial-services">
                <label for="financial-services">Financial Services</label>
                <br>
                <input type="checkbox" name="marketing" value="marketing">
                <label for="marketing">Marketing</label>
                <br>
                <br>
                <hr>
                <p class="filter-sub">Experience Level</p>
                <input type="checkbox" name="fresher" value="fresher">
                <label for="fresher">Fresher</label>
                <br>
                <input type="checkbox" name="zero-two" value="zero-two">
                <label for="zero-two">0-2 years</label>
                <br>
                <input type="checkbox" name="two-five" value="two-five">
                <label for="two-five">2-5 years</label>
                <br>
                <input type="checkbox" name="five-ten" value="five-ten">
                <label for="five-ten">5-10 years</label>
            </form>
        </div>
        <div class="search-job-container">
            <div class="search-box">
                <input type="text" name="searchbar" placeholder="Search for Jobs">
            </div>
            <div class="job-list">
                <div class="job-card">
                    <div class="job-card-header">
                        <h2>Software Developer</h2>
                        <br>
                        <p>Google</p>
                        </div>
                        <div class="job-card-body">
                            <p>Delhi(On-site)</p>
                            <p>1 month ago</p>
                        </div>
                </div>
            </div>        
            <hr>
            <div class="job -list">
                <div class="job-card">
                    <div class="job-card-header">
                        <h2>Machine Learning Engineer</h2>
                        <br>
                        <p>Microsoft</p>
                        </div>
                        <div class="job-card-body">
                            <p>Mumbai(On-site)</p>
                            <p>2 week ago</p>
                        </div>
                </div>
            </div>        
            <hr>
            <div class="job -list">
                <div class="job-card">
                    <div class="job-card-header">
                        <h2>Data Scientist</h2>
                        <br>
                        <p>Tata Consultancy Services</p>
                        </div>
                        <div class="job-card-body">
                            <p>Chennai(On-site)</p>
                            <p>1 month ago</p>
                        </div>
                </div>
            </div>        
            <hr>
            <div class="job -list">
                <div class="job-card">
                    <div class="job-card-header">
                        <h2>Data Analyst</h2>
                        <br>
                        <p>Wipro</p>
                        </div>
                        <div class="job-card-body">
                            <p>Mumbai(Hybrid)</p>
                            <p>1 week ago</p>
                        </div>
                </div>
            </div>        
            <hr>
            <div class="job -list">
                <div class="job-card">
                    <div class="job-card-header">
                        <h2>Finance Analyst</h2>
                        <br>
                        <p>HCL Technologies</p>
                        </div>
                        <div class="job-card-body">
                            <p>Kolkata(Hybrid)</p>
                            <p>4 days ago</p>
                        </div>
                </div>
            </div>        
            <hr>
            <div class="job -list">
                <div class="job-card">
                    <div class="job-card-header">
                        <h2>Project Manager</h2>
                        <br>
                        <p>Cognizant</p>
                        </div>
                        <div class="job-card-body">
                            <p>Chennai(Remote)</p>
                            <p>3 weeks ago</p>
                        </div>
                </div>
            </div>        
            <hr>           
        </div>
    </div>
</body>

</html>