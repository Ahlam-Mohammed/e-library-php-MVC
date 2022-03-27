<?php

use App\Config\Database;

class migrate_0015_add_constraint_FK_tables extends Database
{
    public function up()
    {
        $SQL = "ALTER TABLE users 
                ADD CONSTRAINT fk_user_role
                FOREIGN KEY (role_id) REFERENCES roles(id);
                
                ALTER TABLE user_tokens 
                ADD CONSTRAINT fk_token_user
                FOREIGN KEY (user_id) REFERENCES users(id);
                
                ALTER TABLE authors 
                ADD CONSTRAINT fk_author_user_created
                FOREIGN KEY (created_by) REFERENCES users(id);
                
                ALTER TABLE books 
                ADD CONSTRAINT fk_book_category
                FOREIGN KEY (category_id) REFERENCES categories(id);
                
                ALTER TABLE books 
                ADD CONSTRAINT fk_book_author
                FOREIGN KEY (author_id) REFERENCES authors(id);
                
                ALTER TABLE books 
                ADD CONSTRAINT fk_book_publisher
                FOREIGN KEY (publisher_id) REFERENCES publishers(id);
                
                ALTER TABLE books 
                ADD CONSTRAINT fk_book_user_created
                FOREIGN KEY (created_by) REFERENCES users(id);
                
                ALTER TABLE categories 
                ADD CONSTRAINT fk_category_user_created
                FOREIGN KEY (created_by) REFERENCES users(id);
                
                ALTER TABLE cities 
                ADD CONSTRAINT fk_city_user_created
                FOREIGN KEY (created_by) REFERENCES users(id);
                
                ALTER TABLE offers 
                ADD CONSTRAINT fk_offer_user_created
                FOREIGN KEY (created_by) REFERENCES users(id);
                
                ALTER TABLE orders 
                ADD CONSTRAINT fk_order_user
                FOREIGN KEY (user_id) REFERENCES users(id);
                
                ALTER TABLE orders 
                ADD CONSTRAINT fk_order_payment_method
                FOREIGN KEY (payment_method) REFERENCES payments(id);
                
                ALTER TABLE orders 
                ADD CONSTRAINT fk_order_address
                FOREIGN KEY (address_id) REFERENCES user_addresses(id);
                
                ALTER TABLE order_details 
                ADD CONSTRAINT fk_order_details_order
                FOREIGN KEY (order_id) REFERENCES orders(id);
                
                ALTER TABLE order_details 
                ADD CONSTRAINT fk_order_details_book
                FOREIGN KEY (book_id) REFERENCES books(id);
                
                ALTER TABLE payments 
                ADD CONSTRAINT fk_payment_user_created
                FOREIGN KEY (created_by) REFERENCES users(id);
                
                ALTER TABLE publishers 
                ADD CONSTRAINT fk_publisher_user_created
                FOREIGN KEY (created_by) REFERENCES users(id);
                
                ALTER TABLE user_addresses 
                ADD CONSTRAINT fk_address_user
                FOREIGN KEY (user_id) REFERENCES users(id);
                
                ALTER TABLE user_addresses 
                ADD CONSTRAINT fk_address_city
                FOREIGN KEY (city_id) REFERENCES cities(id);
                
                ALTER TABLE user_payment_methods 
                ADD CONSTRAINT fk_payment_method_user
                FOREIGN KEY (user_id) REFERENCES users(id);
                
                ALTER TABLE user_payment_methods 
                ADD CONSTRAINT fk_payment_method_payment
                FOREIGN KEY (payment_id) REFERENCES payments(id);
                
                ALTER TABLE user_profiles 
                ADD CONSTRAINT fk_profile_user
                FOREIGN KEY (user_id) REFERENCES users(id);";

        $this->pdo->exec($SQL);
    }
}