<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class UserManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public UserForm $form;
    use Actions;
    public $selectroles;



    public function render(){
        $users=User::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);
        $roles=Role::all();
        return view('livewire.admin.user-management',compact('users','roles'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->user->id)){
            User::create([
                'name'=> $this->form->name,
                'email'=> $this->form->email,
                'password'=> Hash::make($this->form->password)

            ]);
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $users=User::find($this->form->user->id);
            $users->update([
                'name'=> $this->form->name,
                'email'=> $this->form->email,
                'password'=> Hash::make($this->form->password)

            ]);
            $users->roles()->sync(array_keys($this->selectroles,'true'));
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(User $users){
        //$this->form=$period->toArray();
        $this->form->setForm($users);
        $this->isOpen=true;
        $this->selectroles=array_fill_keys($users->roles->pluck('id')->toArray(), true);

    }

    public function destroy(User $users){
        $users->delete();
    }
}
