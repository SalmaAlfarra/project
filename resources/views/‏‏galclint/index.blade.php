<?php
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS -->
    <link href="{{asset('res/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/style.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{asset('src/css/popup.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/report.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('res/images/Logo.svg')}}" type="image/x-icon" />

    <title>The Gallery</title>
  </head>
  <body>
    <header class="h">
      <div class="h1">
        <img class="Logo" src="{{asset('res/images/Logo.svg')}}" alt="Logo">
        <a id="main" href="index.html">Gallery</a>
        <a id="h1-a" href="/Users/AL-FAJR/Desktop/Project/Clint/galleryHome.html">Find Work</a>
        <a id="h1-a" href="">Store</a>
      </div>


      <div class="h2">
        <a id="h2-a" href=""><img src="{{asset('res/images/mes.svg')}}" height="10px" width="auto"></a>
        <a id="h2-a" href=""><img src="{{asset('res/images/not.svg')}}" height="25px" width="auto"></a>
        <a id="h2-a" href=""><img id="profile" src="{{asset('res/images/profile.png')}}" height="45px" width="45px"></a>

      </div>

    </header>
    <main>
      <div class="itam">
        <button class="btn"><img src="{{asset('res/images/Search.svg')}}" height="25px" width="auto"></button>
        <input class="serch" type = "search" name = "search" placeholder = "          Search..." >
        <a id="pro" href="">Project</a>
        <a id="arch" href="page2.html">Architects</a>
      </div>
          <!--Feltars -->
      <div class="feltars">
       <label class="label">
        <span id="fspan">
            <a id="lsa" href=""><img src="{{asset('res/images/Creative Fields.svg')}}" height="18px" width="auto"><span id="span-fl">Creative Fields</span><img src="{{asset('res/images/Polygon 4.svg')}}" height="12px" width="auto"></a>
        </span>
       </label>
       <label class="label">
        <span id="fspan">
          <a id="lsa" href=""><img src="{{asset('res/images/Tools.svg')}}" height="18px" width="auto"><span id="span-fl">Tools</span><img src="{{asset('res/images/Polygon 4.svg')}}" height="12px" width="auto"></a>
        </span>
       </label>
       <label class="label">
        <span id="fspan">
          <a id="lsa" href=""><img src="{{asset('res/images/Location.svg')}}" height="18px" width="auto"><span id="span-fl">Location</span><img src="{{asset('res/images/Polygon 4.svg')}}" height="12px" width="auto"></a>
        </span>
       </label>
       <label class="label">
        <span id="fspan">
          <a id="lsa" href=""><img src="{{asset('res/images/Sort.svg')}}" height="18px" width="auto"><span id="span-fl">Sort</span><img src="{{asset('res/images/Polygon 4.svg')}}" height="12px" width="auto"></a>
        </span>
       </label>
      </div>

          <!--Gallry -->

        <div class="gallry">
          <div class="gall">
            <a id="myBtn" href="#"> <img src="{{asset('res/images/Enscape.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-18-52-33.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-19-57-07.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-20-05-11 - Copy.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
         </div>
         <div class="gallry">
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/4.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/1.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="images/pro/2.png" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/3.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
         </div>
         <div class="gallry">
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-18-52-33.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-19-57-07.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><span>Multi Ounar</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-20-05-11 - Copy.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
         </div>
         <div class="gallry">
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><span>Multi Onar</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-18-52-33.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-19-57-07.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
          <div class="gall">
            <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-20-05-11 - Copy.png')}}" width="285px" height="174px" ></a>
            <div class="desc">
              <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
              <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
            </div>
          </div>
         </div>
         <div id="see-more">
          <div class="gallry">
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><span>Multi Onar</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-18-52-33.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-19-57-07.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-20-05-11 - Copy.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
           </div>
           <div class="gallry">
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><span>Multi Onar</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-18-52-33.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-19-57-07.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-20-05-11 - Copy.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
           </div>
           <div class="gallry">
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><span>Multi Onar</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-18-52-33.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-19-57-07.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-20-05-11 - Copy.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
           </div>
           <div class="gallry">
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><span>Multi Onar</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-18-52-33.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-19-57-07.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
            <div class="gall">
              <a href=""> <img src="{{asset('res/images/Enscape_2021-04-23-20-05-11 - Copy.png')}}" width="285px" height="174px" ></a>
              <div class="desc">
                <a class="name" href=""><img src="" height="20px" width="20px"><span>Abd Elrahman</span></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/visibility.svg')}}" height="12px" width="13px"></a>
                <span class="a"> 0</span><a class="a" href=""><img src="{{asset('res/images/Like1.svg')}}" height="12px" width="13px"></a>
              </div>
            </div>
           </div>
          </div>

         <div class="more">
          <button type="submit" id="mor"><span>See More  </span><img src="{{asset('res/images/Arrow - Right.svg')}}" height="12px" width="13px"></button>
        </div>
        <br>
    </main>


        <!-- The Modal -->
        <div id="mypopup" class="Modal">

          <!-- Modal content -->
          <div class="mypopup-content">
              <div class="headin">
                  <div class="per">
                    <div class="per2"><img id="img1" src="{{asset('res/images/profile.png')}}" width="70px" height="70"></div><div class="per3"><a id="na1" href="">REST HOUSE / WhiteHouse ...</a><br><span id="span1">Roy K. Roach</span><a id="na2" href="">Follow</a></div>
                  </div>
                  <div class="mes"><a href="" id="na3">
                      <img id="img2" src="{{asset('res/images/1.png')}}" height="40px" width="auto"> <span>Message</span>
                  </a>
                  </div>

                  <div class="mes"><a href="" id="na3">
                      <img id="img2" src="{{asset('res/images/2.png')}}" height="40px" width="auto"> <span>Save</span>
                  </a>
                  </div>
                  <div class="mes"><a href="" id="na3">
                      <img id="img2" src="{{asset('res/images/3.png')}}" height="40px" width="auto"> <span>Tools</span>
                  </a>
                  </div>
                  <div class="mes"><a href="" id="na3">
                      <img id="img2" src="{{asset('res/images/4.png')}}" height="40px" width="auto"> <span>Like</span>
                  </a>
                  </div>
                  <div class="mes"><a href="#" id="rep">
                      <img id="img2" src="{{asset('res/images/5.png')}}" height="40px" width="auto"> <span>Report</span>
                  </a>
                  </div>
                              <!-- إبلاغ -->
                              <div id="report" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content" id="report-c">
                                    <div class="pord">
                                    <h1 id="text-r1">Report (reported thing )</h1>
                                    <h6 id="text-r2">We take reports of harm and abuse seriously.</h6>
                                    <h4 id="text-r3">Why are you reporting(reported thing )?</h4>
                                    <textarea name="" id="area-r" cols="30" rows="10"></textarea>
                                    <br>
                                      <button id="bott-r" type="submit">Cancel</button> <button id="bott-r" type="submit">Report</button>
                                      <br>
                                    </div>

                                    <div class="close-r">
                                      <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
                                  </div>
                                </div>
                                </div>

                  <div class="view">
                      <div class="element"><img class="element-img" src="{{asset('res/images/1.png')}}" ></div>
                      <div class="element"><img class="element-img" src="{{asset('res/images/1.png')}}" ></div>
                      <div class="element"><p class="element-p">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p></div>
                      <div class="element"><img class="element-img" src="{{asset('res/images/1.png')}}" ></div>
                      <div class="element"><img class="element-img" src="{{asset('res/images/1.png')}}" ></div>
                      <div class="element"><video class="element-video" src=""></video></div>
                      <div class="element"><p class="element-p">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p></div>

                  </div>

                  <div class="reat-pro">
                      <h1 id="reat-h1">What is your opinion and comment on this project?</h1>
                      <span><i class="fad"> <span>0</span></span>
                      <span><img src="" height="auto" width="13px"><span>0</span>  </span>
                      <span><img src="" height="auto" width="13px"> <span>0</span></span>

                      <h5>Published:<span> October 5th 2021</span></h5>
                  </div>
                  <div class="targ">
                      <div class="coment">
                          <div class="mycoment">
                              <img class="myimg" src="{{asset('res/images/profile.png')}}"> <textarea id="intext" placeholder=" What is your opinion and comment on this project?"></textarea><br><button id="buttn2" type="submit">Add Comment</button>
                          </div>
                          <div class="comment">
                              <div class="com1"> <img src="" height="72px" width="72px" ></div>
                              <div class="com2"><a href="" id="na4">John R. McDonald</a><span id="span3">36 minutes ago</span><br>
                                  <p id="bar">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                      voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                      voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
                                  </p></div>
                          </div>
                          <div class="comment">
                              <div class="com1"> <img src="" height="72px" width="72px" ></div>
                              <div class="com2"><a href="" id="na4">John R. McDonald</a><span id="span3">36 minutes ago</span><br>
                                  <p id="bar">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                      voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                      voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
                                  </p></div>
                          </div>
                          <div class="comment">
                              <div class="com1"> <img src="" height="72px" width="72px" ></div>
                              <div class="com2"><a href="" id="na4">John R. McDonald</a><span id="span3">36 minutes ago</span><br>
                                  <p id="bar">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                      voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                      voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
                                  </p></div>
                          </div>


                      </div>


                      <div class="inform">
                          <div class="informa">
                              <h3 id="informa-h3">Owner</h3>
                              <div class="owner">
                                  <div id="div">
                                      <div class="own2"><img id="ownimg" src="{{asset('res/images/profile.png')}}" width="40px" height="40"></div><div class="own3"><a class="ona" href="">John R. McDonald</a><br><span id="ownspan">Roy K. Roach</span></div>
                                  </div>
                              <div class="foll"><button class="buttn" type="submit">Follow</button></div>
                              </div>
                              <div class="owner">
                                  <div id="div">
                                      <div class="own2"><img id="ownimg" src="{{asset('res/images/profile.png')}}" width="40px" height="40"></div><div class="own3"><a class="ona" href="">John R. McDonald</a><br><span id="ownspan">Roy K. Roach</span></div>
                                  </div>
                              <div class="foll"><button class="buttn" type="submit">Follow</button></div>
                              </div>

                          </div>
                          <div class="informa">
                              <h3  id="informa-h3">Project made for</h3>
                              <div class="made">
                                  <div class="made1"><img id="mimg" src="{{asset('res/images/profile.png')}}" width="46px" height="46"></div><div class="made2"><a class="made3" href="">REST HOUSE / WhiteHouse ...</a><br><span id="span4">Roy K. Roach</span></div>
                              </div>
                          </div>
                          <div class="informa">
                              <h3  id="informa-h3">Project Description</h3>
                              <p id="informa-p">This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate </p>
                          </div>

                          <div class="informa">
                              <h3  id="informa-h3">Project Description</h3>
                              <p id="informa-p">This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate </p>
                          </div>

                      </div>
                  </div>
              </div>
              <div class="close">
                  <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
              </div>
          </div>

        </div>



    <footer class="footer">
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
    <script src="{{asset('res/js/popup.js')}}"></script>
    <script src="{{asset('res/js/report.js')}}"></script>
  </body>
</html>
>
