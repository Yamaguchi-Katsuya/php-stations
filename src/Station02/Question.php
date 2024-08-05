<?php

namespace Src\Station02;

class Question
{
    public function main(mixed $arg): string
    {
        if ($arg === 0) {
            return 'zero';
        } elseif ($arg === '1') {
            return 'foo';
        } elseif ($arg === 1) {
            return 'bar';
        } elseif ($arg >= 2) {
            return 'baz';
        } else {
            return 'others';
        }
    }
}
