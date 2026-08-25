@extends('layouts.app')

@section('content')
    <x-nav :profile="$profile" />

    @include('sections.hero')
    @include('sections.about')
    @include('sections.education')
    @include('sections.portfolio')
    @include('sections.contact')

    <footer class="site-footer">
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} {{ $profile['full_name'] }}. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
@endsection
