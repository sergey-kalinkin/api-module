<?php

namespace App\Libraries\Iiko\ApiData\DataAdaptors;


use App\Libraries\AbstractElements\ADataAdaptor;
use App\Libraries\Iiko\ApiData\ResponseData\Profile;

final class ProfileAdaptor extends ADataAdaptor
{

    public function createOne(): ?Profile
    {
        try {
            return new Profile($this->getItem());
        }
        catch (\Throwable $t) {
            if($this->isProcessing())
                return $this->createOne();

            return null;
        }
    }
}
