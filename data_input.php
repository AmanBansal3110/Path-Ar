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
      box-sizing: border-box;
    }

    body {
      background-image: url(images/data\ input_bg.png);
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      font-family: 'Martian Mono', monospace;
    }

    a {
      text-decoration: none;
      color: #fff;
    }

    .div-3 {
      border-radius: 20px;
      display: flex;
      width: 96vw;
      padding: 15px 20px;
      background-color: #284053;
      justify-content: space-between;
    }

    .a {
      color: #fff;
      font-size: 30px;
      font-weight: 400;
      margin-top: 10px;
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
      font-size: 18px;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 70vh;
    }

    .input-container {
      margin: 10px 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .input-label {
      color: white;
      margin-bottom: 5px;
      font-size: 18px;
    }

    .input-field {
      background: transparent;
      border: 2px solid white;
      border-radius: 20px;
      width: 50%;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      text-align: center;
    }

    #data_type {
      height: 50px;
      width: 50%;
      border: 2px solid white;
      border-radius: 20px;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      text-align: center;
    }

    input[type="file"] {
      display: none;
    }

    .file-label {
      background-color: #284053;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
      margin-top: 10px;
    }

    .btn-1 {
      background-color: #284053;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      font-size: 18px;
      cursor: pointer;
      margin-top: 20px;
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
          <li class="btn"><a href="research.php">Research</a></li>
          <li class="btn active"><a href="data_input.php">Data</a> Input</li>
          <li class="btn"><a href="">Visualize</a></li>
          <li class="btn"><a href="">Learning</a></li>
        </ul>
      </nav>
    </div>
    <div class="container">
      <form action="store_data.php" method="POST" enctype="multipart/form-data">
        <div class="input-container">
          <label for="name" class="input-label">Name:</label>
          <input type="text" name="name" id="name" class="input-field" required />
        </div>
        <div class="input-container">
          <label for="email" class="input-label">Email:</label>
          <input type="email" name="email" id="email" class="input-field" required />
        </div>
        <div class="input-container">
          <label for="title" class="input-label">Title:</label>
          <input type="text" name="title" id="title" class="input-field" required />
        </div>
        <div class="input-container">
          <label for="data_type" class="input-label">Data Type:</label>
          <select id="data_type" name="data_type" required>
            <option value="csv">CSV File</option>
            <option value="nc">NC File</option>
          </select>
        </div>
        <div class="input-container">
          <label for="file" class="file-label">Select a file:</label>
          <input type="file" name="file_upload" id="file" required />
        </div>
        <button type="submit" class="btn-1">Submit</button>
      </form>
    </div>
    <div class="footer"></div>
  </div>
</body>

</html>
