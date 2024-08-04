<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css" type="text/css" />
    <link rel="icon" type="image/x-icon" href="public/assets/icono.jpeg" />
    <title>Pedidos Milenrama</title>
</head>
<body>
    <header>
        <div>
            <img src="public/assets/icono.jpeg" alt="icono"/>
            <h1>Pedidos de Milenrama</h1>
        </div>
        <ul>
            <a href="<?=base_url?>?controller=PedidosSin&action=altaPedidos"><li>Ingresar un pedido</li></a>
            <a href="<?=base_url?>?controller=PedidosSin&action=obtenerPedidos"><li>Pedidos pendientes</li></a>
        </ul>
    </header>