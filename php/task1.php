<?php

/**
 * Проверка, является ли дата выходным днём в России.
 *
 * @param int $timestamp
 * @param array $holidays Массив праздников вида ['01.01', '02.01', ...].
 * @return bool
 * @throws \Exception
 */
function isDayOff(int $timestamp, array $holidays = null): bool
{
    if ($timestamp < 0) {
        throw new \Exception('В функцию проверки на выходной передана некорректная дата.');
    }

    /** Проверка на субботу/воскресенье. */
    if (date('N', $timestamp) >= 6) {
        return true;
    }

    if (null === $holidays) {
        $holidays = ['01.01', '02.01', '03.01', '04.01', '05.01', '06.01', '07.01', '08.01', '23.02', '08.03', '01.05',
            '09.05', '12.06', '04.11', '31.12'];
    }

    /** Проверка на праздник. */
    return in_array(date('d.m', $timestamp), $holidays);
}

assert(true === isDayOff(strtotime(date('2020-01-01'))));
assert(true === isDayOff(strtotime(date('2020-07-04'))));
assert(true === isDayOff(strtotime(date('2020-07-05'))));
assert(false === isDayOff(strtotime(date('2020-07-06'))));