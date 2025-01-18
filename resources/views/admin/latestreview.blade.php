<div class="messages-block block">
    <div class="title"><strong>Recent Feedback</strong></div>
    <div class="messages">
        @foreach ($reviews as $review)
            <div class="message d-flex align-items-center">
                <div class="content">
                    <strong class="d-block" style="color: rgb(212, 73, 73)">{{ $review->name }}</strong>
                    <span class="d-block">"{{ $review->review }}"</span>
                </div> <br><br>
            </div>
        @endforeach
    </div>
</div>