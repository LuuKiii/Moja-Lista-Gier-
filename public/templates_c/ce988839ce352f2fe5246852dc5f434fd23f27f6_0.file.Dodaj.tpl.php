<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 12:57:31
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Dodaj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f74649bd9bdd7_46229182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce988839ce352f2fe5246852dc5f434fd23f27f6' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Dodaj.tpl',
      1 => 1601463448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f74649bd9bdd7_46229182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10100374835f74649bd8db01_26177707', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10100374835f74649bd8db01_26177707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10100374835f74649bd8db01_26177707',
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
                <li><a href="Glowna">Główna</a></li>
                <li><a href="Lista">Lista Gier</a></li>
                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                    <li><a href="Profil">Moja Lista Gier</a></li>
                    <?php }?>	
                    <?php if (core\RoleUtils::inRole("Admin")) {?>
                        <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
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
        </ul>
</nav>

<!-- Main -->
<div id="main">

<section>
    
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Dodaj">
                        <div class="fields">

                                <div class="field">
                                        <label for="GameName">Nazwa Gry</label>
                                        <input type="text" name="GameName" id="GameName" />
                                </div>
                                <div class="field">
                                        <label for="Premiere">Premiera [rrrr-mm-dd]</label>
                                        <input type="text" name="Premiere" id="Premiere" />
                                </div>
                                <div class="field">
                                        <label for="Description">Opis</label>
                                        <textarea type="text" name="Description" id="Description" rows="6" ></textarea>
                                </div>

                                <div class="field">
                                        <label for="Image">Nazwa Obrazka</label>
                                        <input type="text" name="Image" id="Image" />
                                </div>
                                <div class="field">
                                    <label for="ProducentName">Producent</label>
                                        <select  name="ProducentName" id="ProducentName" >
                                            <option value="">-Producent-</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value, 'p', false, NULL, 'foo', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value["idProducent"];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["ProducentName"];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                </div>

                        </div>
                        <ul class="actions">
                                <li><input type="submit" value="Dodaj" /></li>

                        </ul>

                        <ul class="actions">
                            <li><a href="DodajMenu">Powrót</a></li>
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
                        <?php }?> 
   </ul>
</div>
   

                </form>


        </section>

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
