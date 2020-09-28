<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
     <meta charset="utf-8">
<!--     <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/download.css"> -->
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
     <p>
         <label>Notes</label>
         <input type="radio" name="select" value="Notes">
         <label>Ebook</label>
         <input type="radio" name="select" value="Ebook">
         <label>Question paper</label>
         <input type="radio" name="select" value="Question paper">
     </p>
     <p>
        <label >Subject:</label>
        <input type="text" name="subject" >
    </p>
    <p>
        <label >Topic:</label>
        <input type="text" name="topic">
    </p>
    <p>
        <label >Email Address:</label>
        <input type="text" name="email">
    </p>
    
    <p>
        <label>Uploading file</label>
    <input type="file" name="file">
    </p>
    <p>
        <input type="submit" name="upload" value="Submit">
    </p>
</form>
</body>
</html>