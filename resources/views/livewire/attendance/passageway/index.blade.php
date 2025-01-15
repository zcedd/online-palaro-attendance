<div>
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-12 col-md-4">
            <livewire:attendance.scanner.index @qrScanned="onScanned" />
        </div>
        <div class="col-12 col-md-8">
            @if ($delegate)
            <div class="card">
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
                <h4>Delegate not found</h4>
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