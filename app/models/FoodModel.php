<?php           

require_once("app/models/model.php");

class FoodModel extends Model
{

    public function getAllFoods()
    {
        $sql = "SELECT * FROM productos JOIN categoria ON productos.id_categoria = categoria.id_categoria";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $foods = $query->fetchAll(PDO::FETCH_OBJ);
        return $foods;
    }


    public function addFood($nombre, $precio, $id_categoria, $descripcion)
    {   $sql = "INSERT INTO productos (nombre_plato, precio, detalle, id_categoria) VALUES (?,?,?,?)";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre, $precio, $descripcion, $id_categoria]);
    }
    
    
    public function addCategorie($nombre, $sucursal)
    {
        $sql = "INSERT INTO `categoria` (`nombre_categoria`, sucursal) VALUES (?)";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre, $sucursal]);
    }
    
        public function deleteFood($id)
        {   $sql = "DELETE FROM productos WHERE id = ?";
            $query = $this->pdo->prepare($sql);
            $query->execute([$id]);
        }
    
    public function deleteCategorie($id)
    {   $sql = "DELETE FROM categoria WHERE id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$id]);
    }

    public function updateFood($nombre, $precio, $id_categoria, $descripcion){
        $sql = "UPDATE productos 
        SET nombre = ?, precio = ?,detalle = ?, id_categoria = ?
        WHERE id_plato = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre, $precio, $id_categoria, $descripcion]);
    }
    
    public function updateCategorie($nombre, $sucursal){
        $sql = "UPDATE categoria SET nombre_categoria = ?, sucursal= ? 
        WHERE id_categoria = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre, $sucursal]);
    } 
    
    
    public function getAllCategories()
    {   
        $sql = "SELECT * FROM categoria";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    } 
}
