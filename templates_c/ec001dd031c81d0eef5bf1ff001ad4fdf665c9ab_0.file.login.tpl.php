<?php
/* Smarty version 4.3.2, created on 2024-05-07 02:44:34
  from 'C:\laragon\www\MVP-Test\tpl\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6639959209d157_07895372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec001dd031c81d0eef5bf1ff001ad4fdf665c9ab' => 
    array (
      0 => 'C:\\laragon\\www\\MVP-Test\\tpl\\login.tpl',
      1 => 1715049862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6639959209d157_07895372 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class ="card">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
                        <label for="username">Username:</label><br>
                        <input type="text" id="username" name="username"><br>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password"><br><br>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
        <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
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
