<?php
namespace App\Seeder;
use App\Config\Database;

class BookSeeder extends Database
{
    public function insert()
    {
        $sql = "
            INSERT INTO `books` (`id`, `title`, `image`, `price`, `description`, `pages_number`, `category_id`, `author_id`, `publisher_id`, `quantity`, `format`, `created_by`, `is_active`, `created_at`, `updated_at`) VALUES
            (1, 'ليتها تسأل', '1648554912.jpg', 29, '                                                الكتاب عبارة مجموعة شعرية من 78 قصيدة عاطفية وجدانية واجتماعية مكتوبة باللغة العربية الفصحى ’ استلهمت فيه قصائدي من تجربتي الحياتية والمجتمعية والوجدانية ناهيك عن استقرائي وجدانياً لما يحاكيه المجتمع من حولي ، مراعيا فيه جماليات الفصحى التي استقيتها من طبيعتي و خلجات نفسي وصوري البلاغية وثرائي اللغوي.                                        ', 57, 2, 2, 1, 100, 'كتاب الكتروني', 1, 1, '2022-03-29 11:55:12', '2022-03-29 11:55:12'),
            (2, 'طقوس ما بعد الفراق', '1648555342.jpg', 29, '• طقوس ما بعد الفراق بين الأمل والحنين تبحر بنا صاحبة هذا الكتاب فنشاطرها أفراحها وأتراحها وشوقا ما فتئ يتجدد لغدٍ واعدٍ تملؤه السعادة والحبور .&#13;&#10;&#13;&#10;', 78, 2, 3, 1, 100, 'كتاب الكتروني', 1, 1, '2022-03-29 12:02:22', '2022-03-29 12:02:22'),
            (3, 'ماذا لو لم أنهض', '1648555577.jpg', 30, 'لعلي اجد الطريق الذي تهت فيه لأعاتب حتى دقائقه ولألوم بشره ومن بات فيه لعلي أخرج عن صمتي وأظهر قوتي وضعفي في آن واحد لايهم يكفي أن أجدني يكفي ..&#13;&#10;&#13;&#10;', 100, 2, 1, 1, 59, 'كتاب الكتروني', 1, 1, '2022-03-29 12:06:17', '2022-03-29 12:06:17'),
            (4, 'شعور قلمي‎', '1648555747.jpg', 23, '                        لعلي اجد الطريق الذي تهت فيه لأعاتب حتى دقائقه ولألوم بشره ومن بات فيه لعلي أخرج عن صمتي وأظهر قوتي وضعفي في آن واحد لايهم يكفي أن أجدني يكفي ..&#13;&#10;&#13;&#10;                    ', 80, 2, 4, 2, 900, 'كتاب الكتروني', 1, 1, '2022-03-29 12:09:07', '2022-03-29 12:09:07'),
            (5, 'سدير في عيون الشعر‎', '1648556019.jpg', 23, 'لعلي اجد الطريق الذي تهت فيه لأعاتب حتى دقائقه ولألوم بشره ومن بات فيه لعلي أخرج عن صمتي وأظهر قوتي وضعفي في آن واحد لايهم يكفي أن أجدني يكفي ..&#13;&#10;&#13;&#10;', 22, 2, 5, 2, 22, 'كتاب الكتروني', 1, 1, '2022-03-29 12:13:39', '2022-03-29 12:13:39');

        ";

        $this->pdo->exec($sql);
    }
}