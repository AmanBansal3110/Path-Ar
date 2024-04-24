<?php
 $externalURL = "file:///C:\\Users\\ASUS\\OneDrive%20-%20Chandigarh%20University\\Desktop\\visualize\\button.html";
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PathAR</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Young+Serif&display=swap");
      @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@600&display=swap');
      * {
        margin: 0;
        padding: 0;
      }
      body {
        background-image: url(images/space.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      a {
        text-decoration: none;
        color: #fff;
      }
      .div-3 {
        /* position: relative; */
        /* align-items: center; */
        border-radius: 20px;
        /* align-self: center; */
        /* display: inline; */
        display: flex;
        width: 96vw;
        padding-top: 15px;
        padding-right: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        /* flex-direction: column; */
        background-color: #284053;
        justify-content: space-between;
      }
      .a {
        color: #fff;
        font-family: 'Martian Mono', monospace;
        display: inline-block;
        font-size: 30px;
        font-weight: 400;
        /* align-self: center; */
        width: 20vw;
        margin-top: 10px;
        /* margin-left: -25px; */
        margin-bottom: 4px;
        margin-left: 20px;
      }
      nav ul {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      nav ul li {
        margin: 2px 10px;
        text-decoration: none;
        list-style-type: none;
        cursor: pointer;
        color: #fff;
        font-family: Italiana, sans-serif;
      }
      .container {
        display: flex;
        justify-content: center;
        flex-direction: column;
      }
      .box-1 {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        height: 60px;
        border: 2px solid white;
        align-self: center;
        width: 25vw;
        border-radius: 20px;
        background-image: linear-gradient(grey, white, grey);
        align-items: center;
        /* padding-top: 20px; */
      }
      .box-2 {
        display: flex;
        justify-content: center;
        margin-top: 25px;
        height: 60px;
        border: 2px solid white;
        align-self: center;
        width: 25vw;
        border-radius: 20px;
        background-image: linear-gradient(grey, white, grey);
        align-items: center;
        /* padding-top: 20px; */
      }
      .box-1 a {
        justify-content: center;
        align-items: center;
        font-size: larger;
        font-family: "Young Serif", serif;
        color: rgb(50, 49, 49);

        --c: rgb(50, 49, 49); /* the color */
        --b: 0em; /* border length*/
        --d: 10px; /* the cube depth */

        --_s: calc(var(--d) + var(--b));

        color: var(--c);
        border: solid #0000;
        border-width: var(--b) var(--b) var(--_s) var(--_s);
        background: conic-gradient(
              at left var(--d) bottom var(--d),
              #0000 90deg,
              rgb(255 255 255 /0.3) 0 225deg,
              rgb(255 255 255 /0.6) 0
            )
            border-box,
          conic-gradient(
              at left var(--_s) bottom var(--_s),
              #0000 90deg,
              var(--c) 0
            )
            0 100% / calc(100% - var(--b)) calc(100% - var(--b)) border-box;
        transform: translate(calc(var(--d) / -1), var(--d));
        clip-path: polygon(
          var(--d) 0%,
          var(--d) 0%,
          100% 0%,
          100% calc(100% - var(--d)),
          100% calc(100% - var(--d)),
          var(--d) calc(100% - var(--d))
        );
        transition: 0.5s;
      }
      .box-2 a {
        font-size: larger;
        font-family: "Young Serif", serif;
        color: rgb(50, 49, 49);

        --c: rgb(50, 49, 49); /* the color */
        --b: 0em; /* border length*/
        --d: 10px; /* the cube depth */

        --_s: calc(var(--d) + var(--b));

        color: var(--c);
        border: solid #0000;
        border-width: var(--b) var(--b) var(--_s) var(--_s);
        background: conic-gradient(
              at left var(--d) bottom var(--d),
              #0000 90deg,
              rgb(255 255 255 /0.3) 0 225deg,
              rgb(255 255 255 /0.6) 0
            )
            border-box,
          conic-gradient(
              at left var(--_s) bottom var(--_s),
              #0000 90deg,
              var(--c) 0
            )
            0 100% / calc(100% - var(--b)) calc(100% - var(--b)) border-box;
        transform: translate(calc(var(--d) / -1), var(--d));
        clip-path: polygon(
          var(--d) 0%,
          var(--d) 0%,
          100% 0%,
          100% calc(100% - var(--d)),
          100% calc(100% - var(--d)),
          var(--d) calc(100% - var(--d))
        );
        transition: 0.5s;
      }
      .box-1 a:hover {
        cursor: pointer;
        transform: translate(0, 0);
        clip-path: polygon(
          0% var(--d),
          var(--d) 0%,
          100% 0%,
          100% calc(100% - var(--d)),
          calc(100% - var(--d)) 100%,
          0% 100%
        );
      }
      .box-2 a:hover {
        cursor: pointer;
        transform: translate(0, 0);
        clip-path: polygon(
          0% var(--d),
          var(--d) 0%,
          100% 0%,
          100% calc(100% - var(--d)),
          calc(100% - var(--d)) 100%,
          0% 100%
        );
      }

      .btn {
        border: none;
        outline: none;
        padding: 10px 16px;
        background-color: #284053;
        cursor: pointer;
        font-size: 18px;
      }
      .active,
      .btn:hover {
        background-color: #15232d;
        color: white;
      }
      .footer {
        height: 20px;
      }
    </style>
  </head>
  <body>
    <div class="div">
      <div class="div-2">
        <nav class="div-3">
          <a href="..." class="a">Path-AR</a>
          <ul>
            <li class="btn"><a href="home.php">Home</a></li>
            <li class="btn active"><a href="research.php">Research</a></li>
            <li class="btn"><a href="data_input.php">Data</a> Input</li>
            <li class="btn"><a href="...">Visualize</a></li>
            <li class="btn"><a href="...">Learning</a></li>
          </ul>
        </nav>
      </div>
      <div class="container">
        <div class="box-1">
        <a href="http://127.0.0.1:5000">Sea-Surface Temperature</a>
        </div>
        <div class="box-2">
          <a href="...">Air Surface Temperature</a>
        </div>
        <div class="box-2">
          <a href="...">Sea Salinity</a>
        </div>
        <div class="box-2">
          <a href="...">Floods</a>
        </div>
        <div class="box-2">
          <a href="">Erosion</a>
        </div>
        <div class="box-2">
          <a href="...">Sedimentation</a>
        </div>
        <div class="box-2">
          <a href="...">Study of Rocks </a>
        </div>
      </div>
      <div class="footer"></div>
    </div>
  </body>

  <script>
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
</html>
