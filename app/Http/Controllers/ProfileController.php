<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index($profileId)
    {
        $profile = Profile::where('id', $profileId)->firstOrFail();

        return view('profiles.index', compact('profile'));
    }


    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }


    public function update(Profile $profile)
    {
        $data = request()->validate([
            'name' => ['required', 'min:3'],
            'about_me' => [''],
            'image' => ['']
        ]);

        if (request('image'))
        {
            $imagePath = request('image')->store('uploads', 'public');
            $profile->update([
                'image' => $imagePath
            ]);
        }

        $profile->update([
            'name' => $data['name'],
            'about_me' => $data['about_me']
        ]);

        

        return redirect('/profiles/' . $profile->id);
    }
}
