<?php
/* Smarty version 4.3.4, created on 2024-05-30 13:03:15
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66585cf35445d2_77917957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52442e8d7957c01e69887506fca1967d597d3431' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\product.html',
      1 => 1717066994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66585cf35445d2_77917957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115075196766585cf3534c66_08057890', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_115075196766585cf3534c66_08057890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_115075196766585cf3534c66_08057890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
	.error{
		background-color: #f56a6a;
		padding-left: 5%;
		padding-right: 3%;
        margin-bottom: 1%;
		color: white;
        width: 50%;
		display: block;
		border-radius: 15px;
		font-size: 1.1em;
		font-family: "Roboto Slab", serif;
	}
</style>
							<!-- Content -->
                            <section id="banner">
                                <div class="content" style="display: block; width: 50%;">
                                    <header>
                                        <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
                                        <span>Cena: </span><h3><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 zł</h3>
                                    </header>
                                    <form type="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"add_product"),$_smarty_tpl ) );?>
">
                                        <input style="display: inline; width: 25%;" type="text" name="amount" placeholder="Ilość" required>
                                        <br>
                                        <br>
                                        <button class="primary" style="display: inline-block; width: 100%;" type="submit" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                            Do koszyka
                                        </button>
                                    </form>

                                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isWarning()) {?>
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
                                </div>
                                
                                    <span style="display: block; width: 30%;" class="image object">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="" />
                                    </span>
                                
                            </section>
                                <hr class="major" />
                                <article>
                                    <h2>Opis produkty</h2>
                                    <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                                </article>

                                <hr class="major">
                                <a style="display: flex; height: 60px; align-items: center; justify-content: center;" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"products_list_display"),$_smarty_tpl ) );?>
" class="button primary">Katalog produktów</a>
                                <br>
                                <br>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
