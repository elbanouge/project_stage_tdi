<?php

namespace App\Services;

use TeamTNT\TNTSearch\TNTSearch;

class Search
{

    /**
     * Search image
     *
     * @return boolean
     */
    public function search($q, $index)
    {
        $tnt = new TNTSearch;
        $tnt->loadConfig(config('scout.tntsearch'));
        $tnt->selectIndex($index . ".index");

        $res = $tnt->search($q, 12);

        return $res['ids'];
    }
}
