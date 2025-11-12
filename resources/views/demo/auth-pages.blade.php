{{--
    Authentication Pages Demo

    Comprehensive showcase of all authentication pages for Laravel Fortify.
    These pages use the auth layout and follow Tabler UI patterns.

    Components:
    - <x-tabler::layouts.auth>
    - Auth pages: login, register, forgot-password, reset-password, verify-email, two-factor-challenge, confirm-password
--}}

@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Authentication Pages</h2>
                    <div class="text-secondary mt-1">Pre-built auth pages ready for Laravel Fortify</div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                {{-- Overview Card --}}
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Authentication Pages Overview</x-slot:title>
                            <x-slot:subtitle>Complete set of auth pages for Laravel Fortify</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <p class="text-secondary">
                                These authentication pages are ready to use with Laravel Fortify. They include all necessary
                                pages for a complete authentication flow:
                            </p>
                            <ul class="text-secondary">
                                <li><strong>Login</strong> - Sign in with email and password, optional social login</li>
                                <li><strong>Register</strong> - Create new account with name, email, and password</li>
                                <li><strong>Forgot Password</strong> - Request password reset email</li>
                                <li><strong>Reset Password</strong> - Set new password with reset token</li>
                                <li><strong>Verify Email</strong> - Email verification prompt and resend</li>
                                <li><strong>Two-Factor Challenge</strong> - 2FA code entry with recovery code option</li>
                                <li><strong>Confirm Password</strong> - Password confirmation for sensitive actions</li>
                            </ul>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Available Pages List --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Available Auth Pages</x-slot:title>
                            <x-slot:subtitle>View files in tabler-blade package</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <strong>login.blade.php</strong>
                                            <div class="text-secondary">Sign in page</div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary">Route: login</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <strong>register.blade.php</strong>
                                            <div class="text-secondary">Registration page</div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary">Route: register</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <strong>forgot-password.blade.php</strong>
                                            <div class="text-secondary">Password reset request</div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary">Route: password.request</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <strong>reset-password.blade.php</strong>
                                            <div class="text-secondary">Set new password</div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary">Route: password.reset</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <strong>verify-email.blade.php</strong>
                                            <div class="text-secondary">Email verification</div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary">Route: verification.notice</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <strong>two-factor-challenge.blade.php</strong>
                                            <div class="text-secondary">2FA verification</div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary">Route: two-factor.login</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <strong>confirm-password.blade.php</strong>
                                            <div class="text-secondary">Password confirmation</div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary">Route: password.confirm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- File Locations --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>File Locations</x-slot:title>
                            <x-slot:subtitle>Where to find the auth files</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="mb-3">
                                <label class="form-label">Auth Layout</label>
                                <pre class="bg-light mb-0 rounded p-3"><code>tabler-blade/stubs/resources/views/tabler/layouts/auth.blade.php</code></pre>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Auth Pages Directory</label>
                                <pre class="bg-light mb-0 rounded p-3"><code>tabler-blade/stubs/resources/views/tabler/auth/</code></pre>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Usage in Routes</label>
                                <pre class="bg-light mb-0 rounded p-3"><code>Route::get('/login', function () {
    return view('tabler::auth.login');
})->name('login');</code></pre>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Features --}}
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Features</x-slot:title>
                            <x-slot:subtitle>What's included in these auth pages</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Form Validation</h4>
                                    <ul class="text-secondary">
                                        <li>Error message display</li>
                                        <li>Old input preservation</li>
                                        <li>Bootstrap validation states</li>
                                        <li>Inline error feedback</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4>User Experience</h4>
                                    <ul class="text-secondary">
                                        <li>Password visibility toggle</li>
                                        <li>Autofocus on first field</li>
                                        <li>Remember me checkbox</li>
                                        <li>Loading states</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4>Security</h4>
                                    <ul class="text-secondary">
                                        <li>CSRF protection</li>
                                        <li>Two-factor authentication</li>
                                        <li>Recovery codes support</li>
                                        <li>Password confirmation</li>
                                    </ul>
                                </div>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Installation Instructions --}}
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Integration with Laravel Fortify</x-slot:title>
                            <x-slot:subtitle>How to use these auth pages with Fortify</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <h4>Step 1: Install Laravel Fortify</h4>
                            <pre class="bg-light rounded p-3"><code>composer require laravel/fortify
php artisan fortify:install
php artisan migrate</code></pre>

                            <h4 class="mt-4">Step 2: Configure Fortify Views</h4>
                            <p class="text-secondary">In your <code>FortifyServiceProvider</code>, register the views:</p>
                            <pre class="bg-light rounded p-3"><code>use Laravel\Fortify\Fortify;

public function boot(): void
{
    Fortify::loginView(fn () => view('tabler::auth.login'));
    Fortify::registerView(fn () => view('tabler::auth.register'));
    Fortify::requestPasswordResetLinkView(fn () => view('tabler::auth.forgot-password'));
    Fortify::resetPasswordView(fn ($request) => view('tabler::auth.reset-password', [
        'token' => $request->route('token'),
        'email' => $request->email,
    ]));
    Fortify::verifyEmailView(fn () => view('tabler::auth.verify-email'));
    Fortify::twoFactorChallengeView(fn () => view('tabler::auth.two-factor-challenge'));
    Fortify::confirmPasswordView(fn () => view('tabler::auth.confirm-password'));
}</code></pre>

                            <h4 class="mt-4">Step 3: Enable Features</h4>
                            <p class="text-secondary">In <code>config/fortify.php</code>, enable the features you need:</p>
                            <pre class="bg-light rounded p-3"><code>'features' => [
    Features::registration(),
    Features::resetPasswords(),
    Features::emailVerification(),
    Features::updateProfileInformation(),
    Features::updatePasswords(),
    Features::twoFactorAuthentication([
        'confirm' => true,
        'confirmPassword' => true,
    ]),
],</code></pre>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Layout Structure --}}
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Auth Layout Structure</x-slot:title>
                            <x-slot:subtitle>Understanding the auth layout component</x-slot:subtitle>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <p class="text-secondary">The auth layout provides a centered, minimal layout perfect for
                                authentication pages:</p>

                            <div class="mb-3">
                                <label class="form-label">Basic Usage</label>
                                <pre class="bg-light rounded p-3"><code>&lt;x-tabler::layouts.auth&gt;
    &lt;div class="card card-md"&gt;
        &lt;!-- Your form here --&gt;
    &lt;/div&gt;

    &lt;x-slot:footer&gt;
        &lt;div class="text-secondary mt-3 text-center"&gt;
            Additional content or links
        &lt;/div&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-tabler::layouts.auth&gt;</code></pre>
                            </div>

                            <h4>Available Slots</h4>
                            <div class="table-responsive">
                                <table class="table-vcenter table">
                                    <thead>
                                        <tr>
                                            <th>Slot</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>default</code></td>
                                            <td>Main content slot (typically contains the auth card/form)</td>
                                        </tr>
                                        <tr>
                                            <td><code>footer</code></td>
                                            <td>Optional footer content below the main card (e.g., "Don't have an account?"
                                                link)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

            </div>
        </div>
    </div>
@endsection
