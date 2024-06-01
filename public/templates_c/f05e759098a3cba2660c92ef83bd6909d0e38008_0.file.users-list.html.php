<?php
/* Smarty version 4.3.4, created on 2024-05-27 13:38:27
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\users-list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665470b3d15b74_34492460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f05e759098a3cba2660c92ef83bd6909d0e38008' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\users-list.html',
      1 => 1716809906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665470b3d15b74_34492460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1077202066665470b3cfeac4_46468031', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_1077202066665470b3cfeac4_46468031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1077202066665470b3cfeac4_46468031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <br>
                                <h2>Użytkownicy</h2>
                                <section id="search" class="alt">
                                    <form  id="user-search" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"filter_users_list"),$_smarty_tpl ) );?>
" style="display: inline-block; width: 40%;">
                                        <input  type="text" id="query" name="query" placeholder="Login użytkownika">
                                    </form>
                                    <div style="display: inline-block; vertical-align: 5%;">
                                            <button type="submit" name="role" value="deactivated" form="user-search">
                                                Role nie aktywne
                                            </button>
                                            <button type="submit" name="role" value="activated" form="user-search">
                                                Role aktywne
                                            </button>
                                            <input type="submit" value="Wyszukaj" class="primary" form="user-search">
                                    </div>
                                </section>
                                <div class="table-wrapper">
                                    <table>
                                        <thead>
                                            <tr >
                                                <th>Login</th>
                                                <th>Rola</th>
                                                <th>Data aktywacji roli</th>
                                                <th>Data deaktywacji roli</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $_smarty_tpl->_assignInScope('login', '');?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog_users']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('temp', false);?>
                                                <tr>
                                                    <?php $_smarty_tpl->_assignInScope('login', $_smarty_tpl->tpl_vars['row']->value['login']);?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'data');
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
                                                    

                                                    <?php if ($_smarty_tpl->tpl_vars['data']->value == "user") {?>
                                                        <?php $_smarty_tpl->_assignInScope('temp', true);?>   
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['temp']->value) {?>
                                                <td>
                                                    <form style="display: inline;" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"edit_users_list"),$_smarty_tpl ) );?>
">
                                                        <button type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
                                                            Edytuj
                                                        </button>
                                                    </form>

                                                    <form style="display: inline;" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"delete_user"),$_smarty_tpl ) );?>
">
                                                        <button class="primary" type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
                                                            Usunąć
                                                        </button>
                                                    </form>
                                                </td>
                                               
                                                <?php } else { ?>
                                                <td></td>
                                                <?php }?>
                                                
                                           
                                            </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
