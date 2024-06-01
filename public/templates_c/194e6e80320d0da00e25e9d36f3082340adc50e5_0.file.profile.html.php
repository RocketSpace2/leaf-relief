<?php
/* Smarty version 4.3.4, created on 2024-05-29 20:56:36
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\profile.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66577a64357120_47736405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '194e6e80320d0da00e25e9d36f3082340adc50e5' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\profile.html',
      1 => 1717008994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66577a64357120_47736405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4691546966577a6434c6b7_77072415', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_4691546966577a6434c6b7_77072415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4691546966577a6434c6b7_77072415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<!-- Content -->
                            <section id="banner">
                                <div class="content">
                                    <header>
                                        <h1><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h1>
                                        <span>Miasto: </span><h3><?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</h3>
                                        <span>Kod pocztowy: </span><h3><?php echo $_smarty_tpl->tpl_vars['postcode']->value;?>
</h3>
                                        <span>Ulica: </span><h3><?php echo $_smarty_tpl->tpl_vars['street']->value;?>
</h3>
                                        <span>Numer ulicy: </span><h3> <?php echo $_smarty_tpl->tpl_vars['street_number']->value;?>
</h3>
										<?php if ($_smarty_tpl->tpl_vars['apartment_number']->value != null) {?>
                                        <span>Numer lokalu: </span><h3> <?php echo $_smarty_tpl->tpl_vars['apartment_number']->value;?>
</h3>
										<?php }?>
                                    </header>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"edit_profile_display"),$_smarty_tpl ) );?>
" class="button fit primary">Edytuj</a>
                                </div>
                                <div style="display: flex; width: 50%; ">
                                    <span class="image object" >
										<?php if ($_smarty_tpl->tpl_vars['image']->value != null) {?>
										<img style="display: inline-flex; width: 150%;" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="">
										<?php } else { ?>
										<img style="display: inline-flex; width: 150%;" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/default.jpg" alt="" />
										<?php }?>
                                    </span>
                                </div>
                                
                            </section>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
