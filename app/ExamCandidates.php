<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamCandidates extends Model
{
    public $table = "examcandidates";

    public function students() {
        return $this->belongsTo('App\Students', 'student_id');
    }

    public function educations() {
        return $this->belongsTo('App\Educations', 'crebo_id');
    }
}
