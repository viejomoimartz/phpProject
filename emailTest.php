
<?php
// Connect to localhost with username/password sandbox.
mysql_connect('localhost', 'sandbox', 'sandbox');
// Get the test content.
$result = mysql_query('SELECT content FROM sandbox.test');
// If the query succeeded...
if ($result) {
  // Display the contents.
  var_dump(mysql_fetch_assoc($result));
  mail('lmarq7@gmail.com', 'Success', 'I just sent myself an email!');
}
// There was a failure.
else {
  // Display the failure.
  var_dump(mysql_error());
}
?>



