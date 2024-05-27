<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>employees</title>
        <link href="https://fonts.googleapis.com/css2?family=Helvetica&display=swap" rel="stylesheet">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
      </head>
<body>
    <h1>Employees List</h1>
    <div class="container ">
        <h1 class="text-primary">Hello, Custom Bootstrap Colors!</h1>
        <button class="btn btn-success-900">Primary Button</button>
    </div>
    <table border="1" class="table table-striped table-bordered table">
        <thead class="bg-primary">
                <th>Employee Number</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Extension</th>
                <th>Email</th>
                <th>Office Code</th>
                <th>Reports To</th>
                <th>Job Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->employeeNumber }}</td>
                    <td>{{ $employee->lastName }}</td>
                    <td>{{ $employee->firstName }}</td>
                    <td>{{ $employee->extension }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->officeCode }}</td>
                    <td>{{ $employee->reportsTo }}</td>
                    <td>{{ $employee->jobTitle }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
