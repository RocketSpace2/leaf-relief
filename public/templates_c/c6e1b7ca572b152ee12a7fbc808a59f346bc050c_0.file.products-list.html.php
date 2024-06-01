<?php
/* Smarty version 4.3.4, created on 2024-05-29 20:43:58
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\products-list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6657776e62f602_44761067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6e1b7ca572b152ee12a7fbc808a59f346bc050c' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\products-list.html',
      1 => 1717008237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6657776e62f602_44761067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4649110386657776e621ca3_29438255', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_4649110386657776e621ca3_29438255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4649110386657776e621ca3_29438255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<!-- Section -->
								<section id="products">
                                    <section id="search" class="alt">
                                        <form id="product_searc" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"filter_products"),$_smarty_tpl ) );?>
" style="display: inline-block; width: 70%;">
                                            <input type="text" name="query" id="query" placeholder="Nazwa produktu" />
                                        </form>
                                            <input style="display: inline-block; width: 20%; padding-bottom: 0%; vertical-align: 5%;" type="submit" class="primary" value="Wyszukaj" form="product_searc">
                                        
                                    </section>
									<hr class="major" />
									<div class="posts">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
										<article>
											<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"product_display"),$_smarty_tpl ) );?>
">
											<a style="display: block; width: 35%; margin-left: auto; margin-right: auto;" href="" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];?>
" alt="" /></a>
											<div style="display: inline-block; width: 100%;">
												<h3 style="display: inline-block; width: 35%;"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</h3>
												<div style="display: inline-block; width: 64%;"><span style="text-align: right; display: inline-block; width: 100%;">Cena: <strong style="font-size: 1.15em;"><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 zł</strong></span>
												<span style="text-align: right; display: inline-block; width: 100%;">Typ: <strong style="font-size: 1.15em;"><?php echo $_smarty_tpl->tpl_vars['row']->value['type_name'];?>
</strong></span></div>
											</div>
											<br>
											<br>
											<p><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</p>
											<ul class="actions">
												<li>
													<button type="submit" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
														Więcej
													</button>
												</li>
											</ul>
											</form>
										</article>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								</section>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
