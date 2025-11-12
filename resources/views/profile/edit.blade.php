@extends('layouts.app')

@section('content')
    <x-tabler::page-header title="Profile Settings" pretitle="Manage your account" />

    <div class="page-body">
        <div class="container-xl">
            @if (session('status') === 'profile-updated')
                <x-tabler::alert color="success" class="mb-3" dismissible>
                    <x-tabler-check class="icon alert-icon" />
                    Profile information updated successfully!
                </x-tabler::alert>
            @endif

            @if (session('status') === 'password-updated')
                <x-tabler::alert color="success" class="mb-3" dismissible>
                    <x-tabler-check class="icon alert-icon" />
                    Password updated successfully!
                </x-tabler::alert>
            @endif

            @if (session('status') === 'two-factor-authentication-enabled')
                <x-tabler::alert color="success" class="mb-3" dismissible>
                    <x-tabler-check class="icon alert-icon" />
                    Two-factor authentication has been enabled!
                </x-tabler::alert>
            @endif

            @if (session('status') === 'two-factor-authentication-disabled')
                <x-tabler::alert color="info" class="mb-3" dismissible>
                    <x-tabler-info-circle class="icon alert-icon" />
                    Two-factor authentication has been disabled.
                </x-tabler::alert>
            @endif

            <div class="row row-cards">
                {{-- Profile Information --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Profile Information</x-slot:title>
                            <x-slot:subtitle>Update your account's profile information and email address</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                @method('PATCH')

                                <x-tabler::forms.input name="name" label="Name" :value="old('name', $user->name)" required autofocus />

                                <x-tabler::forms.input type="email" name="email" label="Email" :value="old('email', $user->email)"
                                    required />

                                @if (!$user->hasVerifiedEmail())
                                    <x-tabler::alert color="warning" class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>Your email address is unverified.</strong>
                                            </div>
                                            <form method="POST" action="{{ route('verification.send') }}">
                                                @csrf
                                                <x-tabler::button type="submit" color="warning" variant="outline"
                                                    size="sm">
                                                    Resend Verification Email
                                                </x-tabler::button>
                                            </form>
                                        </div>
                                    </x-tabler::alert>
                                @endif

                                <div class="form-footer">
                                    <x-tabler::button type="submit" color="primary">
                                        <x-tabler-device-floppy class="icon" />
                                        Save Changes
                                    </x-tabler::button>
                                </div>
                            </form>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Update Password --}}
                <div class="col-md-6">
                    <x-tabler::cards.card id="password">
                        <x-tabler::cards.header>
                            <x-slot:title>Update Password</x-slot:title>
                            <x-slot:subtitle>Ensure your account is using a long, random password to stay secure</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('PUT')

                                <x-tabler::forms.input type="password" name="current_password" label="Current Password"
                                    autocomplete="current-password" required />

                                <x-tabler::forms.input type="password" name="password" label="New Password"
                                    autocomplete="new-password" required />

                                <x-tabler::forms.input type="password" name="password_confirmation" label="Confirm Password"
                                    autocomplete="new-password" required />

                                <div class="form-footer">
                                    <x-tabler::button type="submit" color="primary">
                                        <x-tabler-lock class="icon" />
                                        Update Password
                                    </x-tabler::button>
                                </div>
                            </form>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Two-Factor Authentication --}}
                <div class="col-md-6">
                    <x-tabler::cards.card id="two-factor">
                        <x-tabler::cards.header>
                            <x-slot:title>Two-Factor Authentication</x-slot:title>
                            <x-slot:subtitle>Add additional security to your account using two-factor
                                authentication</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            @if ($user->two_factor_secret)
                                {{-- 2FA is enabled --}}
                                <x-tabler::alert color="success" class="mb-3">
                                    <x-tabler-shield-check class="icon alert-icon" />
                                    <div>
                                        <h4 class="alert-title">Two-factor authentication is enabled</h4>
                                        <div class="text-secondary">
                                            Your account is protected with two-factor authentication.
                                        </div>
                                    </div>
                                </x-tabler::alert>

                                @if (session('status') === 'two-factor-authentication-enabled')
                                    <div class="mb-3">
                                        <h4>Recovery Codes</h4>
                                        <p class="text-secondary">Store these recovery codes in a secure password manager.
                                            They can be used to recover access to your account if your two-factor
                                            authentication device is lost.</p>
                                        <div class="bg-light font-monospace small rounded p-3">
                                            @foreach (json_decode(decrypt($user->two_factor_recovery_codes), true) as $code)
                                                <div>{{ $code }}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <div class="btn-list">
                                    <form method="POST" action="{{ url('/user/two-factor-recovery-codes') }}">
                                        @csrf
                                        <x-tabler::button type="submit" variant="outline">
                                            <x-tabler-refresh class="icon" />
                                            Regenerate Recovery Codes
                                        </x-tabler::button>
                                    </form>

                                    <form method="POST" action="{{ url('/user/two-factor-authentication') }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-tabler::button type="submit" color="danger" variant="outline">
                                            <x-tabler-shield-x class="icon" />
                                            Disable 2FA
                                        </x-tabler::button>
                                    </form>
                                </div>
                            @else
                                {{-- 2FA is disabled --}}
                                <p class="text-secondary mb-3">
                                    When two-factor authentication is enabled, you will be prompted for a secure, random
                                    token during authentication. You may retrieve this token from your phone's Google
                                    Authenticator application.
                                </p>

                                <form method="POST" action="{{ url('/user/two-factor-authentication') }}">
                                    @csrf
                                    <x-tabler::button type="submit" color="primary">
                                        <x-tabler-shield-check class="icon" />
                                        Enable Two-Factor Authentication
                                    </x-tabler::button>
                                </form>
                            @endif
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Delete Account --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Delete Account</x-slot:title>
                            <x-slot:subtitle>Permanently delete your account and all of its data</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <x-tabler::alert color="danger">
                                <x-tabler-alert-triangle class="icon alert-icon" />
                                <div>
                                    <h4 class="alert-title">This action is permanent</h4>
                                    <div class="text-secondary">
                                        Once your account is deleted, all of its resources and data will be permanently
                                        deleted. Before deleting your account, please download any data or information that
                                        you wish to retain.
                                    </div>
                                </div>
                            </x-tabler::alert>

                            <form method="POST" action="{{ route('profile.destroy') }}" x-data="{ confirmingDeletion: false }">
                                @csrf
                                @method('DELETE')

                                <div x-show="!confirmingDeletion">
                                    <x-tabler::button type="button" color="danger" @click="confirmingDeletion = true">
                                        <x-tabler-trash class="icon" />
                                        Delete Account
                                    </x-tabler::button>
                                </div>

                                <div x-show="confirmingDeletion" style="display: none;">
                                    <x-tabler::forms.input type="password" name="password"
                                        label="Confirm your password to delete your account"
                                        placeholder="Enter your password" required />

                                    <div class="btn-list">
                                        <x-tabler::button type="button" @click="confirmingDeletion = false">
                                            Cancel
                                        </x-tabler::button>

                                        <x-tabler::button type="submit" color="danger">
                                            <x-tabler-trash class="icon" />
                                            Delete Account
                                        </x-tabler::button>
                                    </div>
                                </div>
                            </form>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>
            </div>
        </div>
    </div>
@endsection
