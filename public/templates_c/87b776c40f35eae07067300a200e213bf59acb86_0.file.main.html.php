<?php
/* Smarty version 4.3.4, created on 2024-05-30 12:58:48
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66585be8b64904_46721928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87b776c40f35eae07067300a200e213bf59acb86' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\main.html',
      1 => 1717066726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66585be8b64904_46721928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15721852566585be8b5e713_94517069', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_15721852566585be8b5e713_94517069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15721852566585be8b5e713_94517069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Banner -->
<section id="banner">
    <div class="content">
        <header>
            <h1>Leaf Relief</h1>
            <p>Opis sklepu</p>
        </header>
        <p>
            Leaf Relief to nowoczesny sklep rolniczy, stworzony z myślą o potrzebach współczesnych rolników. Nasza oferta obejmuje szeroki asortyment produktów niezbędnych do prowadzenia gospodarstwa rolnego. W naszym sklepie znajdziesz najwyższej jakości nasiona, nawozy, środki ochrony roślin oraz sprzęt rolniczy od renomowanych producentów.
        </p>
    </div>
    <span class="image object">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/default.jpg" alt="" />
    </span>
</section>

<!-- Section -->
<section id="about">
    <header class="major">
        <h2>O nas</h2>
    </header>
    <div class="features">
        <article>
            <span class="icon" style="text-align: center; display: flex; justify-content: center; align-items: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/tournament-cup.png" width="60%" alt="#"></span>
            <div class="content">
                <h3>Najlepsi na rynku</h3>
                <p>
                    Leaf Relief oferuje produkty od renomowanych producentów, gwarantując najwyższą jakość. Nasze doświadczenie i zaangażowanie sprawiają, że jesteśmy liderem na rynku rolniczym.
                </p>
            </div>
        </article>
        <article>
            <span class="icon" style="text-align: center; display: flex; justify-content: center; align-items: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/box.png" width="65%" height="65%" alt="#"></span>
            <div class="content">
                <h3>Odbiór osobisty </h3>
                <p>
                    Zapewniamy wygodny odbiór osobisty zamówień. Nasz sklep jest łatwo dostępny, a proces odbioru szybki i bezproblemowy, co pozwala na indywidualną obsługę.
                </p>
            </div>
        </article>
        <article>
            <span class="icon fa-gem"></span>
            <div class="content">
                <h3>Gwarancja jakości</h3>
                <p>
                    Produkty Leaf Relief są starannie wyselekcjonowane i pochodzą od sprawdzonych dostawców. Gwarantujemy najwyższą jakość, co przekłada się na efektywność i bezpieczeństwo w rolnictwie.
                </p>
            </div>
        </article>
        <article>
            <span class="icon solid fa-rocket"></span>
            <div class="content">
                <h3>Szybka dostawa </h3>
                <p>
                    Oferujemy szybką i niezawodną dostawę zamówień. Realizujemy je w najkrótszym możliwym czasie, abyś mógł szybko korzystać z naszych produktów.
                </p>
            </div>
        </article>
    </div>
    <hr class="major">

    <a style="display: flex; height: 60px; align-items: center; justify-content: center;" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"products_list_display"),$_smarty_tpl ) );?>
" class="button primary">Katalog produktów</a>
</section>
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
