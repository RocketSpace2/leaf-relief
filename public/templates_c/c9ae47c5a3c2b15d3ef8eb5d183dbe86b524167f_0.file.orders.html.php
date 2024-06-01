<?php
/* Smarty version 4.3.4, created on 2024-05-31 11:59:45
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\orders.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66599f91652e24_41749414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ae47c5a3c2b15d3ef8eb5d183dbe86b524167f' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\orders.html',
      1 => 1717149559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66599f91652e24_41749414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142261657066599f9163a738_79826708', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_142261657066599f9163a738_79826708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142261657066599f9163a738_79826708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <br>
                                <?php if ($_smarty_tpl->tpl_vars['empty']->value != null) {?>
                                <hr>
                                    <h3 style="display: flex; align-items: center; justify-content: center;"><?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
</h3>
                                <hr>
                                <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('user', '');?>
                                <?php $_smarty_tpl->_assignInScope('products', '');?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_user']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('user', $_smarty_tpl->tpl_vars['row']->value['user']);?>
                                <hr>
                                <br>
                                <h2>Użytkownik</h2>
                                <div class="table-wrapper">
                                    <table>
                                        <thead>
                                            <tr >
                                                <th>Login</th>
                                                <th>Miasto</th>
                                                <th>Kod pocztowy</th>
                                                <th>Nazwa ulicy</th>
                                                <th>Numer ulicy</th>
                                                <th>Numer lokalu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?>
                                                        <td> — </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>
                                                    <?php }?>    
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <br>
                                <h2>Zamówienie</h2>

                                <div class="table-wrapper">
                                    <table>
                                        
                                        <thead>
                                            <tr >
                                                <th style="display: inline-flex; width: 12.5%;">Zdjęcie</th>
                                                <th style="display: inline-flex; width: 11%;">Nazwa</th>
                                                <th style="display: inline-flex; width: 34.5%;">Opis</th>
                                                <th style="display: inline-flex; width: 12%;">Ilość</th>
                                                <th style="display: inline-flex;">Cena</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['products'], 'row_products');
$_smarty_tpl->tpl_vars['row_products']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row_products']->value) {
$_smarty_tpl->tpl_vars['row_products']->do_else = false;
?>
                                                <tr  style="display: flex;">
                                                    <td style="display: inline-flex;  width: 128px;"><img style="border-radius: 5px;" width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['row_products']->value['image'];?>
" alt=""></td>
                                                    <td style="display: inline-flex; width: 115px;"><?php echo $_smarty_tpl->tpl_vars['row_products']->value['name'];?>
</td>
                                                    <td style="display: inline-flex; width: 358px;"><?php echo $_smarty_tpl->tpl_vars['row_products']->value['description'];?>
</td>
                                                    <td style="display: inline-flex; width: 122px;"><?php echo $_smarty_tpl->tpl_vars['row_products']->value['amount'];?>
</td>
                                                    <td style="display: inline-flex; width: 100px;"><?php echo $_smarty_tpl->tpl_vars['row_products']->value['price'];?>
 zł</td>                                              
                                                </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                               
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" style="display: inline-block; width: 720px;"></td>
                                                <td style="display: inline-block; width: 97px"><?php echo $_smarty_tpl->tpl_vars['row']->value['sum'];?>
 zł</td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"confirm_order"),$_smarty_tpl ) );?>
">
                                        <button style="display: flex; width: 100%; align-items: center; justify-content: center;" class="primary" type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
">
                                            Potwierdzić zamówienie
                                        </button>
                                    </form>

                                </div>	
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
