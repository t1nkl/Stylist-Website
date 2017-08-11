<?php

namespace App\Libraries;

use App\Models\{Mainservice};

class Helpers
{

	public static function getMainservices()
    {
        return Mainservice::orderBy("rgt")->get();
    }

}
