<?php
require_once 'config/database.php';

class Student {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Obtener todos los estudiantes
    public function getAllStudents() {
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Obtener un estudiante por ID
    public function getStudentById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    // Crear un nuevo estudiante
    public function createStudent($name, $matricula, $carrera, $email, $fecha_inscripcion) {
        $stmt = $this->conn->prepare("INSERT INTO students (name, matricula, carrera, email, fecha_inscripcion) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $matricula, $carrera, $email, $fecha_inscripcion);
        return $stmt->execute();
    }

    // Actualizar un estudiante existente
    public function updateStudent($id, $name, $matricula, $carrera, $email, $fecha_inscripcion) {
        $stmt = $this->conn->prepare("UPDATE students SET name = ?, matricula = ?, carrera = ?, email = ?, fecha_inscripcion = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $name, $matricula, $carrera, $email, $fecha_inscripcion, $id);
        return $stmt->execute();
    }

    // Eliminar un estudiante por ID
    public function deleteStudent($id) {
        $stmt = $this->conn->prepare("DELETE FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // Buscar estudiantes por nombre o matrícula
    public function searchStudents($term) {
        $term = "%$term%";
        $stmt = $this->conn->prepare("SELECT * FROM students WHERE name LIKE ? OR matricula LIKE ?");
        $stmt->bind_param("ss", $term, $term);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function __destruct() {
        $this->conn->close();
    }
}
