<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Article extends Model
{
    protected $guarded = []; # colocar campos com excepcoes (nao podem ser preenchidos),
    /* campos de preenchimento permitido
    protected $fillable = [
        'title', 'description'
    ];
    */
}

