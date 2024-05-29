<!DOCTYPE html>
<html>
<head>
    <title>Donations</title>
    <!-- Tambahkan CSS atau library front-end yang diperlukan -->
</head>
<body>
    <h1>Donations</h1>
    
    <form action="{{ route('donation.store') }}" method="POST">
        @csrf
        <div>
            <label for="donor_name">Donor Name:</label>
            <input type="text" id="donor_name" name="donor_name" required>
        </div>
        <div>
            <label for="donor_email">Donor Email:</label>
            <input type="email" id="donor_email" name="donor_email" required>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>
        </div>
        <div>
            <label for="donation_type">Donation Type:</label>
            <input type="text" id="donation_type" name="donation_type">
        </div>
        <div>
            <label for="note">Note:</label>
            <textarea id="note" name="note"></textarea>
        </div>
        <button type="submit">Donate</button>
    </form>

    <h2>Donation List</h2>
    <ul>
        @foreach ($donations as $donation)
            <li>{{ $donation->donor_name }} - {{ $donation->amount }} - {{ $donation->created_at }}</li>
        @endforeach
    </ul>

    {{ $donations->links() }}
</body>
</html>
