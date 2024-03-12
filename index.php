

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Sign Up page</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="sample_page.css">
    <!--Links for icons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <!--Links for Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Burned&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Konkan</h1>
        </div>
        <div class="navbar">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Menu</a>
            <a href="">Contact</a>
            <a href="">Feedback</a>
        </div>
        <div class="tbl_book">
          <button><a href="#">Book Table</a></button>     
        </div>
    </header>


    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

        <!----------sign in form----------->
          <form action="index.php" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="user_name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" value="Submit" class="btn solid" />

            <p class="social-text">Or Sign in with social platforms</p>
           <div class="f_social_links">
              <a href="#"><i class="icon ri-facebook-line"></i></a>
              <a href="#"><i class="icon ri-google-line"></i></a>
              <a href="#"><i class="icon ri-linkedin-line"></i></a>
              <a href="#"><i class="icon ri-instagram-line"></i></a>
          </div>

          <!--------Signup------------->
          </form>
          <form action="index.php" method="POST" class="sign-up-form" >
            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user_name" id="name" onkeyup="validateName"/>
              <span id="name-error" required></span>
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"/>
              <span id="email-error" required></span>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>              
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="cpassword" required/>              
            </div>

            <input type="submit" class="btn" value="Submit" name="submit" />
            
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="f_social_links">
              <a href="#"><i class="icon ri-facebook-line"></i></a>
              <a href="#"><i class="icon ri-google-line"></i></a>
              <a href="#"><i class="icon ri-linkedin-line"></i></a>
              <a href="#"><i class="icon ri-instagram-line"></i></a>
          </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
           <p>
            Not have an account Sign Up Here!  
            
           </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Already have an account Login Here                                                                                           
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="img1.svg" class="image" alt="" />
        </div>
      </div>
    </div>




  <!----------Footer------------->
    <footer class="footer">
      <div class="f_img"><img src="footer_left.png" alt=""></div>
       <div class="f_main">
           <div class="f_left">
               <h2>Address</h2>
               No 48, Church Street,<br> Bangalore. <br> Karnataka, India.
           </div>
           
           <div class="f_right">
             <div class="f_contact">
               <h2>Contact:<br> +91 99725 47475</h2>
               <h2 style="margin-top: 10px;">Mail:<br>KonkanResto@gmail.com</h2>
             </div>
             
             <div class="f_social_links">
                 <a href="#"><i class="icon ri-facebook-line"></i></a>
                 <a href="#"><i class="icon ri-youtube-line"></i></a>
                 <a href="#"><i class="icon ri-twitter-line"></i></a>
                 <a href="#"><i class="icon ri-instagram-line"></i></a>
             </div>
           </div>
         </div>
 
   </footer>
 
   <script src="app.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
     
 </body>
 </html>