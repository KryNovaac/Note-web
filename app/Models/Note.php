<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Hanya tambahkan atribut yang relevan
    protected $fillable = [
        'title',
        'content',
    ];
}
