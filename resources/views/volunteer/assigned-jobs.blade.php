<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet and Shelter</title>
    <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/styleDashboard.css') }}">
    <link rel="stylesheet" href="css/styleDashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <style>
        .flex-container {
            display: flex;
        }

        .sidebar {
            flex: 0.1;
        }

        .container {
            flex: 3.5;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .label {
            margin-right: 10px;
        }
    </style>

    <div class="flex-container bg-accent-200">
        <div class="sidebar" style="z-index: 1000;">
            @include('volunteer.sidebar', ['class' => 'sidebar'])
        </div>


        <div class="container ">
            <h2 style="margin-top: 10%; margin-bottom: 1%;">Assigned Jobs</h2>
            @if (session()->has('message'))
                <div class="alert {{ session()->get('alert-class') }}">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Rescue ID</th>
                        <th>Nama Hewan</th>
                        <th>Nama Pelapor</th>
                        <th>Nomor Telp</th>
                        <th>Tgl Lokasi Penemuan</th>
                        <th>Kondisi Hewan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assignedJobs as $job)
                        <tr>
                            <td>{{ $job->rescue->id }}</td>
                            <td>{{ $job->rescue->namaHewan }}</td>
                            <td>{{ $job->rescue->namaPelapor }}</td>
                            <td>{{ $job->rescue->nomorTelp }}</td>
                            <td>{{ $job->rescue->tglLokasiPenemuan }}</td>
                            <td>{{ $job->rescue->kondisiHewan }}</td>
                            <td>{{ $job->status }}</td>
                            <td>
                                <form action="{{ route('jobs.complete', $job->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"
                                        {{ $job->status == 'rescued' ? 'disabled' : '' }}
                                        onclick="return {{ $job->status == 'rescued' ? 'alreadyCompleted()' : 'confirm(\'Are you sure you want to end this job?\')' }}">
                                        Complete Job
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            < /body> <
            /html>
