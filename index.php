<?php
require_once 'config/database.php';
$db = new Database();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dashboard-container {
            max-width: 900px;
        }

        .card-option {
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .card-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .icon-wrapper {
            font-size: 2rem;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container dashboard-container">
    <div class="row row-cols-1 row-cols-md-2 g-4">

        <!-- Ver estudiantes -->
        <div class="col">
            <a href="/views/students/index.php" class="text-decoration-none text-dark">
                <div class="card card-option text-center p-4">
                    <div class="icon-wrapper">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ver Estudiantes</h5>
                        <p class="card-text">Lista completa de estudiantes registrados.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Agregar estudiante -->
        <div class="col">
            <a href="/views/students/create.php" class="text-decoration-none text-dark">
                <div class="card card-option text-center p-4">
                    <div class="icon-wrapper">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Agregar Estudiante</h5>
                        <p class="card-text">Registrar un nuevo estudiante al sistema.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
