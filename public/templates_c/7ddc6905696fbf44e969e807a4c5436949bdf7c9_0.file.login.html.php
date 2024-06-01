<?php
/* Smarty version 4.3.4, created on 2024-05-24 11:34:42
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66505f32dc89e7_76409273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ddc6905696fbf44e969e807a4c5436949bdf7c9' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\login.html',
      1 => 1716475145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505f32dc89e7_76409273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152712786166505f32db6943_63093024', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_152712786166505f32db6943_63093024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_152712786166505f32db6943_63093024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
	.error{
		background-color: #f56a6a;
		padding-left: 3%;
		padding-right: 3%;
		margin: auto;
		color: white;
		display: inline-flex;
		border-radius: 15px;
		font-size: 1.1em;
		font-family: "Roboto Slab", serif;
	}
</style>
							<!-- Content -->
								<section>
									<header class="main">
										<h1>Leaf Relief</h1>
									</header>

									<!-- Content -->
										

									<hr class="major" />
                                    <!-- Form -->
									<?php if (!$_smarty_tpl->tpl_vars['msgs']->value->isEmpty()) {?>
										<ul class="error">	
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
												<li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>	
										<br>
										<br>
									<?php }?>			

													<form method="post" id="login" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"login"),$_smarty_tpl ) );?>
">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="login" id="login" value="" placeholder="Login" required/>
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="password" name="password" id="password" value="" placeholder="Password" required/>
															</div>
															
														</div>
                                                    </form>    

									<!-- Elements -->
										
										<div class="">
											<div class="col-6 col-12-medium">
													<div class="">
														<div class="col-6 col-12-small">
															<ul class="actions stacked">

																<!-- <div style="display: inline-block; width: 100%; padding-left: 0%;">
                                                                    <input style="display: flex; width: 100%; padding-left: 44%;" type="submit" value="Zarejestruj się" class="primary">
                                                                </div> -->
																<li><input form="login" style="display: flex; width: 100%; padding-left: 46%" type="submit" value="Zaloguj się" class="primary"></li>
																<!-- <li><a href="index.html" class="button primary fit">Zaloguj się</a></li> -->
																<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"registration_display"),$_smarty_tpl ) );?>
" class="button fit">Zarejestruj się</a></li>
															</ul>
														</div>
													</div>
											</div>
										</div>

								</section>

						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
