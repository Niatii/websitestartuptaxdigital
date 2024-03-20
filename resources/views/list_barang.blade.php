<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list barang</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-sky-600">
    <div class="container w-full text-center mx-12 py-12">
        <p class="text-white text-2xl">ini contoh penggunaan 
            tailwind css</p>
    </div>
    <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dataku)
                <tr>
                    <td> {{$dataku['id'] }} </td>
                    <td> {{$dataku['nama']}} </td>
                    <td> {{$dataku['harga']}} </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
</body>
</html>


