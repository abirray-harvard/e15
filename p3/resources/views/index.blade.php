<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Order Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
        crossorigin="anonymous">
</head>
<body>
    <div class = "container">
    @if(Auth::user())
    <h3>
        Hello {{ Auth::user()->first_name }}! id: {{ Auth::user()->id }}
    </h3>
    @endif

    <ul>
        <!-- ...Other nav links here... -->

        <li>
            @if(!Auth::user())
                <a href='/login'>Login</a>
            @else
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                </form>
            @endif
        </li>
    </ul>
        <div class = "row text-center">
            <h1>Vaccine Order Form</h1>
            <table class="table-bordered" align="center">
                <tr>
                    <td><b>Vaccine</b></td>
                    <td><b>Price</b></td>
                    <td><b>Type</b></td>
                    <td><b>Efficacy</b></td>
                </tr>
                <tr>
                    <td>Pfizer-BioNTech</td>
                    <td>$19.50</td>
                    <td>mRNA</td>
                    <td>Approximately 95%</td>
                </tr>
                <tr>
                    <td>Johnson & Johnson</td>
                    <td>$10</td>
                    <td>Adenovirus-based</td>
                    <td>72%</td>
                </tr>
                <tr>
                    <td>Moderna</td>
                    <td>$25</td>
                    <td>mRNA</td>
                    <td>95%</td>
                </tr>
            </table>
            <br />
            
            <table class="table-bordered" align="center">
                <tr>
                    <td><b>Vaccine</b></td>
                    <td><b>Age requirement</b></td>
                    <td><b>Type</b></td>
                    <td><b>Effectivity</b></td>
                    <td><b>Price</b></td>
                    <td><b>Stock</b></td>
                </tr>
                @foreach ($results->all() as $result) 
                    <!--<li>{{ $result->vaccine }}</li> -->
                    <tr>
                        <td>{{ $result->vaccine }}</td>
                        <td>{{ $result->age_required }}</td>
                        <td>{{ $result->type }}</td>
                        <td>{{ $result->effectivity }}</td>
                        <td>$ {{ $result->price }}</td>
                        <td>{{ $result->quantity }}</td>
                    </tr>
                @endforeach
                
            </table>
            @if(Auth::user())
            <?php
                echo Form::open(array('route' => 'process'));
                    
                    echo '<p>';
                    echo Form::radio('vaccine', 'pfizer', array('id' => 'vaccine-0'));
                    echo Form::label('vaccine-0', 'Pfizer-BioNTech');
                    echo '</p>';

                    echo '<p>';
                    echo Form::radio('vaccine', 'johnson', array('id' => 'vaccine-1'));
                    echo Form::label('vaccine-1', 'Johnson & Johnson');
                    echo '</p>';

                    echo '<p>';
                    echo Form::radio('vaccine', 'moderna', array('id' => 'vaccine-2'));
                    echo Form::label('vaccine-2', 'Moderna');
                    echo '</p>';

                    echo '<p>';
                    echo Form::label('Quantity: ');
                    echo Form::selectRange('quantity', 1, 5);
                    echo '</p>';

                    echo Form::label('Contact Name: ');
                    echo Form::text('name', 'John Doe');
                    echo '<br>';

                    echo Form::label('Contact Number: ');
                    echo Form::text('number', 1234567890);
                    
                    echo '<br>';    
                    echo Form::submit('Order!');
                echo Form::close();
            ?>
            @endif
            @if ($errors->any())
                <br />
                <div class="alert alert-danger" style="color:red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            @endif
        </div>
    </div>
</body>
</html>