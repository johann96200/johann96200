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
        <th>Libellé</th>

    </tr>
        <?php

        
            echo "<tr>";
            echo "<td>" . $_GET["id"] . "</td>";
            echo "<td>" . $_GET["libellé"] . "</td>";
          
            
           
            echo "</tr>";
    
        ?> 
</table>

</body>
</html>