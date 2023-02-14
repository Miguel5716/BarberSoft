{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <script src="https://kit.fontawesome.com/0a2cf824cf.js" crossorigin="anonymous"></script>
    <!-- Boxicons CSS -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"  href="{{ asset('styles/styles.css')}}">
 
    <title>BARBER SOFT</title>
</head>
<body>
  <body>
    <nav class='sidebar close'>
      <header>
        <div class='image-text'>
          <span class='image'>
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('img/bigote-con-barba.png')}}" class="block h-12 w-auto">
            </a>
          </span>
  
          <div class='text header-text'>
            <span class='name'>Miguel Aguiar</span>
            <span class='profession'>Web Designer</span>
          </div>
        </div>
  
        <i class='bx bx-chevron-right toggle'></i>
  
      </header>
  
      <div class='menu-bar'>
        <div class='menu'>
          
          <ul class='menu-links'>
            <li class='nav-link'>
                <a href="#">
                  <i class='bx bx-home-alt icon'></i>
                  <span class='text nav-text'>Dashboard</span>
                </a>
              </li>
             
              
              


              <li class='nav-link nav-item dropdown'>
                <a class="nav-link dropdown-toggle custom-class" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bx-home-alt icon'></i>
                    <span class='text nav-text'>Dashboard</span>
                  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>

            <li class='nav-link'>
              <a href="#">
                <i class='bx bx-bar-chart-alt-2 icon'></i>
                <span class='text nav-text'>Revenue</span>
              </a>
            </li>
            <li class='nav-link'>
              <a href="#">
                <i class='bx bx-bell icon'></i>
                <span class='text nav-text'>Notifications</span>
              </a>
            </li>
            <li class='nav-link'>
              <a href="#">
                <i class='bx bx-pie-chart-alt icon'></i>
                <span class='text nav-text'>Analytics</span>
              </a>
            </li>
            <li class='nav-link'>
              <a href="#">
                <i class='bx bx-heart icon'></i>
                <span class='text nav-text'>Likes</span>
              </a>
            </li>
            <li class='nav-link'>
              <a href="#">
                <i class='bx bx-wallet icon'></i>
                <span class='text nav-text'>Wallet</span>
              </a>
            </li>
          </ul>
        </div>
  
        <div class='bottom-content'>
         
        <li class='nav-link'>
            <form class="logout" method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    <i class='bx bx-log-out icon'></i>
                    <span class='text nav-text'>Logout</span>
                </a>
            </form>
        </li>


          <li class='mode'>
            <div class='moon-sun'>
              <a href="#">
                <i class='bx bx-sun icon sun'></i>
                <i class='bx bx-moon icon moon'></i>
              </a>
            </div>
            <span class='mode-text text'>Dark Mode</span>
            <div class='toggle-switch'>
              <span class='switch'></span>
            </div>
          </li>
        </div>
      </div>
    </nav>
    <section class="home">
      <div class="text">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot> 
        </x-app-layout>
      </div>
    </section>  
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>

</body>
</html> --}}
@extends('dashboard_master')

@section('seccion_dashboard')

@section('css')
<!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--CSS -->
<link rel="stylesheet" type="text/css"  href="{{ asset('styles/styles.css')}}">
@endsection


  <div class="text">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot> 
    </x-app-layout>
  </div>

  @section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  @endsection

@endsection




