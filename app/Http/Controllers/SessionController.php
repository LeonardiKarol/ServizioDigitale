<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    
    public function store(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => 'required',
        ]);

        if(!Auth::attempt($credentials)){
            return back()->withErrors(['username' => 'Username o password errati'])->onlyInput('text');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('/welcome'));
    }

    public function destroy(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }
}
