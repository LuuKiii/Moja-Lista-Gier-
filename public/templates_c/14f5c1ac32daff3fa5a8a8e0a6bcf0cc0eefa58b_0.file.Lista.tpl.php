<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 22:25:59
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7246d7437ee3_28426504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14f5c1ac32daff3fa5a8a8e0a6bcf0cc0eefa58b' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Lista.tpl',
      1 => 1601324752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ListaTab.tpl' => 1,
  ),
),false)) {
function content_5f7246d7437ee3_28426504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9975884705f7246d7427ee4_36110744', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_9975884705f7246d7427ee4_36110744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9975884705f7246d7427ee4_36110744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<body class="is-preload">

<!-- Wrapper -->


    <ul>						
            <br/>
            <br/>
    </ul>



<!-- Nav -->
<nav id="nav">
<ul class="links">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Glowna">Główna</a></li>
    <li  class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Lista">Lista Gier</a></li>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Profil">Moja Lista Gier</a></li>
    <?php }?>	
    <?php if (core\RoleUtils::inRole("Admin")) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
DodajMenu">Dodaj Pozycję</a></li>
    <?php }?>	

</ul>
<ul class="icons">
    <li><a href="https://twitter.com/home" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
    
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) <= 0) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Login">Zaloguj się</a></li>
    <?php } else { ?>	
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Logout">Wyloguj się</a></li>
    <?php }?>
    
    <?php if (core\RoleUtils::inRole("Admin")) {?>
        <li>(Administrator)</li>
    <?php }?>
</nav>

<!-- Main -->
<div id="main">

    <footer>
                 <form id="search" onclick="ajaxPostForm('search','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ListaTab','tablica');return false;"  >
                        <div class="field">
                            <input type="text" name="name" id="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['szuk']->value->name;?>
" value="<?php echo $_smarty_tpl->tpl_vars['szuk']->value->name;?>
" />
			</div>
  
                        
                        <ul></ul>
                        
                                              
                        <ul class="actions">
                            <input type="submit" style="margin-left:2%" value="Wyszukaj" />
                        </ul>
                        
                 </form>
                        
    </footer>

    <!-- Posts -->
            <section class="" id="tablica">
                <?php $_smarty_tpl->_subTemplateRender("file:ListaTab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </section>

    <!-- Footer -->

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
                                
                                



</div>

                                
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
