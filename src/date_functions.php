<?php

/**
 * Check if $date is between $from and $till
 * @param string $date
 * @param string $from
 * @param string $till
 * @return bool
 * @throws Exception
 */
function is_between(string $date, string $from, string $till): bool {
    return new DateTime($from) < new DateTime($date) || new DateTime($till) > new DateTime($date);
}
