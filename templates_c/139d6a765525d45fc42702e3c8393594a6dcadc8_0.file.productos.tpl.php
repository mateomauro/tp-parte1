<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:43:47
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c97338a7a09_12686096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '139d6a765525d45fc42702e3c8393594a6dcadc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\productos.tpl',
      1 => 1665963826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c97338a7a09_12686096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <div class="filtro">   
        <h4>filtrar vehiculos por categoria</h4>
        <form action="categoria" method="POST">
            <select name="categorias">
                <option>auto</option>
                <option>camioneta</option>
            </select>
            <button type="submit" name="filtrar">filtrar</button>
        </form>
    </div>
    <div class="vehiculos">
    <?php if (!(isset($_SESSION['IS_LOGGED']))) {?>
        <h3>Lista de vehiculos</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'vehiculo');
$_smarty_tpl->tpl_vars['vehiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vehiculo']->value) {
$_smarty_tpl->tpl_vars['vehiculo']->do_else = false;
?>
                <h5>Vehiculo: <a href="vehiculo/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->id_vehiculo;?>
"> <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->vehiculo;?>
</a></h5>
                <li>Agencia: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->agencia;?>
</li>        
                <li>Categoria: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->categoria;?>
</li>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->imagen;?>
" class="imagen-vehiculo">
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?> 
            <h3>Agregar un vehiculo</h3>
            <form action="agregar" method="POST">
                <input type="text" placeholder="tipo de auto" name="tipo_auto" required>
                <input type="text" placeholder="agencia" name="agencia" required>
                <select name="categoria" required>
                    <option>auto</option>
                    <option>camioneta</option>
                </select>
                <label class="custom-file-upload">
                <input type="file" name="imagen" required>
                Subir imagen
                </label>
                <button type="submit" name="agregar">agregar</button>
            </form>

            <h3>Lista de vehiculos</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'vehiculo');
$_smarty_tpl->tpl_vars['vehiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vehiculo']->value) {
$_smarty_tpl->tpl_vars['vehiculo']->do_else = false;
?> 
                    <h5>Vehiculo: <a href="vehiculo/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->id_vehiculo;?>
"> <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->vehiculo;?>
</a></h5>
                    <ul>
                        <li>Agencia: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->agencia;?>
</li>
                        <li>Categoria: <?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->categoria;?>
</li> 
                    </ul>
                <div class="edi-eli">
                    <form action="editar/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->id_vehiculo;?>
/vehiculo" method="POST">
                        <button type="submit">editar</button>
                    </form>        
                    <form action="eliminar/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->id_vehiculo;?>
/vehiculo" method="POST">
                        <button type="submit">eliminar</button>
                    </form>         
                </div>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->imagen;?>
" class="imagen-vehiculo">
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
