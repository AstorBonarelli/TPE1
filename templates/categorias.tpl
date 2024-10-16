{include file='header.tpl'}

<h1>Listado de Categorías</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Categoría</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$categorias item=categoria key=index}
    <tr>
      <th scope="row">{$index+1}</th> 
      <td>{$categoria->Nombre_Categoria}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
