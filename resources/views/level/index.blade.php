<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Level Pengguna</title>
</head>
<body>
    <h2>Data Level Pengguna</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Level ID</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($level as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->level_id }}</td>
                <td>{{ $item->level_kode }}</td>
                <td>{{ $item->level_nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
