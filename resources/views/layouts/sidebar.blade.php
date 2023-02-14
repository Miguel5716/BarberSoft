
<nav class='sidebar close'>
    <header>
      <div class='image-text'>
        <span class='image'>
          <a href="{{ route('dashboard') }}">
              <img src="{{ asset('img/BarberSoft-PLogo.png')}}" class="block h-12 w-auto">
          </a>
        </span>

        <div class='text header-text'>
          <span class='name'>Barber Soft</span>
          <span class='profession'>Prototipo</span>
        </div>
      </div>

      <i class='bx bx-chevron-right toggle'></i>

    </header>

    <div class='menu-bar'>
      <div class='menu'>
        
        <ul class='menu-links'>
          <li class='nav-link'>
            <a href="#">
              <i class="fa-solid fa-house-chimney icon"></i>
              <span class='text nav-text'>Inicio</span>
            </a>
          </li>

          <li class='nav-link'>
            <a href="#">
              <i class="fa-solid fa-spray-can-sparkles icon"></i>
              <span class='text nav-text'>Productos</span>
            </a>
          </li>

          <li class='nav-link'>
            <a href="#">
              <i class='fa-solid fa-scissors icon'></i>
              <span class='text nav-text'>Servicios</span>
            </a>
          </li>

          <li class='nav-link'>
            <a href="#">
              <i class="fa-regular fa-calendar-days icon"></i>
              <span class='text nav-text'>Agendar cita</span>
            </a>
          </li>
          <li class='nav-link'>
            <a href="#">
              <i class="fa-solid fa-chart-pie icon"></i>
              <span class='text nav-text'>Business intelligence</span>
            </a>
          </li>
          <li class='nav-link'>
            <a href="#">
              <i class="fa-solid fa-users icon"></i>
              <span class='text nav-text'>Gestionar usuarios</span>
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