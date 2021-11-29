<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <h1>Sei stato contattato da {{ $lead->name }}</h1>
                <div class="card-body">
                    <h5>la sua email è {{ $lead->email_address }}</h5>
                    <p>Con messaggio {{ $lead->message }}</p>
                </div>          
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



