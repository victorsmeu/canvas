<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 03.3.2016
 * Time: 12:11 PM
 */

namespace App\Plugins\Users;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function createTable()
    {
        $create_sql = <<<'STOP'
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
STOP;

        \DB::statement($create_sql);
    }

    public function dropTable()
    {
        \DB::statement('DROP TABLE IF EXISTS users');
    }
}