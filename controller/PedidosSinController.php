<?php

require_once 'models/PedidosSinModels.php';

class PedidosSinController {

    public function altaPedidos() {

        require_once 'public/views/ingresar_pedido.php';
    }

    public function obtenerPedidos() {
        
        $data = new PedidosSinModels();
        $pedidos = $data->getPedidosSin();

        require_once 'public/views/pedidos_sin_monto.php';
    }

    public function setPedidos() {

        $data = new PedidosSinModels();

        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $pedido = isset($_POST['pedidos']) ? $_POST['pedidos'] : false;

        $estado = array();

        if(empty($fecha)) {

            $estado['fecha'] = 'Ingrese la fecha de entrega';
        }

        if(empty($nombre)) {

            $estado['nombre'] = 'Ingrese el nombre del cliente';
        }

        if(empty($pedido)) {

            $estado['pedido'] = 'Ingrese el pedido para poder agendar';
        }

        if(count($estado) == 0) {

            $data->setPedidos($fecha, $nombre, $pedido);
            $estado['exito'] = 'Se registró el pedido con éxito!';
            $_SESSION['estado'] = $estado;
            header('Location:'.base_url.'?controller=PedidosSin&action=obtenerPedidos');
            exit();

        } else {

            $_SESSION['estado'] = $estado;
            header('Location:'.base_url.'?controller=PedidosSin&action=obtenerPedidos');
            exit();
        }
    }

    public function setMonto() {

        if($_GET['id']) {

            $data = new PedidosSinModels();
            $id = isset($_GET['id']) ? $_GET['id'] : false;
            $monto = isset($_POST['monto']) ? $_POST['monto']: false;

            $data->updateMonto($id, $monto);

            header('Location:'.base_url.'?controller=PedidosSin&action=obtenerPedidos');
            exit();
        }
    }

};