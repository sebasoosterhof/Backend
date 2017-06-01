<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamCandidates extends Model
{
    public function students() {
        return $this->belongsTo('App\Students');
    }

    public function educations() {
        return $this->belongsTo('App\Educations');
    }
}
