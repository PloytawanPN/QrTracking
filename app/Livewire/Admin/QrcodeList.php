<?php

namespace App\Livewire\Admin;

use App\Models\Qrcode;
use Livewire\Component;
use Livewire\WithPagination;

class QrcodeList extends Component
{
    use WithPagination;

    public $qrCodeQuantity;
    protected $paginationTheme = 'bootstrap';

    public function add_qrcode(){

    }
    public function render()
    {
        return view('livewire.admin.qrcode-list',[
            'items' => Qrcode::paginate(10)
        ]);
    }
}
