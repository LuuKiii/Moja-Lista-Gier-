<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 00:02:17
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\UserM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f725d69785680_87977342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2dc81de2bb02e355c76fa3594849de36a2dd43' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\UserM.tpl',
      1 => 1601330523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f725d69785680_87977342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8633819575f725d69777914_41941065', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_8633819575f725d69777914_41941065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8633819575f725d69777914_41941065',
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
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Profil">Moja Lista Gier</a></li>
            <?php if (core\RoleUtils::inRole("Admin")) {?>
            <li class="active"><a  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
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
    <h2>Użytkownicy</h2>
            <section class="">
                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Login</th>
                                        <th>Email</th>
                                        <th>Rola</th>
                                        <th><ul style="margin-left:40%">Akcja</ul></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                       <?php if ($_smarty_tpl->tpl_vars['u']->value['idUser'] != $_smarty_tpl->tpl_vars['idUse']->value) {?> 
                                   <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value["Login"];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value["Email"];?>
</td>
                                        <th><?php echo $_smarty_tpl->tpl_vars['u']->value["Role"];?>
</th>
                                             <td><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
UserMRola/<?php echo $_smarty_tpl->tpl_vars['u']->value["idUser"];?>
">                                     
                                                <select name="Role" id="Role">
                                                    <option value="user">użytkownik</option>
                                                    <option value="Admin">Admin</option>
                                                </select>
                                            <input type="submit" value="Zmień Rolę" class="button special" style="margin-left:25%"/>
                                            </form></td>
                                    </tr>
                                    <?php }?>
                                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

                                </tbody>
                            </table>
                    </article>

            </section>
                         
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
