<?php

namespace App\Livewire\Attendance\Scanner;

use Livewire\Component;
use Livewire\Attributes\On;

class Index extends Component
{
    public $cameraId;
    public $cameraLists = [];
    public $isCameraOn = false;
    public $isTorchOn = false;

    public function toggleButton()
    {
        $this->validate([
            'cameraId' => 'required',
        ]);
        if ($this->isCameraOn) {
            $this->dispatch('stopCamera');
            $this->isCameraOn = false;
        } else {
            $this->dispatch('startCamera', $this->cameraId);
            $this->isCameraOn = true;
        }
    }

    public function toggleTorchButton()
    {
        if ($this->isTorchOn) {
            $this->isTorchOn = false;
            $this->emit('startTorch', $this->isTorchOn);
        } else {
            $this->isTorchOn = true;
            $this->emit('startTorch', $this->isTorchOn);
        }
    }

    #[On('resumeCamera')]
    public function resumeCamera()
    {
        $this->emit('resumeCamera', $this->cameraId);
    }

    #[On('cameraList')]
    public function cameraList($devices)
    {
        $this->cameraLists = $devices;
    }

    #[On('qrScanned')]
    public function onScanned($scannedResult)
    {
        dd($scannedResult);
    }

    public function render()
    {
        return view('livewire.attendance.scanner.index');
    }
}
