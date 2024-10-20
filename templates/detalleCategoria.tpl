<link rel="stylesheet" href="{$BASE_URL}css/detalle.css">

{include file='header.tpl'}

<div class="container">
    <!-- Botón de eliminar categoría -->
    <div class="text-right">
        <form action="{$BASE_URL}eliminar-categoria/{$categoria->ID_Categoria}" method="POST" style="display: inline;">
            <button type="submit" class="btn btn-danger">Eliminar Categoría</button>
        </form>
    </div>


    <div class="titulo">Detalles de la Categoría</div>

    <div class="cat-detalles">
        <form action="{$BASE_URL}editar_categoria/{$categoria->ID_Categoria}" method="POST">
            <p>
                <strong>Nombre Categoría:</strong> 
                <input type="text" name="nombre_categoria" value="{$categoria->Nombre_Categoria}" required>
            </p>
            <p>
                <strong>URL Imagen:</strong> 
                <input type="url" name="imagen-categoria" value="{$categoria->Imagen_Categoria}" required> 
            </p>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>
