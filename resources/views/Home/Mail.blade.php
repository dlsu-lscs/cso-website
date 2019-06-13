<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>CSO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            Sender: {{$name}} ({{$email}})
        </div>
        <div>
            Sent on: {{$date}}
        </div>
        <div>
            Type: <b>{{$type}}</b>
        </div>
        <div>
            Message: <br>
            {{$body}}
        </div>
    </body>
</html>