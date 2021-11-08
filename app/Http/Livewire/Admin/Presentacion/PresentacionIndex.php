<?php

namespace App\Http\Livewire\Admin\Presentacion;

use App\Models\Expediente;
use App\Models\Presentation;
use Livewire\Component;
use Livewire\WithPagination;

class PresentacionIndex extends Component
{
    use WithPagination;

    public $search;
    public $ExpId;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $act = Presentation::where('descripcion', 'like', '%' . $this->search . '%')
                        ->where('expediente_id', $this->ExpId)
                        ->paginate(10);

        return view('livewire.admin.presentacion.presentacion-index', compact('act'));
    }
}
