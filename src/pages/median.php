<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Median</title>
</head>
<body>
    <main>
        <section>
            <?php
                use src\classes\Median as Median;
                require "../classes/Median.php";

                if (!isset($_POST['numbers'])) {
                    echo "
                    <form action='median.php' method='post'>
                        <h3> Enter the numbers: (',' for separate) </h3> <br>
                        <input type='text' name='numbers'> <br>

                        <input type='submit' value='Conclude'>
                    </form>    
                    ";
                } else {
                    $itemsStr = str_replace(' ', '', htmlspecialchars($_POST['numbers'])); 
                    $items = explode(',', $itemsStr);
                    $median = new Median();
                    $result = $median->calculate($items);
                    echo "
                        <h1> Result: </h1>
                        <strong> $result </strong>
                    ";
                }
            ?>
        </section>
    </main>
                
    <footer>
        <fieldset> <legend> Info </legend>
                Developed by Julio C. Moreira (2022)
        </fieldset>
    </footer>
</body>
</html>