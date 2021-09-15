<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>TugasCSS2</title>
  <style type="text/css" media="all">
    body{
      margin: 0px;
      padding: 0;
    }
    
    .form{
      border-style: ridge;
			border-width: 3px;
			border-color: blue;
			width: 400px;
			margin: auto;
			margin-top: 50px;
			height: 350px;
    }
    
    input{
      border: none;
			outline: none;
			width: 320px;
			border-bottom: 1px solid blue;
			padding: 10px 0px;
			font-size: 20px;
			margin-bottom: 20px;
    }
    
    .head{
      font: bold;
    }
    
    .main{
      margin-left: 30px;
			margin-top: 20px;
    }
    
    button[type=submit], button[type=reset] {
      background: #4CAF50;
			outline: none;
			width: 320px;
			border: 1px solid ;
			font-size: 18px;
			letter-spacing: 5px;
			padding: 10px;
			cursor: pointer;
			margin: 5px;
    }
    
  </style>
</head>
<body>
  <div class="form">
    
    <div class="head">
      <h1 align="center">Log in</h1>
    </div>
  
    <div class="main">
      <form>
        <input type="text" name="Username" placeholder="Username" id="1">
        <input type="password" name="Password" placeholder="Password" id="2">
        <button type="submit" name="Submit" value="Proses">Submit
        <button type="reset" value="Reset">Reset
      </form>
    </div>
    
  </div>
</body>
</html>