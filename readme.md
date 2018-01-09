# Download PDF file after submit the form
<!-- ## The second largest heading
###### The smallest heading -->
###### Let's start
<hr>

# Download this file with below link and run in local server

 ###### https://github.com/hareeshvudari/Download-PDF-file-after-submit-the-form/archive/master.zip

<hr>

**create a html file and add this code**

'''

<form action="downloadFile.php" method="post">            

    <div class="form-group col-md-6">
      <label for="name1">Full Name </label>
      <input type="text" class="form-control" name="fullname" id="name1" required>
    </div>
    <div class="form-group col-md-6">
            <label for="name2">Phone Number </label>
            <input type="text" class="form-control" name="mobilenumber" id="name2" required>
    </div>
    <div class="form-group col-md-12">
            <label for="email">Email ID </label>
            <input type="email" class="form-control" name="emailId" id="email" required>
    </div>
    <div class="col-md-12">
                <input type="submit" class="btn button_animation btn-lg button-flats-seperate" value="Download Broucher">
    </div>     
  </form>
  
  '''


<hr>



**create downloadFile.php file , add below code**

```
<?php
// We'll be outputting a PDF
header('Content-type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="WTA_STUDIOS_Profile.pdf"');

// The PDF source is in original.pdf
readfile('http://www.wtastudios.com/WTA_STUDIOS_Profile_2017.pdf');
?> 


```

**_Run this files in Local server, (XAMPP or WAMPP etc. )_**