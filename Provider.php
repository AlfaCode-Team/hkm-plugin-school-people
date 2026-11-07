<?php

declare(strict_types=1);

namespace Plugins\SchoolPeople;

use AlfacodeTeam\PhpServicePlatform\Kernel\Contracts\ModuleContract;
use Plugins\SchoolPeople\API\Contracts\SchoolPeopleContract;
use AlfacodeTeam\PhpServicePlatform\Kernel\Container\ModuleContainer;
use AlfacodeTeam\PhpServicePlatform\Kernel\Events\EventBus;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Cli\CliPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Http\HttpPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Worker\WorkerPipeline;

/**
 * SchoolPeople — wires the 'school.people' domain.
 *
 * Students, teachers, staff and families — profiles, photos, QR identity and the archive lifecycle.
 *
 * Keep this module focused on ONE business domain. Wire internal bindings with
 * $container->bindInternal(); publish cross-module contracts with $container->bind().
 */
final class Provider implements ModuleContract
{
    public function solves(): string
    {
        return 'school.people';
    }

    /** @return list<string> module DOMAINS — mirrors module.json "requires" */
    public function requires(): array
    {
        return [
            'database.management',
            'storage.local',
            'image.processing',
            'school.directory',
        ];
    }

    /** @return list<class-string> */
    public function exposes(): array
    {
        return [SchoolPeopleContract::class];
    }

    public function register(ModuleContainer $container): void
    {
        // Bind this module's services here.
    }

    public function boot(HttpPipeline $http, CliPipeline $cli, WorkerPipeline $worker, EventBus $events): void
    {
        // Register pipeline hooks / event subscriptions here.
    }
}
