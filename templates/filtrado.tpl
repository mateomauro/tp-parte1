{include file="header.tpl"}
<div class="centrado">
    {if $filtro eq "vehiculos"}
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
        {foreach from=$vehiculos item=$vehiculo}
            {if $vehiculo->categoria eq $categoria}
                <ul>
                    <li><a href="vehiculo/{$vehiculo->id_vehiculo}"> {$vehiculo->vehiculo}</a></li>
                    <li>Agencia: {$vehiculo->agencia}</li> 
                    <li>categoria: {$vehiculo->categoria}</li>
                </ul>
                <img src="img/{$vehiculo->imagen}" class="imagen-vehiculo"> 
            {/if}
        {/foreach}
    {else}
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
        {foreach from=$vehiculos item=$vehiculo}
            {if $vehiculo->categoria eq $categoria}
                {foreach from=$especificaciones item=$especificacion}
                    {if $vehiculo->id_vehiculo eq $especificacion->id_vehiculo}
                        <h5>Vehiculo: {$vehiculo->vehiculo}</h5>
                        <ul>
                            <li>Valor del vehiculo: {$especificacion->valor} $USD</li>
                            <li>Kilometros del vehiculo: {$especificacion->km} KM</li>
                            <li>Color del vehiculo: {$especificacion->color}</li>
                            <li>Categoria: {$categoria}</li>
                        </ul>
                        <img src="img/{$vehiculo->imagen}" class="imagen-vehiculo">  
                    {/if}
                {/foreach}
            {/if}
        {/foreach}
    {/if}
</div>
{include file="footer.tpl"}