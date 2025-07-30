<?php
require_once __DIR__ . '/../../models/students.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $model = new Student();
    $result = $model->deleteStudent($id);

    if ($result) {
        header("Location: /views/students/index.php");
        exit;
    } else {
        echo "Error al eliminar el estudiante.";
    }
} else {
    echo "ID de estudiante no especificado.";
}
