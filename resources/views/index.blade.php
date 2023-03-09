<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>penulis</th>
            <th>Penerbit</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->nama }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
