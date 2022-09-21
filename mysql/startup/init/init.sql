
drop database if exists users;
create database users;
use users;

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) CHARACTER SET utf8mb4 NOT NULL UNIQUE COMMENT '用户名',
  `password` varchar(256) CHARACTER SET utf8mb4 DEFAULT NULL UNIQUE COMMENT '密码'
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;