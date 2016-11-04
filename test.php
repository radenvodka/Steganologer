<?php
require("example.php");

$gambar ="bunglon.jpg";

echo SteganologerReader($gambar);
echo "<hr>";

echo "<pre>";
 print_r(exif_read_data($gambar));
echo "</pre>";