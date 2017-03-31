<?php 

$contact = "contact-active";
include './includes/header.php'; 
?>
<h2>Contact our Team</h2>

<button type="button" onclick="loadDoc()">Mr.Manager</button> 
<button type="button" onclick="loadMerch()">Mr.Merch</button> 
<button type="button" onclick="loadBand()">Band</button> 

<p id="demo"></p>
<p id="demo1"></p>
<p id="demo2"></p>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", 'email.php', true);
  xhttp.send();
}


function loadMerch() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo1").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", 'merch.php', true);
  xhttp.send();
}

function loadBand() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo2").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", 'band.php', true);
  xhttp.send();
}
</script>

<h2>Suscribe to our updates via email.</h2>

<?php
  include "./includes/footer.php";
?>

