<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Results</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.container1 {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    text-align: center;
    max-width: 1300px;
    margin: 1px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-top: 20px;
}

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: gray;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}


.button:hover {
    background-color: #0056b3;
    
}

.results {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    max-width: calc(100% - 40px);
    margin: 20px auto;
    overflow-x: auto;
  
}

.results table {
    width: 100%;
    border-collapse: collapse;
}

.results th, .results td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd; /* Add this line to separate columns */
    text-align: left;
    font-size: 16px;
}


.results th {
    background-color: gray;
    font-weight: bold;

}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    border-left: 1px solid #ddd;
    text-align: left;
    vertical-align: top;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;


}
.header {
           
           color:white;
           text-align: center;
           padding: 10px;
           background-color: #383434;
}
        //
    
        .highlighted-text1 {
            font-weight: bold;
        }
        .redirect-button {
            background-color: #383434; 
            color:white ; 
            padding: 5px 10px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            margin-top: 85px; 
            display: block; 
            margin-left: 95%; 
            margin-right: auto; 
        }
        .highlighted-text {
            background-color: #DDDDDD;
            color: black;
            padding: 5px 10px;
            border-radius: 1px;
        }
    </style>
</head>
<body>
<div class="header">
        <h1>Results</h1>
    </div>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "checklist_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['search'])) {
    $search = $_GET['search'];    

    
    $studentQuery = "SELECT * FROM student_info WHERE student_id LIKE '%$search%' OR student_name LIKE '%$search%' OR name_of_adviser LIKE '%$search%'";
    $resultStudent = $conn->query($studentQuery);

    
    if ($resultStudent->num_rows > 0) {
        
        echo "<table>";
        echo "<tr>";
        echo "<td class='highlighted-text'><b>Student ID</b></td>";
        echo "<td class='highlighted-text'><b>Student Name</b></td>";
        echo "<td class='highlighted-text'><b>Address</b></td>";
        echo "<td class='highlighted-text'><b>Date of Admission</b></td>";
        echo "<td class='highlighted-text'><b>Contact Number</b></td>";
        echo "<td class='highlighted-text'><b>Name of Adviser</b></td>";
        echo "</tr>";
        while ($row = $resultStudent->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['student_id'] . "</td>";
            echo "<td>" . $row['student_name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['date_of_add'] . "</td>";
            echo "<td>" . $row['contact_num'] . "</td>";
            echo "<td>" . $row['name_of_adviser'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        
        $courseQuery = "SELECT * FROM (
                            (SELECT * FROM firstyr_1stsem)
                            UNION ALL
                            (SELECT * FROM firstyr_2ndsem)
                            UNION ALL
                            (SELECT * FROM secondyr_1stsem)
                            UNION ALL
                            (SELECT * FROM secondyr_2ndsem)
                        ) AS combined_tables
                        WHERE course_code LIKE '%$search%'
                            OR course_name LIKE '%$search%'
                            OR credit_unit LIKE '%$search%'
                            OR contact_hrs LIKE '%$search%'
                            OR pre_quisite LIKE '%$search%'
                            OR semester LIKE '%$search%'
                            OR finalgrade LIKE '%$search%'
                            OR firstyr_1stsem_prof LIKE '%$search%'";
    
        $resultCourse = $conn->query($courseQuery);
    
       
        if ($resultCourse->num_rows > 0) {
            
            echo "<table>";
            echo "<tr>";
            echo "<td class='highlighted-text'><b>Student ID</b></td>";
            echo "<td class='highlighted-text'><b>Course Code</b></td>";
            echo "<td class='highlighted-text'><b>Course Name</b></td>";
            echo "<td class='highlighted-text'><b>Credit Unit</b></td>";
            echo "<td class='highlighted-text'><b>Contact Hours</b></td>";
            echo "<td class='highlighted-text'><b>Pre-requisite</b></td>";
            echo "<td class='highlighted-text'><b>Semester</b></td>";
            echo "<td class='highlighted-text'><b>Final Grade</b></td>";
            echo "<td class='highlighted-text'><b>Professor</b></td>";
            echo "</tr>";
            while ($row = $resultCourse->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['firstyr_1stsem_id'] . "</td>";
                echo "<td>" . $row['course_code'] . "</td>";
                echo "<td>" . $row['course_name'] . "</td>";
                echo "<td>" . $row['credit_unit'] . "</td>";
                echo "<td>" . $row['contact_hrs'] . "</td>";
                echo "<td>" . $row['pre_quisite'] . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $row['finalgrade'] . "</td>";
                echo "<td>" . $row['firstyr_1stsem_prof'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No results found.";
        }
    }
}

$conn->close();
?>



            </table>
        </form>
    </div>
    <button class="redirect-button" onclick="window.location.href='home.php';">Back</button>


       
       <table>
            </form>
        </div>
    </body>
    </html>
