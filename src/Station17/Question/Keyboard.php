<?php

namespace Src\Station17\Question;

class Keyboard
{
    public function play(SoundInterface $sound, string $scale): void
    {
        if (!$sound->isValidatedInput($scale)) {
            echo 'この音を鳴らすことはできません';
            return;
        }

        echo $sound->sound($scale) . 'を鳴らします';
    }
}
