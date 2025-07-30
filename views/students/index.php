<?php
require_once __DIR__ . '/../../models/students.php';

$model = new Student();
$students = $model->getAllStudents();

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
        <h1>Student List</h1>
        <a href="/views/students/create.php" class="btn btn-primary">Add Student</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Matricula</th>
                <th>Carrera</th>
                <th>Email</th>
                <th>Fecha de Inscripcion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['matricula']; ?></td>
                <td><?php echo $student['carrera']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['fecha_inscripcion']; ?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $student['id']; ?>">Editar</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $student['id']; ?>"
                        onclick="return confirm('¿Estás seguro de eliminar este producto?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>