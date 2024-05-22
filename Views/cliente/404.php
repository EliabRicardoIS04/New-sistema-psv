<?php
$atras = "/proaula/Web/";
$css = "/proaula/Views/css/404.css";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="<?php echo $css; ?>">
</head>
<body>
    <div class="container">
        <h1 class="error-code">404</h1>
        <h2 class="error-message">Page Not Found</h2>
        <p class="error-description">Sorry, the page you are looking for does not exist. It might have been moved or deleted.</p>
        <a href="<?php echo $atras; ?>" class="home-link">Go to Homepage</a>
    </div>
</body>
</html>
