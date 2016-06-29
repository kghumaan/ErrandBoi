<html><center>
<head><link href="errandboi.css" rel="stylesheet" type="css/text">
<style> 
body {
    background-image: url("MidnightZen.png"), 
                      url("MidnightZen2.png");
    background-repeat:  repeat-x, 
                        repeat;
    background-color: black;
}
</style>
<meta name="keywords" content="Thanks">
<meta name="author" content="Karanvir (K.V.) Ghumaan">
<meta name="description" content="Thank you page after a request has been submitted.">
<meta name="robots" CONTENT="all">
<title>WE GOT IT</title>
</head>

<body> 
<?php
//Connecting to sql db.
$connect = mysqli_connect("my host","my user","my passwrod","my db");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (category, title, contents, tags)
VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>
  <h1 class="bet" id="div">Bet, We Got it</h1>
	<div class="mission" id="div"><h2>Thank you for your submission <?php echo $_GET["fname"]; ?>! An Errandboi has just recieved the request and will be enroute as soon as possible!</h2></div>
	<p><h4><div class="issue" id="div"> If there are any issues or complications with your request, our team will contact the following number: <?php echo $_GET["pnumber"]; ?></div></h4></center>
<h5 class="thankscontact" id="div"><center>Contact Information:
	Visit my LinkedIN Profile: <a href="https://www.linkedin.com/in/kv-ghumaan-132863a3">HERE</a><br><a href="errandboi.html">RETURN HOME</a></center></h5>

</body>
</html>