<?php
/*
Plugin Name: Date counter
Plugin URI: https://github.com/KonstantinPankratov/WordPress-Plugin-Date-counter
Description: Date counter is a WordPress plugin that allows you to add a shortcode to count difference between two dates using start and end dates or display the current date easily.
Version: 1.0.2
Author: Konstantin Pankratov
Author URI: http://kopa.pw/
*/

function DateCounter($atts)
{

    $format = strtolower($atts["format"]);

    $error = 'Error: check <b>%s</b>';

    try {
        $startDate = new DateTime($atts["startdate"]);
    } catch (Exception $e) {
        return sprintf($error, 'startDate');
    }

    try {
        $endDate   = new DateTime($atts["enddate"]);
    } catch (Exception $e) {
        return sprintf($error, 'endDate');
    }

    $difference = $endDate->diff($startDate);

    switch ($format) {
        case "year":
        case "years":
            $result = $difference->y;
            break;
        case "month":
        case "months":
            $result = ($difference->y * 12) + $difference->m;
            break;
        case "day":
        case "days":
            $result = $difference->days;
            break;
        case "hour":
        case "hours":
            $hours = $difference->days * 24;
            $hours += $difference->h;
            $result = $hours;
            break;
        case "minute":
        case "minutes":
            $minutes = $difference->days * 24 * 60;
            $minutes += $difference->h * 60;
            $minutes += $difference->i;
            $result = $minutes;
            break;
        case "second":
        case "seconds":
            $seconds = $difference->days * 24 * 60 * 60;
            $seconds += $difference->h * 60 * 60;
            $seconds += $difference->i * 60;
            $seconds += $difference->s;
            $result = $seconds;
            break;
        case "currentyear":
            $result = date("Y");
            break;
        case "currentmonth":
            $result = date("m");
            break;
        case "currentday":
            $result = date("d");
            break;
        default:
            try {
                $result = $difference->format($format);
            } catch (Exception $e) {
                return sprintf($error, 'format');
            }
            break;
    }

    return $result;
}

add_shortcode( 'DateCounter', 'DateCounter' );

?>