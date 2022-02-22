<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS -->
    <link href="{{asset('res/css/all.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/sgin.css')}}" rel="stylesheet" >
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('res/images/Logo.svg')}}" type="image/x-icon" />

    <title>Sgin Up</title>
  </head>
  <body>
    <header class="h">
      <div class="h1">
        <img class="Logo" src="{{asset('res/images/SVG/Logo BackWhite.svg')}}" alt="Logo">
      </div>
    </header>
    <main>
        <div class="bord">
            <h1>Create an account on Sky</h1>
            <div class="bord2">
              <div class="select">
                <a class="client" href="">Client</a>
                <a href="">Architect</a>
              </div>
              <div class="info">
                <div id="c1">
                  <span>First name</span>
                  <input class="in" name="" type="text" placeholder="  First name">
                </div>
                <div id="c2">
                  <span>Last name</span>
                  <input class="in" name="" type="text" placeholder="  First name">
                </div>
              </div>
                <span>Email</span>
                <input class="in" name="" type="email" placeholder="  Email">
                <span>Password</span>
                <input class="in" name="" type="password" placeholder="  Password">
                <span>Confirm Password</span>
                <input class="in" name="" type="password" placeholder="  Confirm Password">
                <span>Country</span>
                <select id="pr">
                  <option>Select a country</option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select >
                <div id="br">
                    <input id="checkbox" name="" type="checkbox" placeholder="">  <span id="check">Do you agree to the </span>
                <a id="Forget" href="">Terms And Conditions?</a>
                </div>
            </div>
             <input id="Log" type="submit" value="Log In"></a>
             <h3>OR</h3>
            <div class="sgin">
                <a href=""><img src="{{asset('res/images/Gmail.svg')}}" height="35px" width="auto"><span>Continue with Google</span></a>
            </div>
            <div class="Signup">
                <span>already have account?</span> <a href="LogIn.html">Sign In</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="side1">
          <img class="fLogo" src="{{asset('res/images/Logo.svg')}}" alt="Logo">
          <p>All rights reserved <sup>©</sup></p>
          <a href=""><img src="{{asset('res/images/Social Media - Small - Dark - Insta.svg')}}" height="18px" width="18px"></a>
          <a href=""><img src="{{asset('res/images/Social Media - Small - Dark - Twitter.svg')}}" height="18px" width="18px"></a>
          <a href=""><img src="{{asset('res/images/Social Media - Small - Dark - Facebook.svg')}}" height="18px" width="18px"></a>
        </div>
        <div class="center">
          <p>Sky</p>
          <a href="">About Sky</a> <br><br>
          <a href=""> Services Sky</a><br><br>
          <a href="">new registration</a><br><br>

        </div>
        <div class="side2">
          <a href="">About Sky</a> <br><br>
          <a href=""> Services Sky</a><br><br>
          <a href="">new registration</a><br><br>
          <a href="">new registration</a><br><br>
        </div>


      </footer>

      <!--js -->
      <script src="{{asset('res/js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('res/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('res/js/script.js')}}"></script>
    </body>
  </html>
