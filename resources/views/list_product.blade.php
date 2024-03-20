<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout/list')

    @section('title', 'Ini adalah judul pada meta')
    @section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
            </tr>
        </thead>
        @foreach($data as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['produk'] }}</td>
            <!-- Data lainnya -->
        </tr>
        @endforeach
    </table>
    @endsection
</body>
</html>