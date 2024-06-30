<?php

namespace DesignPatterns\State\Deployment;

class DeployedState implements DeploymentState
{
    /**
     * @param DeploymentManager $deploymentManager
     * @return void
     */
    public function handle(DeploymentManager $deploymentManager): void
    {
        echo 'Deployment is successful!';
    }
}