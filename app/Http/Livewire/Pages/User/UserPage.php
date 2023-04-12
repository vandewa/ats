<?php

namespace App\Http\Livewire\Pages\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\ComRegion;
use Illuminate\Support\Facades\DB;


class UserPage extends Component
{
    public $idnya;
    public $name;
    public $email;
    public $password;
    public $role_user;
    public $listKecamatan;
    public $password_confirmation;
    public $kecamatan;
    public $role;
    
    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            $this->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'role_user' => 'required',
                'password' => 'required|same:password_confirmation',
                'password_confirmation' => 'same:password'
            ]);

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'kecamatan' => $this->kecamatan,
                'password' => Hash::make($this->password),
            ])->assignRole($this->role_user);

            $this->dispatchBrowserEvent('Success');
            redirect()->to(route('user.index'));
        }
    }

    public function patchData()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->idnya,
            'role_user' => 'required',
            'password' => 'same:password_confirmation',
            'password_confirmation' => 'same:password'
        ]);

        $user = User::find($this->idnya);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'kecamatan' => $this->kecamatan,
        ]);

        DB::table('model_has_roles')->where('model_id', $this->idnya)->delete();

        $user->assignRole($this->role_user);

        if($this->password){
            User::find($this->idnya)->update([
                'password' => Hash::make($this->password),
            ]);
        }

        redirect()->to(route('user.index'));
    }

    public function mount($id = "")
    {
        if($id != ""){
            $data = User::with(['namaKecamatan'])->find($id);
            $this->name = $data->name;
            $this->email = $data->email;
            $this->kecamatan = $data->kecamatan;
            $this->role_user = $data->getRoleNames();
        }

        $this->role = Role::get();
        $this->listKecamatan = ComRegion::where('region_level', 3)->get();
        $this->idnya = $id;

    }

    public function render()
    {
        return view('livewire.pages.user.user-page');
    }
}
