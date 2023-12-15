<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert PHP</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:black;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color:lightpink;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      margin: 5px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
    <form action="form.php" method="post">
        <label for="">UserId</label>
        <input type="number" name="userid"><br>
        <label for="">Username</label>
        <input type="text" name="username"><br>
        <label for="">Password</label>
        <input type="password" name="password"><br>
        <label for="">Email</label>
        <input type="email" name="email">
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>

<?php 

include('db.php');

if (isset($_POST['submit'])) {
    $fuserid = $_POST['userid'];
$fusername = $_POST['username'];
$fpassword = $_POST['password'];
$femail = $_POST['email'];

$insertQuery = "INSERT into userslst(userid, username, password, email) VALUES($fuserid,'$fusername','$fpassword','$femail');";
// echo $insertQuery;
if ($conn->query($insertQuery)  === TRUE ) {
    echo "";
} else {
   echo "Error Occured" . $conn->Error ;
}
}

$selectQuery = "SELECT * FROM userslst";
$result = $conn->query($selectQuery);

//if ($result->num_rows > 0) {
  // output data of each row
  //while($row = $result->fetch_assoc()) {
 //   echo '<br>'.$row["userid"]. $row["username"]. $row["password"] . $row["email"] . '<br>' ;
  //}
//} else {
 // echo "No Data in Table";
//}

$conn->close();

?>
