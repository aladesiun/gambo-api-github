<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\HelperController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.auth.users', ['users'=>$users]);
    }
    public function create(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $email_already_exist = User::where('email', $request->email)->first();
        if ($email_already_exist){
            HelperController::flashSession(false,'Email already exist');
            return redirect()->back();
        }

        $admin = new User();
        $admin->email = $request->email;
        $admin->name = $request->name;
        $admin->password = bcrypt($request->password);

        if (!$admin->save()){
            HelperController::flashSession(false,'Error adding Admin, please try again');
            return redirect()->back();
        }

        HelperController::flashSession(true,'Admin created successfully');
        return redirect()->to('/');
    }
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = $request->input();
        $user_details =  [
            'email' => $data['email'],
            'password' => $data['password']
        ];

        if($token = JWTAuth::attempt($user_details)){
            return response([
                'status' => true,
                'message' => 'Login Successful',
                'data'=>Auth::user(),
                'token' => $token
            ],200);
        }else{
            return response([
                'status' => false,
                'message' => 'Invalid login details',
            ],422);
        }
    }
}
