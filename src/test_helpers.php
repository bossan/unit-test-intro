<?php

function check_result($result, $expect) {
    if($result == $expect) {
        return "<span style='color: green;'>OK</span>";
    } else {
        return "<span style='color: red;'>FOUT</span>";
    }
}

function print_result($date, $left, $right, $expect, $result, $outcome) {
    $display_expect = $expect ? 'true' : 'false';
    $display_result = $result ? 'true' : 'false';

    print("<tr><td>${date}</td><td>${left}</td><td>${right}</td><td>${display_expect}</td><td>${display_result}</td><td>${outcome}</td></tr>");
}
