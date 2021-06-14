<?php
    require_once('date_functions.php');
    require_once('test_helpers.php');
?>

<html lang="nl">
    <head>
        <title>Testresultaten</title>
        <style>
            body {
                font-family: arial, sans-serif;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <h1>Testresultaten</h1>
        <table style="text-align: center;">
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>Van</th>
                    <th>Tot</th>
                    <th>Verwacht resultaat</th>
                    <th>Daadwerkelijk resultaat</th>
                    <th>Uitkomst</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Test 1
                    // Arrange
                    $date = "2021-05-02";
                    $left = "2021-05-01";
                    $right = "2021-05-03";

                    // Act
                    $result = is_between($date, $left, $right);

                    // Assert
                    $expect = true;
                    $outcome = check_result($result, $expect);
                    print_result($date, $left, $right, $expect, $result, $outcome);

                    // Test 2
                    // Arrange
                    $date = "2021-04-01";
                    $left = "2021-05-01";
                    $right = "2021-05-03";

                    // Act
                    $result = is_between($date, $left, $right);

                    // Assert
                    $expect = false;
                    $outcome = check_result($result, $expect);
                    print_result($date, $left, $right, $expect, $result, $outcome);

                    // Test 3
                    // Arrange
                    $date = "2021-06-01";
                    $left = "2021-05-01";
                    $right = "2021-05-03";

                    // Act
                    $result = is_between($date, $left, $right);

                    // Assert
                    $expect = false;
                    $outcome = check_result($result, $expect);
                    print_result($date, $left, $right, $expect, $result, $outcome);

                    // Test 4
                    // Arrange
                    $date = "2021-01-01T10:00:00";
                    $left = "2021-01-01T09:00:00";
                    $right = "2021-01-01T11:00:00";

                    // Act
                    $result = is_between($date, $left, $right);

                    // Assert
                    $expect = true;
                    $outcome = check_result($result, $expect);
                    print_result($date, $left, $right, $expect, $result, $outcome);

                    // Test 5
                    // Arrange
                    $date = "2021-01-01";
                    $left = "2021-01-01";
                    $right = "2021-01-02";

                    // Act
                    $result = is_between($date, $left, $right);

                    // Assert
                    $expect = true;
                    $outcome = check_result($result, $expect);
                    print_result($date, $left, $right, $expect, $result, $outcome);
                ?>
            </tbody>
        </table>
    </body>
</html>
