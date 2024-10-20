<link rel="stylesheet" href="{$BASE_URL}css/styles.css">
<link rel="stylesheet" href="{$BASE_URL}css/velas.css">

{include file='header.tpl'}

<h1>Agregar Nuevo Producto</h1>

<div class="container">
    <form action="{$BASE_URL}agregar" method="POST">
        <p>
            <label for="nombre_producto"><strong>Nombre:</strong></label>
            <input type="text" name="nombre_producto" required>
        </p>
        <p>
            <label for="id_categoria"><strong>Categoría:</strong></label>
            <select name="id_categoria" required>
                {foreach from=$categorias item=categoria}
                    <option value="{$categoria->ID_Categoria}">{$categoria->Nombre_Categoria}</option>
                {/foreach}
            </select>
        </p>
        <p>
            <label for="precio"><strong>Precio:</strong></label>
            <input type="number" name="precio" step="0.01" required>
        </p>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>
