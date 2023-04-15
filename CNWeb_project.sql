create database CNWeb;
-- drop database cnweb;
use CNWeb;
create table nguoidung(
id int(10) Not null primary key auto_increment,
taikhoan varchar(16) not null,
matkhau varchar(32) not null,
hoten varchar(50) not null,
email varchar(50) not null,
sdt varchar(10) not null,
diachi varchar(255) not null,
user_type varchar(10) not null
);
create table giohang(
id int(10) Not null primary key auto_increment,
idnd int(10),
foreign key (idnd) references nguoidung(id)
);
create table danhmuc(
id char(10) not null primary key,
tenDM varchar(255) not null
);
create table sanpham(
id int(10) Not null primary key auto_increment,
tenSP varchar(255) not null,
img varchar(50) not null,
giatien int not null,
mota varchar(255) not null,
soluongSP int not null,
iddm char(10) not null,
foreign key (iddm) references danhmuc(id)
); 
create table sanphamTronggio(
idgh int(10) not null,
maSP int(10) not null,
soluong int not null,
foreign key (idgh) references giohang(id),
foreign key (maSP) references sanpham(id)
);

insert into nguoidung values(1,'Admin','Admin','Admin','admin@gmail.com','0353879719','Sóc Trăng','Admin');
insert into nguoidung values(2,'Toan2707','Toan2707','Võ Phúc Toàn','vophuctoan365@gmail.com','0353879719','Sóc Trăng','Admin');
insert into giohang values(1,2);

insert into danhmuc values('NT','Nến Thơm');
insert into danhmuc values('TT','Trang Trí');
insert into danhmuc values('DL','Đồ dùng bằng len');
insert into danhmuc values('OL','Ốp Lưng');
insert into danhmuc values('MH','Mô Hình');
insert into danhmuc values('VP','Văn Phòng Phẩm');

insert into sanpham values(1,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',2,'DL');
insert into sanpham values(2,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',3,'DL');
insert into sanpham values(3,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',4,'DL');
insert into sanpham values(4,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',5,'DL');
insert into sanpham values(5,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',1,'DL');
insert into sanpham values(6,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',5,'DL');
insert into sanpham values(7,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',2,'DL');
insert into sanpham values(8,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',3,'DL');
insert into sanpham values(9,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',1,'DL');
insert into sanpham values(10,'Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len',3,'DL');
select * from sanpham;
Delimiter $$
drop procedure if exists xuatSP $$
create procedure xuatSP(iddm char(10), batdau int,ketthuc int)
begin
SELECT * FROM sanpham where sanpham.iddm = iddm LIMIT batdau, ketthuc;
end;$$
call xuatSP('VP',0,9);
Delimiter $$
drop procedure if exists xuatAllSP $$
create procedure xuatAllSP(batdau int,ketthuc int)
begin
SELECT * FROM sanpham LIMIT batdau, ketthuc;
end;$$
call xuatSP('DL',0,9);
select count(id) as soluong from sanpham where iddm ='DL';
select id from giohang where idnd = '2';
select * from nguoidung;
select * from sanphamtronggio;
insert into sanphamtronggio  values(1,1,2);
select * from sanphamtronggio where idgh = 1 and maSP= '1';
 update sanphamtronggio set 
                soluong = soluong + 2
                where maSP = 1 and idgh = 1;
select sanpham(*)from sanpham;
