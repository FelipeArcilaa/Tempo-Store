<?php
// include_once '../modelo/conexion.php';
// include_once '../modelo/producto.php';

class controladorProducto{
    private $conexion;

    function __construct(){
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /* Listar los datos de personas (Read) */
    function listar(){
        try {
            $sql = "select * from producto";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);
            $resultado = [];
            while($row = $ps->fetch(PDO::FETCH_OBJ)){
                $producto = new producto(
                    $row->pro_id,
                    $row->pro_nombre,
                    $row->pro_descripcion,
                    $row->pro_unidades,
                    $row->pro_precio
                );
                // $persona->setPerId($row->per_id);
                // $persona->setPerNombre($row->per_nombre);
                // $persona->setPerApellido($row->per_apellido);
                // $persona->setPerFechaNacimiento($row->per_fecha_nacimiento);
                // $persona->setPerSalario($row->per_salario);
                array_push($resultado,$producto);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo "Falló la conexión " . $e->getMessage();
        }

        return $resultado;
    }

    function crear($producto){
        try{
            $resultado = [];
            $sql = "insert into producto values (?,?,?,?,?)";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $producto->getProId(),
                $producto->getProNombre(),
                $producto->getProDescripcion(),
                $producto->getProUnidades(),
                $producto->getProPrecio()
            ));
            if($ps->rowCount() > 0){
                $mensaje = "Se creó el producto correctamente";
                $type = "success";
            }else{
                $mensaje = "No se pudo crear el producto";
                $type = "error";
            }
            $this->conexion = null;
        }catch(PDOException $e){
            $mensaje = "Error al crear el producto " .$e->getMessage(); 
            $type = "error";
        }
        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];
        return $resultado;
    }
}