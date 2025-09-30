# assignment-ecommerce

## 📸 Screenshot

![Screenshot of the eCommerce site](./screenshot.png)

## Setup

### DB Schema
 
```

```sql
CREATE TABLE book (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100),
    price DECIMAL(6,2),
    description TEXT
);

INSERT INTO book (title, author, price, description) VALUES
('The Great Gatsby', 'F. Scott Fitzgerald', 10.99, 'Classic novel set in the 1920s.'),
('1984', 'George Orwell', 8.99, 'Dystopian novel about totalitarian regime.'),
('To Kill a Mockingbird', 'Harper Lee', 12.50, 'Novel about racial injustice in the Deep South.');

```

