<?php
require_once __DIR__ . '/../../models/students.php';

$model = new Student();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $email = $_POST['email'];
    $fecha_inscripcion = $_POST['fecha_inscripcion'];

    $model->updateStudent($id, $name, $matricula, $carrera, $email, $fecha_inscripcion);

    header("Location: views/students/index.php");
    exit;
}

if (isset($_GET['id'])) {
    $student = $model->getStudentById($_GET['id']);
    if (!$student) {
        echo "Estudiante no encontrado.";
        exit;
    }
} else {
    echo "ID de estudiante no especificado.";
    exit;
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<div class="container">
    <h1 class="my-4">Editar Estudiante</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $student['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula:</label>
            <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $student['matricula']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera:</label>
            <input type="text" class="form-control" id="carrera" name="carrera" value="<?php echo $student['carrera']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $student['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="fecha_inscripcion" class="form-label">Fecha de inscripción:</label>
            <input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion" value="<?php echo $student['fecha_inscripcion']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="/views/students/index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
