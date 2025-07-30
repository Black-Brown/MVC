<?php
require_once __DIR__ . '/../../models/students.php';

$model = new Student();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $email = $_POST['email'];
    $fecha_inscripcion = $_POST['fecha_inscripcion'];

    $model->createStudent($name, $matricula, $carrera, $email, $fecha_inscripcion);

    header("Location: /views/students/index.php");
    exit;
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<div class="container">
    <h1 class="my-4">Crear Estudiante</h1>
    <form action="create.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula:</label>
            <input type="text" class="form-control" id="matricula" name="matricula" required>
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera:</label>
            <input type="text" class="form-control" id="carrera" name="carrera" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="fecha_inscripcion" class="form-label">Fecha de inscripción:</label>
            <input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="/views/students/index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
