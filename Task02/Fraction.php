<?php

namespace Task02;

class Fraction
{
    private $numerator;
    private $denominator;

    public function __construct(int $numerator, int $denominator)
    {
        if ($denominator == 0) {
            exit('Знаменатель не может быть равен 0.');
        }

        $this->numerator = $numerator;
        $this->denominator = $denominator;
        $this->reduceFraction();
    }

    public function getNumerator(): int
    {
        return $this->numerator;
    }

    public function getDenominator(): int
    {
        return $this->denominator;
    }

    public function add(Fraction $frac): Fraction
    {
        $newnum = ($this->numerator * $frac->denominator) + ($this->denominator * $frac->numerator);
        $newden = $this->denominator * $frac->denominator;

        $sumFraction = new Fraction($newnum, $newden);

        return $sumFraction;
    }

    public function sub(Fraction $frac): Fraction
    {
        $newnum = ($this->numerator * $frac->denominator) - ($this->denominator * $frac->numerator);
        $newden = $this->denominator * $frac->denominator;

        $subFraction = new Fraction($newnum, $newden);

        return $subFraction;
    }

    public function __toString()
    {
        if (abs($this->numerator) > $this->denominator) {
            $wholePart = intdiv($this->numerator, $this->denominator);
            $remainder = abs($this->numerator % $this->denominator);
            $stringFraction = "$wholePart`$remainder/$this->denominator";
        } else {
            $stringFraction = "$this->numerator/$this->denominator";
        }

        return $stringFraction;
    }

    private function reduceFraction()
    {
        $nod = $this->nod($this->numerator, $this->denominator);
        if ($nod != 1) {
            $this->numerator /= $nod;
            $this->denominator /= $nod;
        }

        if (($this->numerator < 0) && ($this->denominator < 0)) {
            $this->numerator = abs($this->numerator);
            $this->denominator = abs($this->denominator);
        } elseif ($this->denominator < 0) {
            $this->numerator = - ($this->numerator);
            $this->denominator = abs($this->denominator);
        }
    }

    private function nod($a, $b)
    {
        if ($b == 0) {
            return $a;
        } else {
            return $this->nod($b, $a % $b);
        }
    }
}