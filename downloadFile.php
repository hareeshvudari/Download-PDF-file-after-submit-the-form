<?php
// We'll be outputting a PDF
header('Content-type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="WTA_STUDIOS_Profile.pdf"');

// The PDF source is in original.pdf
readfile('http://www.wtastudios.com/WTA_STUDIOS_Profile_2017.pdf');
?> 
