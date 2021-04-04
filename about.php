
 
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="web design for restaurant members">
    <meta name="keywords" content="web design">
    <meta name="author" content="The Spice Lounge">
    <title>The Spice Lounge | About Us</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>


  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">The Spice</span> Lounge</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="service.php">Services</a></li>
            <li class="current"><a href="about.php">About Us</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">About Us</h1>
          <ul id="services">
            <li>
              <h3>Manager</h3>
              <p>Ujjawal Shrestha</p><br>
              <p>
                 "We love our customers and we serve as that what we eat". We would like to invite our customer and give our best service.
              </p>
            </li>
            <li>
              <h3>The Spice Lounge</h3>
              <p>IMAGE</p>
						  <p>Pricing: $250 per month</p>
            </li>
            <li>
              <h3>Website Hosting</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Pricing: $25 per month</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark" style="margin-top: 50px;">
            <h3>We Serve Love</h3>
            	<form class="quote">
              <div>



              <?php
                 session_start();
                      if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                ?>
                      <a href="logout.php" class="button_1"   style="float: left; margin-left:20px;text-decoration: none;line-height: 2.5;">Logout</a>
                       <?php  
    
                      }else{
       ?>
       <a href="mainlogin.php" class="button_1"   style="float: left; margin-left:20px;text-decoration: none;line-height: 2.5;">Login</a>
      
       <?php 

    } ?> 

             	</div>
	          </form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>The Spice Lounge, Copyright &copy; 2020</p>
      <p>Minbhawan, Baneswor, Kathmandu</p>
    </footer>
  </body>
</html>
