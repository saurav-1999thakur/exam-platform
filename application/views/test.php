<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>normal Form</title>
</head>
<body>
    <?php //echo validation_errors(); // it will show all error at one go?>
    <form action="insert" method="post">
        <label> Name</label>
        <input type="text" name="name"> 
        <span style="color:red"><?php echo form_error('name'); ?></span>
        <br><br>
        <label>email</label>
        <input type="email" name="email"> 
        <span style="color:red"><?php echo form_error('email'); ?></span>
        <br><br>
        <label>contact</label>
        <input type="number" name="contact">
        <span style="color:red"><?php echo form_error('contact'); ?></span>
        <br><br>
        <label>company</label>
        <input type="text" name="company">
        <span style="color:red"><?php echo form_error('company'); ?></span>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>