<?php
/* Smarty version 4.3.2, created on 2024-05-07 01:28:09
  from 'C:\laragon\www\MVP-Test\tpl\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_663983a94bbb38_57452088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebda20afc38b7185d7e893e683621aeb89f88125' => 
    array (
      0 => 'C:\\laragon\\www\\MVP-Test\\tpl\\home.tpl',
      1 => 1715045260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663983a94bbb38_57452088 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h2>HOME</h2>
    <?php if ((isset($_smarty_tpl->tpl_vars['success']->value))) {?>
        <p style="color: green;"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</p>
    <?php }?>
    <!-- Bootstrap JavaScript -->
    <?php echo '<script'; ?>
 src="js/jquery-3.7.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
