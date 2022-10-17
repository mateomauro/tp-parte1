<?php
/* Smarty version 4.2.1, created on 2022-10-17 03:09:45
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\especificacionVehiculo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cab59c80007_63025346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cae6795a02a9ac36ac208763cd84d963a83f9152' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\especificacionVehiculo.tpl',
      1 => 1665968984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cab59c80007_63025346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <?php if ($_smarty_tpl->tpl_vars['especificacion']->value) {?>
        <h5>Vehiculo: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->vehiculo;?>
</h5>
        <h6>Especificaciones</h6>
        <ul>
            <li>Valor del vehiculo: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value->valor;?>
 $USD</li>
            <li>Kilometros del vehiculo: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value->km;?>
 KM</li>
            <li>Color del vehiculo: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value->color;?>
</li>
        </ul>
        <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
            <div class="edi-eli">
                <form action="editar/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_vehiculo;?>
/especificacion" method="POST">
                    <button type="submit">editar</button>
                </form>        
                <form action="eliminar/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_vehiculo;?>
/especificacion" method="POST">
                    <button type="submit">eliminar</button>
                </form>  
            </div>   
        <?php }?>
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->imagen;?>
" class="imagen-vehiculo">
    <?php } else { ?>
        <h4>Este vehiculo no tiene especificaciones</h4>    
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
