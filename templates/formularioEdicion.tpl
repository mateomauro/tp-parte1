{include file="header.tpl"}
<div class="mt-5 w-25 mx-auto">
    {if $tabla eq "especificacion"}
        <form action="editado/{$id}/{$tabla}" method="POST">
            <div class="form-group">
                <input type="number" placeholder="valor del vehiculo" name="valor"  class="form-control" required>
                <input type="text" placeholder="color" name="color"  class="form-control" required>
                <input type="number" placeholder="kilometraje"  class="form-control" name="kilometraje" required>
            </div>
            <button type="submit" name="editar" class="btn btn-primary mt-3">Editar</button>
    </form>
    {else}
        <h3>Edite el vehiculo</h3>
        
        <form action="editado/{$id}/{$tabla}" method="POST">
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
    {/if}
</div>
{include file="footer.tpl"}