<?php
/* Smarty version 3.1.46, created on 2022-09-16 08:56:57
  from 'C:\Apache24\htdocs\managerUser\views\common\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63243a59ca28e0_30310692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a034ade87018352ddfd2fce003917ce1aa24f4' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\common\\template.tpl',
      1 => 1663318609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
  ),
),false)) {
function content_63243a59ca28e0_30310692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128188494963243a59c9e554_64084409', "title");
?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187097195063243a59c9fc90_56292613', "content");
?>

    
<?php echo '<script'; ?>
 type="text/javascript" src="../../../assets/js/user.js">
<?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block "title"} */
class Block_128188494963243a59c9e554_64084409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_128188494963243a59c9e554_64084409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
User Manager<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_187097195063243a59c9fc90_56292613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_187097195063243a59c9fc90_56292613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
