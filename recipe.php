<!DOCTYPE html>
<html>

<head>
    <title>Recipe Details</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .recipe-details {
            padding: 40px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .recipe-details h2 {
            font-family: 'Arial', sans-serif;
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .recipe-details img {
            max-width: 400px;
            height: auto;
            margin-bottom: 20px;
        }

        .recipe-details p {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .recipe-details h3 {
            font-family: 'Arial', sans-serif;
            font-size: 22px;
            color: #333;
            margin-bottom: 10px;
        }

        .recipe-details .recipe-content {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: #666;
            text-align: left;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php include 'navbar.php'; ?>
        <div class="recipe-details">
            <?php
            if (isset($_GET['name']) && isset($_GET['image']) && isset($_GET['description']) && isset($_GET['recipe'])) {
                $name = urldecode($_GET['name']);
                $image = urldecode($_GET['image']);
                $description = urldecode($_GET['description']);
                $recipe = urldecode($_GET['recipe']);

                echo '<h2>' . $name . '</h2>';
                echo '<img src="' . $image . '" alt="' . $name . '">';
                echo '<p>' . $description . '</p>';
                echo '<h3>Recipe:</h3>';
                echo '<div class="recipe-content">' . $recipe . '</div>';
            } else {
                echo 'Recipe details not found.';
            }
            ?>
        </div>
        <?php include 'footer.php'; ?>
    </body>

</html>