@extends('layout.app')

@section('title','dashboard' )
@section('sub', 'Home')

@section('content')

    <!-- Main content -->
    <section class="content">
        @include('include.dashboard-admin')

    </section>

@endsection