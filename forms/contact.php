<?
if (isset($_POST['Submit'])){
  $name= $_POST['name'];
  $mailform= $_POST['mail'];
  $message= $_POST['message'];
  $mailto = "pandey.girjesh27@gmail.com";
  $headers = "form: ".smailform;
  $text = "you have a messege".$name".\n\n".$message
    mail($mailTo,$name,$text,$headers);
  header ("location: index.html? Messagesent");
}
?>
