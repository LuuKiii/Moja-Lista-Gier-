<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 21:31:50
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\Logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee13526b98f94_30372356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c25b47466ae2dfb0908bfa5792c8708c454d51fc' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\Logout.tpl',
      1 => 1591817504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee13526b98f94_30372356 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
 <meta charset="utf-8"/>
 <title>Nowa akcja | Amelia framework</title>
</head>

<body>

<h3>Generowanie adresów (z użyciem obiektu konfiguracji)</h3>
 

Logout

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
  <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }?>

</body>

</html><?php }
}
