<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Route;



class PasswordController extends Controller
{
    public function index()
    {
        return view('password.index');
    }

    public function check(User $user, Request $request)
    {
        
        if(! Hash::check($request->password , auth()->user()->password))
        {
            return redirect('/password')->with('failed', 'الرمز غير صحيح');
        }

        return redirect('password/edit');
        
    }

    public function edit()
    {
        return view('password.edit');
    }
    
    public function update(Request $request)
    {

        $user = User::find(auth()->user()->id);
        $attributes =  $request->validate([
            'password' => ['required', 'confirmed',
            Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ]
        ]);

        $user->password = $attributes['password'];

        $user->save();

        return redirect('/')->with('success', 'تم تحديث ملف التعريف');
    }
}
