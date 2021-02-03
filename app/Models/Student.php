<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function photo() {
        $filename = $this->fname . "_" . $this->lname . "_*";
        return $filename;
    }

    public function getImageAttribute($filename)
    {
        if ($value) {
            return asset('storage/img/class_photo/' . $filename);
        } else {
            return asset('images/profile/no-image.png');
        }
    }
}
