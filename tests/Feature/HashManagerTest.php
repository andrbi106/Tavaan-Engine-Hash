<?php

declare(strict_types=1);

namespace Tavaan\Engine\Hash\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Hash\HashManager;
use Tavaan\Engine\Hash\HashManagerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور HashManager.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class HashManagerTest extends TestCase
{
    private HashManager $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new HashManager($config);
    }

    /**
     * T-01: make/check roundtrip
     */
    public function test_t01_makecheck_roundtrip(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: رمز اشتباه → false
     */
    public function test_t02____false(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: needsRehash با cost قدیمی → true
     */
    public function test_t03_needs_rehash__cost___tru(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Argon2id نبود → bcrypt fallback
     */
    public function test_t04_argon2id___bcrypt_fallback(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: دو hash از یک رمز متفاوت (salt)
     */
    public function test_t05__hash_____salt(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

}