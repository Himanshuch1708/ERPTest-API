# API Endpoint

## Blade Files

1. **welcome.blade.php**: The welcome blade file serves as the landing page for the application. It contains clickable links to various API endpoints and provides a user-friendly interface for navigation.

2. **attendance_request.blade.php**: This blade file displays the data retrieved from the Attendance Request API endpoint. It presents the data in a formatted table for easy readability.

3. **footwear_overtime.blade.php**: Similar to the attendance request blade file, this file displays data from the Footwear Overtime API endpoint in a formatted table.

4. **footwear_attendance_sheet.blade.php**: Displays data from the Footwear Attendance Sheet API endpoint in a formatted table.

5. **leave_application.blade.php**: Displays data from the Leave Application API endpoint in a formatted table.

6. **leave_allocation.blade.php**: Displays data from the Leave Allocation API endpoint in a formatted table.

## ApiController Functions

1. **getAttendanceRequests()**: Retrieves data from the Attendance Request API endpoint and passes it to the corresponding blade file for rendering. Handles exceptions and error responses gracefully.

2. **getFootwearOvertime()**: Retrieves data from the Footwear Overtime API endpoint and passes it to the corresponding blade file for rendering. Handles exceptions and error responses gracefully.

3. **getFootwearAttendanceSheet()**: Retrieves data from the Footwear Attendance Sheet API endpoint and passes it to the corresponding blade file for rendering. Handles exceptions and error responses gracefully.

4. **getLeaveApplication()**: Retrieves data from the Leave Application API endpoint and passes it to the corresponding blade file for rendering. Handles exceptions and error responses gracefully.

5. **getLeaveAllocation()**: Retrieves data from the Leave Allocation API endpoint and passes it to the corresponding blade file for rendering. Handles exceptions and error responses gracefully.

