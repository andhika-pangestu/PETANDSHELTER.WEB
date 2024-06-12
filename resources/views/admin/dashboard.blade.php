<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet and Shelter</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
@include('admin.sidebar')

<div class="container">
    <h1>Dashboard Admin</h1>

    <h2>Users</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Password Reset Tokens</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Token</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($passwordResetTokens as $token)
            <tr>
                <td>{{ $token->email }}</td>
                <td>{{ $token->token }}</td>
                <td>{{ $token->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Sessions</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>IP Address</th>
                <th>User Agent</th>
                <th>Last Activity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sessions as $session)
            <tr>
                <td>{{ $session->id }}</td>
                <td>{{ $session->user_id }}</td>
                <td>{{ $session->ip_address }}</td>
                <td>{{ $session->user_agent }}</td>
                <td>{{ $session->last_activity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <h1>Dashboard Admin</h1>

    <h2>Pengguna</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Top 10 Donations</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Invoice</th>
                <th>Name</th>
                <th>Email</th>
                <th>Amount</th>
                <th>Note</th>
                <th>Status</th>
                <th>Snap Token</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topDonations as $donation)
            <tr>
                <td>{{ $donation->rank }}</td>
                <td>{{ $donation->invoice }}</td>
                <td>{{ $donation->name }}</td>
                <td>{{ $donation->email }}</td>
                <td>{{ $donation->amount }}</td>
                <td>{{ $donation->note }}</td>
                <td>{{ $donation->status }}</td>
                <td>{{ $donation->snap_token }}</td>
                <td>{{ $donation->created_at }}</td>
                <td>{{ $donation->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
