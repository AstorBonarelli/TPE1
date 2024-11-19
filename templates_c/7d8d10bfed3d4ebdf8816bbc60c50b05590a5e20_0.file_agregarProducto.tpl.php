<?php
/* Smarty version 5.4.1, created on 2024-11-17 22:18:07
  from 'file:agregarProducto.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a5d8f8aedf1_99931397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d8d10bfed3d4ebdf8816bbc60c50b05590a5e20' => 
    array (
      0 => 'agregarProducto.tpl',
      1 => 1729520557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_673a5d8f8aedf1_99931397 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE1-main\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/styles.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/velas.css">

<?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<h1>Agregar Nuevo Producto</h1>

<div class="container">
    <form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
agregar" method="POST">
        <p>
            <label for="nombre_producto"><strong>Nombre:</strong></label>
            <input type="text" name="nombre_producto" required>
        </p>
        <p>
            <label for="id_categoria"><strong>Categoría:</strong></label>
            <select name="id_categoria" required>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('categoria')->ID_Categoria;?>
"><?php echo $_smarty_tpl->getValue('categoria')->Nombre_Categoria;?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </p>
        <p>
            <label for="precio"><strong>Precio:</strong></label>
            <input type="number" name="precio" step="0.01" required>
        </p>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>
<?php }
}
