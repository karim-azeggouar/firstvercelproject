<?php
$files = scandir("/tmp/");

echo "<h2>Images dans /tmp</h2>";

foreach ($files as $file) {

    $path = "/tmp/" . $file;

    $data = base64_encode(@file_get_contents($path));
    $type = @mime_content_type($path);

    echo "<p>$file</p>";
    echo "<img src='data:$type;base64,$data' width='250'><br><br>";
}
?>