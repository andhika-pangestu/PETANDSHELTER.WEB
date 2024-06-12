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
    <link rel="stylesheet" href="../css/styleDashboard.css">
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
            <h1 style="margin-top: 10%; margin-bottom: 1%;">Dashboard Volunteer</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form method="GET" action="{{ url()->current() }}">
                <select name="status" onchange="this.form.submit()">
                    <option value="">All</option>
                    <option value="pending">Pending</option>
                    <option value="assigned">Assigned</option>
                    <option value="rescued">Rescued</option>
                </select>
                <button>show all</button>
            </form>
            @foreach ($rescues as $rescue)
                <div class="card col-12">
                    <h5 class="card-header">Rescue ID {{ $rescue->id }}</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <p class="card-text lh-lg "><strong class="label">Nama Pelapor :
                                    </strong>{{ $rescue->namaPelapor }}</p>
                                <p class="card-text lh-lg"><strong class="label">Usia Pelapor :
                                    </strong>{{ $rescue->usiaPelapor }}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="card-text lh-lg"><strong class="label">Nomor Telepon:
                                    </strong>{{ $rescue->nomorTelp }}</p>
                                <p class="card-text lh-lg"><strong class="label">Jenis Kelamin:
                                    </strong>{{ $rescue->jenisKelamin }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="justify-content-start">
                        <div class="d-flex p-5">
                            <div style="width: 300px; overflow: hidden;">
                                <div id="carouselId{{ $rescue->id }}" class="carousel slide" data-bs-ride="true">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('uploads/' . $rescue->fotoHewan) }}"
                                                class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('uploads/' . $rescue->fotoLokasi) }}"
                                                class="d-block w-100">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselId{{ $rescue->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselId{{ $rescue->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="ms-5 ">
                                <h2 class="fw-bold mb-4">{{ $rescue->namaHewan }}</h2>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0"><strong class="label">Jenis Hewan:
                                        </strong>{{ $rescue->jenisHewan }}</p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0"><strong class="label">Berat Badan:
                                        </strong>{{ $rescue->bbHewan }}</p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0"><strong class="label">Ciri Unik/Deskripsi Hewan:
                                        </strong>{{ $rescue->deskripsiHewan }}</p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0"><strong class="label">Kondisi hewan:
                                        </strong>{{ $rescue->kondisiHewan }}</p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0"><strong class="label">Tanggal dan Lokasi:
                                        </strong>{{ $rescue->tglLokasiPenemuan }} </p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0"><strong class="label">Kondisi lingkungan:
                                        </strong>{{ $rescue->kondisiLingkungan }} </p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0"><strong class="label">Tanggal Dibuatnya laporan:
                                        </strong>{{ $rescue->created_at }} </p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0">
                                        <strong class="label">Status: </strong>
                                        <span
                                            class="{{ $rescue->status == 'pending' ? 'bg-danger' : ($rescue->status == 'assigned' ? 'bg-warning' : 'bg-accent') }} rounded px-2 py-1">
                                            {{ $rescue->status }}
                                        </span>
                                    </p>
                                    @if ($rescue->status == 'pending')
                                        <div class="col-md-3 ms-2">
                                            <form class="assign-job-form" method="POST"
                                                action="{{ route('assignJob') }}">
                                                @csrf
                                                <input type="hidden" name="rescue_id" value="{{ $rescue->id }}">
                                                <button type="submit" class="btn btn-success btn-md">Take
                                                    Job</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <script src="
                https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js
                "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    " rel="stylesheet">
    <script>
        document.querySelectorAll('.assign-job-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                if (confirm('Are you sure you want to take this job?')) {
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>
