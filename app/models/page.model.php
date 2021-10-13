<?php           /* adaptado de la clase, mucho que re mirar */

require_once("app\models\model.php");

class DeliveryModel extends Model
{

    public function gettAllFoods()
    {
        $sql = "SELECT * FROM comidas";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $foods = $query->fetchAll(PDO::FETCH_OBJ);
        return $foods;
    }

    public function getAllCategories()
    {   
        $sql = "SELECT * FROM categorias";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    public function addFood($nombre, $categoria, $ingredientes, $precio)
    {   $sql = "INSERT INTO comidas (nombre, id_categoria_fk, ingredientes,precio) VALUES (?,?,?,?)";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre, $categoria, $ingredientes, $precio]);
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

    public function updateFood($eleccionUsuario, $nombre, $categoria, $descripcion, $precio){
        $sql = "UPDATE comidas 
        SET nombre = ? ,id_categoria_fk = ?, ingredientes = ? , precio = ?
        WHERE comidas.id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombre,$categoria,$descripcion,$precio,$eleccionUsuario]);
    }
    
    public function updateCategorie($id, $nombreCategoria){
        $sql = "UPDATE categorias SET nombre_categoria = ? WHERE categorias.id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$nombreCategoria,$id]);
    }
}
?>