<?php
/* Smarty version 3.1.46, created on 2022-09-17 08:14:28
  from 'C:\Apache24\htdocs\managerUser\views\user\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_632581e49c3346_53522039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc5b89459f4589e8960b4e80e680523d7beccd9' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\create.tpl',
      1 => 1663402454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632581e49c3346_53522039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276188918632581e499b722_29078653', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_374519525632581e499c435_37948162', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../common/template.tpl");
}
/* {block "title"} */
class Block_276188918632581e499b722_29078653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_276188918632581e499b722_29078653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Create User<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_374519525632581e499c435_37948162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_374519525632581e499c435_37948162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="w-50 m-auto border shadow px-5 py-8 rounded mt-4 pl-3">
<form name="createForm" action=<?php echo $_SERVER['PHP_SELF'];?>
 onsubmit="return validateForm()" method="post">
    <div class="mb-3 mt-4">
        <label class="form-label">Fullname:</label>
        <span id="err-fullname" class="text-danger small ml-3"></span><br>
        <input type="text" class="form-control" id="fullname" name="fullname">

    </div>

    <div class="mb-3">
        <label class="form-label">Username:</label>
        <span id="err-username" class="text-danger small ml-3"></span><br>
        <input type="text" class="form-control" name="username" id="username">
    </div>
    
    <div class="mb-3">
        <label class="form-label">Password:</label>
        <span id="err-password" class="text-danger small ml-3"></span><br>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="d-flex justify-content-around">   
        <button type="submit" value="Submit" class="btn btn-primary mb-4 px-5" id="button_create" >Create</button>
        <button class="btn btn-danger mb-4 px-5" type="button" onclick=buttonLogin()>Back</button>
    </div>

    </form>
</div>

<?php
}
}
/* {/block "content"} */
}
