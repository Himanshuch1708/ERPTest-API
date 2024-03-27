<div class="row wide-xl" style="display: flex; flex-wrap: wrap;">
    @foreach ($api_data as $item)
        <div class="col-lg-2" style="flex: 0 0 16.666667%; max-width: 16.666667%;">
            <div class="feature-with-icon" data-aos="flip-up"
                style="border: 1px solid #dddddd; padding: 15px; margin: 10px;">
                <h5 style="margin-top: 0;"><strong>Name: {{ ucfirst($item['name']) }}</strong></h5>
                <p><strong>Owner:</strong> {{ $item['owner'] }}</p>
                <p><strong>Creation:</strong> {{ $item['creation'] }}</p>
                <p><strong>Modified:</strong> {{ $item['modified'] }}</p>
                <p><strong>Modified By:</strong> {{ $item['modified_by'] }}</p>
                <p><strong>Naming Series:</strong> {{ $item['naming_series'] }}</p>
                <p><strong>Employee:</strong> {{ $item['employee'] }}</p>
                <p><strong>Employee Name:</strong> {{ $item['employee_name'] }}</p>
                <p><strong>Leave Type:</strong> {{ $item['leave_type'] }}</p>
                <p><strong>Department:</strong> {{ $item['department'] }}</p>
                <p><strong>Leave Balance:</strong> {{ $item['leave_balance'] }}</p>
                <p><strong>From Date:</strong> {{ $item['from_date'] }}</p>
                <p><strong>To Date:</strong> {{ $item['to_date'] }}</p>
                <p><strong>Half Day:</strong> {{ $item['half_day'] }}</p>
                <p><strong>Half Day Date:</strong> {{ $item['half_day_date'] }}</p>
                <p><strong>Total Leave Days:</strong> {{ $item['total_leave_days'] }}</p>
                <p><strong>Status:</strong> {{ $item['status'] }}</p>
                <p><strong>Posting Date:</strong> {{ $item['posting_date'] }}</p>
                <p><strong>Follow Via Email:</strong> {{ $item['follow_via_email'] }}</p>
                <p><strong>Company:</strong> {{ $item['company'] }}</p>
                <p><strong>Letter Head:</strong> {{ $item['letter_head'] }}</p>
                <hr style="border-top: 1px solid #dddddd; margin-top: 10px; margin-bottom: 10px;">
            </div>
        </div>
    @endforeach
</div>
