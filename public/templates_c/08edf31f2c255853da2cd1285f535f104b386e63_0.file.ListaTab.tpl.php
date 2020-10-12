<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 00:28:54
  from 'E:\szkola\Z-PHP\xamp\htdocs\gryocenianie\app\views\ListaTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7263a60b5030_46423874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08edf31f2c255853da2cd1285f535f104b386e63' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\gryocenianie\\app\\views\\ListaTab.tpl',
      1 => 1601332133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7263a60b5030_46423874 (Smarty_Internal_Template $_smarty_tpl) {
?>        <footer>
                <div class="pagination">
                    <?php if ($_smarty_tpl->tpl_vars['strona']->value != 1) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Lista/1/<?php echo $_smarty_tpl->tpl_vars['szuk']->value->name;
echo $_smarty_tpl->tpl_vars['wh']->value;?>
" class="page">|<</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Lista/<?php echo $_smarty_tpl->tpl_vars['strona']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['szuk']->value->name;
echo $_smarty_tpl->tpl_vars['wh']->value;?>
" class="page"><<</a>
                    <?php }?>
                    
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['ostatnia']->value+1 - ($_smarty_tpl->tpl_vars['pierwsza']->value) : $_smarty_tpl->tpl_vars['pierwsza']->value-($_smarty_tpl->tpl_vars['ostatnia']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pierwsza']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Lista/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['szuk']->value->name;
echo $_smarty_tpl->tpl_vars['wh']->value;?>
" class="page"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                    <?php }
}
?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['strona']->value != $_smarty_tpl->tpl_vars['ostatnia']->value) {?> 
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Lista/<?php echo $_smarty_tpl->tpl_vars['strona']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['szuk']->value->name;
echo $_smarty_tpl->tpl_vars['wh']->value;?>
" class="page">>></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Lista/<?php echo $_smarty_tpl->tpl_vars['ostatnia2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['szuk']->value->name;
echo $_smarty_tpl->tpl_vars['wh']->value;?>
" class="page">>|</a>
                    <?php }?>


                </div>

	</footer>


                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tytuł</th>
                                        <th>Producent</th>
                                        <th><ul style="margin-left:50%">Akcja</ul></th>
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
                                        <td><a class="button special" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ListaDodaj/<?php echo $_smarty_tpl->tpl_vars['strona']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['game']->value["idGame"];?>
" style="margin-left:50%">Dodaj</a></td>
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                </tbody>
                            </table>
                    </article>

                                
<?php }
}
