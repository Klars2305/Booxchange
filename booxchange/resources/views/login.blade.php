<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BooXchange</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}" />
    <link rel="icon" type="image/x-icon" href="bini.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
  </head>
  <body>
    <div class="container"> 
      <div class="forms-container"> 
        <div class="signin-signup">
          <form action="/homepage.html" method="post" class="sign-in-form">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
              <input type="submit" value="Login" class="btn solid"/>
          </form>


          <form action="" class="sign-up-form">
            <!--Full name,Institute, Program, Age, Sex,Email Add, Password, Confirm Pass-->
          <form action="" class="sign-up-form">
            <h2 class="title">Sign Up</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Full Name" />
            </div>
            
            
            <div class="input-field">
              <i class="fas fa-building"></i>
              <select class="form-select" style="background-color: transparent; 
              outline: none; 
              border: none; 
              padding-left: 0px; 
              color: #a8a5ac; 
              font-family: 'Poppins', sans-serif;
              font-size: 18px;" >
                <option selected disabled>Institute</option>
                <option value="1">Institute 1</option>
                <option value="2">Institute 2</option>
                <option value="3">Institute 3</option>
              </select>
            </div>

            <div class="input-field">
              <i class="fas fa-graduation-cap"></i>
              <select class="form-select" style="background-color: transparent; 
              outline: none; 
              border: none; 
              padding-left: 0px; 
              color: #a8a5ac; 
              font-family: 'Poppins', sans-serif;
              font-size: 18px;" >
                <option value="" disabled selected>Program</option>
                <option value="program1">Program 1</option>
                <option value="program2">Program 2</option>
                <option value="program3">Program 3</option>
                <!-- Add more programs as needed -->
              </select>
            </div>

            <div class="input-field">
              <i class="fas fa-venus-mars"></i> 
              <select class="form-select" style="background-color: transparent; 
              outline: none; 
              border: none; 
              padding-left: 0px; 
              color: #a8a5ac; 
              font-family: 'Poppins', sans-serif;
              font-size: 18px;" >>
                <option selected disabled>Sex</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                
              </select>
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" />
            </div>

            <input type="submit" value="Sign Up" class="btn solid" />

            
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
              <img src="{{asset('/images/BookXchange.png')}}" style="height: 200px; ;">
                <h3>New here?</h3>
                <p>Join Booxchange today and dive into a world of book lovers and exclusive features! As a member, you'll be allowed to buy a book, sell a book, and trade books with special discounts, and access to a passionate community of readers. Sign up now and start enjoying all the benefits that Booxchange has to offer. Don’t miss out—become part of the Booxchange family today!</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <img src="./img/log.svg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
              <img src="{{asset('/images/BookXchange.png')}}" style="height: 200px;">
                <h3>One of us?</h3>
                <p>Log in to Booxchange now and reconnect with all the fantastic features and content you love! Enjoy personalized book recommendations, exclusive deals, and stay engaged with our vibrant community of readers. Don’t miss out—log in to Booxchange today!</p>
                <button class="btn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <img src="./img/register.svg" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="{{asset('/js/app.js')}}"></script>
  
  </body>
</html>
