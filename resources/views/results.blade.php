<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    
    <table class="table">
        @foreach($result as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->subdivision }}</td>
            <td>{{ $item->child_name }}</td>
            <td>{{ $item->child_age }}</td>
            <td>{{ $item->question }}</td>
            <td>{{ $item->answer }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>