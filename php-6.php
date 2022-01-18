<?php
echo $FILES["filename"]["type"];
echo $FILES["filename"]["size"];
echo $FILES["filename"]["error_log"];

if(move_uploaded_file(filetype, filesize, error_log))

?>
