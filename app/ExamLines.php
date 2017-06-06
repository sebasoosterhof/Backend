<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ExamLines extends Model
{
    public $table = "examlines";
    // public function users() {
    //     return $this->belongsto('App\Users');
    // }
    public function students() {
        return $this->belongsto('App\Students');
    }
    public function candidates() {
        return $this->belongsTo('App\ExamCandidates', 'examcandidates_id');
    }
    public function cohorts() {
        return $this->belongsto('App\Cohorts', 'cohort_id');
    }
    public function educations() {
        return $this->belongsTo('App\Educations');
    }
    // public function exams() {
    //     return $this->belongsto('App\Exams', 'exam_id');
    // }
    // public function remarks() {
    //     return $this->belongsto('App\Remarks', 'remark_id');
    // }
}
