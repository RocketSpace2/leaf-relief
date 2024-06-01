<?php
/* Smarty version 4.3.4, created on 2024-05-24 13:37:46
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\registration.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66507c0acf7913_85253077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550af3baf03b64d37ee21bd16c0d600943740de3' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\registration.html',
      1 => 1716548277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66507c0acf7913_85253077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162327334666507c0ace97a8_00817606', 'content');
?>
			<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_162327334666507c0ace97a8_00817606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_162327334666507c0ace97a8_00817606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<style>
	.error{
		background-color: #f56a6a;
		padding-left: 3%;
		padding-right: 3%;
        margin-bottom: 1%;
		color: white;
        width: 38%;
		display: block;
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
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                        <ul class="error">	
                                            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                                        </ul>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <br>
                                    <?php }?>
                                                
													<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"registrate"),$_smarty_tpl ) );?>
">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="login" id="login" value="" placeholder="Login*" required/>
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="password" name="password" id="password" value="" placeholder="Password*" required/>
															</div>
                                                        </div>
                                                        <br>
                                                        <h3>Adres</h3>
                                                        <div class="row gtr-uniform">    
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="city" id="city" value="" placeholder="Miasto*" required/>
                                                            </div>
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="postcode" id="postcode" value="" placeholder="Kod pocztowy*" required/>
                                                            </div>
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="street" id="street" value="" placeholder="Ulica*" required/>
                                                            </div>
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="street_number" id="street_number" value="" placeholder="Numer ulicy*" required/>
                                                            </div>
														    </div>
                                                            <br>
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="apartment_number" id="apartment_number" value="" placeholder="Numer lokalu" />
                                                            </div>

                                                            <br>
                                                            <div>
                                                                <span>* — pole jest wymagane</span>
                                                            </div>

                                                        <div class="row gtr-uniform" style="display: grid; width: 100%;"> 
                                                            <div>
                                                                <br>
                                                                <div style="display: inline-block; width: 100%; padding-left: 0%;">
                                                                    <input style="display: flex; width: 100%; padding-left: 44%;" type="submit" value="Zarejestruj się" class="primary">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"login_display"),$_smarty_tpl ) );?>
" class="button fit">Zaloguj się</a>
                                                            </div>  
                                                            
                                                        </div>    
                                                    </form>   
								</section>

						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
