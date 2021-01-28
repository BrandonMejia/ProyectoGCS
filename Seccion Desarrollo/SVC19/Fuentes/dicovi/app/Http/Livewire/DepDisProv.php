<?php

namespace App\Http\Livewire;


use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
use Livewire\Component;

class DepDisProv extends Component
{
    public $departamentos;
    public $provincias;
    public $distritos;

    public $selectedDepartamento = null;
    public $selectedProvincia = null;
    public $selectedDistrito = null;

    public function mount($selectedDistrito = null)
    {
        $this->departamentos = Departamento::all();
        $this->provincias = collect();
        $this->distritos = collect();
        $this->selectedDistrito = $selectedDistrito;

        if (!is_null($selectedDistrito)) {
            $distrito = Distrito::with('provincia.distrito')->find($selectedDistrito);
            if ($distrito) {
                $this->distritos = Distrito::where('provincia_id', $distrito->provincia_id)->get();
                $this->provincias = Provincia::where('departamento_id', $distrito->provincia->departamento_id)->get();
                $this->selectedDepartamento = $distrito->provincia->departamento_id;
                $this->selectedProvincia = $distrito->provincia_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.dep-dis-prov');
    }

    public function updatedSelectedDepartamento($departamento)
    {
        $this->provincias = Provincia::where('departamento_id', $departamento)->get();
        $this->selectedProvincia = NULL;
    }

    public function updatedSelectedProvincia($provincia)
    {
        if (!is_null($provincia)) {
            $this->distritos = Distrito::where('provincia_id', $provincia)->get();
        }
    }
}