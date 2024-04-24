<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Onest:wght@300&display=swap');

    * {
      margin: 0;
      padding: 0;
    }

    a {
      text-decoration: none;
    }

    .div {
      display: flex;
      min-height: 100vh;
      width: 100%;
      background: transparent;
      justify-content: center;
      /* Center horizontally */
      align-items: center;
      /* Center vertically */
      position: relative;
      overflow: hidden;
    }

    video.mybg {
      /* Set video properties for the background */
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }

    .div-2 {
      display: flex;
      flex-direction: column;
      align-self: stretch;
      position: relative;
      display: flex;
      min-height: 832px;
      width: 100%;
    }

    .div-3 {
      position: relative;
      align-items: center;
      border-radius: 20px;
      align-self: center;
      display: flex;
      width: 95vw;
      padding-top: 15px;
      padding-right: 20px;
      padding-bottom: 20px;
      padding-left: 20px;
      flex-direction: column;
      background-color: #284053;
    }

    .form {
      margin-top: 20vh;
    }

    .a {
      color: #fff;
      font-family: 'Martian Mono', monospace;
      font-size: 30px;
      font-weight: 400;
      align-self: center;
      /* width: 114px; */
      margin-top: 10px;
      margin-left: -25px;
      margin-bottom: 4px;
    }

    .head {
      position: relative;
      margin-top: 20px;
      /* Adjust as needed */
      align-self: center;
      color: white;
      font-family: 'Onest', sans-serif;
    }

    .div-4,
    .div-5 {
      position: relative;
      justify-content: center;
      align-items: center;
      border-radius: 50px;
      background: linear-gradient(131deg,
          #ffffff -460.7%,
          rgba(0, 0, 0, 0) 333.26%);
      align-self: center;
      display: flex;
      width: 390px;
      margin-top: 10px;
      margin-left: 37vw;
      flex-direction: column;
    }

    .div-4 input,
    .div-5 input {
      background: transparent;
      width: 350px;
      justify-content: center;
      align-items: center;
      border-radius: 50px;
      background: linear-gradient(131deg,
          #ffffff -460.7%,
          rgba(0, 0, 0, 0) 333.26%);
      padding-top: 14px;
      padding-right: 18px;
      padding-bottom: 9px;
      padding-left: 18px;
      flex-direction: column;
    }

    button {
      position: relative;
      font-weight: bold;
      font-size: large;
      border: 2px solid white;
      color: white;
      background: transparent;
      padding: 14px 28px;
      cursor: pointer;
      margin-top: 3vw;
      /* Adjust as needed */
      margin-left: 1vw;
      width: 200px;
      align-self: center;
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

    input::placeholder {
      font-weight: bold;
      font-size: large;
      color: #fff;
      opacity: 2;
      align-items: center;
    }

    .form {
      display: inline-block;
      text-align: center;
      /* Center text horizontally */
    }
  </style>
</head>

<body>
  <video autoplay muted loop class="mybg">
    <source src="earth_-_28531 (540p).mp4" type="video/mp4" />
  </video>
  <div class="div">
    <div class="div-2">
      <div class="div-3"><a href="home.php" class="a">Path-AR</a></div>
      <div class="form">
        <form action="signin_process.php" method="POST">
          <div class="head">
            <h1>Login</h1>
          </div>
          <div class="div-4">
            <input type="text" placeholder="E-mail" name="email" required />
          </div>
          <div class="div-5">
            <input type="password" placeholder="Password" name="password" required />
          </div>
          <button type="submit" class="btn btn-three">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>