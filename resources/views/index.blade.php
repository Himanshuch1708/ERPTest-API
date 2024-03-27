<div class="row wide-xl">
    @foreach ($api_data as $item)
        <div class="col-lg-2">
            <div class="feature-with-icon" data-aos="flip-up">
                <h5><strong>Name: {{ ucfirst($item['name']) }}</strong></h5>
                <p><strong>Owner:</strong> {{ $item['owner'] }}</p>
                <p><strong>Creation:</strong> {{ $item['creation'] }}</p>
                <p><strong>Modified:</strong> {{ $item['modified'] }}</p>
                <p><strong>Modified By:</strong> {{ $item['modified_by'] }}</p>
                <p><strong>Purchase Order For:</strong> {{ $item['po_for'] }}</p>
                <p><strong>Workflow State:</strong> {{ $item['workflow_state'] }}</p>
                <p><strong>Title:</strong> {{ $item['title'] }}</p>
                <p><strong>Supplier:</strong> {{ $item['supplier'] }}</p>
                <p><strong>Transaction Date:</strong> {{ $item['transaction_date'] }}</p>
                <p><strong>Schedule Date:</strong> {{ $item['schedule_date'] }}</p>
                <p><strong>Status:</strong> {{ $item['status'] }}</p>
                <hr> <!-- Optional: Divider line -->
            </div>
        </div>
    @endforeach
</div>
