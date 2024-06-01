<?php
/* Smarty version 4.3.4, created on 2024-05-27 12:37:08
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\edit-users-list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66546254195a59_42129985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f581af8050946b73c75ceac914599ad7d7ada05' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\edit-users-list.html',
      1 => 1716806176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66546254195a59_42129985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166801726466546254185b15_97199654', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_166801726466546254185b15_97199654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_166801726466546254185b15_97199654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <br>
                                <h2>Użytkownicy</h2>
                                <br>

                                <div class="table-wrapper">
                                    <table>
                                        <thead>
                                            <tr >
                                                <th>Login</th>
                                                <th>Rola</th>
                                                <th>Data aktywacji</th>
                                                <th>Data deaktywacji</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'data', false, 'key');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['key']->value == 'role_name') {?>
                                                    <td><form id="edit-user" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"edit_user"),$_smarty_tpl ) );?>
">
                                                        <select name="role" id="role">
                                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['role']->value == "user") {?> selected <?php }?>>Użytkownik</option>
                                                            <option value="2"  <?php if ($_smarty_tpl->tpl_vars['role']->value == "worker") {?> selected <?php }?>>Pracownik</option>
                                                            <option value="3"  <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?> selected <?php }?>>Administrator</option>
                                                        </select>
                                                    </form></td> 
                                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value == null) {?>
                                                    <td> — </td>
                                                <?php } else { ?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>
                                                <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <td>
                                                    <input form="edit-user" class="primary" type="submit" name="user-role" id="user-role" value="Edytuj">
                                                </td> 
                                            </tr>
                                        
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
