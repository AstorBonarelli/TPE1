{include file='header.tpl'}

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
      <th scope="row">{$index+1}</th> 
      <td>{$vela->Nombre_producto}</td>
      <td>{$vela->CategoriaNombre}</td> 
      <td>{$vela->Precio}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
