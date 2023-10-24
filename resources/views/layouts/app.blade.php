<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <!-- Styles --> 
        {!! fw::bootstrapCSS() !!}

        <!-- Scripts --> 
        {!! fw::bootstrapJS() !!}

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>

        <!-- Livewire Check -->
        @if (isset($slot))
            {{ $slot }}
        @endif

        <!-- Non-Livewire Content -->
        @yield('content')

    </body>
</html>