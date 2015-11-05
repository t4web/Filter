<?php
namespace T4webFilter;

interface FilterInterface
{
    /**
     * @param array $filter
     * @return array
     */
    public function filter(array $filter = []);
}