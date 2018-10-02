<?php
/* Smarty version 3.1.32, created on 2018-10-02 04:29:30
  from 'C:\Users\Infuthron\PhpstormProjects\Portofolio\private\views\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb2d80a4969a0_91184110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f66392885b164c2c2908b3a760ac84bf04f602df' => 
    array (
      0 => 'C:\\Users\\Infuthron\\PhpstormProjects\\Portofolio\\private\\views\\cms.tpl',
      1 => 1538447367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb2d80a4969a0_91184110 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>CMS</h1>
<hr>
<h2>Add project</h2>
<div class="container-fluid bg-secondary">
    <form method="post" action="index.php">
        <label>Project name: <br>
            <input type="text" name="project_name">
        </label><br>
        <label>Project description: <br>
            <textarea rows="4" cols="50" name="project_desc"></textarea>
        </label><br>
        <label>Github link:<br>
            <input type="text" name="project_git">
        </label><br>
        <label>Project blog: <br>
            <input type="text" name="project_blog">
        </label><br>
        <input type="submit" name="project_submit" value="Submit">
    </form>
</div>
<hr>
<h2>Projects:</h2>
<div class="container-fluid">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
        <h2><?php echo $_smarty_tpl->tpl_vars['project']->value[1];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['project']->value[2];?>
</p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value[3];?>
">GitHub</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value[4];?>
">Blog</a>
        <form method="post" action="index.php">
            <input type="hidden" name="delete_id" value="<?php echo $_smarty_tpl->tpl_vars['project']->value[0];?>
">
            <label>Delete:
                <input type="checkbox" name="project_delete_check" value="delete">
            </label>
            <input type="submit" name="submit_project_delete" value="Confirm delete">
            <label>
                <a href="index.php?page=cms_edit_project&id=<?php echo $_smarty_tpl->tpl_vars['project']->value[0];?>
">Edit</a>
            </label>
        </form>
        <hr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
