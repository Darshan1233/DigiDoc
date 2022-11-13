<!-- <html>
    <head>
    <title>Search</title>
</head>
    <body>
    <form method="post">
        <label>Search</label>
        <input type="text" name="search">
        <input type="submit" name="submit">
    </form>
    </body>
</html> -->

<!-- <php
$Localhost='Localhost';
$root='root';
$pass='';
$db='mydb';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo'connected succesfully to database';
    $sql="insert into heritage(Name,Description) values('Ellore caves','Ellore')";
    $query=mysqli_query($con,$sql);
    if($query)
    echo'data inserted succesfully';
?>
 -->
 <?php
session_start();
include ('db.php');
 
if(isset($_POST['send_message'])) {
 
$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$Mail = $_POST['Mail'];
$feedback = $_POST['feedback'];

 
// $query_trapper = $conn->prepare('SELECT * FROM tbl_contact WHERE email = ?');
// $query_trapper->execute(array($email));
// $trapper = $query_trapper->rowCount();
 
// if ($trapper > 0) {
//  echo "<script>alert('Email already used!'); window.location='index.php'</script>";
//  echo "<script>javascript:self-history.back() </script>;";
// }elseif(strcmp($_SESSION['code_confirmation'], $_POST['code_confirmation']) != 0) {
//  echo "<script>alert('The captcha code does not match!!'); window.location='index.php'</script>";
//  echo "<script>javascript:self-history.back() </script>;";
// } else {
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$insert_query = "INSERT INTO feedback (First_name,Last_name, email, feedback)
VALUES (?, ?, ?, ?)";
 
$insert = $conn->prepare($insert_query);
$insert->execute(array($First_name,$Last_name, $email, $feedback));
 
echo "<script>alert('Feedback Succesfully submitted!'); window.location='index.php'</script>";

}
?>