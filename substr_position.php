<?php

if (!function_exists('substr_position')) {
    /**
     * @param string $original
     * @param string $substring
     * @param int $position
     * @param int|null $maxSize
     *
     * @return string
     */
    function substr_position(string $original, string $substring, int $position = 0, ?int $maxSize = null): string
    {
        $substrLen = mb_strlen($substring);

        for ($i = 0; $i < $substrLen; $i++) {
            $original[$i + $position] = $substring[$i];
        }

        if (!is_null($maxSize)) {
            $original = substr($original, 0, $maxSize);
        }

        return $original;
    }
}