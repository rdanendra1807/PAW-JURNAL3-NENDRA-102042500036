<<<<<<< HEAD
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Peminjaman Buku</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            font-style: normal !important;
        }
        body {
            background-color: #f1f5f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        .login-card {
            width: 100%;
            max-width: 420px;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>

<div class="container p-3">
    <div class="card login-card mx-auto bg-white">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                <h4 class="fw-bold mb-1 text-dark">Masuk Sistem</h4>
                <p class="text-muted small">Sistem Peminjaman Buku Perpustakaan</p>
            </div>

            <!-- Flash Error / Success -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show small" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold small">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="admin@perpustakaan.com" required autofocus>
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label fw-semibold small">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="••••••••" required>
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary py-2 fw-semibold">
                        Masuk ke Dashboard
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
@extends('layouts.app')

@section('title', 'CeLOE LMS')

@push('styles')
<style>
    body {
        min-height: 100vh;
        background: linear-gradient(rgba(15, 23, 42, 0.50), rgba(15, 23, 42, 0.65)),
                    url('{{ asset('images/telkom-campus.png') }}?v=2') no-repeat center center fixed !important;
        background-size: cover !important;
    }

    .login-container {
        max-width: 440px;
        width: 100%;
        margin: 1.5rem auto;
    }

    .login-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.08), 0 2px 4px -2px rgba(0, 0, 0, 0.04);
        padding: 2rem 1.75rem;
    }

    .login-header {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .login-icon-box {
        width: 3rem;
        height: 3rem;
        background-color: #fef2f2;
        color: var(--tel-red);
        border: 1px solid #fee2e2;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.75rem;
    }

    .login-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--slate-900);
        margin: 0;
        line-height: 1.3;
    }

    .login-subtitle {
        font-size: 0.8125rem;
        color: var(--slate-500);
        margin-top: 0.25rem;
    }

    .login-form .form-group {
        margin-bottom: 1rem;
    }

    .login-form .form-label {
        display: block;
        font-size: 0.8125rem;
        font-weight: 600;
        color: var(--slate-700);
        margin-bottom: 0.375rem;
    }

    .login-form .form-control {
        width: 100%;
        padding: 0.625rem 0.875rem;
        font-size: 0.875rem;
        color: var(--slate-800);
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        transition: border-color 0.15s ease, box-shadow 0.15s ease;
        outline: none;
    }

    .login-form .form-control:focus {
        border-color: var(--tel-red);
        box-shadow: 0 0 0 3px rgba(185, 28, 28, 0.12);
    }

    .btn-telkom {
        width: 100%;
        padding: 0.6875rem 1rem;
        font-size: 0.9375rem;
        font-weight: 600;
        color: #ffffff;
        background-color: var(--tel-red);
        border: 1px solid var(--tel-red);
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.15s ease, border-color 0.15s ease;
    }

    .btn-telkom:hover {
        background-color: var(--tel-red-dark);
        border-color: var(--tel-red-dark);
    }
</style>
@endpush

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <h1 class="login-title">CeLOE LMS</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" style="margin-bottom: 1.25rem; padding: 0.75rem 1rem;">
                <div>{{ $errors->first() }}</div>
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="login-form">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">
                    Alamat Email Pengguna <span style="color: var(--tel-red);">*</span>
                </label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    value="{{ old('email') }}" 
                    placeholder="nama@celoe.test" 
                    required 
                    autofocus
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">
                    Kata Sandi <span style="color: var(--tel-red);">*</span>
                </label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    placeholder="Masukkan kata sandi" 
                    required
                >
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group" style="display: flex; align-items: center; justify-content: space-between; margin-top: 0.5rem; margin-bottom: 1.25rem;">
                <label style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.8125rem; color: var(--slate-600); cursor: pointer;">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Ingat sesi masuk</span>
                </label>
            </div>

            <button type="submit" class="btn-telkom">
                Masuk ke CeLOE LMS
            </button>

            <div style="text-align: center; margin-top: 1.25rem; font-size: 0.875rem; color: var(--slate-600);">
                Belum punya akun? <a href="{{ route('register') }}" style="color: var(--tel-red); font-weight: 600; text-decoration: none;">Daftar sebagai Mahasiswa &rarr;</a>
            </div>
        </form>

    </div>
</div>
@endsection
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
