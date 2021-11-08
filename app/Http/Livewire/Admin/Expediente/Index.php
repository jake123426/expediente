<?php

namespace App\Http\Livewire\Admin\Expediente;

use App\Models\Expediente;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $open = false;
    public $expedientes;
    public $usuario;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $exp = $this->expedientes;

        return view('livewire.admin.expediente.index', compact('exp'));
    }
}
