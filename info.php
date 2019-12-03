<!DOCTYPE html>
<html>
<body>
 <?php
$servername = "serverip";
$username = dbuname;
$password = upass;
$dbname = dbnamee;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Title, PosterName, Content FROM comment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Title: " . $row["PosterName"]. " " . $row["Content"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
</body>
</html>
