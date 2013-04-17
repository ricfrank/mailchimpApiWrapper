<?php

namespace RicFrankMailChimp\Configuration;

use Symfony\Component\Yaml\Yaml;

class YmlConfigLoader
{
    public function load($resource)
    {
        return Yaml::parse($resource);
    }
}
