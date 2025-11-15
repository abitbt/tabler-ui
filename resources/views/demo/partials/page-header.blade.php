{{--
    Demo Partial: Page Header

    Page header with pretitle, title, and optional theme toggle.

    Parameters:
    - $title (string, required): Main page title
    - $pretitle (string, optional, default: 'Layout Demo'): Pre-title text
    - $showThemeToggle (boolean, optional, default: false): Show theme toggle in header actions
--}}

@php
    $pretitle = $pretitle ?? 'Layout Demo';
    $showThemeToggle = $showThemeToggle ?? false;
@endphp

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    {{ $pretitle }}
                </div>
                <h2 class="page-title">
                    {{ $title }}
                </h2>
            </div>
            @if ($showThemeToggle)
                <div class="d-print-none col-auto ms-auto">
                    <tabler:theme-toggle />
                </div>
            @endif
        </div>
    </div>
</div>
