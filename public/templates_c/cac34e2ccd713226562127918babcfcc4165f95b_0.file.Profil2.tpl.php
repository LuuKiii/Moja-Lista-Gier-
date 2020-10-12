<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 16:28:54
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Profil2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f71f3264b2c48_67333365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac34e2ccd713226562127918babcfcc4165f95b' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Profil2.tpl',
      1 => 1601303107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f71f3264b2c48_67333365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12026854045f71f3264a1fa8_00095921', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_12026854045f71f3264a1fa8_00095921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12026854045f71f3264a1fa8_00095921',
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
    <li class="active"><a href="Glowna">Główna</a></li>
    <li><a href="Lista">Lista Gier</a></li>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
        <li><a href="profil">Moja Lista Gier</a></li>
    <?php }?>	
    <?php if (core\RoleUtils::inRole("Admin")) {?>
        <li><a href="DodajMenu">Dodaj Pozycję</a></li>
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
</ul>
</nav>

<!-- Main -->
<div id="main">
    


<!-- Featured Post -->

<!-- Posts -->
    <section class="posts">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
            <article>
                    <header>
                            <span class="date"><?php echo $_smarty_tpl->tpl_vars['game']->value["Premiere"];?>
</span>
                            <h2><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Detale/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
/<?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
</a></h2>
                        <h5><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Detale_Prod/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value["ProducentName"];?>
</a></h5>
                    </header>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Detale/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
/<?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
images/<?php echo $_smarty_tpl->tpl_vars['game']->value["Image"];?>
.jpg" alt="" /></a>
                    <ul class="actions special">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Detale/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
/<?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
" class="button large">Szczegóły</a></li>
                    </ul>
            </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        
        

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

<!-- Footer -->

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
