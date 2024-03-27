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
                <p><strong>Posting Date:</strong> {{ $item['posting_date'] }}</p>
                <p><strong>Employment Type:</strong> {{ $item['employment_type'] }}</p>
                <p><strong>Adjustment Date:</strong> {{ $item['adjustment_date'] }}</p>
                <p><strong>Company:</strong> {{ $item['company'] }}</p>
                <hr style="border-top: 1px solid #dddddd; margin-top: 10px; margin-bottom: 10px;">
            </div>
        </div>
    @endforeach
</div>
