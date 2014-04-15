<html>
<body>
<script>
   setTimeout(function () {
       window.location.href = "http://educationforliberia.org/thankyou.html"; //will redirect to your blog page (an ex: blog.html)
    }, 2000); //will call the function after 2 secs.
</script>
Thank you, <b><?php echo $_POST["name"]; ?> </b>we have saved your email. 
Your email address is: <?php echo $_POST["email"]; ?>
<?php
	mail("girish@educationforliberia.org","EFL Website Subscriber","Please add me to email list",$_POST["email"]);
	mail("steven@educationforliberia.org","EFL Website Subscriber","Please add me to email list",$_POST["email"]);
?>
</body>
</html>