@extends('layouts.admin')

@section('title', 'General Settings')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>General Settings</h1>
</div>

<div class="card">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Institution Identity -->
            <div class="mb-4 settings-section">
                <h4 class="border-bottom pb-2"><i class="fas fa-building me-2"></i>Institution Identity</h4>
                <div class="mb-3">
                    <label for="agency_name" class="form-label">Agency Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('agency_name') is-invalid @enderror" id="agency_name" name="agency_name" placeholder="Tata Pemerintahan Kota Semarang" value="{{ old('agency_name', $settings['agency_name']) }}" required>
                    @error('agency_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="institution_description" class="form-label">Institution Description</label>
                    <textarea class="form-control @error('institution_description') is-invalid @enderror" id="institution_description" name="institution_description" rows="3" placeholder="Website tata pemerintahan ini merupakan platform digital resmi yang dikelola oleh institusi pemerintahan guna menyediakan layanan publik dan informasi yang transparan, akurat, dan mudah diakses oleh masyarakat.">{{ old('institution_description', $settings['institution_description'] ?? '') }}</textarea>
                    @error('institution_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Official Address & Contact -->
            <div class="mb-4">
                <h4 class="border-bottom pb-2">Official Address & Contact</h4>
                <div class="mb-3">
                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3" placeholder="Jl. Pemuda No.148, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132" required>{{ old('address', $settings['address']) }}</textarea>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $settings['email']) }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Time Zone Settings -->
            <div class="mb-4">
                <h4 class="border-bottom pb-2">Time Zone Settings</h4>
                <div class="mb-3">
                    <label for="timezone" class="form-label">Default Time Zone <span class="text-danger">*</span></label>
                    <select class="form-select @error('timezone') is-invalid @enderror" id="timezone" name="timezone" required>
                        <option value="Asia/Jakarta" {{ old('timezone', $settings['timezone']) == 'Asia/Jakarta' ? 'selected' : '' }}>Asia/Jakarta (WIB)</option>
                        <option value="Asia/Makassar" {{ old('timezone', $settings['timezone']) == 'Asia/Makassar' ? 'selected' : '' }}>Asia/Makassar (WITA)</option>
                        <option value="Asia/Jayapura" {{ old('timezone', $settings['timezone']) == 'Asia/Jayapura' ? 'selected' : '' }}>Asia/Jayapura (WIT)</option>
                    </select>
                    @error('timezone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- No Language Preferences and Dashboard Theme sections as they have been removed -->

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Save Settings</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('js/settings.js') }}"></script>
@endsection
