<?php
/* Smarty version 4.3.4, created on 2024-05-30 18:07:48
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\shoping-cart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6658a4540d4001_22823928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf26ea76e2e8266d454159cfe98529d61249f0cf' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\shoping-cart.html',
      1 => 1717084879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6658a4540d4001_22823928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11314643466658a4540b7f82_11222268', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_11314643466658a4540b7f82_11222268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11314643466658a4540b7f82_11222268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .hide{
            display: none;
        }

        .custom {
            border-radius: 30px;
            color: #f56a6a;
            align-items: center; 
            justify-content: center;
            /* text-align: center; */
            width: 75%;
            height: 39px;
            border: 3px solid #f56a6a;
            display: flex;
            cursor: pointer;
            
        }
        .background{
                background-color: #f56a6a;
        }
    </style>
    
                                <br>
                                <h2>Koszyk</h2>
                                <br>

                                <div class="table-wrapper">
                                    <table>
                                        <?php if ($_smarty_tpl->tpl_vars['empty']->value != null) {?>
                                        <hr>
                                        <h2 style="display: flex; align-items: center; justify-content: center;"><?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
</h2>
                                        <hr class="major">
                                        <a style="display: flex; height: 60px; align-items: center; justify-content: center;" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"products_list_display"),$_smarty_tpl ) );?>
" class="button primary">Katalog produktów</a>
                                        <?php } else { ?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                                <tr  style="display: flex;">
                                                    <td style="display: inline-flex;  width: 128px;"><img style="border-radius: 5px;" width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];?>
" alt=""></td>
                                                    <td style="display: inline-flex; width: 115px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                                                    <td style="display: inline-flex; width: 358px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td>
                                                    <td style="display: inline-flex; width: 122px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['amount'];?>
</td>
                                                    <td style="display: inline-flex; width: 100px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 zł</td>
                                                    <td style="display: inline-flex; width: 180px; align-items: center; justify-content: center;">
                                                        <form method="post" style="display: flex; align-items: center; justify-content: center;" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"minus_product"),$_smarty_tpl ) );?>
">
                                                        <label for="minus<?php echo $_smarty_tpl->tpl_vars['row']->value['id_product'];?>
" class="custom">
                                                            <img width="80%" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/minus.png" alt="#">
                                                        </label>
                                                        <button style="display: none;" class="primary" type="submit" id="minus<?php echo $_smarty_tpl->tpl_vars['row']->value['id_product'];?>
" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"></button>
                                                        </form>

                                                        <form method="post" style="display: flex; align-items: center; justify-content: center;" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"plus_product"),$_smarty_tpl ) );?>
">
                                                        <label for="plus<?php echo $_smarty_tpl->tpl_vars['row']->value['id_product'];?>
" class="custom">
                                                            <img width="100%" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/plus.png" alt="#">
                                                        </label>
                                                        <button style="display: none;" class="primary" type="submit" id="plus<?php echo $_smarty_tpl->tpl_vars['row']->value['id_product'];?>
" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"></button>
                                                        </form>

                                                        <form method="post" style="display: flex; align-items: center; justify-content: center;" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"delete_product_cart"),$_smarty_tpl ) );?>
">
                                                        <label for="delete<?php echo $_smarty_tpl->tpl_vars['row']->value['id_product'];?>
" class="custom background">
                                                            <img width="80%" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/trash-bucket.png" alt="#">
                                                        </label>
                                                        <button style="display: none;" class="primary" type="submit" id="delete<?php echo $_smarty_tpl->tpl_vars['row']->value['id_product'];?>
" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"></button>
                                                        </form>
                                                    </td>                                              
                                                </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                               
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" style="display: inline-block; width: 720px;"></td>
                                                <td style="display: inline-block; width: 97px"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
 zł</td>
                                                <td style="display: inline-block; text-align: right;">
                                                    <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"submit_order"),$_smarty_tpl ) );?>
">
                                                        <input type="submit" name="buy" id="buy" value="Złożyć zamówienie" class="primary">
                                                    </form>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <?php }?>
                                    </table>
                                </div>	
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
