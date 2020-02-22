?php
<!-- $servername = "www.rudeadyet.co.za";
$username = "admin1";
$password = "admin1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$email = $_Post['email'] + "@campus.ru.ac.za"

$sql = "INSERT INTO maillist (email)
VALUES ($email)"; -->

file_put_contents("emails.txt", $_GET['email'] + "\n")
?>
