<?php
/* Smarty version 5.4.1, created on 2024-11-17 22:17:21
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a5d614fd631_76940526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf38bc9e8fc49489e03da76c7623f67ce374f49' => 
    array (
      0 => 'header.tpl',
      1 => 1729520557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673a5d614fd631_76940526 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE1-main\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/header.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if ($_smarty_tpl->getValue('action') == 'velas') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
velas">Velas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_smarty_tpl->getValue('action') == 'categorias') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
categorias">Categorías</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_smarty_tpl->getValue('action') == 'login') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
login">Login</a>
      </li>
    </ul>
  </div>
</nav>
<?php }
}
