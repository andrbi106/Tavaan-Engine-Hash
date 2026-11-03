<?php

declare(strict_types=1);

namespace Tavaan\Engine\Hash;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Hash\Contracts\HashManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * HashManagerServiceProvider — ثبت سرویس‌های موتور HashManager.
 */
final class HashManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(HashManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new HashManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('hash', $this->app->get(HashManagerInterface::class));

        // ثبت درایورها (در صورت نیاز)
        // درایورها به‌صورت lazy در زمان استفاده ساخته می‌شوند.

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            HashManagerInterface::class,
            'hash',
        ];
    }
}