<form action="/donate" method="POST">
    @csrf
    <div>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required>
    </div>
    <div>
        <label for="donor_name">Donor Name:</label>
        <input type="text" name="donor_name" id="donor_name" required>
    </div>
    <button type="submit">Donate</button>
</form>
