<div class="messages-block block">
    <div class="title"><strong>Recent Feedback</strong></div>
    <div class="messages">
        @foreach ($reviews as $review)
            <div class="message d-flex align-items-center">
                <div class="profile">
                    <img src="{{ asset('admincss/img/avatar-3.jpg') }}" alt="User Image" class="img-fluid">
                </div>
                <div class="content">
                    <strong class="d-block">{{ $review->name }}</strong>
                    <span class="d-block">"{{ $review->review }}"</span>
                </div>
            </div>
        @endforeach
    </div>
</div>