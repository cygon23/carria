<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public  function profile(){
        return view('backend.profile.profile');
     }
   
    public function profileAdd(Request $request)
    {
        // Get the currently authenticated user
        $user = auth()->user();
    
        $request->validate([
            'address' => 'required|min:20|max:255',
            'phone' => 'required|digits:11',
            'experience' => 'required|min:1|max:255',
            'bio' => 'required|min:30|max:450',
        ]);
    
        // Update the user's information
        if ($user) { 
            $user->update([
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'experience' => $request->input('experience'),
                'bio' => $request->input('bio'),
            ]);
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Profile updated successfully.');
        }
    
        // Redirect back with an error message if no user is found
        return redirect()->back()->with('error', 'User not authenticated.');
    }

//   public function profileUpdate(Request $request){
//     $user = auth()->user();

//     // Validate the incoming request data
//     $request->validate([
//         'address' => 'required|min:20|max:255',
//         'phone' => 'required|digits:11',
//         'experience' => 'required|min:1|max:255',
//         'bio' => 'required|min:30|max:450',
//     ]);

//     // Update the user's information
//     $user->update([
//         'address' => $request->input('address'),
//         'phone' => $request->input('phone'),
//         'experience' => $request->input('experience'),
//         'bio' => $request->input('bio'),
//     ]);

//     // Redirect back with a success message
//     return redirect()->back()->with('success', 'Profile updated successfully.');
//   }

    public function help(){
        return view ('backend.profile.help');
     }

     public function avator(Request $request){
       return view();
     }
}
