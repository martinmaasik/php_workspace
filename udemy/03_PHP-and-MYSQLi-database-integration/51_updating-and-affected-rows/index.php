<?php
include('../connecting.php');

$updateUser = $db->query("UPDATE users SET last_name = 'Smith' WHERE id = 1");
var_dump($updateUser);

// annab booleani. true kui midagi muudeti.

echo "{$db->affected_rows} rows were updated."

// kui midagi ei muudeta / varasemalt juba oli nii, siis affected rows on ka 0
?>
