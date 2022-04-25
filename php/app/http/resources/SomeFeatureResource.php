<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SomeFeatureResource extends JsonResource {

    // if using database method
    public function toArray() {
        return [
            // define your database query
            // optionally check if feature is: Expires at, Enabled from
            'feature_name' => $this->resource?->something()->value,
            'feature_status' => $this->resource?->something()->value
        ];
    }

    // OR 
    
    // if using static file method
    public function toArray() {
        return [
            // define your database query
            // optionally check if feature is: Expires at, Enabled from
            'feature_name' => $this->resource?->something()->value,
            'feature_status' => $this->resource?->something()->value
        ];
    }
};
