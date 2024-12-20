<?php
/* Smarty version 5.4.1, created on 2024-10-21 01:53:51
  from 'file:velas.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6715980f2414a2_14942169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee7bcacd9be1251b3480703bad367fce08bc6731' => 
    array (
      0 => 'velas.tpl',
      1 => 1729434828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_6715980f2414a2_14942169 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPEWEB2\\TPE1\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/styles.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/velas.css">

<?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<h1>Listado de Productos</h1>

<div class="text-right">
    <form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
agregar" method="GET">
        <button type="submit" class="btn btn-success agregar-btn">Agregar Producto</button>
    </form>
</div>

<form method="GET" action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
velas">
    <label for="categoria">Filtrar por categoría:</label>
    <select name="categoria" id="categoria" onchange="this.form.submit()">
        <option value="">Todas</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
            <option value="<?php echo $_smarty_tpl->getValue('categoria')->ID_Categoria;?>
" <?php if ($_smarty_tpl->getValue('categoria')->ID_Categoria == $_smarty_tpl->getValue('categoriaID')) {?>selected<?php }?>>
                <?php echo $_smarty_tpl->getValue('categoria')->Nombre_Categoria;?>

            </option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
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
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('velas'), 'vela', false, 'index');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('vela')->value) {
$foreach1DoElse = false;
?>
    <tr>
      <th scope="row"><?php echo $_smarty_tpl->getValue('index')+1;?>
</th>
      <td><a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
detalle/<?php echo $_smarty_tpl->getValue('vela')->ID_Producto;?>
"><?php echo $_smarty_tpl->getValue('vela')->Nombre_producto;?>
</a></td>
      <td><?php echo $_smarty_tpl->getValue('vela')->CategoriaNombre;?>
</td>
      <td><?php echo $_smarty_tpl->getValue('vela')->Precio;?>
</td>
    </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php }
}
