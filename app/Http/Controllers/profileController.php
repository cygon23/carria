<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



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
        $request->validate([
            'profile_image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user = auth()->user();
    
        if ($request->hasFile('profile_image_url')) {
            // Create the uploads directory if it doesn't exist
            $avatarPath = $request->file('profile_image_url')->store('uploads/avatar', 'public'); // Store in public disk
    
            $user->profile_image_url = basename($avatarPath); // Save only the filename
            $user->save();
        }
    
        return redirect()->back()->with('profile_image_url', 'Avatar updated successfully.');
     }

     public function homeCv(){
        return view('backend.cv.cv');
     }

 

// public function uploadCv(Request $request)
// {
//     $request->validate([
//         'resume' => 'required|file|mimes:pdf|max:1048', // Adjust file size as needed
//     ]);

//     try {
//         $user = auth()->user();

//         // Retrieve the old resume filename
//         $oldResume = $user->cv;

//         // Delete the old resume file if it exists
//         if ($oldResume) {
//             Storage::delete('storage/app/public/files/' . $oldResume);
//         }

//         // Store the new resume and get the filename
//         $resumePath = $request->file('resume')->store('public/files');
//         $resumeFilename = basename($resumePath);

//         // Update the user's resume in the database
//         $user->cv = $resumeFilename;
//         $user->save();

//         return redirect()->back()->with('success', 'Resume successfully updated.');
//     } catch (\Exception $e) {
//         return redirect()->back()->with('error', 'Something went wrong while uploading the file: ' . $e->getMessage());
//     }
// }


public function uploadCv(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'cv' => 'required|file|mimes:pdf|max:1048',
    ]);

    $user = auth()->user(); 

    if ($request->hasFile('cv')) {
        // Create the uploads directory if it doesn't exist
        $resumePath = $request->file('cv')->store('uploads/files', 'public'); // Store in public disk

        // Retrieve the old resume filename
        $oldResume = $user->cv; // Assuming 'cv' is the column where the filename is stored

        // Delete the old resume file if it exists
        if ($oldResume) {
            Storage::delete('public/uploads/files/' . $oldResume); // Delete the old file
        }

        // Save only the filename in the database
        $user->cv = basename($resumePath); 
        $user->save(); // Save the user's updated CV information
    }

    return redirect()->back()->with('success', 'CV successfully uploaded.');
}



}
