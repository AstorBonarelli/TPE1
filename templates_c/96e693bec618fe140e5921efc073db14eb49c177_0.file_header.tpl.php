<?php
/* Smarty version 5.4.1, created on 2024-10-21 01:53:51
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6715980f416d70_74811517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e693bec618fe140e5921efc073db14eb49c177' => 
    array (
      0 => 'header.tpl',
      1 => 1729169825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6715980f416d70_74811517 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPEWEB2\\TPE1\\templates';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
css/header.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if ($_smarty_tpl->getValue('action') == 'inicio') {?>active<?php }?>" aria-current="page" href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
inicio">Inicio</a>
      </li>
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
