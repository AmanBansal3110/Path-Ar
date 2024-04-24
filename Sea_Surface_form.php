<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     a {
        text-decoration: none;
        color: #fff;
      }
      body {
        background-image: url(images/space.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
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
      .container{
        /* align-self: center; */
        /* align-items: center;
        justify-content: center; */
        margin-left: 40vw;
        margin-top: 10vw;
      }
      .form{
        display: flex;
        flex-direction: column;
      }
      .input{
        width: 13vw;
        height: 3vh;
        margin: 1vw 2vw;
        margin-bottom: 20px;
        padding: 4px 4px;
      }
      h2{
        color: #fff;
      }
      button {
      /* position: relative; */
      font-weight: bold;
      font-size: large;
      border: 2px solid white;
      color: white;
      background: transparent;
      padding: 11px 9px;
      cursor: pointer;
      margin-left: 10px;
      margin-top: 1vw;
      /* Adjust as needed */
      /* margin-left: 5vw; */
      /* width: 5vw; */
      /* align-self: center; */
    }
      button{
        width: 5vw;
        margin-left: 5vw;
      }
      button:hover {
      cursor: pointer;
      background-color: #fff;
      color: black;

    }

    .btn-three {
      color: #FFF;
      transition: all 0.5s;
      position: relative;
    }

    .btn-three::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      background-color: rgba(255, 255, 255, 0.1);
      transition: all 0.3s;
    }

    .btn-three:hover::before {
      opacity: 0;
      transform: scale(0.5, 0.5);
    }

    .btn-three::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      opacity: 0;
      transition: all 0.3s;
      border: 1px solid rgba(255, 255, 255, 0.5);
      transform: scale(1.2, 1.2);
    }

    .btn-three:hover::after {
      opacity: 1;
      transform: scale(1, 1);
    }
    </style>
</head>
<body>
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
        <div class="form">
            <h2>Enter the number of Days </h2>
            <input type="text" class="input">
            <button type="submit" class="btn btn-three">Submit</button>
        </div>
      </div>
    </div>
</body>
</html>