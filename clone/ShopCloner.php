<?php

namespace clone;

use clone\ShopClonable;

class ShopCloner implements ShopClonable
{

    function cloneWithTheme(Shop $shop, string $theme): Shop
    {
        $shopRet = clone $shop;
        $shopRet->setTheme($theme);
        return $shopRet;
    }
}