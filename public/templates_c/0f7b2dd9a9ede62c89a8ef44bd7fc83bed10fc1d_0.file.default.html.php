<?php
/* Smarty version 4.3.4, created on 2024-05-31 12:14:37
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\leaf-relief\app\views\templates\default.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6659a30d9587f4_73009301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f7b2dd9a9ede62c89a8ef44bd7fc83bed10fc1d' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\leaf-relief\\app\\views\\templates\\default.html',
      1 => 1717150474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a30d9587f4_73009301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pl">
	<head>
		<title>Leaf Relief</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/assets/css/main.css" />
		<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/leaf-relief.png">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"main"),$_smarty_tpl ) );?>
" class="logo"><strong>Leaf</strong> Relief</a>
									<ul class="icons">
										<li><a href="https://github.com/RocketSpace2" target="_blank" class="icon brands fa-github"><span class="label">Github</span></a></li>
										<li><a href="https://www.instagram.com/_rocketspace_/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17507908896659a30d949136_90548044', "content");
?>

                    <!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<br>
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>
											<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"profile_display"),$_smarty_tpl ) );?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/profile.png" width="12%" height="12%" alt="#"> <?php if ($_smarty_tpl->tpl_vars['login']->value != null) {
echo $_smarty_tpl->tpl_vars['login']->value;
} else { ?>Gość<?php }?></a>
										</h2>
										<h2 style="display: inline-block;">
											<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"shoping_cart_display"),$_smarty_tpl ) );?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/images/shoping-cart.png" width="12%" height="12%" alt="#"><?php if ($_smarty_tpl->tpl_vars['product_amount']->value != null) {?> Ilość: <?php echo $_smarty_tpl->tpl_vars['product_amount']->value;
} else { ?> Pusty<?php }?></a>
										</h2>
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"main"),$_smarty_tpl ) );?>
">Strona główna</a></li>
										<?php if ($_smarty_tpl->tpl_vars['isWorker']->value) {?>
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"products_list_worker_display"),$_smarty_tpl ) );?>
">Lista produktów</a></li>
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"orders"),$_smarty_tpl ) );?>
">Zamówienia</a></li>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"users_list_display"),$_smarty_tpl ) );?>
">Użytkownicy</a></li>
										<?php }?>
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"products_list_display"),$_smarty_tpl ) );?>
">Produkty</a></li>
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"main"),$_smarty_tpl ) );?>
#about">O nas</a></li>										
									</ul>
								</nav>
								<?php if ($_smarty_tpl->tpl_vars['isUser']->value == null) {?>
								<!--  $isUser == null has to be here, because after destroying session such variables as isUser, isWorker and isAdmin
								are deleted and when I assign these variables after logout they will have null, because there is no role at all yet -->
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"login_display"),$_smarty_tpl ) );?>
" class="button primary fit">Zaloguj się</a></li>
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"registration_display"),$_smarty_tpl ) );?>
" class="button fit">Zarejestruj się</a></li>
									</ul>
								</div>
								<?php } else { ?>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="button primary fit">Wyloguj się</a></li>
									</ul>
								</div>
								<?php }?>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Skontaktuj się z nami</h2>
									</header>
									<p>
										Znajdziesz tu nasze dane kontaktowe. Jesteśmy do Twojej dyspozycji, aby pomóc i odpowiedzieć na wszelkie pytania dotyczące naszych produktów i usług.
									</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">rocketspace@example.com</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p> Design: <a href="https://html5up.net">HTML5 UP</a></p>
									<span>Implementation: <a href="https://github.com/RocketSpace2" target="_blank"><span>RocketSpace</span></a></span>
									<p class="copyright">&copy; RocketSpace </p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block "content"} */
class Block_17507908896659a30d949136_90548044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17507908896659a30d949136_90548044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default text<?php
}
}
/* {/block "content"} */
}
