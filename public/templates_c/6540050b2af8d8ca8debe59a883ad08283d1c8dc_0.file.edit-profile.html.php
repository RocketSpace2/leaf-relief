<?php
/* Smarty version 4.3.4, created on 2024-05-28 14:48:38
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\edit-profile.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6655d2a6059851_02829378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6540050b2af8d8ca8debe59a883ad08283d1c8dc' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\edit-profile.html',
      1 => 1716900419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655d2a6059851_02829378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21444487566655d2a60468c7_25335302', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_21444487566655d2a60468c7_25335302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21444487566655d2a60468c7_25335302',
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
                                <div style="display: block; margin-top: 5%; margin-bottom: 0%;">
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

                                        
                                        <form id="main-form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"edit_profile"),$_smarty_tpl ) );?>
" enctype="multipart/form-data">
                                            
                                                <span>Login</span>
                                                <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
                                                <br>
                                                <span>Miasto</span>
                                                <input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
                                                <br>
                                                <span>Kod pocztowy</span>
                                                <input type="text" name="postcode" value="<?php echo $_smarty_tpl->tpl_vars['postcode']->value;?>
">
                                                <br>
                                                <span>Ulica</span>
                                                <input type="text" name="street" value="<?php echo $_smarty_tpl->tpl_vars['street']->value;?>
">
                                                <br>
                                                <span>Numer ulicy</span>
                                                <input type="text" name="street_number" value="<?php echo $_smarty_tpl->tpl_vars['street_number']->value;?>
">
                                                <br>
                                                <span>Numer lokalu</span>
                                                <input type="text" name="apartment_number" value="<?php if ($_smarty_tpl->tpl_vars['apartment_number']->value != null) {
echo $_smarty_tpl->tpl_vars['apartment_number']->value;
}?>">
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
                            <section id="products">
                                <header class="major">
                                    <h2>Najlepsze produkty</h2>
                                </header>
                                <div class="posts">
                                    <article>
                                        <a href="#" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/pic01.jpg" alt="" /></a>
                                        <div style="display: inline-block; width: 100%;">
                                            <h3 style="display: inline-block; width: 19%;">Pierwszy</h3>
                                            <div style="display: inline-block; width: 79%;"><span style="text-align: right; display: inline-block; width: 100%;">Cena: <strong style="font-size: 1.15em;">120 zł</strong></span></div>
                                            <span style="text-align: right; display: inline-block; width: 100%;">Typ: <strong style="font-size: 1.15em;">none</strong></span>
                                        </div>
                                        <br>
                                        <br>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="product.html" class="button">Więcej</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/pic01.jpg" alt="" /></a>
                                        <div style="display: inline-block; width: 100%;">
                                            <h3 style="display: inline-block; width: 19%;">Drugi</h3>
                                            <div style="display: inline-block; width: 79%;"><span style="text-align: right; display: inline-block; width: 100%;">Cena: <strong style="font-size: 1.15em;">120 zł</strong></span></div>
                                            <span style="text-align: right; display: inline-block; width: 100%;">Typ: <strong style="font-size: 1.15em;">none</strong></span>
                                        </div>
                                        <br>
                                        <br>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">Więcej</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/pic01.jpg" alt="" /></a>
                                        <div style="display: inline-block; width: 100%;">
                                            <h3 style="display: inline-block; width: 19%;">Trzeci</h3>
                                            <div style="display: inline-block; width: 79%;"><span style="text-align: right; display: inline-block; width: 100%;">Cena: <strong style="font-size: 1.15em;">120 zł</strong></span></div>
                                            <span style="text-align: right; display: inline-block; width: 100%;">Typ: <strong style="font-size: 1.15em;">none</strong></span>
                                        </div>
                                        <br>
                                        <br>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">Więcej</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/pic01.jpg" alt="" /></a>
                                        <div style="display: inline-block; width: 100%;">
                                            <h3 style="display: inline-block; width: 19%;">Czwarty</h3>
                                            <div style="display: inline-block; width: 79%;"><span style="text-align: right; display: inline-block; width: 100%;">Cena: <strong style="font-size: 1.15em;">120 zł</strong></span></div>
                                            <span style="text-align: right; display: inline-block; width: 100%;">Typ: <strong style="font-size: 1.15em;">none</strong></span>
                                        </div>
                                        <br>
                                        <br>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">Więcej</a></li>
                                        </ul>
                                    </article>
                                </div>

                                <br>
                                <div class="col-6 col-12-small">
                                    <ul class="actions stacked">
                                        <li><a href="products-list.html" class="button primary fit">Więcej</a></li>
                                    </ul>
                                </div>
                                
                            </section>
                            
						</div>
					</div>
<?php
}
}
/* {/block 'content'} */
}
