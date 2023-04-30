<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('authentication.login');
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if( !auth()->attempt($attr)){
            throw ValidationException::withMessages([
                'email' => 'نأسف المعلومات المقدمة غير صحيحة، تأكد من البريد الالكتروني او الرمز السري',
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'تم تسجيل دخولك، بنجاح');

    }

    public function destroy()
    {
        auth()->logout(); 
        return redirect('/')->with('success', 'سجلت خروجك، بنجاح');
    }
}


