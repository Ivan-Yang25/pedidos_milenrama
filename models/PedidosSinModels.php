<?php

require_once 'config/conexion.php';

class PedidosSinModels {

    private $db;

    public function __construct() {

        $this->db = Conexion::Connect();
    }

    public function getPedidosSin() {

        $sql = "SELECT id, fecha_entrega, nombre_cliente, pedidos, monto FROM pedidos_sin_monto ORDER BY fecha_entrega DESC;";
        $pedidos_sin = $this->db->query($sql);
        return $pedidos_sin;
    }

    public function setPedidos($fecha, $nombre, $pedido) {

        $sql = "INSERT INTO pedidos_sin_monto VALUES(NULL, '$fecha', '$nombre', '$pedido', NULL);";
        $this->db->query($sql);
    }

    public function updateMonto($id, $monto) {

        $sql = "UPDATE pedidos_sin_monto SET monto = '$monto' WHERE id = '$id';";
        $this->db->query($sql);
    }
}

?>