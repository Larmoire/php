<?php

abstract class AbstractTransportFactory implements TransportFactory
{
    /**
     * @throws Exception
     */
    final public function deliver()
    {
        return $this->createTransport()->deliverOrder();
    }

    abstract public function createTransport(): Transport;
}


class Ship implements Transport
{

    public function deliverOrder(): void
    {
        echo "Je delivre en tant que bato";
    }
}

class ShipTransportFactory extends AbstractTransportFactory
{
    public function createTransport(): Ship
    {
        return new Ship();
    }
}

interface Transport
{
    public function deliverOrder();
}

interface TransportFactory
{
    public function createTransport():Transport;
    public function deliver();
}

class Truck implements Transport
{
    public function deliverOrder(): void
    {
        echo "Je délivre en tant que camion";
    }
}

class TruckTransportFactory extends AbstractTransportFactory
{
    public function createTransport(): Truck
    {
        return new Truck();
    }
}