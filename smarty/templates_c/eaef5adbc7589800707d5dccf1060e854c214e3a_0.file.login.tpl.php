<?php
/* Smarty version 3.1.46, created on 2022-09-15 17:09:46
  from 'C:\Apache24\htdocs\managerUser\views\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63235c5abf4430_86173937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaef5adbc7589800707d5dccf1060e854c214e3a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\managerUser\\views\\user\\login.tpl',
      1 => 1663261784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63235c5abf4430_86173937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185849697663235c5abf2fd6_25095279', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166510613763235c5abf3d25_06794254', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_185849697663235c5abf2fd6_25095279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_185849697663235c5abf2fd6_25095279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_166510613763235c5abf3d25_06794254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_166510613763235c5abf3d25_06794254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="vh-100 gradient-custom shadow">
    <div class="container py-5 h-90">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <div class="form-outline form-white mb-4">
                                <input type="text" id="username" class="form-control form-control-lg" placeholder="Username"/>
                            </div>
                            <div class="form-outline form-white mb-5">
                                <input type="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
                            </div>
                            <button class="btn btn-outline-light btn-lg px-5 mt-5" type="button" onclick=buttonLogin()>Login</button>
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
