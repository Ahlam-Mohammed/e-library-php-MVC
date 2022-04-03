<?php
namespace App\Seeder;
use App\Config\Database;

class AuthorSeeder extends Database
{
    public function insert()
    {
        $sql = "INSERT INTO `authors` (`id`, `name`, `phone`, `email`, `bio`, `is_active`, `created_by`, `created_at`, `updated_at`) VALUES
                (1, 'حليمة عطية القرشي المالكي', '+967737341940', 'halima@gmail.com', '                              ', 1, 1, '2022-03-29 09:42:16', '2022-03-29 09:42:16'),
                (2, 'خالد شريفي', '+967737341940', 'khalid@gmail.com', ' كاتب', 1, 1, '2022-03-29 11:52:19', '2022-03-29 11:52:19'),
                (3, 'أصيل عبدالمحسن', '+967737341940', 'aseel@gmail.com', 'anything&#13;&#10;&#13;&#10;', 1, 1, '2022-03-29 11:59:41', '2022-03-29 11:59:41'),
                (4, ' ‎روان الشريف‎', '+967737341940', 'r@gmail.com', '&#13;&#10;', 1, 1, '2022-03-29 12:07:29', '2022-03-29 12:07:29'),
                (5, 'معاذ عبدالله محمد أبابطين', '+967737341940', 'a@gmail.com', 'anything', 1, 1, '2022-03-29 12:10:41', '2022-03-29 12:10:41');";

        $this->pdo->exec($sql);
    }
}