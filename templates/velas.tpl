
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/velas">Velas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categorias">Categorías</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
    </ul>
  </div>
</nav>

<h1>Listado de Velas</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoría</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$velas item=vela key=index}
    <tr>
      <th scope="row">{$index+1}</th> <!-- El número de fila -->
      <td>{$vela.Nombre_producto}</td>
      <td>{$vela.ID_Categoria}</td>
      <td>{$vela.Precio}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
