<?php 

$suscribe = "suscribe-active";
include './includes/header.php'; 

?>
<h1> Get updated with our studio progress, online photo gallery and live concert streaming using our
	email suscrption program.
</h1>
<p> Sign up here</p>

<?php

  function print_data(){

    echo <<<END

      
                        <form enctype="multipart/form-data" action="$_SERVER[PHP_SELF]" method="post">
                            <div class="center">
        
       First Name: 
                                <input type="text" name="firstName">
      
       Last Name: 
                                    <input type ="text" name="lastName">
      
       Email Address: 
                                        <input type="text" name="emailAddress">
                                            <button type = "submit" name="submit" value="submit" >Submit </button>
                                        </div>
                                    </form>
END;

  }

function process() {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $emailAddress = $_POST['emailAddress'];

  $emailErr = "";

  $username = "ab7324";
  $password = "oomaifai";

    
  if ($firstName == "") {
     print "<p>ERROR.  No first name or last name.Enter again.</p>";
  }
  else {

    if(!preg_match('/\w/', $firstName) || !preg_match('/\w/', $lastName) ||  filter_var($emailAddress, FILTER_VALIDATE_EMAIL))
        {
           mysql_connect("mysql.truman.edu",$username,$password);

          mysql_select_db("ab7324CS315");


          $sql="INSERT into `bandSuscribe`(firstName,lastName, emailAddress) values('$firstName','$lastName','$emailAddress')";
          $result=mysql_query($sql);

                  if ($result){
                  echo 'successfully registered';

                  }
               }
                  else 

                    { print 'Please enter valid first name or last name or email address!';
                }                
        }
  }

if (isset($_POST['submit']) && ('submit' == $_POST['submit'])) {
    process();
} else {
    print_data();
}

?>
<h1> Are you in our list?
</h1>

<button type="button" onclick="loadDoc()">Click here to view our subscription list.</button> 
<p id="demo"></p>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", 'displayBand.php', true);
  xhttp.send();
}
</script>
<?php
  include "./includes/footer.php";
?>