<form method='post'>
    <input type='text' name='myname' placeholder='inter your name'>
    <input type='submit' value='send' name='submitform'>
</form>
<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        // echo 'this is post method';
        $name=$_POST['myname'];
        echo $name;
    }
?>