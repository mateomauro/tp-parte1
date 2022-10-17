<?php
/* Smarty version 4.2.1, created on 2022-10-17 03:05:56
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\especificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634caa74a2a583_32372106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80b3b78d8b00a464b0d5089d755fff0b1e9184e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\especificaciones.tpl',
      1 => 1665968447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634caa74a2a583_32372106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <div class="filtro">   
        <h4>filtrar especificaciones por categoria</h4>
        <form action="categoria" method="POST">
            <select name="categorias">
                <option>auto</option>
                <option>camioneta</option>
            </select>
            <button type="submit" name="filtrarEspecificaciones">filtrar</button>
        </form>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'vehiculo');
$_smarty_tpl->tpl_vars['vehiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vehiculo']->value) {
$_smarty_tpl->tpl_vars['vehiculo']->do_else = false;
?>
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
                </ul>
                <?php if ((isset($_SESSION['USER_ID']))) {?>
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
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
