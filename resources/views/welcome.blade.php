<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

    <h1>Welcome to the Application</h1>

    <table>
        <thead>
            <tr>
                <th>Password</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $login)
                <tr>
                    <td>{{ $login->password }}</td>
                    <td>{{ $login->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
