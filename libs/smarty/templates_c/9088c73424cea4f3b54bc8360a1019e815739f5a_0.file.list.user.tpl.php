<?php
/* Smarty version 3.1.46, created on 2022-09-15 11:19:27
  from 'C:\Apache24\htdocs\managerUser\controllers\list.user\..\..\views\user\list.user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63230a3f4e53a5_61079372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9088c73424cea4f3b54bc8360a1019e815739f5a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\controllers\\list.user\\..\\..\\views\\user\\list.user.tpl',
      1 => 1663208198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63230a3f4e53a5_61079372 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="border mx-5 mt-4 border-success rounded text-center shadow">
    <table class="table table-bordered table-hover">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Full name</th>
            <th scope="col">Username</th>
        </tr>
        </thead>
        <tbody class="my-1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr class=>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</th>
                <td ><?php echo $_smarty_tpl->tpl_vars['user']->value['fullName'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>


<?php }
}
