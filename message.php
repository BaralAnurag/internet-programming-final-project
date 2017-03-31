<?php 

define( 'FILENAME', "contactus.rtf");


function get_a_file( $filename )
{
  $lines = file( $filename, FILE_IGNORE_NEW_LINES );
  return $lines;
}

include "./includes/header.php";

if (isset($_POST["title"])) 
{
  $contents = get_a_file(FILENAME);
  $newcontent = $_POST["title"] . "," . $_POST["message"] . "," . $_POST["emailaddress"];
  
  array_push($contents, $newcontent);

  $text = implode("\n", $contents);
  if (file_put_contents("FILENAME", $text)) 
  {
    file_put_contents("contactus.rtf", $text);
    ?>
    The message from <?=$_POST["title"]?> has successully been posted!
    <?php
  }
  else 
  {
    ?>
    The message from <?=$POST["title"]?> was not posted!
    <?php
  }
}

?>
<div id="container">
  <main class="page-template">
    <h1>Message us</h1>


    <form method="post" action="contact.php">

      <p>
        <div>
          <input type="text" name="title" value="Enter your Name here" />
        </div>
        <div>
          <textarea name="message" cols="50" rows="5" maxlength="200">Enter your messgae here</textarea>
         </div>
         <div> 
          <input type="text" name="emailaddress" value="Enter your email address here" />
        </div>
      </p>
      <p>
          <input type="submit" value="Submit" />
      </p>
    </form>
  </main>

  
</div>

<?php
  include "./includes/footer.php";
?>

