<?php
class ProductoDAO {
    private $con_db;

    // Constructor
    public function __construct(){
        $this->con_db = Database::connect();
    }

    // Método para insertar un nuevo producto
    public function insertarProducto($nombre, $precio, $stock) {
        $query = "INSERT INTO producto (nombre, precio, stock) VALUES (:nombre, :precio, :stock)";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true; // Producto insertado correctamente
        } else {
            return false; // Error al insertar producto
        }
    }

    // Método para obtener todos los productos
    public function getAllProductos() {
        $query = "SELECT * FROM producto";
        $stmt = $this->con_db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un producto por su ID y verlo. 
    public function getProductoById($idProducto) {
        $query = "SELECT * FROM producto WHERE id_producto = :idProducto";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);;
    }

    // Método para actualizar un producto por su ID
    public function actualizarProductoPorId($idProducto, $nombre, $precio, $stock) {
        $query = "UPDATE producto SET nombre = :nombre, precio = :precio, stock = :stock WHERE id_producto = :idProducto";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
        $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true; // Producto actualizado correctamente
        } else {
            return false; // Error al actualizar producto
        }
    }

    // Método para eliminar un producto por su ID
    public function eliminarProductoPorId($idProducto) {
        $query = "DELETE FROM producto WHERE id_producto = :idProducto";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true; // Producto eliminado correctamente
        } else {
            return false; // Error al eliminar producto
            }
        } 
    
}
?>