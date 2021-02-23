<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- import bootstrap untuk memberikan style --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Buat Manggil Bootstrapnya -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Latihan Query Builder</title>
    </head>
    
    <body>
        <br>
        <div class="container jumbotron text-center">
            <h1>Latihan Menampilkan 2 Tabel Relasi degan Query Builder</h1>
            <br><br>
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Type Mobil</th>
                    <th>Merek Mobil</th>
                </tr>
                {{-- $data adalah variabel yang dikirmkan dari controller dan diinisialisasi sebagai $item --}}
                {{-- sedangkan $k adalah index dari tiap data --}}
                @foreach ($data as $k => $item)
                    <tr>
                        {{-- karena index dimulai dari 0 maka kita perlu menambahkan angka 1 --}}
                        <td>{{$k+1}}</td> 
                        <td>{{$item->type_mobil}}</td>
                        <td>{{$item->merek_mobil}}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </body>
    
    </html>