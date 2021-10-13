<?php           /* adaptado de la clase, mucho que re mirar */

require_once("app/models/model.php");

class FoodModel extends Model
{

    public function getAllFoods()
    {
        $sql = "SELECT * FROM productos";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $foods = $query->fetchAll(PDO::FETCH_OBJ);
        return $foods;
    }
/* 
    public function getAllCategories()
    {   
        $sql = "SELECT * FROM categorias";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    public function addFood($nombre, $costo, $detalle, $categoria)
    {   $sql = "INSERT INTO comidas (id_plato, nombre_plato, costo, detalle, id_categoria) VALUES (?,?,?,?,?)";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre, $costo, $detalle, $categoria]);
    }
    
    
    public function addCategorie($nombreCategoria)
    {
        $sql = "INSERT INTO `categorias` (`nombre_categoria`) VALUES (?)";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombreCategoria]);
    }
    
        public function deleteFood($id)
        {   $sql = "DELETE FROM comidas WHERE id = ?";
            $query = $this->pdo->prepare($sql);
            $query->execute([$id]);
        }
    
    public function deleteCategorie($id)
    {   $sql = "DELETE FROM categorias WHERE id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$id]);
    }

    public function updateFood($nombre, $costo, $detalle, $categoria){
        $sql = "UPDATE comidas 
        SET nombre = ?, costo = ?,detalle = ?, id_categoria = ?
        WHERE id_plato = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre, $costo, $detalle, $categoria]);
    }
    
    public function updateCategorie($id, $nombreCategoria, $sucursal){
        $sql = "UPDATE categorias SET nombre_categoria = ?, sucursal= ? 
        WHERE id_categoria = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$id, $nombreCategoria, $sucursal]);
    } */
}
?>