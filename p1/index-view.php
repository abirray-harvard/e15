<!doctype html>
<html lang="en">
<head>

    <title>e15 Project 1 - String Processor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
        crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row text-center">
            <h1>e15 Project 1 - String Processor</h1>
            <form method="GET" action="process.php">
                <label for="inputString">Enter a string</label>
                <input type="text" name="inputString">
                <button type="submit">Process</button>
            </form>     
        </div>
        
        <?php if (isset($inputString)) { ?> 
            <div class="row text-center">
                <h2>Results</h2>

                <h3>String</h3>
                <p><?php echo $inputString; ?></p>
                <h3>Is palindrome?</h3>
                <p><?php echo $isPalindrome; ?></p>
                <h3>Vowel count:</h3>
                <p><?php echo $vowelCount; ?></p>
                <h3>Letter shift:</h3>
                <p><?php echo $letterShift; ?></p>
                <h3>Shuffle text:</h3>
                <p><?php echo $shuffleText; ?></p>
            </div>
        <?php } ?>
    
    </div>

</body>
</html>