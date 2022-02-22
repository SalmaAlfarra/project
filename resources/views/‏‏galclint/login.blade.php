<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS -->
    <link href="{{asset('res/css/all.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/style3.css')}}" rel="stylesheet" >
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('res/images/Logo.svg')}}" type="image/x-icon" />

    <title>Log In</title>
  </head>
  <body>
    <header class="h">
      <div class="h1">
        <img class="Logo" src="{{asset('res/images/SVG/Logo BackWhite.svg')}}" alt="Logo">
      </div>
    </header>
    <main>
        <div class="bord">
            <h1>Log In</h1>
            <div class="bord2">
                <span>Email</span>
                <input class="in" name="" type="email" placeholder="  Email">
                <span>Password</span>
                <input class="in" name="" type="password" placeholder="  Password">
                <div id="br">
                    <input id="checkbox" name="" type="checkbox" placeholder="Password">  <span id="check">Keep me logged in</span>
                <a id="Forget" href="">Forget Password?</a>
                </div>
            </div>
             <input id="Log" type="submit" value="Log In"></a>
             <h3>OR</h3>
            <div class="sgin">
                <a href=""><img src="{{asset('res/images/Gmail.svg')}}" height="35px" width="auto"><span>Continue with Google</span></a>
            </div>
            <div class="Signup">
                <span>don't have account?</span> <a href="Sgin.html">Sign UP</a>
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
