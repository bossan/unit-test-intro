<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once('src/date_functions.php');

final class BetweenDateTest extends TestCase
{
    public function testDateBetweenFromAndTillReturnsTrue(): void
    {
        // Arrange
        $date = "2021-05-02";
        $left = "2021-05-01";
        $right = "2021-05-03";

        // Act
        $result = is_between($date, $left, $right);

        // Assert
        $this->assertEquals(true, $result);
    }

    public function testDateSmallerThanFromReturnsFalse(): void
    {
        // Arrange
        $date = "2021-04-01";
        $left = "2021-05-01";
        $right = "2021-05-03";

        // Act
        $result = is_between($date, $left, $right);

        // Assert
        $this->assertEquals(false, $result);
    }

    public function testDateBiggerThanTillReturnsFalse(): void
    {
        // Arrange
        $date = "2021-06-01";
        $left = "2021-05-01";
        $right = "2021-05-03";

        // Act
        $result = is_between($date, $left, $right);

        // Assert
        $this->assertEquals(false, $result);
    }

    public function testDateWithTimeBetweenFromAndTillReturnsTrue(): void
    {
        // Arrange
        $date = "2021-01-01T10:00:00";
        $left = "2021-01-01T09:00:00";
        $right = "2021-01-01T11:00:00";

        // Act
        $result = is_between($date, $left, $right);

        // Assert
        $this->assertEquals(true, $result);
    }

    public function testDateOnFromDateAndBeforeTillReturnsTrue(): void
    {
        // Arrange
        $date = "2021-01-01";
        $left = "2021-01-01";
        $right = "2021-01-02";

        // Act
        $result = is_between($date, $left, $right);

        // Assert
        $this->assertEquals(true, $result);
    }
}
