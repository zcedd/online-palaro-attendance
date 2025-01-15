<div>
    <div class="mb-2">
        <livewire:attendance.scanner.camera />
    </div>
    <div class="mb-3">
        <label for="cameraList" class="form-label">Camera</label>
        <select id="cameraList" class="form-select @error('cameraId') is-invalid @enderror" wire:model.live="cameraId"
            {{ $isCameraOn ? 'Disabled' : "" }}>
            <option selected value="">select camera</option>
            @foreach ($cameraLists as $cameraList)
            <option value="{{ $cameraList['id'] }}">{{ $cameraList['label'] }}</option>
            @endforeach
        </select>
        <x-input-error for="cameraId" />
    </div>
    <div class="d-grid gap-2">
        <button type="button" id="cameraButton" class="btn {{ $isCameraOn ? 'btn-danger' : " btn-primary"}}"
            wire:click="toggleButton">
            Camera: {{ $isCameraOn ? 'Off' : "On"}}
        </button>

        @if ($isCameraOn)
        <button type="button" id="torchButton" class="btn {{ $isTorchOn ? 'btn-danger' : " btn-primary"}}"
            wire:click="toggleTorchButton">
            Torch: {{ $isTorchOn ? 'Off' : "On"}}
        </button>
        @endif
    </div>

    @script
    <script type="module">
        const html5QrCode = new Html5Qrcode("qr-reader");
        
        // get cameras
        Html5Qrcode.getCameras().then(devices => {
            $wire.dispatch('cameraList', [devices]);
        }).catch(err => {
            console.log(`Unable to get camera, error: ${err}`);
        });

        $wire.on('stopScanner', () => {
            html5QrCode.stop();
        });

        $wire.on('resumeScanner', () => {
            html5QrCode.resume();
            $wire.dispatch('removeResult');
        });

        $wire.on('startScanner', (cameraId) => {
            html5QrCode.start(
                cameraId[0],     // retreived in the previous step.
                {
                    fps: 10,    // sets the framerate to 10 frame per second
                    qrbox: 250  // sets only 250 X 250 region of viewfinder to
                                // scannable, rest shaded.
                },
                qrCodeMessage => {
                    // do something when code is read. For example:
                    console.log(`QR Code detected: ${qrCodeMessage}`);
                    $wire.dispatch('qrScanned', [qrCodeMessage]);
                    html5QrCode.pause(true);
                },
                errorMessage => {
                // parse error, ideally ignore it. For example:
                console.log(`QR Code no longer in front of camera.`);
            }).catch(err => {
                // Start failed, handle it. For example,
                console.log(`Unable to start scanning, error: ${err}`);
            });
        });

        $wire.on('startTorch', isTorchOn => {
            let settings = html5QrCode.getRunningTrackSettings();
            console.log(settings);
            html5QrCode.applyVideoConstraints(
            {
                torch: isTorchOn,
                advanced: [{torch: isTorchOn}]
            });
        });
    </script>
    @endscript
</div>