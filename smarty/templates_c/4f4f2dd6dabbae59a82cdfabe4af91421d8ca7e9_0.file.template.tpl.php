<?php
/* Smarty version 3.1.46, created on 2022-09-15 11:15:47
  from 'C:\Apache24\htdocs\managerUser\views\user\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63230963eb3de4_01270902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4f2dd6dabbae59a82cdfabe4af91421d8ca7e9' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\template.tpl',
      1 => 1663236231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list.user.tpl' => 1,
  ),
),false)) {
function content_63230963eb3de4_01270902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<!--add-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201708353363230963d893d7_02186501', "list");
?>

</body>

</html><?php }
/* {block "list"} */
class Block_201708353363230963d893d7_02186501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'list' => 
  array (
    0 => 'Block_201708353363230963d893d7_02186501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:list.user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "list"} */
}
