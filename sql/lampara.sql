CREATE DATABASE IF NOT EXISTS lampara
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE lampara;

CREATE TABLE lampara (
  id INT PRIMARY KEY,
  encendida TINYINT(1) NOT NULL DEFAULT 0,
  actualizado_en DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO lampara (id, encendida) VALUES (1, 0);