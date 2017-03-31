<?php

define( 'FILENAME', "database.txt");


function get_a_file( $filename )
{
  $lines = file( $filename, FILE_IGNORE_NEW_LINES );
  return $lines;
}

include "./includes/header.php";

if (isset($_POST["title"])) 
{
  $contents = get_a_file(FILENAME);
  $newcontent = $_POST["title"] . "," . $_POST["description"] . "," . $_POST["price"] . "," . "./img/blank.jpg" . "," . $_POST["size"];
  
  array_push($contents, $newcontent);

  $text = implode("\n", $contents);
  if (file_put_contents("FILENAME", $text)) 
  {
    file_put_contents("database.txt", $text);
    ?>
    The <?=$_POST["title"]?> has successully been updated!
    <?php
  }
  else 
  {
    ?>
    The <?=$POST["title"]?> wasnt updated!
    <?php
  }
}

?>
<div id="container">
  <main class="page-template">
    <h1>Add Merchandise to our site.</h1>


    <form method="post" action="add_new_post.php">

      <p>
        <div>
          <input type="text" name="title" value="Enter your title here" />
        </div>
        <div>
          <textarea name="description" cols="50" rows="5" maxlength="200">Enter your description here</textarea>
         </div>
         <div> 
          <input type="text" name="price" value="Enter your price here" />
        </div>
          <!--Image upload hasn't been defined yet-->
          <div>
          <input type="text" name="image" value="Enter your image name here" />
          </div>
          <div>
          <input type="text" name="size" value="Enter your size here" />
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