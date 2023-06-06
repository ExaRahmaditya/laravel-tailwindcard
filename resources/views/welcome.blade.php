<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="font-bold text-3xl">Daftar Makanan</h1>

    {{-- <ul>
        @foreach ($makanans as $makanan)
            <img src={{ $makanan->gambar }}
            width="100" />

            <li>{{ $makanan->nama }} - Rp. {{
            number_format($makanan->harga) }}</li>
        @endforeach   
        </ul>  --}}


    <ul>
        @foreach ($makanans as $makanan)
       <div class="flex">
        <div class="max-w-sm rounded overflow-hidden shadow-lg flex-1">
            <img class="w-full" src={{ $makanan->gambar}}>
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">{{ $makanan->nama }}</div>
              <div class="text-gray-700 text-base">
                Rp. {{ number_format($makanan->harga) }}       
              </div>
            </div>
          </div>
       </div>
        @endforeach   
    </ul> 



        
    
</body>
</html>