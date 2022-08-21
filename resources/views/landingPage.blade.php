<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
    @livewireStyles
</head>
<body class=" bg-slate-50 h-screen w-screen flex flex-col justify-center items-center content-around">
    @livewire('landing-forme')
    @livewire('landin-counter')

    @livewireScripts
</body>
</html>
