<link rel="stylesheet" href="{$BASE_URL}css/styles.css">
<link rel="stylesheet" href="{$BASE_URL}css/velas.css">


{include file='header.tpl'}

<h1>Listado de Productos</h1>

<form method="GET" action="{$BASE_URL}velas">
    <label for="categoria">Filtrar por categoría:</label>
    <select name="categoria" id="categoria" onchange="this.form.submit()">
        <option value="">Todas</option>
        {foreach from=$categorias item=categoria}
            <option value="{$categoria->ID_Categoria}" {if $categoria->ID_Categoria == $categoriaID}selected{/if}>
                {$categoria->Nombre_Categoria}
            </option>
        {/foreach}
    </select>
</form>

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
