@extends('master')

@section('seccion')

@include('layouts.sidebar')

<!-- Seccion principal -->

<section class="home">

    @yield('seccion_dashboard')
  
</section>

@stop