<?php

namespace DesignPatterns\State\Deployment;

interface DeploymentState
{
    /**
     * @param DeploymentManager $deploymentManager
     * @return void
     */
    public function handle(DeploymentManager $deploymentManager): void;
}