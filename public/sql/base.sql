CREATE TABLE pedidos_sin_monto (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fecha_entrega DATE,
    nombre_cliente VARCHAR(50),
    pedidos VARCHAR(255)
);

CREATE TABLE pedidos_con_monto (
    id_pedido   INT,
    monto       INT,

    FOREIGN KEY(id_pedido) REFERENCES pedidos_sin_monto(id)
);