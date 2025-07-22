<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Student Task Manager')</title>
    @vite('resources/css/app.css')

    @stack('styles')
</head>
<body class="min-h-screen flex flex-col bg-blue-200 text-slate-900">

{{-- Header --}}
@include('layouts.includes.header')

<div class="flex flex-1">
    {{-- Sidebar --}}
    @include('layouts.includes.sidebar')

    {{-- Main Content --}}
    {{--<main class="flex-1 p-6 overflow-y-auto">
        @if (session('success'))
            <div class="alert alert-success shadow-lg mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 stroke-current shrink-0" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>--}}
    {{-- Main Content --}}
    <main class="flex-1 p-6 bg-white">
        @if (session('success'))
            <div class="alert alert-success shadow-lg mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 stroke-current shrink-0" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>
</div>
</div>

{{-- Footer --}}
@include('layouts.includes.footer')

@stack('scripts')
</body>
</html>
