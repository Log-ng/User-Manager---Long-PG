<?php
/* Smarty version 3.1.46, created on 2022-09-15 17:06:53
  from 'C:\Apache24\htdocs\managerUser\views\user\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63235bad97ec33_47245352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4f2dd6dabbae59a82cdfabe4af91421d8ca7e9' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\template.tpl',
      1 => 1663261610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
  ),
),false)) {
function content_63235bad97ec33_47245352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144945576963235bad979714_53437285', "title");
?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25455193163235bad97b7e5_96154638', "content");
?>

    
<?php echo '<script'; ?>
 type="text/javascript" src="../../views/js/script.js">
<?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block "title"} */
class Block_144945576963235bad979714_53437285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_144945576963235bad979714_53437285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
User Manager<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_25455193163235bad97b7e5_96154638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25455193163235bad97b7e5_96154638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
