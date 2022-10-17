<?php
/* Smarty version 4.2.1, created on 2022-10-11 20:11:32
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\productosInvitado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345b1d4534086_99370594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156bfbc3519a58289fbf89ac2c42177d25ce5ad0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\productosInvitado.tpl',
      1 => 1665511196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6345b1d4534086_99370594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h5>filtrar vehiculos por categoria</h5>
<form action="categoria" method="POST">
    <select name="categorias">
        <option>auto</option>
        <option>camioneta</option>
    </select>
    <button type="submit" name="filtrar">filtrar</button>
</form>

<h3>Lista de vehiculos</h3>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <li><a href="vehiculo/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->tipo_auto;?>
</a></li>
        <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->agencia;?>
</li>        
        <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
