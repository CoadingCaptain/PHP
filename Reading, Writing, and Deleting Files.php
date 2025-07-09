<?php

✅ Write to a file

 file_put_contents("panda.text", "Hello, This is pandas secrete file.");

✅ Read from a file

 echo file_get_contents("panda.text");

 Output : Hello, This is pandas secrete file.

 ✅ Delete a file

 unlink("panda.text");


 ✅ 1. fwrite

 $file = fopen("panda.text", "w");
 fwrite($file, "Hello, this is pandas secrete file.");
 fclose($file);

 ✅ 2. fread

 $file = fopen("panda.text", "r");
 echo fread($file, filesize("panda.text"));
 fclose($file);

 Output : Hello, this is pandas secrete file.

 ✅ 3. Append Mood

 $file = fopen("panda.text", "a");
 fwrite($file, "Password is 12345.");
 fclose($file);

 Output : Hello, this is pandas secrete file.Password is 12345.
