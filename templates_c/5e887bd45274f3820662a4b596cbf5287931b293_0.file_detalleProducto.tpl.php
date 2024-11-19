<?php
/* Smarty version 5.4.1, created on 2024-11-17 22:18:16
  from 'file:detalleProducto.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a5d98cde684_00764037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e887bd45274f3820662a4b596cbf5287931b293' => 
    array (
      0 => 'detalleProducto.tpl',
      1 => 1729520557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_673a5d98cde684_00764037 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE1-main\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/detalle.css">

<?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
    <!-- Botón de eliminar producto -->
    <div class="text-right">
        <form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
eliminar/<?php echo $_smarty_tpl->getValue('vela')->ID_Producto;?>
" method="POST" style="display: inline;">
            <button type="submit" class="btn btn-danger">Eliminar Producto</button>
        </form>
    </div>

    <div class="titulo">Detalles del Producto</div>

    <div class="prod-detalles">
        <form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
editar/<?php echo $_smarty_tpl->getValue('vela')->ID_Producto;?>
" method="POST">
            <p>
                <strong>Nombre:</strong> 
                <span class="product-name"><?php echo $_smarty_tpl->getValue('vela')->Nombre_producto;?>
</span>
                <input type="text" name="nombre_producto" value="<?php echo $_smarty_tpl->getValue('vela')->Nombre_producto;?>
" required>
            </p>
            <p>
                <strong>Categoría:</strong> 
                <span class="product-category"><?php echo $_smarty_tpl->getValue('vela')->CategoriaNombre;?>
</span>
                <select name="id_categoria" required>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('categoria')->ID_Categoria;?>
" <?php if ($_smarty_tpl->getValue('categoria')->ID_Categoria == $_smarty_tpl->getValue('vela')->ID_Categoria) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->getValue('categoria')->Nombre_Categoria;?>

                        </option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
            </p>
            <p>
                <strong>Precio:</strong> 
                <span class="product-price"><?php echo $_smarty_tpl->getValue('vela')->Precio;?>
</span>
                <input type="number" name="precio" value="<?php echo $_smarty_tpl->getValue('vela')->Precio;?>
" step="0.01" required>
            </p>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>
<?php }
}
