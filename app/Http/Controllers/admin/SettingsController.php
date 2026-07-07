<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        $settings = [
            'site_name'  => Setting::get('site_name', 'DOMOS'),
            'logo_light' => Setting::get('logo_light', 'admin/assets/images/logo.png'),
            'logo_dark'  => Setting::get('logo_dark', 'admin/assets/images/logo-black.png'),
            'logo_small' => Setting::get('logo_small', 'admin/assets/images/logo-sm.png'),
        ];
        return view('admin.pages.settings.index', compact('user', 'settings'));
    }

    public function updateProfile(Request $request): RedirectResponse
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success', 'Profil mis à jour.');
    }

    public function updateSettings(Request $request): RedirectResponse
    {
        $request->validate([
            'site_name' => 'required|string|max:255',
        ]);

        Setting::set('site_name', $request->site_name);

        if ($request->hasFile('logo_light')) {
            $path = $request->file('logo_light')->store('admin/logos', 'public');
            Setting::set('logo_light', 'storage/' . $path);
        }

        if ($request->hasFile('logo_dark')) {
            $path = $request->file('logo_dark')->store('admin/logos', 'public');
            Setting::set('logo_dark', 'storage/' . $path);
        }

        if ($request->hasFile('logo_small')) {
            $path = $request->file('logo_small')->store('admin/logos', 'public');
            Setting::set('logo_small', 'storage/' . $path);
        }

        return back()->with('success', 'Paramètres mis à jour.');
    }

    public function update(Request $request): RedirectResponse
    {
        $tab = $request->input('_tab', 'profile');

        if ($tab === 'profile') {
            return $this->updateProfile($request);
        }

        return $this->updateSettings($request);
    }
}
