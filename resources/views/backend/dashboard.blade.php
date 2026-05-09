@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
    <h1>Hello {{ $user->name }}</h1>

    <a class="nav-link" href="{{ route('logout') }}">Sign out</a>
@endsection
