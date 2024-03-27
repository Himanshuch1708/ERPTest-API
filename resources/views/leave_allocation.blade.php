<div class="row wide-xl" style="display: flex; flex-wrap: wrap;">
    @foreach ($api_data as $item)
        <div class="col-lg-2" style="flex: 0 0 16.666667%; max-width: 16.666667%;">
            <div class="feature-with-icon" data-aos="flip-up" style="border: 1px solid #dddddd; padding: 15px; margin: 10px;">
                <h5 style="margin-top: 0;"><strong>Name: {{ ucfirst($item['name']) }}</strong></h5>
                <p><strong>Owner:</strong> {{ $item['owner'] }}</p>
                <p><strong>Creation:</strong> {{ $item['creation'] }}</p>
                <p><strong>Modified:</strong> {{ $item['modified'] }}</p>
                <p><strong>Modified By:</strong> {{ $item['modified_by'] }}</p>
                <p><strong>Employee:</strong> {{ $item['employee'] }}</p>
                <p><strong>Employee Name:</strong> {{ $item['employee_name'] }}</p>
                <p><strong>Department:</strong> {{ $item['department'] }}</p>
                <p><strong>Leave Type:</strong> {{ $item['leave_type'] }}</p>
                <p><strong>From Date:</strong> {{ $item['from_date'] }}</p>
                <p><strong>To Date:</strong> {{ $item['to_date'] }}</p>
                <p><strong>New Leaves Allocated:</strong> {{ $item['new_leaves_allocated'] }}</p>
                <p><strong>Total Leaves Allocated:</strong> {{ $item['total_leaves_allocated'] }}</p>
                <p><strong>Total Leaves Encashed:</strong> {{ $item['total_leaves_encashed'] }}</p>
                <p><strong>Leave Policy:</strong> {{ $item['leave_policy'] }}</p>
                <hr style="border-top: 1px solid #dddddd; margin-top: 10px; margin-bottom: 10px;">
            </div>
        </div>
    @endforeach
</div>
