<!DOCTYPE html>

<html>

  <head>
    <title> Submission End Page </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
    <div id="container">
      <div id="header">
        <h1> Form Submission End </h1>
      </div> 
      <div id="content">
        <div id="nav">
          <h3>Navigation</h3>
          <ul>
            <li> <a href="index.html">Home</a> </li>
            <li> <a href="about.html"> About</a> </li>
            <li> <a  href="contact.html"> Contact</a> </li>
            <li> <a class="selected" href="form.html"> Form </a> </li>
        </div>

        <div id="main">
          <h2> Form Submission End </h2>
          <?php
            $name = $_POST["name"];
            echo $name;
          ?>
          <p> Please go to another page, I hate it here. </p>
          <p> I don't need another person reminding me of my suffering </p>
        </div>

      </div>

      <div id="footer">
        Copyright &copy; 2020 Chenjia Ni
      </div> 
    </div>
  </body>

</html>