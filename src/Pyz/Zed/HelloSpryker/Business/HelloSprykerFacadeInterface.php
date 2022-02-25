<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerFacadeInterface
{
/**
     * Specification:
     * - Reverses string.
     * 
     * @api
     * 
     * @param HelloSprykerTransfer $stringToReverse
     * 
     * @return HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $stringToReverse): HelloSprykerTransfer;
}