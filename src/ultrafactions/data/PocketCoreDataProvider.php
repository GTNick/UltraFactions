<?php
namespace ultrafactions\data;

use ultrafactions\UltraFactions;

class PocketCoreDataProvider extends DataProvider
{

    public function __construct(UltraFactions $plugin)
    {
        parent::__construct($plugin);
    }

    public function getFactionData($name) : array
    {

    }

    public function getMemberData($name) : array
    {

    }

    public function setFactionData($name, array $data, $append = true) : array
    {

    }

    public function setMemberData($name, array $data, $append = true) : array
    {

    }

    public function get($key)
    {
    }

    public function save($key, array $data)
    {
    }

    protected function init() : bool
    {
        throw new \Exception("PocketCore is currently under development and is unavailable");
        #return true;
    }

}