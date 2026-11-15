<?php

namespace App\Http\Controllers;

use App\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    
    public function store(Request $request){
        $crediantls = $request->validate([
            'username' => ['required'],
            'password' => 'required',
        ]);

        if(!Auth::attempt($crediantls)){
            return back()->withErrors(['email' => 'Email o password errati'])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route(''));
    }

    public function destroy(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }
}
