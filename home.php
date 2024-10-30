<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "checklist_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function insertQueryData($conn, $student_id, $student_name, $address, $date_of_add, $contact_num, $name_of_adviser) {
    $sql = "INSERT INTO query_table (student_id, student_name, address, date_of_add, contact_num, name_of_adviser) 
            VALUES ('$student_id', '$student_name', '$address', '$date_of_add', '$contact_num', '$name_of_adviser')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $student_name = $_POST["student_name"];
    $address = $_POST["address"];
    $date_of_add = $_POST["date_of_add"];
    $contact_num = $_POST["contact_num"];
    $name_of_adviser = $_POST["name_of_adviser"];

    $result = insertQueryData($conn, $student_id, $student_name, $address, $date_of_add, $contact_num, $name_of_adviser);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        header("Location: process.php");
        exit();
    } else {
        echo "Error: " . $result;
    }
}

$conn->close();
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
       
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $query = $_POST['query'];

   
    echo "<h2>Executing SQL Query</h2>";
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
            echo "<h2>Query Results</h2>";
            echo "<table border='1'>";
           
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
    }

  
    $conn->close();
}
?>


</body>
</html>

       
        
    </head>
    <body>
        
    <header>
    <h1>CHECKLIST OF COURSES</h1>
    <nav>
    <a href="mainpg.php">Home</a>
    <a href="process.php">Query</a>
    
  
   

</nav>
   
<div class="search-box">
    <form id="searchForm" action="results.php" method="GET">
        <input type="text" name="search" placeholder="Search...">
        <input type="submit" value="Search">
    </form>
</div>


<script>
    function redirectToProcess() {
        document.getElementById("searchForm").action = "process.php";
        document.getElementById("searchForm").submit();
    }
</script>

</div>

    </header>
           
        <form action="process_form.php" method="post">
            <table>
            
            <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checklist_db";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);;


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['query'])) {
    $query = $_GET['query'];

  
    $result = $conn->query($query);

    
    if ($result === FALSE) {
        echo "Error executing query: " . $conn->error;
    } else {
        
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
               
                foreach ($row as $key => $value) {
                    echo "$key: $value<br>";
                }
                echo "<br>";
            }
        } else {
            echo "0 results";
        }
    }
}


$conn->close();
?>


<div class="container1">
    
       
       <table>

<tr>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checklist_db";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM student_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div>';
        echo '<table>';
       
        echo '<tr>';
        echo '<td class="highlighted-text"><b>Student ID </b></td>';
        echo '<td class="highlighted-text"><b>Student Name </b></td>';
        echo '<td class="highlighted-text"><b>Address </b></td>';
        echo '<td class="highlighted-text"><b>Date of Admission: </b></td>';
        echo '<td class="highlighted-text"><b>Contact Number </b></td>';
        echo '<td class="highlighted-text"><b>Name of Adviser </b></td>';
        echo '</tr>';

        
        while ($row = $result->fetch_assoc()) {
            
            echo '<tr>';
            echo '<td>' . $row["student_id"] . '</td>';
            echo '<td>' . $row["student_name"] . '</td>';
            echo '<td>' . $row["address"] . '</td>';
            echo '<td>' . $row["date_of_add"] . '</td>';
            echo '<td>' . $row["contact_num"] . '</td>';
            echo '<td>' . $row["name_of_adviser"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo "0 results";
    }

    $conn->close();
?>
<div>


   <div class="container1">
       
       <table>
    
    </div>
    <th colspan="10" class="first-year-header">First Year</th>
       
    </div>
</div>

</tr>

    <tr>
<th colspan="10" style="text-align: left;">First Semester</th>
</tr>
<tr>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checklist_db";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM firstyr_1stsem";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div>';
        echo '<table>';
        
        echo '<tr>';
        echo '<td class="highlighted-text"><b>Student ID </b></td>';
        echo '<td class="highlighted-text"><b>Course Code </b></td>';
        echo '<td class="highlighted-text"><b>Course Name </b></td>';
        echo '<td class="highlighted-text"><b>Credit Unit </b></td>';
        echo '<td class="highlighted-text"><b>Contact Hours </b></td>';
        echo '<td class="highlighted-text"><b>Pre-requisite </b></td>';
        echo '<td class="highlighted-text"><b>Semester </b></td>';
        echo '<td class="highlighted-text"><b>Final Grade </b></td>';
        echo '<td class="highlighted-text"><b>Prof </b></td>';
        echo '</tr>';

       
        while ($row = $result->fetch_assoc()) {
           
            echo '<tr>';
            echo '<td>' . $row["firstyr_1stsem_id"] . '</td>';
            echo '<td>' . $row["course_code"] . '</td>';
            echo '<td>' . $row["course_name"] . '</td>';
            echo '<td>' . $row["credit_unit"] . '</td>';
            echo '<td>' . $row["contact_hrs"] . '</td>';
            echo '<td>' . $row["pre_quisite"] . '</td>';
            echo '<td>' . $row["semester"] . '</td>';
            echo '<td>' . $row["finalgrade"] . '</td>';
            echo '<td>' . $row["firstyr_1stsem_prof"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo "0 results";
    }

    $conn->close();
?>

<div class="container1">
       
       <table>

    <tr>
<th colspan="10" style="text-align: left;">Second Semester</th>
</tr>
<tr>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checklist_db";
    
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM firstyr_2ndsem";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div>';
        echo '<table>';
        // First row for labels (names)
        echo '<tr>';
        echo '<td class="highlighted-text"><b>Student ID </b></td>';
        echo '<td class="highlighted-text"><b>Course Code </b></td>';
        echo '<td class="highlighted-text"><b>Course Name </b></td>';
        echo '<td class="highlighted-text"><b>Credit Unit </b></td>';
        echo '<td class="highlighted-text"><b>Contact Hours </b></td>';
        echo '<td class="highlighted-text"><b>Pre-requisite </b></td>';
        echo '<td class="highlighted-text"><b>Semester </b></td>';
        echo '<td class="highlighted-text"><b>Final Grade </b></td>';
        echo '<td class="highlighted-text"><b>Prof </b></td>';
        echo '</tr>';

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Second row for data
            echo '<tr>';
            echo '<td>' . $row["firstyr_2ndsem_id"] . '</td>';
            echo '<td>' . $row["course_code"] . '</td>';
            echo '<td>' . $row["course_name"] . '</td>';
            echo '<td>' . $row["credit_unit"] . '</td>';
            echo '<td>' . $row["contact_hrs"] . '</td>';
            echo '<td>' . $row["pre_quisite"] . '</td>';
            echo '<td>' . $row["semester"] . '</td>';
            echo '<td>' . $row["finalgrade"] . '</td>';
            echo '<td>' . $row["firstyr_2ndsem_prof"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo "0 results";
    }

    $conn->close();
?>

<div class="container1">
       
       <table>

       <th colspan="10" class="first-year-header">Second Year</th>
</tr>


    <tr>
<th colspan="10" style="text-align: left;">First Semester</th>
</tr>
<tr>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checklist_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM secondyr_1stsem";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div>';
        echo '<table>';
        // First row for labels (names)
        echo '<tr>';
        echo '<td class="highlighted-text"><b>Student ID </b></td>';
        echo '<td class="highlighted-text"><b>Course Code </b></td>';
        echo '<td class="highlighted-text"><b>Course Name </b></td>';
        echo '<td class="highlighted-text"><b>Credit Unit </b></td>';
        echo '<td class="highlighted-text"><b>Contact Hours </b></td>';
        echo '<td class="highlighted-text"><b>Pre-requisite </b></td>';
        echo '<td class="highlighted-text"><b>Semester </b></td>';
        echo '<td class="highlighted-text"><b>Final Grade </b></td>';
        echo '<td class="highlighted-text"><b>Prof </b></td>';
        echo '</tr>';

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Second row for data
            echo '<tr>';
            echo '<td>' . $row["secondyr_1stsem_id"] . '</td>';
            echo '<td>' . $row["course_code"] . '</td>';
            echo '<td>' . $row["course_name"] . '</td>';
            echo '<td>' . $row["credit_unit"] . '</td>';
            echo '<td>' . $row["contact_hrs"] . '</td>';
            echo '<td>' . $row["pre_quisite"] . '</td>';
            echo '<td>' . $row["semester"] . '</td>';
            echo '<td>' . $row["finalgrade"] . '</td>';
            echo '<td>' . $row["secondyr_1stsem_prof"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo "0 results";
    }

    $conn->close();
?>
<div class="container1">
       
       <table>

    <tr>
<th colspan="10" style="text-align: left;">Second Semester</th>
</tr>
<tr>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checklist_db";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM secondyr_2ndsem";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div>';
        echo '<table>';
        
        echo '<tr>';
        echo '<td class="highlighted-text"><b>Student ID </b></td>';
        echo '<td class="highlighted-text"><b>Course Code </b></td>';
        echo '<td class="highlighted-text"><b>Course Name </b></td>';
        echo '<td class="highlighted-text"><b>Credit Unit </b></td>';
        echo '<td class="highlighted-text"><b>Contact Hours </b></td>';
        echo '<td class="highlighted-text"><b>Pre-requisite </b></td>';
        echo '<td class="highlighted-text"><b>Semester </b></td>';
        echo '<td class="highlighted-text"><b>Final Grade </b></td>';
        echo '<td class="highlighted-text"><b>Prof </b></td>';
        echo '</tr>';

        
        while ($row = $result->fetch_assoc()) {
           
            echo '<tr>';
            echo '<td>' . $row["secondyr_2ndsem_id"] . '</td>';
            echo '<td>' . $row["course_code"] . '</td>';
            echo '<td>' . $row["course_name"] . '</td>';
            echo '<td>' . $row["credit_unit"] . '</td>';
            echo '<td>' . $row["contact_hrs"] . '</td>';
            echo '<td>' . $row["pre_quisite"] . '</td>';
            echo '<td>' . $row["semester"] . '</td>';
            echo '<td>' . $row["finalgrade"] . '</td>';
            echo '<td>' . $row["secondyr_2ndsem_prof"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo "0 results";
    }

 
                $conn->close();
                ?>
            </table>
        </form>
    </div>


       
       <table>
            </form>
        </div>
    </body>
    </html>
