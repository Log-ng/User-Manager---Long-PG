<?php
/* Smarty version 3.1.46, created on 2022-09-17 09:25:14
  from 'C:\Apache24\htdocs\managerUser\views\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_6325927acecf32_41644352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaef5adbc7589800707d5dccf1060e854c214e3a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\login.tpl',
      1 => 1663406713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6325927acecf32_41644352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_515364356325927ace5120_79617806', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21251109116325927ace6a34_84178051', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../common/template.tpl");
}
/* {block "title"} */
class Block_515364356325927ace5120_79617806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_515364356325927ace5120_79617806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_21251109116325927ace6a34_84178051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21251109116325927ace6a34_84178051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="vh-100 gradient-custom shadow">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your username and password!</p>
                            <form name="loginForm" action=<?php echo $_SERVER['PHP_SELF'];?>
 method="post">
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username"/>
                                </div>
                                <div class="form-outline form-white mb-5">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5 mt-5" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
}
}
/* {/block "content"} */
}
