<?php

namespace App\View\Components\user;

use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;



class UserEditProfilComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $nom;
    public $prenom;
    public $email;
    public $telephone;
    public $sexe;
    public $typeCompte;
    public $newimage;
    
    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->nom = $user->nom;
        $this->prenom = $user->prenom;
        $this->email = $user->email;
        $this->image = $user->profile->image;
        $this->sexe = $user->profile->sexe;
        $this->typeCompte = $user->profile->typeCompte;
       
    }
    
    public function upadeProfile()
    {
        $user = User::find(Auth::user()->id);
        $user->nom = $this->nom;
        $user->prenom = $this->prenom;
        $user->save();

        if ($this->newimage) {
            if ($this->image) {
                unlink('assets/images/profile/'.$this->image);
            }
            $imageNom = Carbon::now()->timestamp .'.'. $this->newimage->extenxion(); 
            $this->newimage->storeAs('profile',$imageNom);  
            $user->profile->image = $imageNom;
        }
        $user->profile->sexe = $this->sexe;
        $user->profile->typeCompte = $this->typeCompte;
        $user->profile->save();
        session()->flash('message','Profil modifié avec succès');
    }
        /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.user-edit-profil-component');
    }
}
