<?php
/* Smarty version 5.4.1, created on 2024-11-17 22:18:25
  from 'file:categorias.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a5da18ec359_63700703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac29038d632901be2cbc6feab988d5953558054' => 
    array (
      0 => 'categorias.tpl',
      1 => 1729520557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_673a5da18ec359_63700703 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE1-main\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/styles.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/velas.css">


<?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<h1>Listado de Categorías</h1>

<!-- Botón para agregar nueva categoría -->
<div class="text-right">
<form action="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
agregar-categoria" method="GET">
    <button type="submit" class="btn btn-success agregar-btn">Agregar Categoría</button>
</form>
</div>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Categoría</th>
    </tr>
  </thead>
 <tbody>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria', false, 'index');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
    <tr>
      <th scope="row"><?php echo $_smarty_tpl->getValue('index')+1;?>
</th>
      <td><a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
detalle-categoria/<?php echo $_smarty_tpl->getValue('categoria')->ID_Categoria;?>
"><?php echo $_smarty_tpl->getValue('categoria')->Nombre_Categoria;?>
</a></td>
    </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php }
}
