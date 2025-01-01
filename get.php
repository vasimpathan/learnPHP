<h1>1. $_GET Variable </h1><hr>
<strong>Requirment : </strong>
<p> - Used to pass the data to another page.</p>
<p> - Passed data is visiable in URL bar.</p>
<p> - It is less secure than post because data is visiable in URL.</p>
<p> - Limited amount of data can be passed in URL bar.</p>
<p> - We can not pass image/document file in URL bar.</p>
<form method="GET" action="get_info.php" style="width:20%;border:1px solid gray;padding:10px">
    <label> Name</label> : <br>
    <input type="text" name="name"><br><br>
    <label>Age </label><br>
    <input type="text" name="age"></br><br>
    <button type="submit" name="submit" value="submit"> Submit </button>

</form>

