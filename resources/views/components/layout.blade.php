@props(['title' => 'ServizioDigitale'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ $styles ?? '' }}
    <title>{{ $title }} - ServizioDigitale</title>
</head>
<body>
    {{ $slot }}
</body>
</html>