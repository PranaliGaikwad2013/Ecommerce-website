
<?
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failde : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(Username, Email, Password)values(?, ?, ?)");
    $stmt->bind_param("sss",$Username, $Email, $Password);
    $stmt->execute();
    echo"Registration Successfully..";
    $stmt->close();
    $conn->close();
}

?>