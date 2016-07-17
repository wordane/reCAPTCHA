<html>
    <head><title>How to use reCaptcha | Wordane</title>
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>  
    <body> <!-- the body tag is required or the CAPTCHA may not show on some browsers -->
        <!-- your HTML content -->
        <!-- the form will call the self php -->
        <form method="post" action="verify.php">
            <label for="name">Name:</label>
            <input name="name" required /><br/>
            <label for="age">Age:</label>
            <input name="age" required /><br/>
            <!-- This is for the captcha and we get this from google.com/recaptcha/admin -->
            <div class=g-recaptcha data-sitekey="6LdqTiUTAAAAAF0zdPvamqkyRHCumz_sDDidaOYr"></div>
            <input type="submit" />
        </form>

        <!-- more of your HTML content -->
    </body>
</html>
