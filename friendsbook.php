<?php
<form action="index.php" method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>
$filename = 'friends.txt';
$file = fopen( $filename, "r" );
while (!feof($file)) {
    // reading file
}

// appending to file
$file = fopen( $filename, "a" );
fwrite( $file, "some string" );


<input type="text" name="nameFilter" value="
<?=$nameFilter?>">
?>
