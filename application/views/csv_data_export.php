<!DOCTYPE html>  
<html lang="en">
 <head> 
<meta charset="utf-8"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Export Health Or Option Data In CSV</title>
 </head>
 <body>
 <div class="container"> 
  <h2>Export Health Question And Option Data In CSV</h2>
  <a class="btn btn-primary" href="<?php echo base_url('Csv_export/export') ?>">Export</a>
  <br>
  <form action="<?php echo base_url('Csv_export/import') ?>" method="POST" enctype="multipart/form-data">
    <label>files</label>
    <input type="file" name="files">
    <button type="submit">Submit</button>
  </form>
  </body>
</html> 