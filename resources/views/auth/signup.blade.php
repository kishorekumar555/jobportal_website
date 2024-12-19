<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        function toggleFields() {
            var userType = document.getElementById("user_type").value;
            document.getElementById("job_seeker_fields").style.display = (userType === "job_seeker") ? "block" : "none";
            document.getElementById("employer_fields").style.display = (userType === "employer") ? "block" : "none";
        }
        window.onload = toggleFields;
    </script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .alert {
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #0073b1;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #0073b1;
            border: none;
        }
        .btn-primary:hover {
            background-color: #005582;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Signup</h2>

        @if (session("success"))
            <div class="alert alert-success">{{ session("success") }}</div>
        @endif

        <form action="{{route('register')}}" method="POST">
            @csrf

            <!-- User Type Dropdown -->
            <div class="mb-3">
                <label for="user_type" class="form-label">I am a</label>
                <select class="form-select" id="user_type" name="user_type" onchange="toggleFields()" required>
                    <option value="">Select User Type</option>
                    <option value="job_seeker">Job Seeker</option>
                    <option value="employer">Employer</option>
                </select>
            </div>

            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Job Seeker Fields -->
            <div id="job_seeker_fields" style="display:none;">
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" required>
                    @error('age')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="experience" class="form-label">Experience (Years)</label>
                    <input type="number" class="form-control" id="experience" name="experience" value="{{ old('experience') }}" required>
                    @error('experience')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qualification" class="form-label">Highest Qualification</label>
                    <input type="text" class="form-control" id="qualification" name="qualification" value="{{ old('qualification') }}" required>
                    @error('qualification')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Employer Fields -->
            <div id="employer_fields" style="display:none;">
                <div class="mb-3">
                    <label for="organisation" class="form-label">Organisation Name</label>
                    <input type="text" class="form-control" id="organisation" name="organisation" value="{{ old('organisation') }}" required>
                    @error('organisation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
             </div>
            <!-- Submit Button -->
             <br>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>

        <!-- Redirect to Login -->
        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login here</a></p>
        </div>
    </div>
</body>
</html>
