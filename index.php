<html>
    <head>
        <title>Send Mail</title>
    </head>

    <body>
        <form action="send.php" method='POST'>
           Email: <input type="email" name='email'><br>
           First Name: <input type="text" name='first'><br>
           Second Name: <input type="text" name='second'><br>
           Subject: <input type="text" name='subject'><br>
           Message: <input type="text" name='message'><br>
           <button type='submit' name='send'>Send</button>
        </form>
    </body>
</html>