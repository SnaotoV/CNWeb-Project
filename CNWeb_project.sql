create database CNWeb;
-- drop database cnweb;
use CNWeb;
create table danhmuc(
id char(10) not null primary key,
tenDM varchar(255) not null
);
create table sanpham(
id char(10) Not null primary key,
tenSP varchar(255) not null,
img varchar(50) not null,
giatien int not null,
mota varchar(255) not null,
iddm char(10) not null,
foreign key (iddm) references danhmuc(id)
); 

insert into danhmuc values('NT','Nến Thơm');
insert into danhmuc values('TT','Trang Trí');
insert into danhmuc values('DL','Đồ dùng bằng len');
insert into danhmuc values('OL','Ốp Lưng');
insert into danhmuc values('MH','Mô Hình');
insert into danhmuc values('VP','Văn Phòng Phẩm');

insert into sanpham values('1','Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len','DL');
insert into sanpham values('2','Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len','DL');
insert into sanpham values('3','Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len','DL');
insert into sanpham values('4','Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len','DL');
insert into sanpham values('5','Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len','DL');
insert into sanpham values('6','Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len','DL');
insert into sanpham values('7','Thú cưng bằng len','image/animal2.jpg',300000,'Thú cưng được làm bằng len','DL');
select * from danhmuc;
Delimiter $$
drop procedure if exists xuatSP $$
create procedure xuatSP(iddm char(10), batdau int,ketthuc int)
begin
SELECT * FROM sanpham where iddm = iddm LIMIT batdau, ketthuc;
end;
call xuatSP('DL',0,9)
select count(id) as soluong from sanpham where iddm ='DL';