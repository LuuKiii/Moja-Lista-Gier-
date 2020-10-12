<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 22:42:57
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6910517b8997_35394471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8de78401b9d6f2c27923cfc2c92f20084589123d' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Register.tpl',
      1 => 1600720972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6910517b8997_35394471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12594492215f6910517aee05_58372474', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_12594492215f6910517aee05_58372474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12594492215f6910517aee05_58372474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<body class="is-preload">

		<!-- Wrapper -->
				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RegisterSave">
								<div class="fields">

									<div class="field">
										<label for="Email">Email</label>
										<input type="text" name="Email" id="Email" />
									</div>
                                                                    	<div class="field">
										<label for="Login">Nazwa użytkownika</label>
										<input type="text" name="Login" id="Login" />
									</div>
                                                                    	<div class="field">
										<label for="Pass">Hasło</label>
										<input type="text" name="Pass" id="Pass" />
									</div>

								</div>
								<ul class="actions">
									<li><input type="submit" value="Zarejestruj się" /></li>
                                                                        
								</ul>
                                                                
                                                            	<ul class="actions">
                                                                    <li><a href="Glowna">Powrót</a></li>
								</ul>
                                                                
                                                                
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
