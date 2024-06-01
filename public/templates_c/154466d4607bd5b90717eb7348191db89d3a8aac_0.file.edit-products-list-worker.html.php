<?php
/* Smarty version 4.3.4, created on 2024-05-30 13:21:07
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\edit-products-list-worker.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66586123766c46_60696434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '154466d4607bd5b90717eb7348191db89d3a8aac' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\edit-products-list-worker.html',
      1 => 1716994899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66586123766c46_60696434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93434764966586123755792_26839608', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_93434764966586123755792_26839608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_93434764966586123755792_26839608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border-radius: 10px;
            color: #f56a6a;
            text-align: center;
            vertical-align: middle;
            width: 100%;
            border: 3px solid #f56a6a;
            display: inline-block;
            padding-top: 35%;
            padding-bottom: 35%;
            cursor: pointer;
        }

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

                            <?php if (!$_smarty_tpl->tpl_vars['msgs']->value->isEmpty()) {?>
                            <div style="margin-top: 5%;">
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
                            </div>
                        <?php }?>
                            <section id="banner">
                                <div class="content">
                                    <header>
                                        <form id="main-form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"edit_product"),$_smarty_tpl ) );?>
" enctype="multipart/form-data">
                                            
                                                <span>Nazwa</span>
                                                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" required>
                                                <br>
                                                <span>Typ</span>
                                                <select name="type">
                                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['type_name']->value == "Środki ochrony roślin") {?>selected<?php }?>>Środki ochrony roślin</option>
                                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['type_name']->value == "Nawozy") {?>selected<?php }?>>Nawozy</option>
                                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['type_name']->value == "Nasiona") {?>selected<?php }?>>Nasiona</option>
                                                </select>
                                                <br>
                                                <span>Cena</span>
                                                <input type="text"name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" required>
                                                <br>
                                                <span>Opis</span>
                                                <textarea name="description" id="description" rows="10" style="resize: none;" required><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>
                                                <br>
                                                <input class="primary" style="display: inline-block; width: 100%;" type="submit" value="Edytuj">
                                        </form>
                                    </header>
                                </div>
                                <div style="display: flex; width: 50%; padding: 2% 2% 5% 5%;">
                                    <label for="image" class="custom-file-upload">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/photo.png" style="width: 40%; " alt="#">
                                    </label>
                                    <input id="image" type="file" name="image" form="main-form">
                                </div>
                                
                            </section>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
