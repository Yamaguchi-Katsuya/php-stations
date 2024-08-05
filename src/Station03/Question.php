<?php

namespace Src\Station03;

class Question
{
    public function main(mixed $arg): string
    {
        switch (true) {
            case $arg === 1:
                return 'りんご';
            case $arg === 2:
                return 'みかん';
            case $arg === 3:
                return 'みかん';
            default:
                return 'さくらんぼ';
        }
    }
}
