{include file="header.tpl"}
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
    {if !isset($smarty.session.IS_LOGGED)}
        <h3>Lista de vehiculos</h3>
            {foreach from=$vehiculos item=$vehiculo}
                <h5>Vehiculo: <a href="vehiculo/{$vehiculo->id_vehiculo}"> {$vehiculo->vehiculo}</a></h5>
                <li>Agencia: {$vehiculo->agencia}</li>        
                <li>Categoria: {$vehiculo->categoria}</li>
                <img src="img/{$vehiculo->imagen}" class="imagen-vehiculo">
            {/foreach}
        {else} 
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
            {foreach from=$vehiculos item=$vehiculo} 
                    <h5>Vehiculo: <a href="vehiculo/{$vehiculo->id_vehiculo}"> {$vehiculo->vehiculo}</a></h5>
                    <ul>
                        <li>Agencia: {$vehiculo->agencia}</li>
                        <li>Categoria: {$vehiculo->categoria}</li> 
                    </ul>
                <div class="edi-eli">
                    <form action="editar/{$vehiculo->id_vehiculo}/vehiculo" method="POST">
                        <button type="submit">editar</button>
                    </form>        
                    <form action="eliminar/{$vehiculo->id_vehiculo}/vehiculo" method="POST">
                        <button type="submit">eliminar</button>
                    </form>         
                </div>
                <img src="img/{$vehiculo->imagen}" class="imagen-vehiculo">
            {/foreach}
        {/if}
    </div>
</div>
{include file="footer.tpl"}