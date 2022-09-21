use ctf;

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) CHARACTER SET utf8mb4 NOT NULL UNIQUE COMMENT '用户名',
  `password` varchar(256) CHARACTER SET utf8mb4 DEFAULT NULL UNIQUE COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;

insert into users values(1,'admin','e10adc3949ba59abbe56e057f20f883e');
insert into users values(2,'test','fcea920f7412b5da7be0cf42b8c93759');