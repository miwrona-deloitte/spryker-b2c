<?php

namespace Pyz\Zed\HelloSpryker\Business\Reverser;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface StringReverserInterface
{
/**
     * @param HelloSprykerTransfer $stringToReverse
     *   
     * @return HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $stringToReverse): HelloSprykerTransfer;
}