<?php
/* Smarty version 3.1.46, created on 2022-09-15 17:05:49
  from 'C:\Apache24\htdocs\managerUser\views\user\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63235b6d8d11e1_51753486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc5b89459f4589e8960b4e80e680523d7beccd9' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\create.tpl',
      1 => 1663261530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63235b6d8d11e1_51753486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64439469463235b6d8d0076_03814611', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175197783363235b6d8d0bb9_57377068', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_64439469463235b6d8d0076_03814611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_64439469463235b6d8d0076_03814611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Create User<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_175197783363235b6d8d0bb9_57377068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_175197783363235b6d8d0bb9_57377068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="w-50 m-auto border shadow px-2 py-8 rounded  mt-4">
    <form>
        <div class="mb-3">
            <label class="form-label">User ID:</label>
            <input type="number" class="form-control" id="user_d">

        </div>

        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" id="username">

        </div>
        
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" id="password">
        </div>

    <button type="button" class="btn btn-primary mb-3 w-full" id="button_create" onclick=buttonCreateConfirm()>Create</button>
    </form>
</div>

<?php
}
}
/* {/block "content"} */
}
