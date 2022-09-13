<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Frequency</title>
</head>
<body>
    <main>
        <section>
            <?php
                use src\classes\Frequency;
                require "../classes/Frequency.php";

                if (!isset($_POST['numbers'])) {
                    echo "
                    <form action='frequency.php' method='post'>
                        <h3> Enter the numbers: (',' for separate) </h3> <br>
                        <input type='text' name='numbers'> <br>

                        <input type='submit' value='Conclude'>
                    </form>    
                    ";
                } else {
                    $itemsStr = str_replace(' ', '', htmlspecialchars($_POST['numbers'])); 
                    $items = explode(',', $itemsStr);
                    $frequency = new Frequency();
                    $result = $frequency->calculate($items);
                    echo " <h1> Result </h1> <br> <table>
                    <tr> <td> Values <td> Frequency <td> Absolute ";
                    
                    foreach ($result[0] as $key => $value) {
                        foreach ($result[1] as $valueAbs) {
                            echo "<tr> <td> $key <td> $value <td> $valueAbs </td>";
                        }
                    }
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