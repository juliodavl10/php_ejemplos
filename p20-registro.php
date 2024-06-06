<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de registro de paciente</title>
</head>
<body>
    <h1>registro de paciente </h1>
    <form id="formulario" action="p21-post.php" method="post">
    <label for="nombre">Nombres:</label>
    <input type="text" id="nombre" name="nombre" required><br>
    <label for= "apellido">Apellidos:</label>
    <input type="text" id="apellido" name="apellido" required><br>
    <label for="edad">Edad: </label>
    <input type="text" id="edad" name="edad" required /><br>
    <label for="talla">Talla(cm):</label>
    <input type="text" id="talla" name="talla" required /><br>
    <label for="peso">Peso (kg): </label>
    <input type="text" id="peso" name="peso"><br>
    <h2><u>Sintomas</u></h2>
    <input type="checkbox" name="fiebre" id="fiebre">
    <label for="fiebre">Fiebre</label><br>
    <input type="checkbox" name="disnea" id="disnea">
    <label for="disnea">Disnea</label><br>
    <input type="checkbox" id dolor_muscular name ="dolor_muscular">
    <label for="dolor_muscular">Dolor muscular</label><br>
    <input type="checkbox" id="gripe" name="gripe">
    <label for="gripe">Gripe</label><br>
    <input type="checkbox" id="presion alta" name="Presion alto">
    <label for="Presion alta"> Presion Altac</label><br>
    <input type="checkbox" id="Fatiga" name="Fatiga">
    <label for="Fatiga">Fatiga</label><br>
    <input type="checkbox" id="Garraspera" name ="Garraspera">
    <label for="Garraspera">Garraspera</label><br>

    <label for="grupo_sanguineo">grupo_sanguineo</label>
    <select type="combobox" id = "grupo_sanguineo" name ="grupo_sanguineo">
     <option value="1">A+</option>
     <option value="2">O+</option>
     <option value="3">B+</option>
     <option value="4">AB+</option>
     <option value="5">A-</option>
     <option value="6">O-</option>
     <option value="7">B-</option>
     <option value="8">AB-</option>
    </select><br>

    <label for="fecha">**Fecha de vacunacion:**</label>
    <input type="date" id="fecha" name="fecha">
    <div class="Botones">
    <br>
        <button type="submit">Guardar</button>
    <button>Cancelar</button>
    </div>

</body>
</html>