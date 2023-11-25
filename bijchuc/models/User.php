<?php

class User
{
    public function db()
    {
        $servername = "localhost";
        $database = "prueba";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
    public function getAllUsers()
    {
        $conn = $this->db();
        $sql = "SELECT * FROM `proyectos`";
        $result = mysqli_query($conn, $sql);

        $proyectos = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $proyectos[] = $row;
            }
            http_response_code(200);
            echo json_encode($proyectos);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Error al consultar la base de datos"]);
        }
    }
    public function getId()
    {
        $id = $_GET['id'];
        $utilidad = $_GET['utilidad'] / 100;
        $conn = $this->db();
        $sql = "SELECT * FROM `proyectos` where id = $id";
        $result = mysqli_query($conn, $sql);

        $proyecto = [];
        $row = mysqli_fetch_assoc($result);
        $proyecto[0] = $row['id'];
        $proyecto[1] = $row['nombre'];
        $proyecto[2] = $row['fecha'];
        $proyecto[3] = $row['costo'];
        $proyecto[4] = $row['encargado'];
        $proyecto[5] = ($row['costo'] * $utilidad);
        return $proyecto;
    }
}
