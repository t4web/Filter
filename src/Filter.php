<?php
namespace T4webFilter;

class Filter implements FilterInterface
{
    protected $defaults;

    /**
     * @param array $defaults
     */
    public function __construct(array $defaults = [])
    {
        $this->defaults = $defaults;
    }

    /**
     * @param array $filter
     * @return array
     */
    public function prepare(array $filter = [])
    {
        $filter = array_filter($filter);

        if (empty($filter['limit'])) {
            $filter['limit'] = $this->getDefault('limit', 20);
        }

        $filter['order'] = 'id DESC';

        return $filter;
    }

    /**
     * @param      $attribute
     * @param mixed $valueIfNotExists
     *
     * @return mixed
     */
    private function getDefault($attribute, $valueIfNotExists = null)
    {
        return isset($this->defaults[$attribute]) ? $this->defaults[$attribute] : $valueIfNotExists;
    }
}