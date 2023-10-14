<?php

namespace clone;

interface ShopClonable
{
    function cloneWithTheme(Shop $shop, string $theme) : Shop;
}