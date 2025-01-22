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
            $this->dispatch('stopScanner');
            $this->isCameraOn = false;
        } else {
            $this->dispatch('startScanner', $this->cameraId);
            $this->isCameraOn = true;
        }
    }

    public function toggleTorchButton()
    {
        if ($this->isTorchOn) {
            $this->isTorchOn = false;
            $this->dispatch('startTorch', $this->isTorchOn);
        } else {
            $this->isTorchOn = true;
            $this->dispatch('startTorch', $this->isTorchOn);
        }
    }

    #[On('cameraList')]
    public function cameraList($devices)
    {
        $this->cameraLists = $devices;
    }

    public function render()
    {
        return view('livewire.attendance.scanner.index');
    }
}
