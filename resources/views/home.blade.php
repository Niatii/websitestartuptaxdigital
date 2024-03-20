<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-sky-600">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h1>Selamat datang di Home {{$nama}} 
    Anda adalah seorang {{$pekerjaan}}</h1>
    <div class="flex mx-12">
        <img src="{{ asset('images/1.jpg') }}" alt="images" class="w-1/4">
        <img src="{{ asset('images/2.jpg') }}" alt="images" class="w-1/4">
    </div>
</body>
</html>
   
 
