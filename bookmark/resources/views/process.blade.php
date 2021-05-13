<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
        crossorigin="anonymous">
</head>
<body>
    
    <div class = "container">
        <div class = "row text-center">
            <h1>Order Details</h1>
            <hr />
            <h4>Customer Name: {{ $name }}</h4>
            <h4>Customer Phone Number: {{ $number }}</h4>
            <h4>Vaccine: {{ $vaccine }}</h4>
            <h4>Quantity: {{ $quantity }} </h4>
            <h4>Total Amount Owed: ${{ $amount }}</h4>
            <div class = "row text-left">
                <a href="{{ route('index') }}">Back to Vaccine Order Form</a>
            </div>
        </div>
    </div>

</body>
</html>