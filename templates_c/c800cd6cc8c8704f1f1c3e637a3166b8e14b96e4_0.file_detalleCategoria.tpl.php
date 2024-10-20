<?php
/* Smarty version 5.4.1, created on 2024-10-20 19:32:10
  from 'file:detalleCategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67153e9a46ccb4_78733168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c800cd6cc8c8704f1f1c3e637a3166b8e14b96e4' => 
    array (
      0 => 'detalleCategoria.tpl',
      1 => 1729445450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_67153e9a46ccb4_78733168 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE2\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/detalle.css">

<?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
    <!-- Botón de eliminar categoría -->
    <div class="text-right">
        <form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
eliminar-categoria/<?php echo $_smarty_tpl->getValue('categoria')->ID_Categoria;?>
" method="POST" style="display: inline;">
            <button type="submit" class="btn btn-danger">Eliminar Categoría</button>
        </form>
    </div>


    <div class="titulo">Detalles de la Categoría</div>

    <div class="cat-detalles">
        <form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
editar_categoria/<?php echo $_smarty_tpl->getValue('categoria')->ID_Categoria;?>
" method="POST">
            <p>
                <strong>Nombre Categoría:</strong> 
                <input type="text" name="nombre_categoria" value="<?php echo $_smarty_tpl->getValue('categoria')->Nombre_Categoria;?>
" required>
            </p>
            <p>
                <strong>URL Imagen:</strong> 
                <input type="url" name="imagen-categoria" value="<?php echo $_smarty_tpl->getValue('categoria')->Imagen_Categoria;?>
" required> 
            </p>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>
<?php }
}
