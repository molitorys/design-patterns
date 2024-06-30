<?php

namespace DesignPatterns\State\Deployment;

class PendingState implements DeploymentState
{
    /**
     * @param DeploymentManager $deploymentManager
     * @return void
     */
    public function handle(DeploymentManager $deploymentManager): void
    {
        echo 'Deployment is pending';

        $deploymentManager->setState(new DeployingState());
    }
}