<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contactos';
    public $timestamps = false;
    protected $fillable = ['nome', 'contacto', 'email'];

    //Validação
    public static function rules($id = null)
    {
        return [
            'nome' => 'required|min:5|max:255',
            'contacto' => [
                'required', 
                'digits:9',
                'unique:contactos,contacto' . ($id ? ",$id" : '')
            ],
            'email' => [
                'required', 
                'email',
                'unique:contactos,email' . ($id ? ",$id" : '')
            ]
        ];
    }
}