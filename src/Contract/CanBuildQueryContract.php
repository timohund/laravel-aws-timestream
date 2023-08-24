<?php

namespace Parkingcrew\AwsTimestream\Contract;

interface CanBuildQueryContract
{
    /**
     * Build SQL query
     */
    public function builder(): void;
}
