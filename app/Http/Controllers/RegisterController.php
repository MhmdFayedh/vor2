<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use PhpParser\Node\Stmt\Return_;

class RegisterController extends Controller
{
    public function create()
    {
        return view('authentication.register');
    }

    public function store(Request $request)
    {
        // * The encryption process will be handle by the User model
        $attributes = request()->validate([
            'name' => ['required' , 'min:3', 'max:255'] ,
            'email' => ['required' , 'email','min:3', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed',
            Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ]
        ]);


        auth()->login(User::create($attributes));

        return redirect('/')->with('success', 'تم أنشاء الحساب بنجاح، الرجاء توثيق الحساب عبر الايميل');
    }
}
