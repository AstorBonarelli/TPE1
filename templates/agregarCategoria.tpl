<link rel="stylesheet" href="{$BASE_URL}css/styles.css">
<link rel="stylesheet" href="{$BASE_URL}css/categorias.css">

{include file='header.tpl'}

<h1>Agregar Nueva Categoría</h1>

<div class="container">
    <form action="{$BASE_URL}agregar-categoria" method="POST">
        <label for="nombre_categoria">Nombre de la Categoría:</label>
        <input type="text" name="nombre_categoria" required>

        <label for="imagen-categoria">Imagen de la Categoría:</label>
        <input type="text" name="imagen-categoria" required>

    <button type="submit">Agregar Categoría</button>
</form>


</div>
