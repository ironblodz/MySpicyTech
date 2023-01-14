<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    //Campos especificos inseridos na tabela contacto
    protected $fillable = ['name', 'surname', 'email', 'phone', 'subject','message'];
}
