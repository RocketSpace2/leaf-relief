<?php
/* Smarty version 4.3.4, created on 2024-05-30 19:54:12
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\add-product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6658bd443db056_97096354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24be071c027263029af791666a9a0e6df4968496' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\add-product.html',
      1 => 1717091650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6658bd443db056_97096354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8472281346658bd443ca202_03113437', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_8472281346658bd443ca202_03113437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8472281346658bd443ca202_03113437',
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
                                        <form id="main-form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"add_product_worker"),$_smarty_tpl ) );?>
" enctype="multipart/form-data">
                                            
                                                <span>Nazwa</span>
                                                <input type="text" name="name" required>
                                                <br>
                                                <span>Typ</span>
                                                <select name="type">
                                                    <option value="1">Środki ochrony roślin</option>
                                                    <option value="2">Nawozy</option>
                                                    <option value="3">Nasiona</option>
                                                </select>
                                                <br>
                                                <span>Cena</span>
                                                <input type="text" name="price" required>
                                                <br>
                                                <span>Opis</span>
                                                <textarea name="description" rows="10" style="resize: none;" required></textarea>
                                                <br>
                                                <input class="primary" style="display: inline-block; width: 100%;" type="submit" value="Dodać">
                                        </form>
                                    </header>
                                </div>
                                <div style="display: flex; width: 50%; padding: 2% 2% 5% 5%;">
                                    <label for="photo" class="custom-file-upload">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/photo.png" style="width: 40%; " alt="#">
                                    </label>
                                    <input id="photo" type="file" form="main-form" name="image">
                                </div>
                                
                            </section>
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
