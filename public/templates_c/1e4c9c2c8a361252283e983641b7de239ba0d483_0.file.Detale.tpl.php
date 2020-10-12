<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 22:00:35
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Detale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7240e35aeb95_31854397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e4c9c2c8a361252283e983641b7de239ba0d483' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Detale.tpl',
      1 => 1601304483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7240e35aeb95_31854397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7509635575f7240e35a3e16_91683523', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_7509635575f7240e35a3e16_91683523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7509635575f7240e35a3e16_91683523',
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
                                                        <h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['gameid']->value;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['games']->value[$_prefixVariable1]["GameName"];?>
</h2>
                                                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Detale_Prod/<?php ob_start();
echo $_smarty_tpl->tpl_vars['gameid']->value;
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['games']->value[$_prefixVariable2]["idGame"];?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['gameid']->value;
$_prefixVariable3 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['games']->value[$_prefixVariable3]["ProducentName"];?>
</a></h2>
                                                        <h3>Premiera : <span class="date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['gameid']->value;
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['games']->value[$_prefixVariable4]["Premiere"];?>
</span></h3>
                                                </header>
                                                <a class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
images/<?php ob_start();
echo $_smarty_tpl->tpl_vars['gameid']->value;
$_prefixVariable5 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['games']->value[$_prefixVariable5]["Image"];?>
.jpg" alt="" /></a>
                                                <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['gameid']->value;
$_prefixVariable6 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['games']->value[$_prefixVariable6]["Description"];?>
</p>
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
