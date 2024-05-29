<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(!empty($data) && is_array($data))
    @foreach($data as $item)
        @if(is_array($item))
            @if(isset($item['userName']))
                <h2>{{ $item['userName'] }}</h2>
            @endif
            @if(isset($item['email']))
                <h2>{{ $item['email'] }}</h2>
            @endif
            @if(isset($item['phoneNumber']))
                <h2>{{ $item['phoneNumber'] }}</h2>
            @endif
            @if(isset($item['roleName']))
                <h2>{{ $item['roleName'] }}</h2>
            @endif
        @endif
    @endforeach
@else
    <p>No data available.</p>
@endif
</body>
</html>
