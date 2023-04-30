<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index', [
            'user' => User::find(auth()->user()->id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profile.edit', [
            'user' => User::find(auth()->user()->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        /**
         * validate the incoming requests
         */
        $attributes = $request->validate([
            'name' => 'string',
            'picture' => 'mimes:jpeg,png,jpg',
            'email' => ['email' , Rule::unique('users')->ignore($user->id)],
            'cv' => 'nullable|mimes:pdf|max:10000',
            'region' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255'

        ]);

        /**
         * Saving user picture and curriculum vitae (CV) on the public storage 
         * Saving the path into the database 
         */
        if(isset($attributes['cv']))
        {
            $CVPath = Storage::disk('public')->put('profileCV', $attributes['cv']);
            $user->profile->cv = $CVPath;

        }

        if(isset($attributes['picture']))
        {
            $picturePath = Storage::disk('public')->put('profilePictures', $attributes['picture']);
            $user->profile->picture = $picturePath;
        }
        
        $user->name = $attributes['name'];
        $user->email = $attributes['email'];
        $user->profile->region = $attributes['region'];
        $user->profile->city = $attributes['city'];
        $user->profile->job_title = $attributes['job_title'];


        $user->profile->save();
        return redirect('/')->with('success', 'تم تحديث ملف التعريف');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
