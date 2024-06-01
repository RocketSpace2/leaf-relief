<?php
/* Smarty version 4.3.4, created on 2024-05-29 17:50:44
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\products-list-worker.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66574ed4bf1d86_51616421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd86f2bd81684845dd2bc858d8b30a8c29a695aed' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\products-list-worker.html',
      1 => 1716997843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66574ed4bf1d86_51616421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135850726166574ed4be1f77_99626789', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_135850726166574ed4be1f77_99626789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_135850726166574ed4be1f77_99626789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



                                <br>
                                <h2>Lista produktów</h2>
                                <br>
                                <section id="search" class="alt">
                                    <form  id="product_search" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"products_list_worker_display"),$_smarty_tpl ) );?>
" style="display: inline-block; width: 45%;">
                                        <input  type="text" id="query" name="query" placeholder="Nazwa porduktu">
                                        
                                    </form>
                                    <div style="display: inline-block; width: 54%; vertical-align: 5%;">
                                            <span>Typ produktu</span>
                                            <select form="product_search" style="display: inline-block; width: 40%;" name="type">
                                                <option value="0"> — </option>
                                                <option value="1">Środki ochrony roślin</option>
                                                <option value="2">Nawozy</option>
                                                <option value="3">Nasiona</option>
                                            </select>
                                           <input type="submit" value="Wyszukaj" class="primary" form="product_search">
                                    </div>
                                </section>

                                <div class="table-wrapper">
                                    <table>
                                        <thead>
                                            <tr >
                                                <th>Zdjęcie</th>
                                                <th>Nazwa</th>
                                                <th>Opis</th>
												<th>Typ</th>
                                                <th>Cena</th>
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
                                                <tr>
                                                    <td style="display: inline-flex; vertical-align: text-top;"><img style="border-radius: 5px;" width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];?>
" alt=""></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['type_name'];?>
</td>
                                                    <td style="display: block; width: 120%;"><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 zł</td>
                                                    <td>
                                                        <form style="display: inline-block; margin-bottom: 5%;" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"edit_product_display"),$_smarty_tpl ) );?>
">
                                                            <button type="submit" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
                                                                Edytuj
                                                            </button>
                                                        </form>
                                                        <form style="display: inline;" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"delete_product"),$_smarty_tpl ) );?>
">
                                                            <button class="primary" type="submit" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
                                                                Usunąć
                                                            </button>
                                                        </form>
                                                    </form></td>  
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <a style="display: grid;" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"add_product_display"),$_smarty_tpl ) );?>
" class="button">+ dodać</a>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
