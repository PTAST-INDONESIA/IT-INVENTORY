<!DOCTYPE html>
<html>
<head>
    <title>Country Detail</title>
</head>
<body>

<a href="/countries">← Back</a>

<h2>{{ $country['emoji'] }} {{ $country['name'] }}</h2>

<ul>
    <li><b>Code:</b> {{ $country['code'] }}</li>
    <li><b>Native:</b> {{ $country['native'] }}</li>
    <li><b>Capital:</b> {{ $country['capital'] ?? '-' }}</li>
    <li><b>Currency:</b> {{ $country['currency'] ?? '-' }}</li>
    <li><b>Phone Code:</b> +{{ $country['phone'] }}</li>
</ul>

</body>
</html>

