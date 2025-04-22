<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        // In a real application, these would be loaded from database
        // For now, we'll use placeholder data
        $settings = [
            'agency_name' => 'Tata Pemerintahan Kota Semarang',
            'agency_logo' => null, // Placeholder for logo path
            'address' => 'Jl. Pemuda No.148, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132',
            'email' => 'tapemkotasmg@gmail.com',
            'timezone' => 'Asia/Jakarta'
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'agency_name' => 'required|string|max:255',
            'agency_logo' => 'nullable|image|mimes:jpg,png,svg|max:2048',
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
            // In a real app, save $logoPath to database
        }

        // In a real application, save settings to database
        // For now, just redirect with success message

        return redirect()->route('admin.settings.index')
            ->with('status', 'Settings updated successfully!');
    }
}
