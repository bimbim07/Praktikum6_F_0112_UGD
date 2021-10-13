<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body style="background-color:white">
        <div class="d-flex justify-content-between mt-5 mb-5">
            <div>
                <a href="http://www.uajy.ac.id/">
                    <img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/lambang-universitas-atma-jaya-yogyakarta-uajy.jpg" 
                    width="100px"
                    style="align:left">
                </a>
            </div>
            <div>
                <h1 style="text-align: right">190710112</h1>
            </div>
        </div>

        <hr/>
        <h1 style="text-align:center">Data Mahasiswa</h1>

        <table style="width:400px; margin-left:auto;margin-right:auto;" border="solid">
            <tr>
                <th width=50px style="text-align: center">No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Place & Date of Birth</th>
            </tr>

            @if(count($detail))
            @foreach($detail as $student)
                <tr>
                    <td width=0px style="text-align: center">{{ $student->id }}</td>
                    <td>{{ $student->nama_depan }} {{ $student->nama_belakang }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->no_telp }}</td>
                    <td>{{ $student->tempat_lahir.', '.$student->tanggal_lahir }}</td>
                </tr>

            @endforeach
            @else
                <tr>
                    <td align="center" colspan="5">Empty Data!! Have a nice day :)</td>
                </tr>
            @endif
            
        </table>
    </body>
</html>