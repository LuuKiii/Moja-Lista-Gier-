<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 21:54:25
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Edytuj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f723f71a09f72_61506481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3060e154a3565223e5aa125b66dd0c9df6b577c0' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Edytuj.tpl',
      1 => 1601322861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f723f71a09f72_61506481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17864127795f723f719fcfe3_91895602', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_17864127795f723f719fcfe3_91895602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17864127795f723f719fcfe3_91895602',
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
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Lista">Lista Gier</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Profil">Moja Lista Gier</a></li>
            <?php if (core\RoleUtils::inRole("Admin")) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
DodajMenu">Dodaj Pozycję</a></li>
            <?php }?>	

    </ul>
    <ul class="icons">
            <li><a href="https://twitter.com/home" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Logout">Wyloguj się</a></li>
            
            <?php if (core\RoleUtils::inRole("Admin")) {?>
            <li>(Administrator)</li>
            <?php }?>
    </ul>
</nav>

<!-- Main -->
<div id="main">
    <label for=""><?php echo $_smarty_tpl->tpl_vars['game']->value[0]["GameName"];?>
</label>
    
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Edytuj2/<?php echo $_smarty_tpl->tpl_vars['game']->value[0]["idGame"];?>
">
    <div class="col-12">
       <label for="Mark">Ocena</label>
        <select  name="Mark" id="Mark">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    
     <label for="IsFavourite"></label>
    <div class="col-6 col-12-small">
       <label for="Favo">Czy Dodać do Ulubionych</label>
        <select  name="IsFavourite" id="IsFavourite">
            <option value="0">Nie</option>
            <option value="1">Tak</option>
        </select>
    </div>
     
    <label for=""></label>
    
    <ul class="actions">
                      <input type="submit" style="margin-left:2%" value="Zatwierdź" />
    </ul>
    </form> 
    
    <ul class="actions">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Profil">Powrót</a></li>
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
