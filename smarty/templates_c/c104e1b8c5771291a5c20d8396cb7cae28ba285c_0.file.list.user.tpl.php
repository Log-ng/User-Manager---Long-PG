<?php
/* Smarty version 3.1.46, created on 2022-09-15 11:35:25
  from 'C:\Apache24\htdocs\managerUser\views\user\list.user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63230dfdc5e1e2_16671594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c104e1b8c5771291a5c20d8396cb7cae28ba285c' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\list.user.tpl',
      1 => 1663241165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63230dfdc5e1e2_16671594 (Smarty_Internal_Template $_smarty_tpl) {
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
