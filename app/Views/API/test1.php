<?php 
$curlOptions = array(
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_VERBOSE => TRUE,
    CURLOPT_STDERR => $verbose = fopen('php://temp', 'rw+'),
    CURLOPT_FILETIME => TRUE,
);

$url = "http://stackoverflow.com/questions/tagged/java";
$handle = curl_init($url);
curl_setopt_array($handle, $curlOptions);
$content = curl_exec($handle);
// echo "Verbose information:\n", !rewind($verbose), stream_get_contents($verbose), "\n";
curl_close($handle);
echo $content;
?>