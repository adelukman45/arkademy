 <?php
if( isset( $_POST['submit_form'] ) )
{
function validate_data($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = substr($data, 0, 8);
  $data = htmlspecialchars($data);
  $data = mysql_real_escape_string($data);
  return $data;    
}
function is_email_valid($email) {
  $email = substr($email, 0, 50);

    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", trim($email))) {
        return TRUE;
    }
    return FALSE;
}
$name = validate_data( $_POST['username'] );
$email = is_email_valid( $_POST['email'] );

echo "$name<br/>$email";
}
