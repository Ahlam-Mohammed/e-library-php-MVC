<?php
namespace App\Seeder;

class PublisherSeeder extends \App\Config\Database
{
    public function insert()
    {
        $sql = "
        INSERT INTO `publishers` (`id`, `name`, `phone`, `alt_phone`, `fax`, `email`, `address`, `country`, `image`, `is_active`, `created_by`, `created_at`, `updated_at`) VALUES
        (1, 'مركز الأدب العربي للنشر والتوزيع', '773773773', '', '', '', '                                            ', 'Saudi Arabia', '', 1, 1, '2022-03-29 09:42:16', '2022-03-29 09:42:16'),
        (2, ' ‎شركة نضد للنشر والتوزيع‎', '+967737341940', '', '', 'ahlam.m.alfashq@gmail.com', 'جده', 'السعودية', 1, 1, 1, '2022-03-29 12:11:52', '2022-03-29 12:11:52'),
        (3, 'كتب مؤلفين 2‎', '+967737341940', '', '', 'ahlam.m.alfashq@gmail.com', 'Thirty Street - Shamlan', 'السعودية', 1, 1, 1, '2022-03-29 12:12:23', '2022-03-29 12:12:23');

        ";

        $this->pdo->exec($sql);
    }
}