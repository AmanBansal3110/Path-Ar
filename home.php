<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PathAR</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Onest&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@600&display=swap');
      * {
        margin: 0;
        padding: 0;
      }
      .mybg {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
      }
      body {
        /* background-image: url(images/home.jpg);
        background-position: center center;
        background-repeat: no-repeat; */
        background-size: cover;
        height: 170vh;
        /* overflow: hidden; */
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
        font-family: 'Martian Mono', monospace;
        color: #fff;
        font-family: Italiana, sans-serif;
        display: inline-block;
        font-size: 30px;
        font-weight: 400;
        /* align-self: center; */
        /* width: 114px; */
        margin-top: 10px;
        margin-left: 20px;
        margin-bottom: 4px;
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
        margin-left: 10vw;
        padding: 5vw 5vw;
      }
      .box-1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 80px;
        text-align: center;
        height: 20vw;
        border: 2px solid white;
        align-self: center;
        width: 85vw;
        border-radius: 20px;
        background-image: linear-gradient(grey, white, grey);
        opacity: 0.6;
        filter: alpha(opacity=80);
        align-items: center;
        /* padding-top: 20px; */
        margin-right: 14vw;
        padding: 20px 20px;
        margin-left: 30px;
      }
      .box-1 h3{
        font-family: 'Onest', sans-serif;
        margin-bottom: 5px;
        color: #284053;
    }
    .box-1 p{
          font-family: 'Onest', sans-serif;
        color: #284053;
        font-weight: bold;
        margin-bottom: 3vh;

      }
      .heading{
        font-family: 'Merriweather', serif;
        align-self: center;
        margin: 1px 20px;
        /* color: #fff; */
        color: transparent;
            text-align: center;
            animation: effect 2s linear infinite;
            margin-left: 20vw;
            margin-right: auto;
            font-size: large;
      }
      @keyframes effect {
            0% {
                background: linear-gradient(
                        #834ec0, #47acca);
                -webkit-background-clip: text;
            }
 
            100% {
                background: linear-gradient(
                        #4fd2c5, #2934d4);
                -webkit-background-clip: text;
            }}
      .box-2 {
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        margin-top: 50px;
        height: 20vw;
        border: 2px solid white;
        align-self: center;
        width: 85vw;
        border-radius: 20px;
        background-image: linear-gradient(grey, white, grey);
        align-items: center;
        margin-right: 14vw;
        opacity: 0.6;
        filter: alpha(opacity=80);
        padding: 20px 20px;
        margin-left: 30px;
      }
      .box-2 h3{
        font-family: 'Onest', sans-serif;
        margin-bottom: 5px;
        color: #284053;
      }
      .box-2 p{
        font-family: 'Onest', sans-serif;
        color: #284053;
        font-weight: bold;
        margin-bottom: 3vh;
      }
      .row{
        display: flex;
        flex-direction: column;
        /* padding: 20px 20px; */
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
    </style>
  </head>
  <body>
  <video autoplay muted loop class="mybg">
        <source src="space_-_2381 (540p).mp4" type="video/mp4" />
      </video>
    <div class="div">
      <div class="div-2">
        <nav class="div-3">
          <a href="..." class="a">Path-AR</a>
          <ul>
            <li class="btn active"><a href="home.php">Home</a></li>
            <li class="btn"><a href="research.php">Research</a></li>
            <li class="btn"><a href="data_input.php">Data Input</a></li>
            <li class="btn"><a href="...">Visualize</a></li>
            <li class="btn"><a href="...">Learning</a></li>
          </ul>
        </nav>
      </div>
      <div class="container">
        <div class="heading">
            <h1> Welcome To Path-AR ! </h1>

        </div>
        <div class="row">
          <div class="box-1">
            <h3>Exploring the effect of water on seismic wave attenuation in the upper mantle</h3>
            <p>The mechanism facilitating the smooth movement of the oceanic lithosphere over the underlying asthenosphere (upper mantle) remains poorly understood. Recently, researchers from Japan investigated the effect of water on the seismic properties of olivine rocks, finding that water retention in the asthenosphere can induce sharp drops in shear wave velocity. This also explained other seismic changes observed at the lithosphere-asthenosphere boundary. These findings provide invaluable insights into the diverse seismic activities on Earth.</p><br>
            <h3>Crucial third clue to finding new diamond deposits</h3>
            <p>Researchers studying diamond-rich rocks from Western Australia's Argyle volcano have identified the missing third key ingredient needed to bring valuable pink diamonds to the Earth's surface where they can be mined, which could greatly help in the global hunt for new deposits.</p>
          </div>
          <div class="box-2">
            <h3>Scientific ocean drilling discovers dynamic carbon cycling in the ultra-deep-water Japan Trench</h3>
            <p>Hadal trenches, with their deepest locations situated in the so-called hadal zone, the deepest parts of the ocean in water depth >6km, are the least-explored environment on Earth, linking the Earth's surface and its deeper interior. An international team conducting deep-subsurface sampling in a hadal trench at high spatial resolution has revealed exciting insights on the carbon cycling in the trench sediment.</p>
            <h3>Climate change, flood risk, and the future of Geoscience</h3>
            <p>A big change! Previous to this I was the Director of Energy and Environment Research Institute at the University of Hull where I was working across the broad themes of sustainable energy and environmental resilience. Now I’m Pro Vice Chancellor of Research and Innovation at Loughborough University, working across the full university, which is a much larger institution than the University of Hull.</p>
          </div>
        <!-- </div>
        <div class="row">
          <div class="box-1"></div>
          <div class="box-2"></div>
        </div>
        <div class="row">
          <div class="box-1"></div>
          <div class="box-2"></div>
        </div>
      </div> -->
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
