<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = ['judul','isi','slug','tag'];

    public function tags() {
        return $this->belongsToMany('App\Tag', 'pertanyaan_tag', 'pertanyaan_id', 'tag_id');
    }
}