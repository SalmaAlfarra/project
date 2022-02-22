<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--CSS -->
    <link href="{{asset('res/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('res/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('res/css/FormerFreelancerstyle.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('res/css/new JobBox.css')}}">

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
        <a id="h1-a" href="/Users/AL-FAJR/Desktop/Project/gal clint/index.html">
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
        <div class="list2">
          <svg id="Home" xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20">
            <path id="Home-2" data-name="Home" d="M6.635,18.773V15.716A1.419,1.419,0,0,1,8.058,14.3h2.874a1.429,1.429,0,0,1,1.007.414,1.408,1.408,0,0,1,.417,1v3.058a1.213,1.213,0,0,0,.356.867,1.231,1.231,0,0,0,.871.36h1.961a3.46,3.46,0,0,0,2.443-1A3.41,3.41,0,0,0,19,16.578V7.867a2.473,2.473,0,0,0-.9-1.9L11.434.676A3.1,3.1,0,0,0,7.485.747L.967,5.965A2.474,2.474,0,0,0,0,7.867v8.7A3.444,3.444,0,0,0,3.456,20H5.372a1.231,1.231,0,0,0,1.236-1.218Z" fill="#151665"/>
          </svg>
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
        <div class="list1">
          <svg id="_2_User" data-name="2 User" xmlns="http://www.w3.org/2000/svg" width="19" height="17.1" viewBox="0 0 19 17.1">
            <path id="_2_Friends" data-name="2 Friends" d="M0,14.172c0-2.325,3.217-2.907,6.982-2.907,3.786,0,6.982.6,6.982,2.928S10.747,17.1,6.982,17.1C3.2,17.1,0,16.5,0,14.172Zm15.8.451c.324-2.957-2.248-4.359-2.914-4.681a.05.05,0,0,1-.032-.051.039.039,0,0,1,.035-.027,17.474,17.474,0,0,1,3.56.3,3.033,3.033,0,0,1,2.339,1.395,2,2,0,0,1,0,1.784c-.505,1.067-2.133,1.411-2.767,1.5l-.028,0A.2.2,0,0,1,15.8,14.623ZM2.362,4.525A4.556,4.556,0,0,1,6.982,0,4.556,4.556,0,0,1,11.6,4.525a4.556,4.556,0,0,1-4.62,4.524A4.556,4.556,0,0,1,2.362,4.525Zm10.67,3.856a3.865,3.865,0,0,1-.532-.05.168.168,0,0,1-.116-.261A6.111,6.111,0,0,0,12.292,1a.1.1,0,0,1-.017-.117.141.141,0,0,1,.09-.053,3.993,3.993,0,0,1,.777-.077A3.843,3.843,0,0,1,16.9,5.578a3.838,3.838,0,0,1-3.763,2.8Z" fill="#fff"/>
          </svg>
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
        <!-- <div class="arch1">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input
            type="search"
            name="search"
            placeholder="Type the job name here"
          />
          <a href="">Post a Job</a>
        </div> -->
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
              <button class="content-button" onclick="viewbutton();"><a id="h2-a1"><span class="hellp">&hellip;</span></a>
              </button>

              <div id="file-div" class="contents-items">
                <div class="option">Job Option</div>
                <hr class="hr1" />
                <div class="line1"></div>
                <ul class="items-list">
                    <li><div class="option1">
                      <svg id="Page-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                        <g id="Core">
                          <g id="block">
                            <path id="Shape" d="M11,0A11,11,0,1,0,22,11,11.032,11.032,0,0,0,11,0ZM2.2,11A8.826,8.826,0,0,1,11,2.2a8.669,8.669,0,0,1,5.39,1.87L4.07,16.39A8.669,8.669,0,0,1,2.2,11ZM11,19.8a8.669,8.669,0,0,1-5.39-1.87L17.93,5.61A8.669,8.669,0,0,1,19.8,11,8.826,8.826,0,0,1,11,19.8Z" fill="#151665" fill-rule="evenodd"/>
                          </g>
                        </g>
                      </svg>
                                            <span>Block</span>
                    </div>
                  </li>
                    <li>
                      <hr class="hr2" />
                <div class="option1">
                  <img src="{{asset('res/images/Report.svg')}}" alt="" />
                  <span>Report</span>
                </div>
                    </li>
                </ul>
              </div>            </div>
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
    <script src="{{asset('res/js/viwe-prof.js')}}"></script>
  </body>
</html>
