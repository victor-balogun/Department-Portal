<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            padding: 10px;
        }
    </style>
</head>

<body>
     <table border="1">
        <tr>
            <th>
                course
            </th>
            <th>grade</th>
        </tr>

        <tbody>
            <?php
                $db = mysqli_connect("localhost","root","","csc310project");
                $query = mysqli_query($db, "SELECT * FROM result");
                while ($row = mysqli_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>",$row['course'], "</td>";
                    echo "<td>",$row['grade'], "</td>";
                }
            ?>    

        </tbody>
    </table>
</body>
</html>