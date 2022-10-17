<?php
/* Smarty version 4.2.1, created on 2022-10-17 02:29:29
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\formularioEspecificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ca1e9a8fe84_86067651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff72f45e2dd08fbdeb5677b621c1399f4b8a0c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\formularioEspecificaciones.tpl',
      1 => 1665965502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ca1e9a8fe84_86067651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="centrado">
    <h3>Este vehiculo no tiene especificaciones, completelas</h3>
    <form action="completo/<?php echo $_smarty_tpl->tpl_vars['id_vehiculo']->value;?>
" method="post">
        <input type="text" name="color" placeholder="color">
        <input type="number" name="valor" placeholder="valor">
        <input type="number" name="km" placeholder="km">
        <button type="submit" name="completo">Completar especificaciones</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
