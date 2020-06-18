<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>EMPLOYEE LIST</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
h1{
text-align:center;
color:brown;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table{
    width: 100%;    
    background-color: #f1f1c1;
}
</style>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BUSINESS MITHRA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="loggedin1.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="display.php">display items</a></li>
            <li><a href="addemp.php">add employee</a></li>
            <li><a href="dispemp.php">display employee</a></li>
<li><a href="statistics.php">transaction statistics</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
   <li><a href="profile.php"><span class="glyphicon glyphicon-user""></span> profile</a></li> 
<li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
one idea i used was if empty form is submitted delete records */
$link = mysqli_connect("localhost", "id13173614_root", "q[y7H$5Dc#ef/B71", "id13173614_customers");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$custid=$_SESSION["mobile"];
$sql3 = "select * from employee where custid='$custid'";
$result2 = $link->query($sql3);
if (  mysqli_num_rows($result2) > 0){
echo "<h1>EMPLOYEE LIST</h1>";
echo "<table>";
echo "<tr>";
echo"<th>EMPLOYEE FIRST NAME</th>";
echo "<th>EMPLOYEE LAST NAME</th>";
echo "<th>EMAIL</th>";
echo "<th>MOBILE</th>";
echo "<th>SALARY</th>";
echo "<th>ADDRESS</th>";
echo "</tr>";
        while($row = $result2->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo $row["fname"];
echo "</td>";
echo "<td>";
echo $row["lname"];
echo "</td>";
echo "<td>";
echo $row["email"];
echo "</td>";
echo "<td>";
echo $row["mobile"];
echo "</td>";
echo "<td>";
echo $row["salary"];
echo "</td>";
echo "<td>";
echo $row["about"];
echo "</td>";
echo "</tr>";
}
}
 else{
   echo "<h2>NO RECORDS FOUND</h2>";
} 

$link->close();
// Close connection
?>
<br/><br/>

</html>
