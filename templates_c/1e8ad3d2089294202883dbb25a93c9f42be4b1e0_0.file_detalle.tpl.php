<?php
/* Smarty version 5.4.1, created on 2024-10-17 14:31:46
  from 'file:detalle.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671103b26abea0_08501648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e8ad3d2089294202883dbb25a93c9f42be4b1e0' => 
    array (
      0 => 'detalle.tpl',
      1 => 1729167918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671103b26abea0_08501648 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE2\\templates';
?><h1>Detalles del Producto</h1>

<p><strong>Nombre:</strong> <?php echo $_smarty_tpl->getValue('vela')->Nombre_producto;?>
</p>
<p><strong>Categoría:</strong> <?php echo $_smarty_tpl->getValue('vela')->CategoriaNombre;?>
</p>
<p><strong>Precio:</strong> <?php echo $_smarty_tpl->getValue('vela')->Precio;?>
</p>

<a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
velas">Volver al listado</a>
<?php }
}
