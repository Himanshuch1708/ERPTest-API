<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>API Endpoints</h1>
        <ul>
            <li><a href="{{ url('test/api/attendance-request') }}"><button class="button">Attendance Request</button></a>
            </li>
            <li><a href="{{ url('test/api/footwear-overtime') }}"><button class="button">Footwear Overtime</button></a>
            </li>
            <li><a href="{{ url('test/api/footwear-attendance-sheet') }}"><button class="button">Footwear Attendance
                        Sheet</button></a></li>
            <li><a href="{{ url('test/api/leave-application') }}"><button class="button">Leave Application</button></a>
            </li>
            <li><a href="{{ url('test/api/leave-allocation') }}"><button class="button">Leave Allocation</button></a>
            </li>
        </ul>
    </div>
</body>

</html>
