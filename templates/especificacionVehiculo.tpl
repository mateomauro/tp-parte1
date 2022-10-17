{include file="header.tpl"}
<div class="centrado">
    {if $especificacion}
        <h5>Vehiculo: {$vehiculo->vehiculo}</h5>
        <h6>Especificaciones</h6>
        <ul>
            <li>Valor del vehiculo: {$especificacion->valor} $USD</li>
            <li>Kilometros del vehiculo: {$especificacion->km} KM</li>
            <li>Color del vehiculo: {$especificacion->color}</li>
        </ul>
        {if isset($smarty.session.IS_LOGGED)}
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
    {else}
        <h4>Este vehiculo no tiene especificaciones</h4>    
    {/if}
</div>
{include file="footer.tpl"}