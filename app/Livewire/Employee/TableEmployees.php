<?php

namespace App\Livewire\Employee;

use App\Models\UserData;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TableEmployees extends Component
{
    use LivewireAlert;
    public $search;
    
    public function render()
    {
        return view('livewire.employee.table-employees',[
            'listofemployees' => $this->getData(),
        ])->layout('layouts.employee.app');
        
    }

    public function getData (){
        try {
            
            if (empty($this->search)){
                return UserData::query()->get();                
            }else {
                return UserData::query()->where('name', 'LIKE', '%'.$this->search.'%')->get();
            }

        } catch (\Throwable $th) {
            $this->alert('error', 'ERRO', [
                'toast'=>false,
                'position'=>'center',
                 'showConfirmButton' => true,
                 'confirmButtonText' => 'OK',
                 'text'=>'Não existe uma conta com este e-mail!!!'                
              ]);
        }
    }
}
