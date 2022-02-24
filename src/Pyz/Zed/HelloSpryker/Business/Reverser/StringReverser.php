<?php

namespace Pyz\Zed\HelloSpryker\Business\Reverser;


class StringReverser implements StringReverserInterface {

    public function reverseString(string $stringToReverse): string
    {
        return strrev($stringToReverse);
    }
}