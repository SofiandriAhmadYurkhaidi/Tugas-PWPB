<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>CSS3</title>
  <style type="text/css" media="all">
    
    body{
      margin: 0px;
    }
    
    .menu{
      width: 80%;
      height: 7%;
      background-color: bisque;
      margin: auto;
      text-align: right;
      padding-top: 10px;
      padding-right: 20px;
    }
    .menu a{
      font-family: Courier New, Courier, Monospace;
      color: blue;
      text-decoration: none;
    }
    .menu:hover{
      font-family: Courier New, Courier, Monospace;
      color: black;
    }
    
    .banner{
      width: 80%;
      height: 20%;
      background-color: purple;
      margin: auto;
    }
    
    .body{
      width: 80%;
      height: 40%;
      background-color: yellow;
      margin: auto;
    }
    #b_left{
      width: 30%;
      height: 100%;
      background-color: cyan;
      float: left;
    }
    Li{
      line-height: 60px;
      margin-top: 10px;
      margin-left: 10px;
    }
    #b_right{
      width: 70%;
      height: 100%;
      background-color: darkkhaki;
      float: left;;
    }
    
    .footer{
      width: 80%;
      height: 7%;
      background-color: darkgrey;
      margin: auto;
      padding-right: 20px;
    }
    #f_left{
      width: 30%;
      height: 100%;
      background-color: yellow;
      float: left;
    }
    #f_right{
      width: 70%;
      height: 100%;
      background-color: darkgrey;
      text-align: right;
      float: right;
    }
    #f_right a{
      text-decoration: none;
      font-family: Courier New, Courier, Monospace;
      color: blue;
    }
    #f_right:hover{
      font-family: Courier New, Courier, Monospace;
      color: black;
    }
 
  </style>
</head>
<body>
  
  <div class="menu">
    <a href="">Home</a>&nbsp;
    <a href="">Profile</a>&nbsp;
    <a href="">Contact</a>
  </div>
  
  <div class="banner"></div>
  
  <div class="body">
    <div id="b_left">
        <Li>Name</Li>
        <Li>Profile</Li>
        <Li>Contact</Li>
        <Li>About</Li>
    </div>
    <div id="b_right">
      <p style="margin-left: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  
  <div class="footer">
    <div id="f_left">
       
    </div>
    <div id="f_right">
       <a href="">Home</a>&nbsp;
       <a href="">about</a>&nbsp;
       <a href="">Contact</a>
    </div>
  </div>
  
</body>
</html>