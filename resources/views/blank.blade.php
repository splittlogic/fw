@extends('fw::layouts.app')

@section('content')

    @if (isset($content)) {!! $content !!} @endif

    <?php 
    /*
        nav::active()->link('Active', '#');
        nav::link('Link 1', '#');
        nav::link('Link 2', '#');
        nav::disabled()->link('Disabled', '#');
    */
    
        nav::active()->item('Active', '#');
        nav::item('Link 1', '#');
        nav::item('Link 2', '#');
        nav::disabled()->item('Disabled', '#');
        //fw::class('flex-column');
        //nav::pills();
        nav::justified();
        nav::underline();
        //nav::fill();
        echo nav::get();
    
    /*
        nav::active()->link('Active', '#');
        nav::item();
        nav::link('Link 1', '#');
        nav::item();
        nav::link('Link 2', '#');
        nav::item();
        nav::disabled()->link('Disabled', '#');
        nav::item();
        fw::class('justify-content-center');
    */
        echo nav::get();
    ?>

@endsection
