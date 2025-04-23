<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        // Load settings from database
        $settings = Setting::getAllSettings();

        // Set default values for any missing settings
        $defaults = [
            'agency_name' => 'Tata Pemerintahan Kota Semarang',
            'agency_logo' => null,
            'institution_description' => 'Website tata pemerintahan ini merupakan platform digital resmi yang dikelola oleh institusi pemerintahan guna menyediakan layanan publik dan informasi yang transparan, akurat, dan mudah diakses oleh masyarakat.',
            'address' => 'Jl. Pemuda No.148, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132',
            'email' => 'tapemkotasmg@gmail.com',
            'timezone' => 'Asia/Jakarta'
        ];

        foreach ($defaults as $key => $value) {
            if (!isset($settings[$key])) {
                $settings[$key] = $value;
            }
        }

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'agency_name' => 'required|string|max:255',
            'agency_logo' => 'nullable|image|mimes:jpg,png,svg|max:2048',
            'institution_description' => 'nullable|string|max:1000',
            'address' => 'required|string',
            'email' => 'required|email',
            'timezone' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Handle logo upload
        if ($request->hasFile('agency_logo')) {
            $logo = $request->file('agency_logo');
            $logoPath = $logo->store('logos', 'public');
            Setting::setSetting('agency_logo', $logoPath);
        }

        // Save settings to database
        Setting::setSetting('agency_name', $request->agency_name);
        Setting::setSetting('institution_description', $request->institution_description);
        Setting::setSetting('address', $request->address);
        Setting::setSetting('email', $request->email);
        Setting::setSetting('timezone', $request->timezone);

        return redirect()->route('admin.settings.index')
            ->with('status', 'Settings successfully updated!');
    }
}
