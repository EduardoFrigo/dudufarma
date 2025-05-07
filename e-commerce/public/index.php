<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

    use App\Helpers\ViewHelper;
    include ViewHelper::userView('partials/nav.php');
    

require_once __DIR__ . '/../Routes/web.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index (se vc ta aqui é pq fudeu)</title>
    
</head>
<body>
    <main>
        <div class="container">
        <?php
        Router::dispatch();
        
        
        ?>
        </div>
    </main>
</body>
</html>