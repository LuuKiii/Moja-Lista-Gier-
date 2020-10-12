<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 17:15:50
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Detale_Prod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f71fe26d12924_43556741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f03bf79b3b4eba51d87b411be486148c2ebdf8c' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Detale_Prod.tpl',
      1 => 1601304489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f71fe26d12924_43556741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21014448545f71fe26d05582_66737867', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_21014448545f71fe26d05582_66737867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21014448545f71fe26d05582_66737867',
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
                        </ul>
                </nav>

        <!-- Main -->
                <div id="main">


                        <!-- Posts -->
                                <section class="">

                                        <article>
                                                <header>                                                        
                                                        <h2><?php echo $_smarty_tpl->tpl_vars['games']->value[0]["ProducentName"];?>
</h2>
                                                        <h3>Siedziba : <?php echo $_smarty_tpl->tpl_vars['games']->value[0]["Local"];?>
 </h3>

                                                </header>
                                        </article>
                                    <p><?php echo $_smarty_tpl->tpl_vars['games']->value[0]["DescriptProd"];?>
</p>

                                 
                        <h3>Wyprodukowane gry</h3>
                               
                                        <article>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['game']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                                <header>
                                                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Detale/<?php echo $_smarty_tpl->tpl_vars['p']->value["idGame"];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value["GameName"];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["GameName"];?>
<br /></a></h2>
                                                </header>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </article>


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
