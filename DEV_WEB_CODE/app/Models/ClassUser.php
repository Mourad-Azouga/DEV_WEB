<?php
// app\Models\ModuleUser.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassUser extends Model
{
    protected $table = 'classusers';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'id_module',
        'id_utilisateur',
        'id_classe',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }
}