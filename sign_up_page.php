<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="style1.css"> -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Onest:wght@300&display=swap');
    video.mybg {
      /* Set video properties for the background */
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }

    * {
      margin: 0;
      padding: 0;
    }

    body {
      overflow: hidden;
    }

    .div {
      /* align-self: stretch; */
      /* position: relative; */
      display: flex;
      /* min-height: 832px; */
      /* width: 99vw; */
      /* padding-bottom: 40px; */
      /* flex-direction: column; */
      /* background-image: url(images/background.png); */
      /* height: 100vh; */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    @media (max-width: 991px) {
      .div {
        max-width: 100%;
        min-height: 390px;
      }
    }

    .div-2 {
      display: flex;
      flex-direction: column;
      align-self: stretch;
      position: relative;
      display: flex;
      min-height: 832px;
      width: 100%;
      /* padding-bottom: 40px; */
    }

    @media (max-width: 991px) {
      .div-2 {
        max-width: 100%;
        min-height: 390px;
      }
    }

    .img {
      position: absolute;
      height: 100%;
      width: 100%;
      object-fit: cover;
      object-position: center;
    }

    .div-3 {
      position: relative;
      align-items: center;
      border-radius: 20px;
      align-self: center;
      display: flex;
      width: 96vw;
      padding-top: 15px;
      padding-right: 20px;
      padding-bottom: 20px;
      padding-left: 20px;
      flex-direction: column;
      background-color: #284053;
    }

    @media (max-width: 991px) {
      .div-3 {
        max-width: 100%;
      }
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

    a {
      text-decoration: none;
    }

    .div-4 {
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
      margin-top: 370px;
      margin-left: -36px;
      /* padding-top: 14px;
        padding-right: 20px;
        padding-bottom: 9px;
        padding-left: 20px; */
      flex-direction: column;
    }

    @media (max-width: 991px) {
      .div-4 {
        margin-top: 200px;
      }
    }

    .div-4 input {
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

    .a-2 {
      color: #ffffff;
      justify-content: center;
      align-items: center;
      font-family: Inter, sans-serif;
      font-size: 30px;
      font-weight: 100;
      /* align-self: center; */
      /* width: 125px; */
      /* margin-left: -10px; */
    }

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
      margin-top: 11px;
      margin-left: -36px;
      /* margin-bottom: 207px; */
      /* padding-top: 14px;
                padding-right: 20px;
                padding-bottom: 9px;
                padding-left: 20px; */
      flex-direction: column;
    }

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

    .a-3 {
      color: #ffffff;
      font-family: Inter, sans-serif;
      justify-content: center;
      font-size: 30px;
      font-weight: 100;
      align-self: center;
      text-wrap: nowrap;
      margin-left: -4px;
    }

    @media (max-width: 991px) {
      .a-3 {
        text-wrap: initial;
      }
    }

    .div-6 {
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
      margin-top: 11px;
      margin-left: -36px;
      /* margin-bottom: 207px; */
      /* padding-top: 14px;
          padding-right: 20px;
          padding-bottom: 9px;
          padding-left: 20px; */
      flex-direction: column;
    }

    .div-6 input {
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

    .div-7 {
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
      margin-top: 11px;
      margin-left: -36px;
      /* margin-bottom: 207px; */
      /* padding-top: 14px;
                padding-right: 20px;
                padding-bottom: 9px;
                padding-left: 20px; */
      flex-direction: column;
    }

    .div-7 input {
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
    .head {
      position: relative;
      margin-top: -80px;
      /* Adjust as needed */
      align-self: center;
      color: white;
      font-family: 'Onest', sans-serif;
    }
    .form {
      /* margin-top: 10vw 20vw; */
      display: flex;
      /* height: 30vh; */
      /* align-self: center; */
      /* justify-content: center;
              align-items: center; */
      margin-left: 40vw;
      margin-top: -20vh;
    }

    button {
      align-self: center;
      position: relative;
      font-weight: bold;
      font-size: large;
      border: 2px solid white;
      color: white;
      background: transparent;
      padding: 14px 28px;
      cursor: pointer;
      margin-top: 20px;
      margin-left: 60px;
      /* margin-bottom: 207px; */
      padding-top: 9px;
      padding-right: 10px;
      padding-bottom: 9px;
      padding-left: 10px;
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
  </style>
</head>

<body>
  <video autoplay muted loop class="mybg">
    <source src="earth_-_28531 (540p).mp4" type="video/mp4" />
  </video>
  <div class="div">
    <div class="div-2">
      <div class="div-3"><a href="login_page.php" class="a">Path-AR</a></div>
      <div class="form">
        <form method="POST" action="signup_process.php">
        <div class="head">
            <h1>Sign Up</h1>
          </div>
          <div class="div-4">
            <input type="text" placeholder="Enter Username" name="username" required>
          </div>
          <div class="div-5">
            <input type="text" placeholder="Enter Email" name="email" required>
          </div>
          <div class="div-6">
            <input type="password" placeholder="Create password" name="password" required>
          </div>
          <div class="div-7">
            <input type="password" placeholder="Re-Type password" name="confirm_password" required>
          </div>
          <button type="submit" name="signup" class="btn btn-three">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>