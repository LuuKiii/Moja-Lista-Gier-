<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 23:35:02
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f725706a8da60_82386902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b145c0f3ae3464aea0c011ab07b161d29791df26' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Profil.tpl',
      1 => 1601328901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f725706a8da60_82386902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7817590565f725706a7a443_14293586', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_7817590565f725706a7a443_14293586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7817590565f725706a7a443_14293586',
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


    <!-- Posts -->
    <h2>Ulubione</h2>
            <section class="">
                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tytuł</th>
                                        <th>Producent</th>
                                        <th>Ocena</th>
                                        <th><ul style="margin-left:130%">Akcja</ul></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gamesf']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                                   <tr>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Detale/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
/<?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Detale_Prod/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value["ProducentName"];?>
</td></a>
                                       <th><?php echo $_smarty_tpl->tpl_vars['game']->value["Mark"];?>
</th>
                                        <td><a class="button special" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Edytuj/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
" style="margin-left:90%">Edytuj</a></td>
                                        <td><a class="button special" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ProfilUsun/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
" style="margin-left:40%">Usuń</a></td>
                                    </tr>
                                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

                                </tbody>
                            </table>
                    </article>

            </section>

   <h2>Wszystkie</h2>
            <section class="">
                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tytuł</th>
                                        <th>Wszystkie</th>
                                        <th>Ocena</th>
                                        <th><ul style="margin-left:130%">Akcja</ul></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                                    <tr>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Detale/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
/<?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value["GameName"];?>
</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Detale_Prod/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value["ProducentName"];?>
</td></a>
                                        <th><?php echo $_smarty_tpl->tpl_vars['game']->value["Mark"];?>
</th>
                                        <td><a class="button special" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Edytuj/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
" style="margin-left:80%">Edytuj</a></td>
                                        <td><a class="button special" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ProfilUsun/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
" style="margin-left:40%">Usuń</a></td>
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    

                                </tbody>
                            </table>
                    </article>

            </section>
                                    
                                    
                                    
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
