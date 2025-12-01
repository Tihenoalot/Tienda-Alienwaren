<?php
class Pedido {
    public $id;
    public $cliente;
    public $productos = [];
    public $total = 0;

    public function __construct($id, $cliente) {
        $this->id = $id;
        $this->cliente = $cliente;
    }

    public function agregarProducto($nombre, $precio, $cantidad=1) {
        $this->productos[] = compact('nombre','precio','cantidad');
        $this->total += ($precio * $cantidad);
    }
}
