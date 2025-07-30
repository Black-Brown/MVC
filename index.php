<?php
require_once 'config/database.php';
$db = new Database();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .card-link {
        text-decoration: none;
        color: #000;
    }

    .card:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transform: scale(1.02);
        transition: all 0.2s ease-in-out;
    }

    .centered-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    </style>

</head>

<body>

    <div class="container centered-container">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 mx-auto">
                <a href="/views/students/index.php" class="card-link">
                    <div class="card text-center p-2">
                        <div class="card-body">
                            <h5 class="card-title">View Students</h5>
                            <p class="card-text">Ver la lista completa de estudiantes registrados.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>