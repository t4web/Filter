<?php
namespace T4webFilter;

interface FilterInterface
{
    /**
     * @param array $inputData
     * @return array
     */
    public function prepare(array $inputData = []);
}