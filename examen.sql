SELECT *
FROM usuarios
WHERE fecha_registro > '2025-01-01';


INSERT INTO usuarios (nombre, email, fecha_registro)
VALUES ('juan perez', 'juan.perez@email.com', '2025-08-28');


UPDATE usuarios
SET email = 'nuevo.email@email.com'
WHERE id = 5;


SELECT *
FROM pedidos
ORDER BY monto DESC;


SELECT
  u.nombre,
  p.producto,
  p.monto
FROM usuarios u
JOIN pedidos p
  ON u.id = p.usuario_id;