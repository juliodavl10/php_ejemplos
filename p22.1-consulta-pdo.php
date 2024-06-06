<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda</title>
</head>
<body>
    <center><h1>Resultados de Búsqueda</h1></center>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>Paciente</th>
            <th>Edad</th>
            <th>Talla</th>
            <th>Peso</th>
            <th>Tos</th>
            <th>Fiebre</th>
            <th>Disnea</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["search_query"])) {
            $search_query = $_GET["search_query"];

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "covid";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT * FROM pacientes WHERE nombres LIKE :search_query");
                $stmt->bindValue(':search_query', '%' . $search_query . '%', PDO::PARAM_STR);
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$row["nombres"]."</td>";
                    echo "<td>".$row["edad"]."</td>";
                    echo "<td>".$row["talla_m"]."</td>";
                    echo "<td>".$row["peso_kg"]."</td>";
                    echo "<td>".($row["sintoma_tos"]==1 ? "Si" : "No")."</td>";
                    echo "<td>".($row["sintoma_fiebre"]==1 ? "Si" : "No")."</td>";
                    echo "<td>".($row["sintoma_disnea"]==1 ? "Si" : "No")."</td>";
                    echo "<td> <button>Editar</button><button>Eliminar</button></td>";
                    echo "</tr>";
                }
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "<tr><td colspan='8'>No se ha realizado ninguna búsqueda.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
