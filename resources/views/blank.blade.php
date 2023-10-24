@extends('fw::layouts.app')

@section('content')

    @if (isset($content)) {!! $content !!} @endif

    {!! bi('bootstrap') !!}

@endsection
