{include file="header.tpl"}
<div class="centrado">
    <h3>Este vehiculo no tiene especificaciones, completelas</h3>
    <form action="completo/{$id_vehiculo}" method="post">
        <input type="text" name="color" placeholder="color">
        <input type="number" name="valor" placeholder="valor">
        <input type="number" name="km" placeholder="km">
        <button type="submit" name="completo">Completar especificaciones</button>
    </form>
</div>
{include file="footer.tpl"}