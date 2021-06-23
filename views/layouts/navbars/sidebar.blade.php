<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      Qatar 2022
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">dashboard</i>
            <p>Home</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>Equipos
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/brasil">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">Brasil </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/argentina">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Argentina</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/ecuador">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Ecuador</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/uruguay">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Uruguay</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/colombia">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Colombia</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/paraguay">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Paraguay</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/chile">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Chile</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/bolivia">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Bolivia</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/venezuela">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Venezuela</span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/paises/peru">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal">Perú</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="posiciones">
          <i class="material-icons">content_paste</i>
            <p>Tabla de Posiciones</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="partidos">
          <i class="material-icons">library_books</i>
            <p>Partidos</p>
        </a>
      </li>
    </ul>
  </div>
</div>
