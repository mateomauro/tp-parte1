<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:33:54
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\formularioEdicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63499d82514c87_90752167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd55df787a1795d21f60dba7b2fa32b4d87ec4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\formularioEdicion.tpl',
      1 => 1665768768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63499d82514c87_90752167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-5 w-25 mx-auto">
    <?php if ($_smarty_tpl->tpl_vars['tabla']->value == "especificacion") {?>
        <form action="editado/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>
" method="POST">
            <div class="form-group">
                <input type="number" placeholder="valor del vehiculo" name="valor"  class="form-control" required>
                <input type="text" placeholder="color" name="color"  class="form-control" required>
                <input type="number" placeholder="kilometraje"  class="form-control" name="kilometraje" required>
            </div>
            <button type="submit" name="editar" class="btn btn-primary mt-3">Editar</button>
    </form>
    <?php } else { ?>
        <h3>Edite el vehiculo</h3>
        
        <form action="editado/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>
" method="POST">
            <div class="form-group">
                <input type="text" placeholder="tipo de auto" name="tipo_auto" required class="form-control" >
                <input type="text" placeholder="agencia" name="agencia" required class="form-control" >
                <select name="categoria" required class="form-control" >
                    <option>auto</option>
                    <option>camioneta</option>
                </select>
                <label class="custom-file-upload" class="form-control">
                    <input type="file" name="imagen" required>
                Subir imagen
                </label>
            </div>
            <button type="submit" name="editar" class="btn btn-primary mt-3">Editar</button>
        </form>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
