<?php
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['language']))
        {
            foreach ($_POST['language'] as $selected)
            echo $selected;
        }
    }
    
?>

<form action="" method="POST">
    <select name="language[]">
        <option value="PHP"> PHP </option>
        <option value="JAVA"> JAVA </option>
        <option value="C#"> C# </option>
    </select>
    <input type="submit" value="Submit" name="submit">
</form>