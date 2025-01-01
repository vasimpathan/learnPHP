<h1>1. $_REQUEST Variable </h1><hr>
<p>- Worked with both GET and POST method</p>
<p>- It used to pass data to same or another page.</p>
<p>- In below form you can change method to GET or POST.</p>
<h4>On Same Page get form data</h4>
<form method="POST" action="request_info.php" style="width:20%;border:1px solid gray;padding:10px">
    <label> Name</label> : <br>
    <input type="text" name="name"><br><br>
    <label>Age </label><br>
    <input type="text" name="age"></br><br>
    <button type="submit" name="submit" value="submit"> Submit </button>
</form>

<br><h4>On Another Page get form data</h4>
<form method="POST"  style="width:20%;border:1px solid gray;padding:10px">
    <label> Name</label> : <br>
    <input type="text" name="name"><br><br>
    <label>Age </label><br>
    <input type="text" name="age"></br><br>
    <button type="submit" name="submit1" value="submit"> Submit </button>
</form>

<?php 
if(isset($_POST['submit1']))
{
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";

    echo $_POST['name'];
    echo $_POST['age'];
}
?>
