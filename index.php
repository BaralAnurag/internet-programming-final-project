<?php 

$home = "home-active";
include './includes/header.php'; 
?>
     <div class="main_content">
           <div class = "content">
               <article class ="top_content">
                    <header>
                      <h2> <a href = "#" title = "top post"> Project 8771 </a> </h2>
                    </header>   
                <content>
                      <p> Project 8771 is an electronic music duo from Kathmandu, Nepal consisting of Anurag 
                        Baral (Rhythm guitar) and Pranav Karki (Bass guitar/ software controlled synthesizer 
                        and cymbals). They have released their first ep back in September 2011 and are
                        currently working in their full length album . They have posted six songs in 
                        reverbation already and are getting noticed thereof. Two of their best original 
                        compositions are Aaija Nidari which has a nostalgic feel and reminds me of 
                        ‘Explosions In the Sky’ and the other is Shuturmurg which has lots of variations 
                        and gets you in a trance-y mood. All of their originals are an ode to a genre 
                        that has its roots in the 1960s UK and US musical scene.  
                      </p>
                      

                  </content>
                </article>
                 <article class ="bottom_content">
                    <header>
                      <h2> <a href = "#" title = "Second post"> Track List </a> </h2>
                    </header>   
                <content>
                     <ul>
                      <li>Intro </li>
                      <li>Bhakundo Bhoot </li>
                      <li>Aija Nidari</li>
                      <li>Alpawiraam (ft.Bartika Rai)</li>
                      <li>Shuturmurg</li>
                      <li>Bessari chilayo</li>
                      <li>Chikkuhubba</li>
                     </ul>

    <img src = "cover.jpg" alt ="Project 8771 album Cover" style= "width:200px;height:200px;">        
    </content>
 
 </article>
</div>
 </div> 
  <!--Javascript ko naya -->
  <p>Birthday Today? Enter to win 10% off at our web store.</p>

    <input id = "month" value = "Enter Month from 1 to 12"></input>
     <input id = "day" value = "Enter day from 1 to 31"></input>



<button type = "button"  onclick = "myFunction()">
Enter Here </button>



<p id="demo" ></p>
<p id ="demo1"> </p>
<p id ="demo2"> </p>

<script>

function myFunction()
{    
    var text1;
    var text2;
    var randomNumber = Math.floor((Math.random()* 100) + 12345);


//month check
   month = parseInt(document.getElementById("month").value);

   if (month >= 0 && month <=12) 
        {

        text1 = month;

         }
   else
       {

        text1 = "Invalid input of month";

       }



   //day check

     day = parseInt(document.getElementById("day").value);

    if (day >=0 && day <= 31) 
        {

        text2 =  day;

        }
   else
       {

        text2 = "Invalid input of day";

       }

    var d = new Date();
    var e = d.getDate();

    var f = d.getMonth() + 1;

    if ((text1 == f) && (text2 == e))
    {
      text3 = "Happy Birthday. Call us at 000-000-0000 and use the code " + randomNumber + " to redeem your coupon. ";
    }

    else
    {
      text3 = "Sorry. It is not your birthday.";
    }

    document.getElementById("demo2").innerHTML = text3; 
}

</script>
  <?php 
    include './includes/sidebar.php'; 
  ?>

     <?php 
  include './includes/footer.php'; 
     ?>

</body> 

</html>

