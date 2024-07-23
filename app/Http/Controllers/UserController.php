<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function user() {
        $users = DB::table('users')
            ->where('is_admin', 0)
            ->where('is_delete', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('backend.user.list', compact('users'));
    }


    public function addUser(Request $request){

        return view('backend.user.add');
    }

    public function insertUser(Request $request){

        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:20|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/'

          ]);
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->status = trim($request->status);
        $save->save();


        return redirect('panel/user/list')->with('success','User succefully added');
    }


    public function editUser($id){
        $user['users'] = User::getSingle($id);

        return view('backend.user.edit',$user);

    }



public function updateUser(Request $request, $id)
{
    // Validate the input data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'status' => 'required|integer',
    ]);

    // If validation fails, redirect back with errors
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Find the user by id
    $user = User::find($id);

    // Update user data
    $user->name = trim($request->input('name'));
    $user->email = trim($request->input('email'));
    // if password changed
    if(!empty($request->input('password'))){
        $user->password = Hash::make($request->input('email'));
    }
    $user->status = $request->input('status');
    $user->save();

    return redirect('panel/user/list')->with('success', 'User successfully updated');
}

 public function deleteUser($id){
    $user = User::find($id);
    $user->is_delete = 1;
    $user->save();

    return redirect('panel/user/list')->with('success', 'User successfully deleted');

 }

}
