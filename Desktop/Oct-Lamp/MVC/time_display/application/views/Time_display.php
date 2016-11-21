<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Counter</title>
    <style type="text/css">
        body{
            text-align: center;
        }
        .time-block{
            font-size:24px;
            padding:20px;
            border:3px solid silver;
            width: 150px;
            margin:15px auto;
        }
    </style>
</head>
<body>
    <p>The Current time and date:
        <div class='time-block'>
			<?= $today ?>
        </div>
    </p>
</body>
</html>