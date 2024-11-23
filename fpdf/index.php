<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compras</title>
</head>
<body>
    <h1>Registrar Compras</h1>
    <form action="guardar.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br>
        
        <label>DNI:</label><br>
        <input type="text" name="dni" maxlength="8" required><br>
        
        <label>Producto:</label><br>
        <input type="text" name="producto" required><br>
        
        <label>Precio Unitario:</label><br>
        <input type="number" name="precio_unitario" step="0.01" required><br>
        
        <label>Cantidad:</label><br>
        <input type="number" name="cantidad" required><br>
        
        <button type="submit">Guardar Compra</button>
    </form>
    <br>
    <form action="generar_pdf.php" method="POST">
        <button type="submit">Generar PDF</button>
    </form>
</body>
</html>
