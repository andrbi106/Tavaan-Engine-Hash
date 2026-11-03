# Tavaan Engine — Hash

> **هش رمز عبور** — موتور Hash در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.hash` |
| نام | `Hash` |
| عنوان فارسی | هش رمز عبور |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Hash` |
| نوع | `engine` |
| Facade | `Hash` (accessor: `hash`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Hash\Contracts\HasherInterface`

## کلاس‌های اصلی

- `src/Argon2idHasher.php`
- `src/BcryptHasher.php`
- `src/HashManager.php`
- `src/HashServiceProvider.php`

## Service Providerها

- `Tavaan\Engine\Hash\HashServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/hash.php`
- کلید: `hash`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Hash.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Hash`** (این مخزن) | موتور Hash |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
