<?php

namespace App;

class Stack implements StackInterface
{
    private $stack;

    public function __construct(...$elems)
    {
        $this->push(...$elems);
    }

    public function push(...$elems)
    {
        foreach ($elems as $elem) {
            $this->stack[] = $elem;
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            $popElement = array_pop($this->stack);
            return $popElement;
        } else {
            return null;
        }
    }

    public function top()
    {
        if (!$this->isEmpty()) {
            return end($this->stack);
        } else {
            return null;
        }
    }

    public function isEmpty()
    {
        if ($this->stack) {
            return false;
        } else {
            return true;
        }
    }

    public function copy(): Stack
    {
        return clone $this;
    }

    public function __toString()
    {
        $string = '';
        foreach ($this->stack as $index => $element) {
            if ($index == 0) {
                $string = $element . $string;
            } else {
                $string = $element . "->" . $string;
            }
        }
        return $string;
    }
}
