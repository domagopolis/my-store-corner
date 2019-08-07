<?php

namespace MyStoreCorner\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Postcode extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
