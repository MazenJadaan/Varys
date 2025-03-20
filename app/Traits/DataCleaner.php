<?php

namespace App\Traits;

trait DataCleaner
{
    public function cleanData ($data) {
        if (is_array($data)) {
            return array_filter($data, function ($value) {
                return !empty($value) || $value === 0 || $value === false;
            });
        }
        return $data;
    }
}
