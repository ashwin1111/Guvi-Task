<?php
require 'pdfcrowd.php';

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("ashwin1111", "241f58c0336cdebbd49d08e0aa0a967d");

    // run the conversion and write the result to a file
    $client->convertUrlToFile("http://biodata1111.000webhostapp.com/convert.html", "success.pdf");
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}
?>

<?php
echo "<br><br><br><br><br><br><br><br><br><br><br><h1><center>PDF Generated Successfully</center<br><br><br><br><br></h1>";
?>
<link rel="stylesheet" href="pdf.css" type="text/css">
<?php
echo "<center><a href='http://biodata1111.000webhostapp.com/success.pdf'>Download PDF</a></center";
?>