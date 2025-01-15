<div>
    <div class="row g-2">
        @forelse ($venues as $venue)
        <div class="col-12 col-md-6 col-lg-4 ">
            <a href="{{ route('attendance.passageway', $venue->id) }}" class="text-decoration-none">
                <div class="card text-center h-100">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <h4 class="card-title">{{ $venue->name }}</h4>
                    </div>
                </div>
            </a>
        </div>
        @empty
        @endforelse
    </div>
</div>