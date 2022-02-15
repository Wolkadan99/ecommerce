<?php

namespace RevisaoEletiva
{

    class Ponto
    {
        private int $X;
        private int $Y;
        public static int $counter;

        public function __construct(int $X, int $Y)
        {
            $this->setX($X);
            $this->setY($Y);
        }

        public static function returnCounter(): int
        {
            return self::$counter;
        }

        public function getX(): int
        {
            return $this->X;
        }


        public function setX(int $X): void
        {
            $this->X = $X;
        }


        public function getY(): int
        {
            return $this->Y;
        }

        public function setY(int $Y): void
        {
            $this->Y = $Y;
        }

        public function calcularDistancia(Ponto $p): float
        {
            return sqrt(
                pow($p->X - $this->X, 2)
                +
                pow($p->Y - $this->Y,2)
            );
        }

        public function calcularDistanciaXY(int $X, int $Y): float
        {
            return sqrt(
                pow($X - $this->X, 2)
                +
                pow($Y - $this->Y,2)
            );
        }

        public function calcularDistanciaValores(int $Xi, int $Xf, int $Yi, int $Yf): float
        {
            return sqrt(
                pow($Xf - $Xi,2)
                +
                pow($Yf - $Yi,2)
            );
        }

    }
}