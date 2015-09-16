<?php

  /*
   * To do this manually, open mysql and choose database with
   * USE <databasename>;
   * then copy/paste from $table_create below
   */
print "<h1>hello world</h1>";

$user_name = "root";
$password = "";
$database = "mts_reg";
$server = "127.0.0.1";

$conn = mysqli_connect($server, $user_name, $password, $database);


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ($conn) {
print "Connected!<br/>";


$table_create = "
CREATE TABLE registrants (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date DATE,
edit_key VARCHAR(10),
name VARCHAR(200),
email VARCHAR(100),
affiliation VARCHAR(200),
webpage VARCHAR(400),
request_a TINYINT(1),
request_b TINYINT(1),
request_c TINYINT(1),
comment TEXT
);
";


// commands to create table are here
// uncomment to activate

/*
// create table
if (mysqli_query($conn,$table_create)) {
  print "created your table<br/>";
}
else {
  echo "Error creating table: " . mysqli_error($conn) . "<br/>";
}
/**/



$table_data =  "INSERT INTO registrants (date, edit_key, name, email, affiliation, webpage, request_a, request_b, request_c, comment)
VALUES 
  (2100-06-01, 'editkey', 'Test Registrant 1', 'test@example.com', 'BigState University', 'http://example.com', 1, 0, 1, 'I am looking forward to this conference!'),
  (2100-08-01, 'editkey', 'Test Registrant 2', 'test@example.com', 'BigState University', 'http://example.com', 1, 1, 1, 'I am looking forward to this conference!'),
  (2100-10-01, 'editkey', 'Test Registrant 3', 'test@example.com', 'BigState University', 'http://example.com', 0, 0, 1, 'I am looking forward to this conference!');"




// commands to add data are here
// uncomment to activate

/*
// add entries to table
if (mysqli_query($conn,$table_data)) {
  print "inserted initial table data<br/>";
}
else {
  echo "Error inserting data: " . mysqli_error($conn) . "<br/>";
}


/**/


// show data
$row_result = mysqli_query($conn,"SELECT * FROM conferences");
while ($row = mysqli_fetch_array($row_result,MYSQLI_ASSOC)) {
  print "<pre>";
  print_r ($row);
  print "</pre>";
}


mysql_close($conn);
}
else {

print "Database NOT Found ";
mysql_close($conn);

}

?>
