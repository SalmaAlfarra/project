<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS -->
    <link href="{{asset('res/css/all.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('res/css/style.css')}}" rel="stylesheet" >
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('res/images/Logo.svg')}}" type="image/x-icon" />

    <title>Homepage Freelancing</title>
  </head>
  <body>
    <header class="h">
      <div class="h1">
        <img class="Logo" src="{{asset('res/images/Logo.svg')}}" alt="Logo">
        <a id="h1-a" href="/Users/AL-FAJR/Desktop/Project/gal1/index.html">Gallery</a>
        <a id="main" href="">Find Work</a>
        <a id="h1-a" href="">Forum</a>
        <a id="h1-a" href="">Store</a>
      </div>


      <div class="h2">
        <a id="h2-a" href=""><img src="{{asset('res/images/mes.svg')}}" height="10px" width="auto"></a>
        <a id="h2-a" href=""><img src="{{asset('res/images/not.svg')}}" height="25px" width="auto"></a>
        <button class="content-button" onclick="viewbutton();"><a id="h2-a1"><img id="profile" src="{{asset('res/images/profile.png')}}" height="45px" width="45px"></a>
        </button>

        <div id="file-div" class="contents-items">
          <ul class="items-list">
              <li><a href="Profile – 1.html">Profile</a></li>
              <li>Account</li>
              <li>Setting</li>
              <li>Log Out</li>
          </ul>
      </div>
      </div>

    </header>
    <main>
      <div id="navi">
        <a id="select-nav" href="">Search for jobs</a>
        <a id="a" href="my Proposal.html">my Proposal</a>
        <a id="a" href="my jobs.html">my jobs</a>
        <a id="a" href="Reports (Empty).html">Reports</a>
        <a id="a" href="Message.html">Message</a>
      </div>
      <div class="Filter">
        <h2>Filter By</h2>
        <h3>Sort</h3>
        <select name="" id="select">
          <option value="">Newest</option>
          <option value=""></option>
        </select>
        <h3>Experience level</h3>
        <div id="opthen">

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Entry Level
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Intermediate
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Expert
            </label>
          </div>
         </div>
        <h3>Job Type</h3>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled checked>
          <label class="form-check-label" for="flexCheckDisabled">
            Disabled checkbox
          </label>
        </div>
        <div id="opthen">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Less than $50
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              $50 - $500
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              $500 - $1k
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              $1k - $5k
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              $5k+
            </label>
          </div>
        </div>
        <h3>Number of Proposals</h3>
        <div id="opthen">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Less than 5
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              5 to 10
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              10 to 20
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              20 to 30
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              30 to 50
            </label>
          </div>
        </div>
        <h3>Client Location</h3>
        <select name="" id="select">
          <option value="">Select Client Location</option>
          <option value=""></option>
        </select>
        <h3>Categories of work</h3>
        <div id="opthen">
          <input type="checkbox" name="" class="form-check-input"> <h5>Architecture</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>Architecture Concept</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>Architecture Photography</h5><br>
          <input type="checkbox" name="" class="form-check-input"> <h5>Architecture Visualization</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>Interior Design</h5><br>
          <input type="checkbox" name="" class="form-check-input"> <h5>Exterior Design</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>Landscaping Design</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>Urban planning</h5><br>
          <input type="checkbox" name="" class="form-check-input"> <h5>Layout Design</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>SketchUp</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>3D Design</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>2D Design</h5><br>
          <input type="checkbox" name="" class="form-check-input"><h5>render</h5>
        </div>
      </div>

      <div id="search">
        <img id="svg-img" src="{{asset('res/images/Search.svg')}}" alt="" height="25px" width="auto">
        <input type="search" name="" id="in-search">
      </div>
      <div id="componnt">
        <div id="jop">
          <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
          </svg>
          <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
          <div id="feltar-option">
            <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
            <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
            <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
            <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
          </div>
          <br>
            <b id="descrb" >
              This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
            </b>
          <br>
            <div id="catogr">
              <span id="type-catogr">Analytics and creative thinking</span>
              <span id="type-catogr">Garden Design</span>
              <span id="type-catogr">render</span>
            </div>
        </div>
        <div id="jop">
          <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
          </svg>
          <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
          <div id="feltar-option">
            <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
            <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
            <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
            <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
          </div>

          <br>
            <b id="descrb" >
              This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
            </b>
          <br>
            <div id="catogr">
              <span id="type-catogr">Analytics and creative thinking</span>
              <span id="type-catogr">Garden Design</span>
              <span id="type-catogr">render</span>
            </div>
        </div>
        <div id="jop">
          <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
          </svg>
          <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
          <div id="feltar-option">
            <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
            <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
            <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
            <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
          </div>

          <br>
            <b id="descrb" >
              This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
            </b>
          <br>
            <div id="catogr">
              <span id="type-catogr">Analytics and creative thinking</span>
              <span id="type-catogr">Garden Design</span>
              <span id="type-catogr">render</span>
            </div>
        </div>
        <div id="jop">
          <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
          </svg>
          <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
          <div id="feltar-option">
            <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
            <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
            <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
            <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
          </div>

          <br>
            <b id="descrb" >
              This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
            </b>
          <br>
            <div id="catogr">
              <span id="type-catogr">Analytics and creative thinking</span>
              <span id="type-catogr">Garden Design</span>
              <span id="type-catogr">render</span>
            </div>
        </div>
        <div id="jop">
          <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
          </svg>
          <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
          <div id="feltar-option">
            <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
            <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
            <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
            <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
          </div>

          <br>
            <b id="descrb" >
              This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
            </b>
          <br>
            <div id="catogr">
              <span id="type-catogr">Analytics and creative thinking</span>
              <span id="type-catogr">Garden Design</span>
              <span id="type-catogr">render</span>
            </div>
        </div>
        <div id="jop">
          <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
          </svg>
          <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
          <div id="feltar-option">
            <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
            <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
            <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
            <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
          </div>

          <br>
            <b id="descrb" >
              This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
            </b>
          <br>
            <div id="catogr">
              <span id="type-catogr">Analytics and creative thinking</span>
              <span id="type-catogr">Garden Design</span>
              <span id="type-catogr">render</span>
            </div>
        </div>
        <div id="jop">
          <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
          </svg>
          <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
          <div id="feltar-option">
            <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
            <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
            <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
            <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
            <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
          </div>

          <br>
            <b id="descrb" >
              This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
            </b>
          <br>
            <div id="catogr">
              <span id="type-catogr">Analytics and creative thinking</span>
              <span id="type-catogr">Garden Design</span>
              <span id="type-catogr">render</span>
            </div>
        </div>
          <div id="see-more">
            <div id="jop">
              <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
                <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
              </svg>
              <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
              <div id="feltar-option">
                <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
                <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
                <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
                <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
                <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
                <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
              </div>
              <br>
                <b id="descrb" >
                  This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
                </b>
              <br>
                <div id="catogr">
                  <span id="type-catogr">Analytics and creative thinking</span>
                  <span id="type-catogr">Garden Design</span>
                  <span id="type-catogr">render</span>
                </div>
            </div>
            <div id="jop">
              <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
                <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
              </svg>
              <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
              <div id="feltar-option">
                <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
                <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
                <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
                <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
                <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
                <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
              </div>

              <br>
                <b id="descrb" >
                  This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
                </b>
              <br>
                <div id="catogr">
                  <span id="type-catogr">Analytics and creative thinking</span>
                  <span id="type-catogr">Garden Design</span>
                  <span id="type-catogr">render</span>
                </div>
            </div>
            <div id="jop">
              <a href="Details Job.html" ><span id="addres">An architect is required to do urban planning for a garden</span> </a> <svg id="favr" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
                <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"></path>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
              </svg>
              <br> <img src="{{asset('res/images/Time.svg')}}" alt="" height="12px" width="auto"> <label id="date-space">5 minutes ago</label> <br>
              <div id="feltar-option">
                <div id="cent"><img src="{{asset('res/images/Fixed-Price.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Job Type</label>  </div>
                <div id="cent"><img src="{{asset('res/images/Experience level.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Intermediate </label>   </div>
                <div id="cent"><img src="{{asset('res/images/Budget.svg')}}" alt="" height="14px" width="auto"> <span id="date-feltar">Budget: <label for="">$300</label></span> </div>
                <div id="cent"><img src="{{asset('res/images/Proposals.svg')}}" alt="" height="12px" width="auto"> <span id="date-feltar">Proposals: <label for=""> 5 to 10</label></span> </div>
                <div id="cent"><img src="{{asset('res/images/Payment verified.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">Payment unverified</label></div>
                <div id="cent"><img src="{{asset('res/images/Location.svg')}}" alt="" height="12px" width="auto"> <label id="date-feltar">USA</label></div>
              </div>

              <br>
                <b id="descrb" >
                  This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application. This text is an example of a text that can be replaced In the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application
                </b>
              <br>
                <div id="catogr">
                  <span id="type-catogr">Analytics and creative thinking</span>
                  <span id="type-catogr">Garden Design</span>
                  <span id="type-catogr">render</span>
                </div>
            </div>
          </div>

      </div>

      <div class="more">
        <button type="submit" id="mor" href="#"><span>See More  </span><img src="{{asset('res/images/Arrow - Right.svg')}}" height="12px" width="13px"></button>
      </div>
      <br>
    </main>
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
    <script src="{{asset('res/js/popup.js')}}"></script>
    <script src="{{asset('res/js/script.js')}}"></script>
  </body>
</html>
