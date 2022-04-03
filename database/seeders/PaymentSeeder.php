<?php
namespace App\Seeder;
use App\Config\Database;

class PaymentSeeder extends Database
{
    public function insert()
    {
        $sql = "
        INSERT INTO `payments` (`id`, `name`, `image`, `is_active`, `created_by`, `created_at`, `updated_at`) VALUES
        (1, 'MasterCard', '1648710096.png', 1, 1, '2022-03-31 07:01:36', '2022-03-31 07:01:36'),
        (2, 'VISA', '1648710838.png', 1, 1, '2022-03-31 07:13:58', '2022-03-31 07:13:58'),
        (4, 'PayPal', '1648711254.png', 1, 1, '2022-03-31 07:20:54', '2022-03-31 07:20:54'),
        (5, 'Discover', '1648711313.png', 1, 1, '2022-03-31 07:21:53', '2022-03-31 07:21:53'),
        (6, 'American Express', '1648711367.jpg', 1, 1, '2022-03-31 07:22:47', '2022-03-31 07:22:47');

        ";

        $this->pdo->exec($sql);
    }
}