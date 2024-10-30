<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execute SQL Query</title>
    <link rel="stylesheet" href="style2.css"> 
   
</head>
<body>

<div class="header">
    <h1> QUERY</h1>
</div>


<div class="container1">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <textarea id="query" name="query" rows="4" cols="50" placeholder="Type your SQL query here..."></textarea>
        <input type="submit" value="Execute">
        
    </form>

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $query = $_POST['query'];

    
    echo "<div class='results'>";

    echo "<p>Query: <code>$query</code></p>";

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checklist_db";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $result = $conn->query($query);

    
    if ($result === FALSE) {
        echo "<p>Error executing SQL query: " . $conn->error . "</p>";
    } else {
        
        if ($result->num_rows > 0) {
            echo "<h2> Results</h2>";
            echo "<table>";
            echo "<tr>";
            
            while ($field = $result->fetch_field()) {
                echo "<th>{$field->name}</th>";
            }
            echo "</tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No results found.</p>";
        }

        
        echo "<p>Query executed!</p>";
    }

    $conn->close();

    echo "</div>"; 
}
?>

            <button class="redirect-button" onclick="window.location.href='mainpg.php';">Back</button>
</div>

</body>
</html>
