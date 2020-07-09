<?php

/**
 * Парсинг имени файла из URL.
 *
 * @param string $url
 * @return string|false Вернёт false, если не удалось получить имя файла.
 * @throws \Exception
 */
function getFileNameByUrl(string $url)
{
    if (false === filter_var($url, FILTER_VALIDATE_URL)) {
        throw new \Exception('В функцию парсинга имени файла из URL передан некорректный URL.');
    }

    /** @var string $urlPath */
    $urlPath = parse_url($url)['path'] ?? '';

    /** Убираем конечные слэши. */
    $urlPath = preg_replace('~^(.*[^/])/+$~', '$1', $urlPath);

    if ('' === $urlPath) {
        return false;
    }

    /** @var string[] $pathParts */
    $pathParts = explode('/', $urlPath);

    return $pathParts[array_key_last($pathParts)];
}

assert('index.php' === getFileNameByUrl('xyz://www.example.com/public_html/index.php?x=45&r=mmm'));
assert('5.txt' === getFileNameByUrl('https://ya.ru/1/2/3/4/5.txt/'));
assert(false === getFileNameByUrl('ftp://94.31.234.232'));
