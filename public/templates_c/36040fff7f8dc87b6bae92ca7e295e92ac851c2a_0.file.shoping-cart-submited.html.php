<?php
/* Smarty version 4.3.4, created on 2024-05-30 18:12:20
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\shoping-cart-submited.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6658a5640c39f3_97993043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36040fff7f8dc87b6bae92ca7e295e92ac851c2a' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\shoping-cart-submited.html',
      1 => 1717085261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6658a5640c39f3_97993043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19319243726658a5640c0b27_36901254', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_19319243726658a5640c0b27_36901254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19319243726658a5640c0b27_36901254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    
                                <br>
                                <h2>Koszyk</h2>
                                <br>
                                
                                <hr>
                                <h2 style="display: flex; align-items: center; justify-content: center;">Zamówienie zostało złożone</h2>
                                <hr class="major">
                                <a style="display: flex; height: 60px; align-items: center; justify-content: center;" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"products_list_display"),$_smarty_tpl ) );?>
" class="button primary">Katalog produktów</a>
                                	
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
