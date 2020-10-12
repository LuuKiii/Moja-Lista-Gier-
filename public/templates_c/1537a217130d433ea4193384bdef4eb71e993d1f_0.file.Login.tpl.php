<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 00:49:23
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73b9f3e35a44_58629215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1537a217130d433ea4193384bdef4eb71e993d1f' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Login.tpl',
      1 => 1601419762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73b9f3e35a44_58629215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1695590365f73b9f3e27747_51701665', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1695590365f73b9f3e27747_51701665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1695590365f73b9f3e27747_51701665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<body class="is-preload">

		<!-- Wrapper -->
				<!-- Footer -->
					<footer id="footer">
						<section>
							<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Login" method="post" >
								<div class="fields">

									<div class="field">
										<label for="email">Nazwa Użytkownika</label>
										<input type="text" name="Login" id="name" />
									</div>
                                                                    	<div class="field">
										<label for="name">Hasło</label>
										<input type="password" name="Pass" id="password" />
									</div>

								</div>
								<ul class="actions">
									<li><input type="submit" value="Zaloguj się" /></li>
                                                                        
								</ul>
                                                                
                                                            	<ul class="actions">
                                                                    <li><a href="Glowna">Powrót</a></li>
								</ul>
							</form>
                                                                
                                                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                                                             <div class="messages bottom-margin">
                                                             <ul>
                                                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                                                             <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </ul>
                                                            </div>
                                                        <?php }?>     
                                                    
						</section>
                                                
                                                <section>
                                                    <h2>Nie masz konta?</h2>
                                                    <form method="post" action="Register">
                                                    <ul class="actions">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RegisterShow" class="button">Zarejestruj się</a></li>
                                                                        
						    </ul>
                                                    </form>
                                                </section>   
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Moja lista gier</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
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

<?php
}
}
/* {/block 'content'} */
}
