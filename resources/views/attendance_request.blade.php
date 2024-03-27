<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
</head>
<body>
    <div class="row wide-xl">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Name</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Owner</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Creation</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Modified</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Modified By</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Employee</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Employee Name</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Department</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Company</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">From Date</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">To Date</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Half Day</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Half Day Date</th>
                    <th style="padding: 10px; border: 1px solid #dddddd;">Reason</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($api_data as $item)
                <tr>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ ucfirst($item['name']) }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['owner'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['creation'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['modified'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['modified_by'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['employee'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['employee_name'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['department'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['company'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['from_date'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['to_date'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['half_day'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['half_day_date'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dddddd;">{{ $item['reason'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
