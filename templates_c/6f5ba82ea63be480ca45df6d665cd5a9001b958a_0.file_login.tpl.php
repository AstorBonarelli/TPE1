<?php
/* Smarty version 5.4.1, created on 2024-11-17 22:18:27
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a5da392b4d2_43092343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f5ba82ea63be480ca45df6d665cd5a9001b958a' => 
    array (
      0 => 'login.tpl',
      1 => 1729520557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_673a5da392b4d2_43092343 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE1-main\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('basehref');?>
css/login.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('basehref');?>
css/styles.css">
<?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php if ($_smarty_tpl->getValue('username')) {?>
            <!-- Mostrar cuando el usuario está logueado -->
            <h2>Bienvenido, <?php echo $_smarty_tpl->getValue('username');?>
</h2>
            <form action="logout" method="post">
                <button type="submit" class="btn btn-danger">Cerrar sesión</button>
            </form>
        <?php } else { ?>
            <!-- Mostrar el formulario de login cuando no está logueado -->
            <h2>Iniciar Sesión</h2>
            <form action="verify" method="post">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="username" placeholder="Juancito1234" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <?php if (!empty($_smarty_tpl->getValue('error'))) {?>
                    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->getValue('error');?>
</div>
                <?php }?>
                <button type="submit" class="btn btn-default">Iniciar sesión</button>
            </form>
        <?php }?>
    </div>
</div>
<?php }
}
