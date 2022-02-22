<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--CSS -->
    <link href="{{asset('res/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('res/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('res/css/Post a Job.css')}}">
    <link href="{{asset('res/css/galleryHomestyle.css')}}" rel="stylesheet" />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <title>Sky</title>
  </head>
  <body>
    <header class="h">
      <div class="h1">
        <img class="Logo" src="{{asset('res/images/Logo.svg')}}" alt="Logo" />
        <a id="h1-a" href="/Users/AL-FAJR/Desktop/Project/%E2%80%8F%E2%80%8Fgal%20clint/index.html">
          Gallery
        </a>
        <a id="main" href="galleryHome.html">Find Work</a>
        <a id="h1-a" href="">Store</a>
      </div>

      <div class="h2">
        <a id="h2-a" href=""
          ><img src="{{asset('res/images/mes.svg')}}" height="10px" width="auto"
        /></a>
        <a id="h2-a" href=""
          ><img src="{{asset('res/images/not.svg')}}" height="25px" width="auto"
        /></a>
        <a id="h2-a1" href=""
          ><img
            id="profile"
            src="{{asset('res/images/profile.png')}}"
            height="45px"
            width="45px"
        /></a>
      </div>
    </header>
    <main>
      <div class="list">
        <div class="list1">
          <img src="{{asset('res/images/Home.svg')}}" alt="" />
          <a href="galleryHome.html">Home</a>
        </div>
        <div class="list2">
          <img src="{{asset('res/images/Message.svg')}}" alt="" />
          <a href="Message.html">Message</a>
        </div>
        <div class="list2">
          <img src="{{asset('res/images/Jobs Offered.svg')}}" alt="" />
          <a href="jobs Offered New jobs.html">Jobs Offered</a>
        </div>
        <div class="list2">
          <img src="{{asset('res/images/Former Freelancers.svg')}}" alt="" />
          <a href="Former Freelancers.html">Former Freelancers</a>
        </div>
        <div class="list2">
          <img src="{{asset('res/images/Profile.svg')}}" alt="" />
          <a href="">Profile</a>
        </div>
        <div class="list2">
          <img src="{{asset('res/images/Payment Method.svg')}}" alt="" />
          <a href="">Payment Method</a>
        </div>
        <div class="list2">
          <img src="{{asset('res/images/Settings.svg')}}" alt="" />
          <a href="">Settings</a>
        </div>
        <div class="list2">
          <img src="{{asset('res/images/Logout.svg')}}" alt="" />
          <a href="">Logout</a>
        </div>
      </div>
      <div class="arch">
        <div class="arch1">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input
            type="search"
            name="search"
            placeholder="Type the job name here"
          />
          <a id="btn" href="#">Post a Job</a>
        </div>

                          <!-- إبلاغ -->
                          <div id="Post1" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content" id="Post1-c">
                              <div class="a1">
                                <span> <img src="{{asset('res/images/Back.svg')}}" alt="" /> </span>
                                <span> New job</span>
                                <span class="opentext"> Open in a new screen </span>
                              </div>
                              <div id="jobtext">Job Title</div>
                              <div id="input">
                                <input type="text" placeholder="Job Title " />
                              </div>
                              <div id="jobtext">Job Type</div>
                              <div id="input">
                                <input type="text" class="fixed" placeholder="Fixed-Price" />
                              </div>
                              <div id="jobtext">Categore</div>
                              <div id="input">
                                <input type="text" placeholder="Categories of work" />
                              </div>
                              <div id="jobtext">Budget</div>
                              <div id="input">
                                <input type="text" placeholder="Initial cost in dollars" />
                              </div>
                              <div id="jobtext">country</div>
                              <div id="input">
                                <input type="text" placeholder="Select a country" />
                              </div>
                              <div id="jobtext">Required Skills</div>
                              <div id="input">
                                <input type="text" />
                              </div>

                              <div class="three">
                                <span> Landscape Design &times; </span>
                                <span> Landscape Design &times; </span>
                                <span> Landscape Design &times; </span>
                              </div>

                              <div id="jobtext">Freelancer invite</div>
                              <div id="input">
                                <input type="text" />
                              </div>
                              <div class="three">
                                <span> Freelancer name &times; </span>
                                <span> Freelancer name &times; </span>
                                <span> Freelancer name &times; </span>
                                <span> Freelancer name &times; </span>
                                <span> Freelancer name &times; </span>
                              </div>

                              <div id="jobtext">Experience level</div>
                              <div class="threea">
                                <a href=""> Entry Level </a>
                                <a href=""> Intermediate </a>
                                <a href="" class="Export"> Export </a>
                              </div>

                              <div class="jobtext">Attachments</div>
                              <div id="Attachment">
                                <a id="att" href="">
                                  <img
                                    src="{{asset('res/images/Attachments.svg')}}"
                                    alt=""
                                    height="35px"
                                    width="auto"
                                /></a>
                                <br />
                                <a id="addd">Add attachments</a>
                              </div>

                              <div id="jobtext">Description</div>
                              <textarea
                                name=""
                                id="textar"
                                placeholder="Write a full description of the project"
                              >
                              </textarea>
                              <div>
                                <input id="send1" type="submit" value="Cancel" />
                                <input id="send" type="submit" value="Publish now" />
                              </div>

                              <div id="close-r" class="close-r">
                                <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
                            </div>
                            </div>
                            </div>


        <div class="arch2">
          <div class="crd">
            <div class="crd1">
              <img
                class="personicon"
                src="{{asset('res/images/person.png')}}"
                alt=""
              />
              <ul class="in">
                <li class="freename">John R. McDonald</li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <span class="location">USA, California</span>
                </li>
              </ul>
              <span class="rate">
                &#x2605; &#x2605; &#x2605; &#x2605; &#x2606;
              </span>
              <span class="hellp">&hellip;</span>
            </div>
            <div class="crd2">
              <p>
                This text is an example of a text that can be replaced in the
                same space. This text was generated from the Arabic text
                generator, where you can generate such text or many other texts
                in addition to increasing the number of characters generated by
                the application. This text is an example of a text that can be
                replaced In the same space, this text has been generated from
                the Arabic text generator, where you can generate such text or
                many other texts in addition to increasing the number of
                characters generated by the application
              </p>
            </div>
            <div class="crd3">
              <button>Message</button>
            </div>
          </div>
          <hr />
          <div class="crd">
            <div class="crd1">
              <img
                class="personicon"
                src="{{asset('res/images/person.png')}}"
                alt=""
              />
              <ul class="in">
                <li class="freename">John R. McDonald</li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <span class="location">USA, California</span>
                </li>
              </ul>
              <span class="rate">
                &#x2605; &#x2605; &#x2605; &#x2605; &#x2606;
              </span>
              <span class="hellp">&hellip;</span>
            </div>
            <div class="crd2">
              <p>
                This text is an example of a text that can be replaced in the
                same space. This text was generated from the Arabic text
                generator, where you can generate such text or many other texts
                in addition to increasing the number of characters generated by
                the application. This text is an example of a text that can be
                replaced In the same space, this text has been generated from
                the Arabic text generator, where you can generate such text or
                many other texts in addition to increasing the number of
                characters generated by the application
              </p>
            </div>
            <div class="crd3">
              <button>Message</button>
            </div>
          </div>
          <hr />
          <div class="crd">
            <div class="crd1">
              <img
                class="personicon"
                src="{{asset('res/images/person.png')}}"
                alt=""
              />
              <ul class="in">
                <li class="freename">John R. McDonald</li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <span class="location">USA, California</span>
                </li>
              </ul>
              <span class="rate">
                &#x2605; &#x2605; &#x2605; &#x2605; &#x2606;
              </span>
              <span class="hellp">&hellip;</span>
            </div>
            <div class="crd2">
              <p>
                This text is an example of a text that can be replaced in the
                same space. This text was generated from the Arabic text
                generator, where you can generate such text or many other texts
                in addition to increasing the number of characters generated by
                the application. This text is an example of a text that can be
                replaced In the same space, this text has been generated from
                the Arabic text generator, where you can generate such text or
                many other texts in addition to increasing the number of
                characters generated by the application
              </p>
            </div>
            <div class="crd3">
              <button>Message</button>
            </div>
          </div>
          <hr />
          <div class="crd">
            <div class="crd1">
              <img
                class="personicon"
                src="{{asset('res/images/person.png')}}"
                alt=""
              />
              <ul class="in">
                <li class="freename">John R. McDonald</li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <span class="location">USA, California</span>
                </li>
              </ul>
              <span class="rate">
                &#x2605; &#x2605; &#x2605; &#x2605; &#x2606;
              </span>
              <span class="hellp">&hellip;</span>
            </div>
            <div class="crd2">
              <p>
                This text is an example of a text that can be replaced in the
                same space. This text was generated from the Arabic text
                generator, where you can generate such text or many other texts
                in addition to increasing the number of characters generated by
                the application. This text is an example of a text that can be
                replaced In the same space, this text has been generated from
                the Arabic text generator, where you can generate such text or
                many other texts in addition to increasing the number of
                characters generated by the application
              </p>
            </div>
            <div class="crd3">
              <button>Message</button>
            </div>
          </div>
          <hr />
          <div class="crd">
            <div class="crd1">
              <img
                class="personicon"
                src="{{asset('res/images/person.png')}}"
                alt=""
              />
              <ul class="in">
                <li class="freename">John R. McDonald</li>
                <li>
                  <i class="fa-solid fa-location-dot"></i>
                  <span class="location">USA, California</span>
                </li>
              </ul>
              <span class="rate">
                &#x2605; &#x2605; &#x2605; &#x2605; &#x2606;
              </span>
              <span class="hellp">&hellip;</span>
            </div>
            <div class="crd2">
              <p>
                This text is an example of a text that can be replaced in the
                same space. This text was generated from the Arabic text
                generator, where you can generate such text or many other texts
                in addition to increasing the number of characters generated by
                the application. This text is an example of a text that can be
                replaced In the same space, this text has been generated from
                the Arabic text generator, where you can generate such text or
                many other texts in addition to increasing the number of
                characters generated by the application
              </p>
            </div>
            <div class="crd3">
              <button>Message</button>
            </div>
          </div>
        </div>

        <div class="arch3">
          <a href="">See More <span class="arrow">&rarr;</span> </a>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="side1">
        <img class="fLogo" src="{{asset('res/images/Logo.svg')}}" alt="Logo" />
        <p>All rights reserved <sup>©</sup></p>
        <a href=""
          ><img
            src="{{asset('res/images/Social Media - Small - Dark - Insta.svg')}}"
            height="18px"
            width="18px"
        /></a>
        <a href=""
          ><img
            src="{{asset('res/images/Social Media - Small - Dark - Twitter.svg')}}"
            height="18px"
            width="18px"
        /></a>
        <a href=""
          ><img
            src="{{asset('res/images/Social Media - Small - Dark - Facebook.svg')}}"
            height="18px"
            width="18px"
        /></a>
      </div>
      <div class="center">
        <p>Sky</p>
        <a href="">About Sky</a> <br /><br />
        <a href=""> Services Sky</a><br /><br />
        <a href="">new registration</a><br /><br />
      </div>
      <div class="side2">
        <a href="">About Sky</a> <br /><br />
        <a href=""> Services Sky</a><br /><br />
        <a href="">new registration</a><br /><br />
        <a href="">new registration</a><br /><br />
      </div>
    </footer>
    <!--js -->
    <script src="{{asset('res/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('res/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('res/js/galleryHomestyle.js')}}"></script>
  </body>
</html>
