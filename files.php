<h1>2. $_FILES Variable </h1><hr>
<p> - Synatx : $_FILES[file_name]</p>
<p> - it gives name, tmp_name, type, size</p>
<p> - to upload image in folder we use <b>move_uploaded_file(tmp_name, folder_path)</b><br>
<form method="POST" style="width:15%;border:1px solid gray;padding:10px" enctype="multipart/form-data">
    <label> Upload Image </label><br>
    <input type="file" name="image"><br><br>
    <button type="submit" name="submit" value="submit">Submit</button>
</form>

<?php 
if(isset($_POST['submit']))
{
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];


    echo $file_name . "<br>";
    echo $tmp_name . "<br>";
    echo $file_size . "<br>";
    echo $file_type . "<br>";

    if(move_uploaded_file($tmp_name, 'uploads/'.$file_name))
    {
        echo "File uploaded succcessfully";
    }
}
?>