{include file="header.tpl"}
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
    {foreach from=$vehiculos item=$vehiculo}
        {foreach from=$especificaciones item=$especificacion}             
            {if $vehiculo->id_vehiculo eq $especificacion->id_vehiculo }
                <h5>Vehiculo: {$vehiculo->vehiculo}</h5>
                <ul>
                    <li>Valor del vehiculo: {$especificacion->valor} $USD</li>
                    <li>Kilometros del vehiculo: {$especificacion->km} KM</li>   
                    <li>Color del vehiculo: {$especificacion->color}</li>   
                </ul>
                {if isset($smarty.session.USER_ID)}
                    <div class="edi-eli">
                        <form action="editar/{$especificacion->id_vehiculo}/especificacion" method="POST">
                            <button type="submit">editar</button>
                        </form>        
                        <form action="eliminar/{$especificacion->id_vehiculo}/especificacion" method="POST">
                            <button type="submit">eliminar</button>
                        </form>  
                    </div>     
                {/if}
                <img src="img/{$vehiculo->imagen}" class="imagen-vehiculo"> 
            {/if}
        {/foreach}
    {/foreach}
</div>
{include file="footer.tpl"}