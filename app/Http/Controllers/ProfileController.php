<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();
        return view('profile.edit', compact('profile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'background' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048',
        ]);

        $profile = new Profile;
        $profile->nama = $request->nama;
        $profile->background = $request->background;

        $fileName = Str::uuid() . '.' . $request->foto->extension();
        $request->foto->storeAs('public/profile', $fileName);
        $profile->foto = $fileName;

        $profile->save();

        return redirect()->route('profile.show');
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'background' => 'required',
        ]);

        $profile = Profile::first();
        $profile->nama = $request->nama;
        $profile->background = $request->background;

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:10048',
            ]);
            Storage::disk('public')->delete('profile/' . $profile->foto);
            $fileName = Str::uuid() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/profile', $fileName);
            $profile->foto = $fileName;
        }

        $profile->save();

        return redirect()->route('profile.show');
    }

    public function show()
    {
        $profile = Profile::first();
        return view('profile.show', compact('profile'));
    }
}
