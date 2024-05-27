<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
<body>
    <h1>Employees List</h1>
    <table border="1">
        <thead>
            <tr>
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
</body>
</html>
