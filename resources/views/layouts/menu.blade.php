<li class="nav-item">
    <a href="{{ route('formateur.index') }}" class="nav-link {{ Request::is('formateur.index') ? 'active' : '' }}">
      <i class="nav-icon fas fa-users"></i>
      <p>Formateur</p>
    </a>
</li>

<li class="nav-item">
  <a href="{{ route('stagaire.index') }}" class="nav-link {{ Request::is('stagaire.index') ? 'active' : '' }}">
    <i class="nav-icon fas fa-users"></i>
    <p>Stagaires</p>
  </a>
</li>

