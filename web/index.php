<?php  

        $db = getenv('POSTGRES_DB', true)?:getenv('POSTGRES_DB');
        $dns = 'pgsql:host=postgres-service.testing.svc.cluster.local;port=5432;dbname='.$db;
        //$dns = 'pgsql:host=10.245.131.123;port=5432;dbname='.$db;        
        $user = getenv('POSTGRES_USER', true)?:getenv('POSTGRES_USER');
        $pass = getenv('POSTGRES_PASSWORD', true)?:getenv('POSTGRES_PASSWORD');

        //Driver para la conexión PHP Postgres
        $config=[
                'dns' => $dns,
                'username' => $user,
                'password' => $pass,
        ];

        //Apertura de la conexión
        try{
                $conn = new PDO( $config['dns'], $config['username'], $config['password'] );
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
                echo "Conexión rechazada. " . $e->getMessage();
        }

        //query a la tabla articulos
        $stmt = $conn->prepare("Select * from articulos");
        $stmt->execute();
        //$data = $stm->fetchAll( PDO::FETCH_ASSOC );
        
        echo "<table borde='2'>";
                echo "<tr>";
                echo "<th>Código de articulo</th>";
                echo "<th>Descripción</th>";
                echo "<th>Cantidad</th>";
                echo "<th>Precio unitario</th>";
                echo "<th>Subtotal</th>";
                echo "</tr>";

                $total = 0;
                // Bucle while
                while ($columna = $stmt->fetch())
                {
                        echo "<tr>";
                        $cantidad = $columna['precio'] * $columna['cantidad'];
                        echo    "<td>" . $columna['codigo'] . "</td>
                                <td>" . $columna['descripcion'] . "</td>
                                <td>" . $columna['cantidad'] . "</td>
                                <td>" . $columna['precio'] . "</td>
                                <td>" . $cantidad . "</td>";
                                $total += $cantidad;
                        echo "</tr>";
                }

        echo "</table>"; // end table

        echo "<br>";
        echo "<table borde ='2'>";
                echo "<tr>";
                echo "<th>Total $</th>";
                echo "<th>$total</th>";
                echo "</tr>";
        echo "</table>";
                
        //Cerrar la conexión a la DB
        $conn = null;
?>