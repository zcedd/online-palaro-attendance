<div>
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-12 col-md-6 mb-3">
            <a href="{{ route('attendance.passageway', $venueId) }}" class="text-decoration-none">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Attendance</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <a href="{{ route('attendance.report', $venueId) }}" class="text-decoration-none">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Report</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>