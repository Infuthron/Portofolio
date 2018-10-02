<?php
/* Smarty version 3.1.32, created on 2018-10-01 09:23:43
  from 'C:\Users\Infuthron\PhpstormProjects\Portofolio\private\views\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb1cb7f499b47_46435489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e504cc5009fa5e0e2af91d88a20188c9189a519' => 
    array (
      0 => 'C:\\Users\\Infuthron\\PhpstormProjects\\Portofolio\\private\\views\\admin.tpl',
      1 => 1537896093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cb7f499b47_46435489 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="admin_wrapper">
    <h1 class="admin_header">Admin Login-Screen</h1>
    <div class="admin_login">
        <form method="post" action="index.php">
            <label class="admin_login__label">
                <input type="text" name="username"></label><br>
            <label class="admin_login__label">
                <input type="password" name="password"></label><br>
            <input type="submit" name="submit_admin_login" value="Log in">
        </form>
    </div>
</div><?php }
}
