<?php

use Carbon\Carbon; // use DB;

// Puts how long the blog existed in the db
function longAgo($blogs) {
    foreach ($blogs as $blog){
        $longagoy = Carbon::now()->diffInYears($blog->updated_at);
        $longagomo = Carbon::now()->diffInMonths($blog->updated_at);
        $longagod = Carbon::now()->diffInDays($blog->updated_at);
        $longagoh = Carbon::now()->diffInHours($blog->updated_at);
        $longagom = Carbon::now()->diffInMinutes($blog->updated_at);
        $longagos = Carbon::now()->diffInSeconds($blog->updated_at);
        $longago = "Posted ";
        $iss = "";
        if ($longagoy >= 1) {
            $longago .= $longagoy . " year";
            if ($longagoy > 1)
                $longago = $longago . "s";
        } elseif ($longagomo >= 1) {
            $longago.=$longagomo." month";
            if ($longagomo > 1)
                $longago = $longago . "s";
        } elseif ($longagod >= 1) {
            $longago .= $longagod . " day";
            if ($longagod > 1)
                $longago = $longago . "s";
        } elseif ($longagoh >= 1) {
            $longago .= $longagoh . " hour";
            if ($longagoh > 1)
                $longago = $longago . "s";
        } elseif ($longagom >= 1) {
            $longago .= $longagom . " minute";
            if($longagom > 1)
                $longago = $longago . "s";
        } else
            $longago .= "a few seconds";
        $longago .= " ago.";
        $blog->longago = $longago;
    }

    return $blogs;
}