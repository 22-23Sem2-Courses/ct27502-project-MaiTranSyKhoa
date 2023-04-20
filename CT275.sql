-- Tạo cơ sở dữ liệu database shoes;
create database shoes;
use shoes;

-- Tạo các bảng dữ liệu
CREATE TABLE shoes.users (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    role enum ('admin', 'client') 
);

insert into shoes.users(username, password, full_name, email, address,role) values ('admin','Khoa1234','Mai Trần Sỹ Khoa','khoab2005678@student.ctu.edu.vn','Cần Thơ','admin'); 
CREATE TABLE shoes.products (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price int NOT NULL,
    image LONGBLOB,
    soluong int default 0
);

insert into shoes.products (name , description,  price, image) values ('GIÀY CỔ CAO','VIỆT NAM',300000,LOAD_FILE('D:/anh/sp1b.jpg'));
insert into shoes.products (name , description,  price, image) values ('VỚ ĐEN CAP CẤP','VIỆT NAM',40000,LOAD_FILE('D:/anh/ACS010_1.jpg'));
insert into shoes.products (name , description,  price, image) values ('NÓN LEN - ĐEN','VIỆT NAM',150000,LOAD_FILE('D:/anh/pro_ABN001_1-1-1.jpg'));
insert into shoes.products (name , description,  price, image) values ('GIÀY THỂ THAO','VIỆT NAM',40000,LOAD_FILE('D:/anh/sp8b.jpg'));
insert into shoes.products (name , description,  price, image) values ('VỚ TRẮNG','VIỆT NAM',40000,LOAD_FILE('D:/anh/pro_ACS002_1.jpg'));
insert into shoes.products (name , description,  price, image) values ('GIÀY THỂ THAO - AS','VIỆT NAM',400000,LOAD_FILE('D:/anh/sp4b.jpg'));
insert into shoes.products (name , description,  price, image) values ('NÓN LƯỠI TRAI - AS','VIỆT NAM',450000,LOAD_FILE('D:/anh/pro_ATH005_1.jpg'));
insert into shoes.products (name , description,  price, image) values ('GIÀY CỔ CAO - NASU','VIỆT NAM',420000,LOAD_FILE('D:/anh/sp3b.jpg'));
insert into shoes.products (name , description,  price, image) values ('GIÀY VẢI ANUS','VIỆT NAM',430000,LOAD_FILE('D:/anh/sp2b.jpg'));

create table shoes.chitietgiohang(
	id int(100) primary key auto_increment,
    product_id int (11),
    quantity int not null,
    user_id INT NOT NULL,
	foreign key (product_id) references shoes.products(id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE shoes.orders (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
	name varchar(50) not null,
    address varchar(255) not null,
    sdt varchar(10) not null,
	email varchar(100),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

create table shoes.chitietorder(
	id INT(100) PRIMARY KEY AUTO_INCREMENT,
	user_id INT NOT NULL,
    order_id INT NOT NULL,
    product_id int not null,
    quantity int not null,
	FOREIGN KEY (user_id) REFERENCES users(id),
    foreign key (product_id) references shoes.products(id),
    foreign key (order_id) references shoes.orders(id)
);