<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <form action="formulario_1.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <br>
        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <!-- Seleccion multiple -->
        <br><br>
        <label for="asignaturas">Asignaturas</label>
        <select id="asignaturas" name="asignaturas[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion-1">
            <input type="checkbox" value="manzana" id="opcion-1" name="fruta">
            Manzanas
        </label>
        <br><br>
        <!-- Seleccion multiple -->
        <label for="opcion-2">
            <input type="checkbox" value="Fresa" id="opcion-2" name="frutas[]">
            Fresa
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="Uva" id="opcion-3" name="frutas[]">
            Uva
        </label>
        <label for="opcion-4">
            <input type="checkbox" value="Pera" id="opcion-4" name="frutas[]">
            Pera
        </label>
        <label for="opcion-5">
            <input type="checkbox" value="Naranja" id="opcion-5" name="frutas[]">
            Naranja
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>