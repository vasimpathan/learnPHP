
<?php 
echo "<p>Superglobal is the one of the important points which helps us to to send data from one file to another file.</p>";
echo "<p>Below are some of the superglobal variables</p>";

echo '
<p><b>$_GET</b> - Retrieves data sent via URL query string (GET method). <a href="section.php?page=get.php">View Example</a></p>
<p><b>$_POST</b> - Retrieves data sent via HTTP POST method (usually from forms).<a href="section.php?page=post.php">View Example</a></p>
<p><b>$_REQUEST</b> - Retrieves data from both $_GET, $_POST, and $_COOKIE.<a href="section.php?page=request.php">View Example</a></p>
<p><b>$_SERVER</b> - Provides information about the server environment and current request.</p>
<p><b>$_COOKIE</b> - Retrieves values stored in cookies sent by the client.</p>
<p><b>$_SESSION</b> - Stores and retrieves session data across multiple pages for a user.</p>
<p><b>$_FILES</b> - Retrieves information about files uploaded via HTTP POST.<a href="section.php?page=files.php">View Example</a></p>';

?>


