<?php
session_start();
if(!isset($_SESSION['username'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<body>
   
    <!-- nav bar -->
    <section id="header">
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
            <a class="navbar-brand" href="#"><img src="day 4/download.png" style="width: 100px; height: 100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                 
                <!-- <a class="nav-item nav-link active" href="#">HOME</a> -->
                <a class="nav-item nav-link" href="about-us.php">ABOUT US</a>
                <!-- <a class="nav-item nav-link" href="#">SERVICES</a> -->
                <span> <a class="nav-item nav-link  dropdown-toggle"  data-toggle="dropdown" href="#" >PRODUCTS</a>
                <div class="dropdown-menu">
                    <a href="weightTraining.php" class="dropdown-item">Weight Training Equipment</a>
                    <a href="crossfit.php" class="dropdown-item">Crossfit Training Equipment </a>
                    <a href="CardioMachine.php" class="dropdown-item">Cardio Equipment</a>
                    <a href="absWorkout.php" class="dropdown-item">Abs Workout</a>
                    <a href="yoga.php" class="dropdown-item">Yoga Equipment</a>
                    <a href="Support-Accessories.php" class="dropdown-item">Support and Protection Accessories</a>
                    <a href="massage and recovery.php" class="dropdown-item">Massage and Recovery</a>
                    <a href="gym-balls.php" class="dropdown-item">GYM BALLS</a> 
                    <a href="fitness-tracker.php" class="dropdown-item">Fitness Gadgets</a> 
                </div></span>
                <a class="nav-item nav-link " href="contact-us.php" >CONTACT US</a>
                <a class="nav-item nav-link " href="log-in.php">LOGIN</a>
                <!-- <a class="nav-item nav-link " href="register.php">REGISTER</a> -->
                <a  class="nav-item nav-link " href="log-in.php">LOGOUT</a>

              </div>
            </div>
            <div class="col-md-2">
                <section class="container nav navbar-nav navbar-right">
    <h4 class="">Welcome <?php echo $_SESSION['username'];?></h4>
</section>
          </nav>
        
    </section>
    <!-- text -->
    <section id="welcome">
       <div class="container">
           <div class="welcome text">
               <h1>FITNESS STORE</h1>
           </div>
       </div>
    </section><br><br><br>
    <section >
            <div class="col-md-12 px-0">
                    <div class="carousel slide" data-ride="carousel" id="abc">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="day 4/gym1.jpg" height="500" width="100%">
                            </div>
                            <div class="carousel-item ">
                                    <img src="day 4/gym2.jpg" height="500" width="100%">
                                </div>
                                <div class="carousel-item ">
                                        <img src="day 4/gym3.jpg" height="500" width="100%">
                                    </div>
                                        <div class="carousel-item ">
                                                <img src="day 4/gym5.jpg" height="500" width="100%">
                                            </div>
                                            <div class="carousel-item ">
                                                    <img src="day 4/gym6.jpg" height="500" width="100%">
                                                </div>
                                </div>
                                <a href="#abc" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#abc" class="carousel-control-next" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                        </div>
                    </div>
                </div>
            </div>
    </section><br><br><br><br>
    <section class="text-center"><h1>PRODUCTS</h1></section><br><br><br><br>
    <div class="container-fluid">
<section>
<div class="row">
   <div class="col-md-4 px-0 text-center">
      <a href="weightTraining.php"> <img src="cadio/weight-training.jpg" alt=""></a>
   </div>
   <div class="col-md-8 px-0 text-center px-0 mx-0">
       <h1>Weight Training Equipment Names and Pictures</h1>
    <p> Weightlifting equipment are referred to tools which are used during exercises that include include lifting weights to pump up muscles, some of the examples are barbells, weight bench, dumbells, etc.

    In this section I will cover such equipment and accessories that help in weight training, that may include lifting belts and other such accessories
    
    To the right is a quick list. you can click on any of those equipment to jump to that specific equipment.</p>
   </div>
</div><br><br><br><br>



<div class="row">
   <div class="col-md-4 px-0 text-center">
      <a href="crossfit.php"> <img src="cadio/crossfit-equipment.jpg" alt=""></a> 
    </div>
    <div class="col-md-8 px-0 text-center px-0 mx-0">
      <h1>Crossfit Training Equipment Names and Pictures</h1>
      <p>Crossfit is that branch of exercise which concentrates on overall fitness level, that includes weight training + cardiovascular training at the same time. Hence improving strength, stamina and endurance all at once.

            It is also known as functional training. In recent times crossfit training has gained immense popularity. It is very effective in losing weight fast.</p>
    </div>
</div><br><br><br><br>


<div class="row">
    <div class="col-md-4 px-0 text-center">
           <a href="CardioMachine.php"><img src="cadio/cardio-machines.jpg" alt=""></a> 
        </div>
        <div class="col-md-8 px-0 text-center px-0 mx-0">
   <h1>Cardio Equipment Names and Pictures</h1>
   <p>Cardio equipment refers to machines that are used for cardiovascular exercise like running, stair climbing, boat rowing, etc. Cardio Vascular exercises increases heart rate and thus burns fat fast. They are great tools to loose weight. There are high 
       end cardio machines available in market that tracks and control your activity. Popular cardio brands include Life Fitness, Precor, Rogue, etc.</p>
            </div>
</div><br><br><br><br>


<div class="row">
    <div class="col-md-4 px-0 text-center">
         <a href="absWorkout.php"> <img src="cadio/abs-workout.jpg" alt=""></a> 
        </div>
        <div class="col-md-8 px-0 text-center px-0 mx-0">
       <h1>Equipment Names and Pictures for Abs Workout</h1>
       <p>There is an increasing craze for flat and toned abs with 6,8 or 10 packs. An impressive pack of abs can only be built with special gym equipment like ab bench, ab rollers, ab gliders, ab belts and other equipment that work directly on the abs muscles.

            Go through my list of ab equipment and choose the one that suits your requirement.</p>
            </div>
        </div> <br><br><br><br>            
            

<div class="row">      
    <div class="col-md-4 px-0 text-center">
         <a href="yoga.php"><img src="cadio/yoga-equipment.jpg" alt=""></a> 
                    </div>
        <div class="col-md-8 px-0 text-center px-0 mx-0">
        <h1>Yoga Equipment and Accessories</h1>
        <p>Yoga is the way of life for many since ages. If you are new to the Yoga world you need to know how to get best from your Yoga sessions.

                Here I bring to you some Yoga accessories with names and pictures that will help you know what these are and how they are useful in maximizing the benefits of your Yoga session.</p>
        </div>
</div><br><br><br><br>


<div class="row">
    <div class="col-md-4 px-0 text-center">
         <a href="Support-Accessories.php"><img src="cadio/support-accessories.jpg" alt=""></a> 
                        </div>
        <div class="col-md-8 px-0 text-center px-0 mx-0">
         <h1>Support and Protection Accessories</h1>
         <p>Your body experience wear and tear especially in joints. To help you keep going and lifting weights there are support and protection accessories available in the market.

                You might or might not need these now, but you never know when you will need one, hence it is better to know them in advance. So that you keep going with your workout.</p>
        </div>
</div><br><br><br><br>


<div class="row">
    <div class="col-md-4 px-0 text-center">
      <a href="massage and recovery.php"> <img src="cadio/massage-tools.jpg" alt=""></a>
    </div>
        <div class="col-md-8 px-0 text-center px-0 mx-0"> 
          <h1>Massage and Recovery</h1>
          <p>These are hard rollers with foam over them for self-massage. They are good for back massage as well as thighs massage. For back massage user have to lie on it with roller under the back and move to and forth. Foam massage rollers help in speeding up of muscle recovery and relieve muscle soreness.</p>
        </div>
  
</div><br><br><br><br>
  


<div class="row">
    <div class="col-md-4 px-0 text-center">
             <a href="gym-balls.php"> <img src="cadio/gym-balls.jpg" alt=""></a>  
             </div>
     <div class="col-md-8 px-0 text-center px-0 mx-0"> 
             <h1>GYM BALLS</h1>      
             <p>You must have seen various types of balls in the gym. Each one of those are there for a specific purpose. They have different uses. But most of them are used to increase stability and balancing the core.

                    With the help of the pictures of these gym balls let’s try to understand each one of them.</p>
     </div>
</div><br><br><br><br>



<div class="row">
    <div class="col-md-4 px-0 text-center">
          <a href="fitness-tracker.php"> <img src="cadio/fitness-gadgets.jpg" alt=""></a> 
         </div>
    <div class="col-md-8 px-0 text-center px-0 mx-0"> 
               <h1>Fitness Gadgets, Trackers and Devices</h1>
               <p>Fitness gadgets are a must have for serious fitness enthusiasts and professionals. They are vital in terms of analyzing your current body state, your physical activity, heart rate, calorie, sleep monitoring, etc. These devices record and collect these vital stats so that you know where to concentrate your workout.

                    Let me help you know more about some of the fitness gadgets, basic differences between them and which one you should invest in.</p>
     </div>  <br><br><br><br>

</div>

</div>
</section> 
<br><br><br><br> 
<section >
<div class="container-fluid" id="footer">
   <div class="row">
       <div class="col-md-6 py-5">
        <img src="day 4/download.png" style="width: 200px; height: 200px">
       </div>
       <div class="col-md-4 text-center py-4">
           <h1>ABOUT US</h1>
           <p>Fitness store is a fitness focused website, reviewing fitness products and giving fitness related tips.
                I try and write 2-3 posts per week. I share what I have experienced in my fitness journey while losing a 
                lot of weight and adopting fitness as a way of life.</p>
                <span><u> Follow Me on</u> <br> <b> Instagram:-ABCD</b> </span>
       </div>
   </div>
</div>
</section> 
</div>
</body>
</html>