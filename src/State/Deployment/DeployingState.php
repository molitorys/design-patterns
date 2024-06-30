<?php

namespace DesignPatterns\State\Deployment;

class DeployingState implements DeploymentState
{
    /**
     * @param DeploymentManager $deploymentManager
     * @return void
     */
    public function handle(DeploymentManager $deploymentManager): void
    {
        echo 'Deploying...';

        $deploymentManager->setState(new DeployedState());
    }
}