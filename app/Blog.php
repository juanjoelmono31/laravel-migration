<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['titulo_blog', 'contenido_blog', 'id_usuario'];
}
