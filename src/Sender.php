<?php

namespace Digbang\FraudService;


class Sender
{
    /**
     * @param Data  $newMovement
     * @param Data[] $lastMovements
     */
    public function send(Data $newMovement, array $lastMovements = [])
    {
        foreach ($lastMovements as $lastMovement) {
            if (!$lastMovement instanceof Data) {
                throw new \InvalidArgumentException('last movements are not valid');
            }
        }

        $sentryClient = new \Raven_Client('https://d7c04877a1f54bd9bb6f86ca3278424a@sentry.io/1298476');
        $sentryClient->captureException(new \Exception($newMovement));
    }
}