<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Counter</title>
    <style type="text/css">
       
    </style>
</head>
<body>
        <div>
        <p>Thanks for submitting this form! You have submitted this form <?=$counter?> times now</p>
		
        </div>

        <legend>Submitted Information</legend>
        
             <p>
             Name: <?php echo $name; ?> 
             </p>
             <p>
             Dojo Location: <?php echo $location; ?>
            </p>
            <p>
            Favorite Language: <?php echo $language; ?>
            </p>
            <p>
            Comment: <?php echo $comment; ?>
            </p>
            <a href="/" class="btn btn-primary">Go Back</a>
    
</body>
</html>