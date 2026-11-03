<?php

declare(strict_types=1);

namespace Tavaan\Engine\Hash\Contracts;

/**
 * قرارداد HashManager.
 *
 * @see \Tavaan\Engine\Hash\HashManager
 * @api 1.0
 */
interface HashManagerInterface
{
    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد check.
     *
     * @return mixed
     */
    public function check(/* ... */): mixed;

    /**
     * متد needsRehash.
     *
     * @return mixed
     */
    public function needsRehash(/* ... */): mixed;

    /**
     * متد info.
     *
     * @return mixed
     */
    public function info(/* ... */): mixed;

    /**
     * متد driver.
     *
     * @return mixed
     */
    public function driver(/* ... */): mixed;
}