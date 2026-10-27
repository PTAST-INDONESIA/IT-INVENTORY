<!DOCTYPE html>
<html>
<head>
    <title>Countries</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>

<h2>🌍 Daftar Negara</h2>

<table>
    <thead>
        <tr>
            <th>Flag</th>
            <th>Code</th>
            <th>Country</th>
            <th>Capital</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($countries as $c)
        <tr>
            <td style="font-size:20px">{{ $c['emoji'] }}</td>
            <td>{{ $c['code'] }}</td>
            <td>{{ $c['name'] }}</td>
            <td>{{ $c['capital'] ?? '-' }}</td>
            <td>
                <a href="{{ route('countries.show', $c['code']) }}">
                    Detail
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
