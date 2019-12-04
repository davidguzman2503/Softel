
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SOFTEL ADMIN</title>
  <script src="js/rest.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() { loadRest();});</script>
     
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div id="clouds">
    <h1 align="center"><img src="assets/img/sun.png"></h1>
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">


      <div id="login">

        <form method="post" action="controller/login_controller.php">
            
          <fieldset class="clearfix">

            <input type="text" name="username"  id="username" class="form-control" placeholder="ingresa usuario" required>
         <input type="password" name="password" id="password" class="form-control" placeholder="ingresa contraseña" required>
            <p><input type="submit" name="sub"  value="Login"></p>

          </fieldset>

        </form>

       

      </div> <!-- end login -->

    </div>
    <div class="bottom">  <h3></h3></div>
  
  
</body>
    
    
    <table border="1" align="center">
	<thead>
	<th style="width:120px; background-color: #5DACCD; color:#fff">Id</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
			<th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
	</thead>
	<tr>
<td  class="video-list table-list active" data-name="Search"></td>
<td  class="video-list1 table-list active" data-name="Search"></td>
<td  class="video-list2 table-list active" data-name="Search"></td>
</tr>
</table>
</html>


