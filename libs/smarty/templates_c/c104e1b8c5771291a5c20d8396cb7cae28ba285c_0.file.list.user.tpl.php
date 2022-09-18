<?php
/* Smarty version 3.1.46, created on 2022-09-18 15:02:04
  from 'C:\Apache24\htdocs\managerUser\views\user\list.user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_632732ec90e392_92949598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c104e1b8c5771291a5c20d8396cb7cae28ba285c' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\list.user.tpl',
      1 => 1663513322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632732ec90e392_92949598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291808968632732ec904d14_09946958', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2077287727632732ec9057d5_29189056', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../common/template.tpl");
}
/* {block "title"} */
class Block_291808968632732ec904d14_09946958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_291808968632732ec904d14_09946958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Manager User<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_2077287727632732ec9057d5_29189056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2077287727632732ec9057d5_29189056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <button type="button" class="btn btn-primary  mx-5 mt-4 " id="button_add" onclick=buttonCreate()>Create new user</button>
        <button type="button" class="btn btn-danger  mx-5 mt-4 " id="button_logout" onclick=buttonLogout()>Logout</button>
    </div>
    <div class="border mx-5 mt-4 border-success rounded text-center shadow">
        <table class="table table-bordered table-hover">
            <thead class="text-white table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>

            <tbody class="my-1">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'index');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr class=>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['index']->value+1+($_smarty_tpl->tpl_vars['currentPage']->value-1)*$_smarty_tpl->tpl_vars['RECORD_PER_PAGE']->value;?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['fullName'];?>
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
<?php
}
}
/* {/block "content"} */
}
