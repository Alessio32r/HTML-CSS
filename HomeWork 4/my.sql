-- create
CREATE TABLE classmate (
  empId INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmate VALUES (0001, 'Николай', 20, 'Москва');
INSERT INTO classmate VALUES (0002, 'Олеся', 30, 'Казань');
INSERT INTO classmate VALUES (0003, 'Елена', 18, 'Москва');
INSERT INTO classmate VALUES (0004, 'Людмила', 45, 'Москва');
INSERT INTO classmate VALUES (0005, 'Юлия', 19, 'Курск');
INSERT INTO classmate VALUES (0006, 'Игорь', 50, 'Казань');
INSERT INTO classmate VALUES (0007, 'Вазген', 51, 'Брянск');
INSERT INTO classmate VALUES (0008, 'Дарья', 25, 'Смоленск');
INSERT INTO classmate VALUES (0009, 'Максим', 29, 'Москва');
INSERT INTO classmate VALUES (00010, 'Виктория', 32, 'Таганрог');
INSERT INTO classmate VALUES (00011, 'Дина', 77, 'Мухосранск');

-- fetch 
SELECT name FROM classmate
WHERE 18 <= age AND age < 30 
AND address='Москва';