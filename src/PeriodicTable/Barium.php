<?php

declare(strict_types=1);

namespace Particles\PeriodicTable;

use Particles\Atom;

final class Barium extends Atom
{
    private int $atomicNumber = 56;
    private string $symbol = 'Ba'; 
    private float $atomicWeight = 137.327;
    private mixed $electronegativity = 0.89;
    private float $fusion = 0.00;
    private float $ebulition = 0.00;
    private string $group = '';

    public function getAtomicNumber() : int 
    {
        return $this->atomicNumber;
    }

    public function getSymbol() : string 
    {
        return $this->symbol;
    }

    public function getAtomicWeight() : float 
    {
        return $this->atomicWeight;
    }

    public function getElectronegativity() : mixed 
    {
        return $this->electronegativity;
    } 

    public function getFusion() : float 
    {
        return $this->fusion;
    } 
    
    public function getEbulition() : float 
    {
        return $this->ebulition;
    } 

    public function getGroup() : string 
    {
        return $this->group;
    } 

}