<link rel="stylesheet" href="{$BASE_URL}css/header.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {if $action == 'inicio'}active{/if}" aria-current="page" href="{$BASE_URL}inicio">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {if $action == 'velas'}active{/if}" href="{$BASE_URL}velas">Velas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {if $action == 'categorias'}active{/if}" href="{$BASE_URL}categorias">Categorías</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {if $action == 'login'}active{/if}" href="{$BASE_URL}login">Login</a>
      </li>
    </ul>
  </div>
</nav>

