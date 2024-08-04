
<div class="container pedidos">

    <h2>Pedidos pendientes</h2>

    <?php if($pedidos->num_rows > 0) : ?>
        <?php while($pedido = $pedidos->fetch_assoc()) : ?>
            <table>  
                <thead>
                    <tr>
                        <th>Fecha de entrega</th>
                        <th>Nombre del cliente</th>
                        <th>Pedido</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$pedido['fecha_entrega']?></td>
                        <td><?=$pedido['nombre_cliente']?></td>
                        <td><?=$pedido['pedidos']?></td>
                        <?php if($pedido['monto'] == NULL) :?>
                            <td class="td_monto">
                                <form id="monto" action="<?=base_url?>?controller=PedidosSin&action=setMonto&id=<?=$pedido['id']?>" method="POST">
                                    <input type="text" name="monto">
                                    <input type="submit" value="$"/>
                                </form>
                            </td>
                        <?php else : ?>
                            <td><?=$pedido['monto']?></td>
                        <?php endif;?>
                    </tr>
                </tbody>
            </table>
        <?php endwhile;?>
    <?php else :?>
        <h2>No hay pedidos registrados para gestionar</h2>
    <?php endif;?>
</div>