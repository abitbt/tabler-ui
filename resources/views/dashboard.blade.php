@extends('layouts.app')

@section('content')
    <x-tabler::page-header title="Dashboard" pretitle="Welcome back, {{ auth()->user()->name }}">
        <x-slot:actions>
            <x-tabler::button href="{{ route('profile.edit') }}" variant="outline" icon="settings">
                Profile Settings
            </x-tabler::button>
        </x-slot:actions>
    </x-tabler::page-header>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                {{-- User Info Card --}}
                <div class="col-md-6 col-lg-4">
                    <x-tabler::cards.card>
                        <x-tabler::cards.body>
                            <div class="d-flex align-items-center">
                                <x-tabler::avatar :name="auth()->user()->name" size="lg" class="me-3" />
                                <div>
                                    <h3 class="mb-1">{{ auth()->user()->name }}</h3>
                                    <div class="text-secondary">{{ auth()->user()->email }}</div>
                                    @if (auth()->user()->hasVerifiedEmail())
                                        <x-tabler::badge color="success" class="mt-1">
                                            <x-tabler-check class="icon" />
                                            Verified
                                        </x-tabler::badge>
                                    @else
                                        <x-tabler::badge color="warning" class="mt-1">
                                            <x-tabler-alert-triangle class="icon" />
                                            Unverified
                                        </x-tabler::badge>
                                    @endif
                                </div>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Two-Factor Authentication Status --}}
                <div class="col-md-6 col-lg-4">
                    <x-tabler::cards.card>
                        <x-tabler::cards.body>
                            <div class="d-flex align-items-center">
                                <span class="bg-primary avatar me-3 text-white">
                                    <x-tabler-shield-lock />
                                </span>
                                <div>
                                    <h4 class="mb-0">Two-Factor Authentication</h4>
                                    @if (auth()->user()->two_factor_secret)
                                        <div class="text-success">
                                            <x-tabler-check class="icon" />
                                            Enabled
                                        </div>
                                    @else
                                        <div class="text-secondary">Disabled</div>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('profile.edit') }}#two-factor"
                                    class="btn btn-outline-primary btn-sm w-100">
                                    Manage 2FA
                                </a>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Account Created --}}
                <div class="col-md-6 col-lg-4">
                    <x-tabler::cards.card>
                        <x-tabler::cards.body>
                            <div class="d-flex align-items-center">
                                <span class="bg-info avatar me-3 text-white">
                                    <x-tabler-calendar />
                                </span>
                                <div>
                                    <h4 class="mb-0">Account Created</h4>
                                    <div class="text-secondary">
                                        {{ auth()->user()->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                            <div class="small text-secondary mt-3">
                                Member since {{ auth()->user()->created_at->format('F j, Y') }}
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Quick Actions --}}
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Quick Actions</x-slot:title>
                            <x-slot:subtitle>Common tasks and settings</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="row g-3">
                                <div class="col-6 col-md-3">
                                    <a href="{{ route('profile.edit') }}" class="card card-link">
                                        <div class="card-body text-center">
                                            <x-tabler-user class="icon icon-lg text-primary mb-2" />
                                            <div>Update Profile</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="{{ route('profile.edit') }}#password" class="card card-link">
                                        <div class="card-body text-center">
                                            <x-tabler-lock class="icon icon-lg text-success mb-2" />
                                            <div>Change Password</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="{{ route('profile.edit') }}#two-factor" class="card card-link">
                                        <div class="card-body text-center">
                                            <x-tabler-shield class="icon icon-lg text-warning mb-2" />
                                            <div>Security Settings</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="card card-link w-100 border-0">
                                            <div class="card-body text-center">
                                                <x-tabler-logout class="icon icon-lg text-danger mb-2" />
                                                <div>Sign Out</div>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Welcome Message --}}
                @if (!auth()->user()->hasVerifiedEmail())
                    <div class="col-12">
                        <x-tabler::alert color="warning">
                            <x-tabler-alert-triangle class="icon alert-icon" />
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <div>
                                    <h4 class="alert-title">Verify Your Email</h4>
                                    <div class="text-secondary">
                                        Please verify your email address to access all features. Check your inbox for the
                                        verification link.
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <x-tabler::button type="submit" color="warning" variant="outline">
                                        Resend Email
                                    </x-tabler::button>
                                </form>
                            </div>
                        </x-tabler::alert>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
