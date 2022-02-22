<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS -->
    <link href="{{asset('res/css/all.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/addpro1.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/addpro2.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{asset('res/css/addpro3.css')}}">
    <link rel="stylesheet" href="{{asset('res/css/addpro4.css')}}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('res/images/Logo.svg')}}" type="image/x-icon" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="{{asset('res/js/bootstrap.bundle.min.js')}}"></script>


    <title>Add Project</title>
  </head>
  <body>
    <header class="h">
      <div class="h1">
        <img class="Logo" src="{{asset('res/images/Logo.svg')}}" alt="Logo">
        <a id="main" href="index.html">Gallery</a>
        <a href="/Users/AL-FAJR/Desktop/Project/freelansr/Homepage (Freelancing) .html">Find Work</a>
        <a href="">Forum</a>
        <a href="">Store</a>
      </div>


      <div class="h2">
        <button class="btn"><img src="{{asset('res/images/Search.svg')}}" height="25px" width="auto"></button>
        <input type = "search" name = "search" placeholder = "          Search..." >
        <a href=""><img src="{{asset('res/images/mes.svg')}}" height="10px" width="auto"></a>
        <a href=""><img src="{{asset('res/images/not.svg')}}" height="25px" width="auto"></a>
        <a href=""><img id="profile" src="{{asset('res/images/profile.png')}}" height="45px" width="45px"></a>
      </div>
    </header>
    <main>
        <div class="bord">
            <div class="view">
                <div class="element"><img src="{{asset('res/images/1.png')}}" ></div>
                <div class="element"><img src="{{asset('res/images/1.png')}}" ></div>
                <div class="element"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p></div>
                <div class="element"><img src="{{asset('res/images/1.png')}}" ></div>
                <div class="element"><img src="{{asset('res/images/1.png')}}" ></div>
                <div class="element"><img src="{{asset('res/images/1.png')}}" ></div>
                <div class="element"><img src="{{asset('res/images/1.png')}}" ></div>
                <div class="element"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p></div>
            </div>
            <div class="addb">
                <h3>Add Content</h3>
              <div class="addp">
                <button id="add-Image"><img src="{{asset('res/images/Image.svg')}}" height="25px" width="auto"><span>   Image</span></button>
                    <a id="Video" href="#"><img src="{{asset('res/images/Vedio.svg')}}" height="25px" width="auto"><span>   Video</span></a>
                    <a id="Text" href="#"><img src="{{asset('res/images/Text.svg')}}" height="25px" width="auto"><span>   Text</span></a>
                    <a id="D" href="#"><img src="{{asset('res/images/3D.svg')}}" height="25px" width="auto"><span>   3D</span></a>
            </div>
                <div class="opt">

                        <button id="butt1"><span>Continue</span></button>
                        <a id="butt" href=""><span>Save as Draft</span></a>
                        <a id="butt" href=""><span>View a Preview</span></a>
                </div>
            </div>


        </div>

        <!-- The Modal -->
        <div id="myModal1" class="modal">

          <!-- Modal content -->
          <div class="modal-content" id="model-c">
          <div class="myaddmode">
            <div class="tag">
              <div class="adde">
                <h3>Select Content</h3>
              <div class="catr">
                <button id="Image1"><img src="{{asset('res/images/Image.svg')}}" height="25px" width="auto"><span>   Image</span></button>
                    <button id="Video1" href=""><img src="{{asset('res/images/Vedio.svg')}}" height="25px" width="auto"><span>   Video</span></button>
                    <button id="add-text" href="#"><img src="{{asset('res/images/Text.svg')}}" height="25px" width="auto"><span>   Text</span></button>
                    <button id="TD-add" href=""><img src="{{asset('res/images/3D.svg')}}" height="25px" width="auto"><span>   3D</span></button>
            </div>
          </div>
              <div class="add-element">
                <h1>Add Element</h1>
                <div id="img-add">
                <input  type="file" id="file" value="hvthr"> <br>
                <button class="supmet" type="submit">Add Image</button>
              </div>
              <div id="text-add">
                <textarea id="mytext"></textarea> <br>
                <button class="supmet" type="submit">Add Text</button>
              </div>
              <div id="addvedio">
                <input  type="file" id="file" value="hvthr"> <br>
                <button class="supmet" type="submit">Add Vedio</button>
              </div>
              <div id="add-3d">
                <input  type="file" id="file" value="hvthr"><br>
                <button class="supmet" type="submit">Add 3D</button>
              </div>
              </div>
              <div class="close">
                <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
            </div>
          </div>
          </div>
          </div>
        </div>


 <!-- إستئناف إضافة المشروع -->
         <div id="myModal" class="modal">
          <div class="modal-content" id="modcont">
            <div class="wrapper">
                <div class="pCover">
                    <h4>Project Cover</h4>
                    <img height="183" width="300px" >
                    <br>
                    <a href=""><img src="{{asset('res/images/Edit.svg')}}" height="12px" width="12px"><span>Edit Image</span> </a>
                </div>
                <div class="pdesc">
                    <span>Title   <sup>(required)</sup></span>
                    <input class="in" name="" type="text" placeholder="  Give your project a title">
                    <span>Tags   <sup>(up to 15)</sup></span>
                    <input class="in" name="" type="text" placeholder="  Add up to 15 keywords to help people discover your project">
                    <span>Tools</span>
                    <input class="in" name="" type="text" placeholder="  What software, hardware, or materials did you use?">
                    <span>Co-Owners</span>
                    <input class="in" name="" type="text" placeholder="  Who helped you on this project? Add co-owners by name or username">
                    <span>Project classification</span>
                    <input class="in" name="" type="text" placeholder="  Project classification">
                    <a id="Fields" href="">View All Fields…</a>
                    <br><br>
                    <span>Description</span>
                    <textarea class="din" placeholder=" Write a full description of the project"></textarea>
                    <span>Attach Files</span>
                    <div class="ain">
                        <a id="atthment" href="#"><span class=""><img src="{{asset('res/images/File name.svg')}}" height="15px" width="auto" >  Attach source Files</span></a>
                    </div>
                    <br>
                    <a id="obutt" href=""><span>Save as Draft</span></a>
                    <a id="obutt" href=""><span>Continue</span></a>
                </div>
                  <!--إضافة ملفات المصدر -->

              <div id="attach-pop" class="modal">

                  <div class="modal-content" id="attach-cont">
                      <h1 id="text-attach">Attach source Files</h1>
                  <div class="adding">
                    <div id="addinga">
                    <h1 id="text-attach">File Name</h1>
                    <input id="intext" type="text" name="" id="">
                    <h1 id="text-attach">File</h1>
                    <input type="file" name="" id="">
                    <button id="buttndone" type="submit">Add</button>
                    </div>
                  </div>

                  <div class="adding1">
                    <a id="add-f" href="#"><img src="{{asset('res/images/File name.svg')}}" alt="" height="14" width="auto">   File Name </a>
                </div>
                  <button id="done" type="submit">Done</button> <br>
                  <div class="closadd">
                    <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
                </div>
                  </div>
                </div>

                <div class="close1">
                  <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
                </div>
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
      <script src="{{asset('res/js/addpro.js')}}"></script>
      <script src="{{asset('res/js/addpro1.js')}}"></script>
      <script src="{{asset('res/js/addpro2.js')}}"></script>
    </body>
  </html>
