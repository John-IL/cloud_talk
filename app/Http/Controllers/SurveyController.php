<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function saveSurveyAnswer(Request $request) {

        $call_id = 1234;
        $survey_question = 1;
        $from_number = "dasd";
        $to_number = "3123";
        $score = 1;

        $status_call = DB::table('survey_answer')->insert([
            "survey_question" => $survey_question,
            "call_id" => $call_id,
            "from_number" => $from_number,
            "to_number" => $to_number,
            "score" => $score,
            "created_at" => Carbon::now()
        ]);

        return $status_call;
    }
}
