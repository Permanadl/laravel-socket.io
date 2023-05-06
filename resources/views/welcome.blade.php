<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var socket = io('http://127.0.0.1:3000')

        socket.on('test', function(data){
            console.log(data);
        })
    </script>
</body>
</html>