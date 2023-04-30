<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users =  User::latest();
        if(request('search')){
            $users->where('email', 'like', '%' . request('search') . '%');
        }
        //* ------------------------
        return view('admin.users.index', [
            'users' => $users->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required' , 'min:3', 'max:255'] ,
            'email' => ['required' , 'email','min:3', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required',
            Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
        ],
        'role'=> ['required']
        ]);

        User::create($attributes);

        return redirect('/admin/users')->with('success', 'تم أنشاء الحساب بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //* Find the user
        $user = User::find($id);

        //* Validate The Request
        $attributes = $request->validate([
            'name' => [ 'min:3', 'max:255'] ,
            'email' => ['email','min:3', 'max:255'],
        ]);




        //* Update the user
        
        $user->name = $attributes['name'];
        $user->email = $attributes['email'];
        // $user->password = $attributes['password']; //! FIGURE OUT A WAY TO UPDATE PASSWORD  
        $user->role = $request['role'];

        $user->save();

        return redirect('admin/users')->with('success', 'تم تعديل الحساب بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete($user);

        return redirect('/admin/users')->with('success',   'تم حذف المستخدم، ' . $user->name );
    }

}
