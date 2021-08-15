<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/public/scripts/jquery-3.5.1.min.js"></script>
    <?php 
        echo '<link rel="stylesheet" type="text/css" href="/public/styles/'.$name.'.css">';
        echo '<script src="/public/scripts/'.$name.'.js"></script>';
    ?>
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php include $content_view; ?>
</body>
</html>