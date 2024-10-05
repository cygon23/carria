<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassowrdMail;
use Str;
use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Validator;

class AuthController extends Controller
{
    static  function login()
    {

        return view('auth.login');
    }

    static  function register()
    {

        return view('auth.register');
    }

    static  function forgot()
    {

        return view('auth.forgot');
    }

    static  function reset($token)
    {

        $user = User::where('remember_token', '=', $token)->first();
        //check if user not found
        if (!empty($user)) {
            $data['user'] = $user;
            return view('auth.reset', $data);
        } else {
            abort(404);
        }
    }


    public static function reset_password($token, Request $request)
    {
        // Define validation rules
        $rules = [
            'password' => 'required|string|min:8|max:20|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
            'cpassword' => 'required|string|same:password'
        ];


        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Passowrd must be min 8 with mixer of character');
        }

        $user = User::where('remember_token', '=', $token)->first();

        if (!empty($user)) {
            if ($request->password == $request->cpassword) {
                $user->password = Hash::make($request->password);
                if (empty($user->email_verified_at)) {
                    $user->email_verified_at = date('Y-m-d H:i:s');
                }
                $user->remember_token = Str::random(40);
                $user->save();
                return redirect('login')->with('success', 'Successfully reset');
            } else {
                return redirect()->back()->with('error', 'Password and Confirm password do not match');
            }
        } else {
            abort(404);
        }
    }


    static function forgot_password(Request $request)
    {
        //check if email available

        $user = User::where('email', '=', $request->email)->first();

        if (!empty($user)) {

            $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPassowrdMail($user));
            return redirect('login')->with('success', 'Chack your email to resert passowrd');
        } else {
            return redirect()->back()->with('error', 'Email not found');
        }
    }

    static  function create_user(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'user_type' => 'required|in:job_seeker,company',
            'password' => 'required|string|min:8|max:20|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/'

        ]);
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->user_type = trim($request->user_type);
        $save->password = trim(Hash::make($request->password));
        // $save->terms = trim($request->terms);
        $save->remember_token = Str::random(40);
        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save));
        return redirect('login')->with('success', 'your succefilly created an account and verify your email address');
    }

    public function verify($token)
    {
        $user = User::where('remember_token', '=', $token)->first();

        if (!empty($user)) {

            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(40);
            $user->save();

            return redirect('login')->with('success', 'Your Email Successfully Verified');
        } else {
            abort(404);
        }
    }

    // public function auth_login(Request $request)
    // {
    //       $remember = !empty($request->remember) ? true : false;
    //     //to check if verify_email column
    //       if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember))
    //       {
    //           if(!empty(Auth::user()->email_verified_at))
    //           {
    //             //dashboard
    //             return redirect('panel/dashboard');
    //           }
    //           else{
    //             //storing 1st id
    //             $user_id = Auth::user()->id;
    //             Auth::logout();

    //             $save = User::getSingle($user_id);
    //             $save->remember_token = Str::random(40);
    //             $save->save();


    //             //send the verification email
    //             Mail::to($save->email)->send(new RegisterMail($save));
    //             return redirect()->back()->with('success','Check your email box to verify');

    //           }
    //       }
    //       else{
    //           return redirect()->back()->with('error','Please enter correct email and passowrd');
    //       }

    // }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            // Check if the user's email is verified
            if (!empty(Auth::user()->email_verified_at)) {
                // Redirect based on the user_type
                $userType = Auth::user()->user_type;  // Assuming user_type column exists in the users table

                switch ($userType) {
                    case 'job_seeker':
                        return redirect('panel/dashboard');  // Job Seeker's Dashboard
                        break;

                    case 'company':
                        return redirect('companies/companyHome');  // Company's Dashboard
                        break;

                    case 'admin':
                        return redirect('panel/dashboard');  // Admin's Dashboard
                        break;

                    default:
                        Auth::logout();  // Log the user out if user_type is invalid
                        return redirect()->back()->with('error', 'Invalid user type');
                }
            } else {
                // Handle email not verified
                $user_id = Auth::user()->id;
                Auth::logout();

                $save = User::find($user_id);
                $save->remember_token = Str::random(40);
                $save->save();

                // Send the verification email
                Mail::to($save->email)->send(new RegisterMail($save));

                return redirect()->back()->with('success', 'Check your email box to verify');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter the correct email and password');
        }
    }

    static function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
