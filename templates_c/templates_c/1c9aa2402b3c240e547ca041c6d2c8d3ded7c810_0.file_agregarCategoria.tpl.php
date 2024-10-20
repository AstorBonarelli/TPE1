<?php
/* Smarty version 5.4.1, created on 2024-10-20 19:15:29
  from 'file:agregarCategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67153ab1dc6462_05748170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9aa2402b3c240e547ca041c6d2c8d3ded7c810' => 
    array (
      0 => 'agregarCategoria.tpl',
      1 => 1729444502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_67153ab1dc6462_05748170 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE2\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/styles.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/categorias.css">

<?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<h1>Agregar Nueva Categoría</h1>

<div class="container">
    <form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
agregar-categoria" method="POST">
        <label for="nombre_categoria">Nombre de la Categoría:</label>
        <input type="text" name="nombre_categoria" required>

        <label for="imagen-categoria">Imagen de la Categoría:</label>
        <input type="text" name="imagen-categoria" required>

    <button type="submit">Agregar Categoría</button>
</form>


</div>
<?php }
}
