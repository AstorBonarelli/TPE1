<link rel="stylesheet" href="{$BASE_URL}css/detalle.css">

{include file='header.tpl'}

<div class="container">
    <!-- Botón de eliminar producto -->
    <div class="text-right">
        <form action="{$BASE_URL}eliminar/{$vela->ID_Producto}" method="POST" style="display: inline;">
            <button type="submit" class="btn btn-danger">Eliminar Producto</button>
        </form>
    </div>

    <div class="titulo">Detalles del Producto</div>

    <div class="prod-detalles">
        <form action="{$BASE_URL}editar/{$vela->ID_Producto}" method="POST">
            <p>
                <strong>Nombre:</strong> 
                <span class="product-name">{$vela->Nombre_producto}</span>
                <input type="text" name="nombre_producto" value="{$vela->Nombre_producto}" required>
            </p>
            <p>
                <strong>Categoría:</strong> 
                <span class="product-category">{$vela->CategoriaNombre}</span>
                <select name="id_categoria" required>
                    {foreach from=$categorias item=categoria}
                        <option value="{$categoria->ID_Categoria}" {if $categoria->ID_Categoria == $vela->ID_Categoria}selected{/if}>
                            {$categoria->Nombre_Categoria}
                        </option>
                    {/foreach}
                </select>
            </p>
            <p>
                <strong>Precio:</strong> 
                <span class="product-price">{$vela->Precio}</span>
                <input type="number" name="precio" value="{$vela->Precio}" step="0.01" required>
            </p>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>
