<?php

/**
 * Autogenerated file for problem FlattenNestedListIterator
 */

namespace LeetCode\Problems\FlattenNestedListIterator;

class FlattenNestedListIterator
{
    protected $bucket;
    protected $entries;
    protected $pointer;
    /**
     * @param NestedInteger[] $nestedList
     */
    public function __construct($nestedList)
    {
        $this->bucket = [];
        $this->entries = -1;
        $this->pointer = 0;
        foreach ($nestedList as $key => $list) {
            $this->flattenArray($list);
        }
    }

    public function flattenArray($list)
    {
        if ($list->isInteger()) {
            $this->bucket[] = $list->getInteger();
            $this->entries++;
        } else {
            foreach ($list->getList() as $val) {
                $this->flattenArray($val);
            }
        }
    }

    /**
     * @return Integer
     */
    public function next()
    {
        return $this->bucket[$this->pointer++];
    }

    /**
     * @return Boolean
     */
    public function hasNext()
    {
        return $this->pointer <= $this->entries;
    }
}
