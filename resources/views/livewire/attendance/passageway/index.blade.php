<div>
    <div class="row g-2">
        <div class="col-12 col-md-4">
            <livewire:attendance.scanner.index @qrScanned="onScanned" />
        </div>
        <div class="col-12 col-md-8">
            <h2 class="text-center">Welcome to {{ $venue->name }}</h2>
            @if ($delegate)
            <div class="card h-100 ">
                <div class="card-header">
                    Delegate Information
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $delegate->first_name . ' ' . $delegate->last_name }}</h5>
                    <p class="card-text mb-0">Delegation: {{ $delegate->delegation->name }}</p>
                    <p class="card-text mb-0">Role: {{ $delegate->delegationRole->implode('name', ', ') }}</p>
                    <p class="card-text mb-0">Email: {{ $delegate->email }}</p>
                    <p class="card-text mb-0">Phone: {{ $delegate->contact_number }}</p>
                    <p class="card-text mb-0">Address: {{ $delegate->address }}</p>
                </div>
            </div>
            @else
            <div class="text-center">
                <p>Delegate not found</p>
            </div>
            @endif
        </div>
    </div>


    @script
    <script>
        $wire.on('getGeoLocation', () => {
            navigator.geolocation.getCurrentPosition((position) => {
                console.log(position.coords.latitude, position.coords.longitude);
                
                $wire.dispatch('geoLocationResult', [{
                    latitude : position.coords.latitude,
                    longitude : position.coords.longitude
                }]);
            });
        });
    </script>
    @endscript
</div>