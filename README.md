# 📚 Sistema de Registro de Estudiantes

Una aplicación web moderna desarrollada en PHP puro que permite gestionar un registro completo de estudiantes con operaciones CRUD. Cuenta con una interfaz responsiva construida con Bootstrap 5 y una arquitectura MVC simplificada para facilitar el mantenimiento y escalabilidad.

## ✨ Características principales

- **Gestión completa de estudiantes**: Crear, visualizar, editar y eliminar registros
- **Interfaz moderna y responsiva**: Diseñada con Bootstrap 5 para una experiencia óptima en cualquier dispositivo
- **Arquitectura organizada**: Implementa un patrón MVC simplificado para mejor organización del código
- **Validación de datos**: Formularios con validación tanto del lado cliente como servidor
- **Base de datos optimizada**: Estructura eficiente con timestamps automáticos

## 🚀 Tecnologías utilizadas

| Tecnología | Versión | Propósito |
|------------|---------|-----------|
| PHP | 8.0+ | Backend y lógica de negocio |
| MySQL | 5.7+ | Base de datos |
| Bootstrap | 5.3 | Framework CSS responsivo |
| HTML5/CSS3 | - | Estructura y estilos |

## 📁 Estructura del proyecto

```
registro-estudiantes/
├── 📁 config/
│   └── database.php          # Configuración de conexión a BD
├── 📁 models/
│   └── Student.php           # Modelo con operaciones CRUD
├── 📁 views/
│   └── 📁 students/
│       ├── index.php         # Lista de estudiantes
│       ├── create.php        # Formulario de registro
│       ├── edit.php          # Formulario de edición
│       └── delete.php        # Confirmación de eliminación
├── 📁 assets/
│   └── 📁 css/
│       └── style.css         # Estilos personalizados
├── index.php                 # Página principal
├── README.md                 # Documentación
└── .gitignore               # Archivos ignorados por Git
```

## ⚙️ Requisitos del sistema

- **PHP**: Versión 8.0 o superior
- **MySQL**: Versión 5.7 o superior
- **Servidor web**: Apache, Nginx o servidor integrado de PHP

## 🛠️ Instalación paso a paso

### 1. Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/registro-estudiantes.git
cd registro-estudiantes
```

### 2. Configurar base de datos
Ejecuta el siguiente script SQL en tu gestor de base de datos:

```sql
-- Crear base de datos
CREATE DATABASE registro_estudiantes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar la base de datos
USE registro_estudiantes;

-- Crear tabla de estudiantes
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_name (name)
);
```

### 3. Configurar conexión a base de datos
Edita el archivo `config/database.php` con tus credenciales:

```php
<?php
class Database {
    private $host = "localhost";
    private $user = "tu_usuario_mysql";
    private $password = "tu_contraseña_mysql";
    private $dbname = "registro_estudiantes";
    // ... resto del código
}
?>
```

### 4. Ejecutar la aplicación

**Opción A: Servidor integrado de PHP (desarrollo)**
```bash
php -S localhost:8000
```


### 5. Acceder a la aplicación
Abre tu navegador y visita: `http://localhost:8000`

## 📖 Uso de la aplicación

1. **Página principal**: Visualiza la lista completa de estudiantes registrados
2. **Agregar estudiante**: Haz clic en "Nuevo Estudiante" para registrar uno nuevo
3. **Editar información**: Usa el botón "Editar" junto a cada registro
4. **Eliminar registro**: Utiliza el botón "Eliminar" con confirmación de seguridad

## 🎨 Capturas de pantalla

### Dashboard principal
![Dashboard](https://github.com/user-attachments/assets/3ebfe672-341f-4fc5-b013-1dc97a7ea347)

### Formulario de registro
![Registro](https://github.com/user-attachments/assets/c472c3a4-b900-4505-b56c-2511b12c2ffd)

### Formulario de edición
![Edición](https://github.com/user-attachments/assets/acbac221-024d-4da0-8e4b-dcb9155e1800)

### Confirmación de eliminación
![Eliminación](https://github.com/user-attachments/assets/72085200-13bd-4a19-a429-6055acc27368)

- Comunidad PHP por la documentación y recursos
- Contribuidores del proyecto

---

⭐ **¡Si este proyecto te fue útil, no olvides darle una estrella!** ⭐
