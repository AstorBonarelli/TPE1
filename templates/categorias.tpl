<link rel="stylesheet" href="{$BASE_URL}css/styles.css">
<link rel="stylesheet" href="{$BASE_URL}css/velas.css">


{include file='header.tpl'}

<h1>Listado de Categorías</h1>

<!-- Botón para agregar nueva categoría -->
<div class="text-right">
<form action="{$BASE_URL}agregar-categoria" method="GET">
    <button type="submit" class="btn btn-success agregar-btn">Agregar Categoría</button>
</form>
</div>


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
      <td><a href="{$BASE_URL}detalle-categoria/{$categoria->ID_Categoria}">{$categoria->Nombre_Categoria}</a></td>
    </tr>
    {/foreach}
</tbody>
</table>
