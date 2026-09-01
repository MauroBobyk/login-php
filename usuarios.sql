-- La base de datos "login" ya existe en XAMPP.
-- Este script solo crea la tabla de usuarios dentro de ella.

USE login;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    clave VARCHAR(255) NOT NULL
);

-- Usuario de prueba
-- Usuario: admin  |  Contraseña: 1234
INSERT INTO usuarios (usuario, clave) VALUES
('admin', '$2y$10$k9IsZwqtJpIxGV9LvsiJEeZRQ2ZwywhiaNO26UpEsKggOUxMdPFey');
