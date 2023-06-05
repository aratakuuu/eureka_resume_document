CREATE DATABASE resume_document_db;

USE resume_document_db;

CREATE TABLE employee(
  employee_id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(20) NOT NULL,
  birthday date NOT NULL,
  director_id int,
  mail varchar(20) NOT NULL,
  cost int DEFAULT 1000,
  update_time date DEFAULT now()
);
 
CREATE TABLE projecte(
  project_id int PRIMARY KEY AUTO_INCREMENT,
  employee_id int NOT NULL,
  project_name varchar(20) NOT NULL,
  start_date date,
  finish_date date
);

CREATE TABLE get_license(
  get_license_id int PRIMARY KEY AUTO_INCREMENT, 
  employee_id int,
  license_id int
);

CREATE TABLE license(
  license_id int PRIMARY KEY AUTO_INCREMENT, 
  license_name varchar(20) NOT NULL
);

CREATE TABLE language_detail(
  language_detail_id int PRIMARY KEY AUTO_INCREMENT,
  employee_id int,
  language_id int,
  experience_year int
);

CREATE TABLE language(
  language_id int PRIMARY KEY AUTO_INCREMENT,
  language_name varchar(20) NOT NULL
);

CREATE TABLE skill_detail(
  skill_detail_id int PRIMARY KEY AUTO_INCREMENT,
  employee_id int,
  skill_id int,
  experience_year int
);

CREATE TABLE skill(
  skill_id int PRIMARY KEY AUTO_INCREMENT,
  skill_name varchar(20) NOT NULL
);

CREATE TABLE department_detail(
  department_detail_id int PRIMARY KEY AUTO_INCREMENT,
  employee_id int,
  department_id int,
  start_date date,
  finish_date date
);

CREATE TABLE department(
  department_id int PRIMARY KEY AUTO_INCREMENT,
  department_name varchar(20) NOT NULL
);

CREATE TABLE director(
  director_id int PRIMARY KEY AUTO_INCREMENT,
  director_name varchar(20) NOT NULL
);





INSERT INTO employee(employee_id,name,birthday,mail) values
(001,'田中 恭'  ,  '1992-04-17','tanaka.yasusi@gmail.com'),
(002,'山田　貴',   '1978-09-30','yamada.takasi@gmail.com'),
(003,'深田　裕美', '1998-12-12','hukad.yumi@gmail.com'),
(004,'佐藤　裕也', '2000-08-17','stou.yuuya@gmail.com'),
(005,'太田　桜' ,  '2004-09-20','oota.sakura@gmail.com'),
(006,'東　優紀',    '1992-03-14','higasi.yuuki@gmail.com');


INSERT INTO license(license_name)values 
('ITサービスマネージャ'),('ITストラジスト'),('PMP'),('エンベデッドシステムスペシャリスト'),
('システムアーキテクト'),('システム監査技術者'),('データベーススペシャリスト'),
('ネットワークスペシャリスト'),('プロジェクトマネージャー'),('運転免許'),('応用情報技術者'),('基本情報技術者'),
('社会保険労務士'),('情報セキュリティマネジメント'),('情報処理安全確保支援士'),('簿記1級'),('簿記2級'),('簿記3級');

INSERT INTO get_license (employee_id,license_id) values 
(1,3),(3,6),(2,15),(2,14),(2,4),(4,13),(1,2),(1,7),(6,3),
(1,12),(2,12),(3,12),(4,12),(5,12),(6,12),(2,11),(5,14),(6,14);



INSERT INTO language(language_name)values 
('BASIC'),('C言語'),('C++'),('C#'),('COBOL'),('Dart'),('Delphi'),('D言語'),
('FORTRAN'),('Google Apps Script'),('Go言語'),('Groovy'),('Haskell'),('Java'),
('HTML CSS'),('JavaScript'),('Kotlin'),('MATLAB'),('Objective-C'),('Perl'),
('PHP'),('Python'),('Ruby'),('R言語'),('Scala'),('Scratch'),('Script'),('SQL'),
('Swift'),('TypeScript'),('Ui Path'),('VB'),('Visual Basic');

INSERT INTO language_detail(employee_id,language_id,experience_year)values 
(1,3,24),(3,6,36),(2,15,38),(2,4,12),(4,13,7),(1,2,1),(1,7,32),(6,12,12),
(1,12,23),(2,12,35),(3,12,2),(4,12,23),(5,12,16),(6,12,23),(2,11,32),(5,14,10),
(1,28,24),(2,28,15),(3,28,12),(4,28,9),(5,28,18),(6,28,9),
(1,21,2),(2,21,2),(3,21,2),(4,21,2),(5,21,2),(6,21,2),(7,21,2),
(1,14,12),(2,14,14),(3,14,2),(4,14,36),(5,14,48),(6,14,20),
(2,16,24);



INSERT INTO skill(skill_name)values 
('Git'),('PL'),('PM'),('Web開発'),('インフラエンジニア'),('サーバー構築'),('バックエンドエンジニア'),
('フロントエンドエンジニア'),('モバイル開発'),('詳細設計'),('要件定義');

INSERT INTO skill_detail(employee_id,skill_id,experience_year)values 
(1,1,21),(2,1,42),(3,1,24),(4,1,2),(5,1,22),(6,1,12),(7,1,5),
(1,2,32),(1,3,12),(1,4,48),(1,8,48),(1,10,24),
(2,4,48),(2,8,48),(3,6,12),(4,4,12),(4,8,12),
(5,4,2),(5,8,2),(6,11,48),(6,12,48);




INSERT INTO department(department_name)values 
('人事部'),('経理部'),('総務部'),('法務部'),('営業部'),('マーケティング部'),('CS部'),
('情報システム部'),('PMO'),('第1システム部'),('第2システム部'),('経営企画'),('情報セキュリティ'),
('衛生委員会'),('IT事業本部');


INSERT INTO department_detail(employee_id,department_id,start_date,finish_date)values 
(1,10,'2018-04-01','2019-07-31'),(1,11,'2019-08-1',''),
(2,10,'2010-07-01','2020-07-31'),(2,1,'2020-08-01',''),
(3,11,'2018-04-01','2019-07-31'),(3,10,'2019-08-1',''),
(4,12,'2021-04-01',''),
(5,15,'2023-04-01',''),
(6,10,'2018-04-01','2019-07-31'),(6,11,'2019-08-1','');

INSERT INTO director(director_name)values 
('代表取締役社長'),('専務取締役'),('常務取締役'),('本部長'),('事業部長'),('部長'),('次長'),
('課長'),('係長'),('主任'),('一般社員');


SELECT e.employee_id,e.name,s.skill_name,sd.experience_year FROM employee as e
JOIN skill_detail as sd using(employee_id)
JOIN skill as s using(skill_id);