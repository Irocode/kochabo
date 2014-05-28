<?php namespace Sefa\Searchbackenddeliveryzipcode;

use Deliveryzipcode;


class Search {

    public function search($search) {

        $deliveryzipcodeResult = Deliveryzipcode::search($search)->get()->toArray();

        $result = array_merge($deliveryzipcodeResult);
        return $result;
    }
}
