<!-- <!doctype html> // html email
<html lang-"en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X_UA-Compatible"
        content="ie=edge"
    >
    <title>Contact</title>
</head>

<body>
    <h1>It works again!</h1>
    <p>It sounds like you want to make an {{ $topic }}.</p>
</body>
</html> -->

@component('mail::message')
# Hello!
This message is to confirm your appointment.
Don't forget:
- thing one
- thing two 
- and especially thing three

@component('mail::button', ['url' => 'https://www.firstyearwriting.com'])
    Visit firstyearwriting
@endcomponent

@endcomponent