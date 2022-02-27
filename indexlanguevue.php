<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr> 
        <th>id</th>
        <th>libellé</th>
    </tr>
        <?php

        foreach ($_GET as $key => $unePersonne) {
            echo "<tr>";
            echo "<td>" . $unePersonne["id"] . "</td>";
            echo "<td>" . $unePersonne["libellé"] . "</td>";
           
            echo'<td><a href="showlanguecontroller.php?id='.$unePersonne['id'].'">Show</a> <a href="deleteLangueController.php?id='.$unePersonne['id'].'">delete</a></td>';
      
           
            echo "</tr>";
        }

        ?> 
</table>

</body>
</html>