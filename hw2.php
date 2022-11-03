<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
<form action="server.php" method="post">
  <label for="number">Enter the Number:</label><br>
  <input type="number" id="myNumber" name="myNumber"><br>
  <input type="submit" value="Submit" name="signChange">
</form> 



<form action="server.php" method="post">
<label for="mode">Choose Mode:</label>
  <select name="mode" id="mode">
    <option value="1">Celsius</option>
    <option value="2">Fahrenheit</option>
    
  </select><br>
  <label for="number">Enter the Number:</label><br>
  <input type="number" id="tempNumber" name="tempNumber"> 

  <input type="submit" value="Submit" name="TempChange">
</form> 
</body>
</html>
