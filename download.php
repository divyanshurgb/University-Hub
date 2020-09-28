<!DOCTYPE html>
<html>
<head>
	<title>U|Hub &mdash; Search n Learn</title>
	 <meta charset="utf-8">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/download.css">
</head>
<body>


	<?php include("include/navbar.html") ?>
  <div style="height: 113px;"></div>
    <div>
      <div class="site-blocks-cover bg-img" style="background-image: url(images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"></div>
         <div class="container bg-text">
           <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
             <h1>Download notes</h1>
            </div>
            <div class="grid-container">
            <div class="grid-item">
              <form name="myform" id="myForm">
              <select id="stateSel" size="1">
              <option  value="1" selected="selected">Select semester</option> 
              </select>
              </form>
            </div>
            <div class="grid-item">
            <form name="myform" id="myForm">
              <select  name="opttwo" id="countySel" size="1">
                  <option value="2" selected="selected">Select branch first</option>
              </select>
            </form>
            </div>
            <div class="grid-item">
            <form name="myform" id="myForm">
              <select name="optthree" id="citySel" size="1">
              <option value="3" selected="selected">Select subject first</option>
              </select>
            </form>
            </div>  
            </div>
          </div>
          <br>
          <button onclick="myFunction()" class="button">Submit</button>
        </div>
      </div> 

<!-- <table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>Topic</th>
    <th>size (in mb)</th> -->
    <!-- <th>Downloads</th> -->
    <!-- <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['file_name']; ?></td>
      <td><?php echo $file['topic']; ?></td>
      <td><?php echo floor($file['size'] ) . ' MB'; ?></td> -->
     <!--  <td><?php echo $file['downloads']; ?></td> -->
    <!--   <td><a href="downloading.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table> -->
<p id="demo"></p>

	<?php include("include/footer.html") ?>

  <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>
  <script   src="js/download1.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>

</html>

 