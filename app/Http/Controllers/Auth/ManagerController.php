<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Manager;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    use RegistersUsers;
    
    protected function guard()
    {
        return \Auth::guard('managers');
    }
    
    public function showLoginForm() {

        return view('Manager_auth.login');

    }
    
    public function showRegistrationForm() {

        return view('Manager_auth.sign');

    }
    
    public function login(Request $request) {

        $credentials = $request->only(['email', 'password']);
        $guard = $request->guard;

        if(\Auth::guard($guard)->attempt($credentials)) {

            return redirect($guard .'/dashboard'); // ログインしたらリダイレクト

        }

        return back()->withErrors([
            'auth' => ['認証に失敗しました']
        ]);
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'photo'=>['required'],
            'sns'=>['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:managers'],
            'pr'=>['required', 'string', 'max:255'],
            'age'=>['required', 'string', 'max:255'],
            'gender'=>['required', 'string', 'max:255'],
            'skill'=>['required', 'string', 'max:255'],
            'gakureki'=>['required', 'string', 'max:255'],
            'job'=>['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }
    
     protected function create(array $data)
    {
        return Manager::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'photo' => $data['photo'],
            'name' => $data['name'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'sns' => $data['sns'],
            'pr' => $data['pr'],
            'skill' => $data['skill'],
            'gakureki' => $data['gakureki'],
            'job' => $data['job'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
}
