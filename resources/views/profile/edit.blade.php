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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pet and Shelter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="container" style="margin-top:120px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card rounded-4 mb-3 p-5">
                    <div class="form-section">
                        <header>
                            <h2>Profile Information</h2>
                            <p class="text-muted">Update your account's profile information and email address.</p>
                        </header>
                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus>
                                @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                <div class="mt-2">
                                    <p class="text-muted">Your email address is unverified.</p>
                                    <button form="send-verification" class="btn btn-link p-0">Click here to re-send the verification email.</button>
                                </div>
                                @if (session('status') === 'verification-link-sent')
                                <div class="text-success mt-2">A new verification link has been sent to your email address.</div>
                                @endif
                                @endif
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                @if (session('status') === 'profile-updated')
                                <div class="text-success">Saved.</div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card rounded-4 mb-3 p-5">
                    <div class="form-section">
                        <header>
                            <h2>Update Password</h2>
                            <p class="text-muted">Ensure your account is using a long, random password to stay secure.</p>
                        </header>
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="update_password_current_password" class="form-label">Current Password</label>
                                <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                                @error('current_password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="update_password_password" class="form-label">New Password</label>
                                <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
                                @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
                                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                                @error('password_confirmation')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                @if (session('status') === 'password-updated')
                                <div class="text-success">Saved.</div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card rounded-4 mb-3 p-5">
                    <div class="form-section">
                        <header>
                            <h2>Delete Account</h2>
                            <p class="text-muted">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                        </header>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm-user-deletion">Delete Account</button>
                        <form id="delete-account-form" method="post" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('delete')
                            <div class="modal fade" id="confirm-user-deletion" tabindex="-1" aria-labelledby="confirm-user-deletion-label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirm-user-deletion-label">Delete Account</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                                                @error('password')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Delete Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
