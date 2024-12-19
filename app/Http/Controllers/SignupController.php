<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function register(Request $request)
    {
        // Perform common validation for all users
        $request->validate([
            'user_type' => 'required|in:job_seeker,employer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        DB::beginTransaction();

        try {
            // Create the user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'user_type' => $request->user_type,
            ]);

            // Additional validation and data creation based on user type
            if ($request->user_type === 'job_seeker') {
                $request->validate([
                    'age' => 'required|integer|min:18',
                    'experience' => 'required|integer',
                    'qualification' => 'required|string|max:255',
                ]);

                $user->jobSeeker()->create([
                    'age' => $request->age,
                    'experience' => $request->experience,
                    'qualification' => $request->qualification,
                ]);
            } elseif ($request->user_type === 'employer') {
                $request->validate([
                    'organisation' => 'required|string|max:255',
                ]);

                $user->employer()->create([
                    'organisation' => $request->organisation,
                ]);
            }

            DB::commit(); // Commit the transaction

            // Redirect to the signup page with a success message
            return redirect()->route('signup')->with('success', 'Signup successful!');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction in case of error

            // Log the error for debugging
            \Log::error('Signup failed', ['error' => $e->getMessage()]);

            // Redirect back with an error message
            return redirect()->route('signup')->with('error', 'Signup failed. Please try again.');
        }
    }
}
