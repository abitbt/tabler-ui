@extends('tabler::layouts.app')

@section('navbar')
    @include('tabler::layouts.navbar.condensed', [
        'dark' => true,
        'sticky' => true,
        'navItems' => $navItems
    ])
@endsection

@section('footer')
    <p class="m-0 text-secondary">Tabler UI Laravel Integration</p>
@endsection
