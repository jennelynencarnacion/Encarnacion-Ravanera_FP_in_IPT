<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tourism Website - Tours</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://kit.fontawesome.com/f72c0a3fae.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header" id="header">
			
			<nav>
				<h2 class="logo">Tour<span>ism</span><h2></h2>
          <ul>
            <li><a href="code.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="destination.php">Destinations</a></li>
            <li><a href="contact.php">Contact Us</a></li>
              
          </ul>

				
				
			</nav>
            
</div>
<!-- -------contact---------- -->

  <div id="contact">
      <div class="container">
          <div class="row">
              <div class="contact-left">
                  <h1 class="sub-title"><span>CONTACT</span> US</h1>
                  <p><i class="fa-solid fa-paper-plane"></i>ericaravanera@gmail.com  <br>jennelynencarnacion05@gmail.com</p>
                  <p><i class="fa-sharp fa-solid fa-phone"></i> 09704790763<br>  09512434921</p>
                  <div class="social-icons">
                      <a href="https://www.facebook.com/jennelyn.encarnacion.23"><i class="fa-brands fa-facebook"></i></a>
                      <a href="https://twitter.com/ecca2_si"><i class="fa-brands fa-twitter-square"></i></a> 
                      <a href="https://instagram.com/eccaxxshie?igshid=ZGUzMzM3NWJiOQ=="><i class="fa-brands fa-instagram"></i></a>
                      <a href="https://t.me/Jjnnlynnn"><i class="fa-brands fa-telegram"></i></a>
                  </div>  

                  <div class="contact-right">
                    <form method="POST" action="process_form.php" onsubmit="return validateForm()">
                       
                        <input type="text" id="name" placeholder ="Your Name" name="name" required>
                        <input type="email" id="email" placeholder ="Your Email" name="email" required>
                        <textarea id="message" name="message"  placeholder ="Your Message!" name="message" required></textarea>
                        <input type="submit" value="Send">
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

<script>
function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }

  if (email == "") {
    alert("Email must be filled out");
    return false;
  }

  if (message == "") {
    alert("Message must be filled out");
    return false;
  }

  // You can add additional validation checks for the email format and message length, etc.

  return true;
}
</script>

	</main>
	<footer>
		<p>&copy; 2023 Marinduque Tourism Website</p>
	</footer>
</body>
</html>