<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:45:10
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\filtrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9786b28406_53265828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beacd3a706e319a0a4434d873c26e4c345f7c22a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\filtrado.tpl',
      1 => 1665963907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c9786b28406_53265828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <?php if ($_smarty_tpl->tpl_vars['filtro']->value == "vehiculos") {?>
        <div class="filtro"> 
            <h4>filtrar vehiculos por categoria</h4>
            <form action="categoria" method="POST">
                <select name="categorias">
                    <option>auto</option>
                    <option>camioneta</option>
                </select>
                <button type="submit" name="filtrar">filtrar</button>
                <button type="submit" name="desfiltrar">Desfiltrar</button>
            </form>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'vehiculo');
$_smarty_tpl->tpl_vars['vehiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vehiculo']->value) {
$_smarty_tpl->tpl_vars['vehiculo']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['vehiculo']->value->categoria == $_smarty_tpl->tpl_vars['categoria']->value) {?>
                <ul>
                    <li><a href="vehiculo/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->id_vehiculo;?>
"> <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->vehiculo;?>
</a></li>
                    <li>Agencia: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->agencia;?>
</li> 
                    <li>categoria: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->categoria;?>
</li>
                </ul>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->imagen;?>
" class="imagen-vehiculo"> 
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="filtro"> 
            <h4>filtrar especificaciones por categoria</h4>
            <form action="categoria" method="POST">
                <select name="categorias">
                    <option>auto</option>
                    <option>camioneta</option>
                </select>
                <button type="submit" name="filtrarEspecificaciones">filtrar</button>
                <button type="submit" name="desfiltrarEspecificaciones">Desfiltrar</button>
            </form>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'vehiculo');
$_smarty_tpl->tpl_vars['vehiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vehiculo']->value) {
$_smarty_tpl->tpl_vars['vehiculo']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['vehiculo']->value->categoria == $_smarty_tpl->tpl_vars['categoria']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especificaciones']->value, 'especificacion');
$_smarty_tpl->tpl_vars['especificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especificacion']->value) {
$_smarty_tpl->tpl_vars['especificacion']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vehiculo']->value->id_vehiculo == $_smarty_tpl->tpl_vars['especificacion']->value->id_vehiculo) {?>
                        <h5>Vehiculo: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->vehiculo;?>
</h5>
                        <ul>
                            <li>Valor del vehiculo: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value->valor;?>
 $USD</li>
                            <li>Kilometros del vehiculo: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value->km;?>
 KM</li>
                            <li>Color del vehiculo: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value->color;?>
</li>
                            <li>Categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
</li>
                        </ul>
                        <img src="img/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->imagen;?>
" class="imagen-vehiculo">  
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
