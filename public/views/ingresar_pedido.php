
<div class="container">

    <form action="<?=base_url?>?controller=PedidosSin&action=setPedidos" method="POST">

        <h2>Ingresar un pedido</h2>

        <label for="fecha">Fecha de entrega</label>
        <input type="date" name="fecha" />

        <label for="nombre">Nombre del cliente</label>
        <input type="text" name="nombre" placeholder="Nombre del cliente..."/>

        <label for="pedidos">Pedidos</label>
        <textarea name="pedidos" placeholder="Ingrese el pedido"></textarea>

        <input type="submit" value="Guardar" />
    </form>

</div>