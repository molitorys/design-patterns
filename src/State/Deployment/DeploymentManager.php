<?php

namespace DesignPatterns\State\Deployment;

class DeploymentManager
{
    private DeploymentState $state;

    public function __construct()
    {
        $this->setState(new PendingState());
    }

    /**
     * @param DeploymentState $state
     * @return void
     */
    public function setState(DeploymentState $state): void
    {
        $this->state = $state;
    }

    /**
     * @return void
     */
    public function deploy(): void
    {
        $this->state->handle($this);
    }
}