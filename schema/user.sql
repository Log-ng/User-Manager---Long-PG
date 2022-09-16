CREATE TABLE `user` (
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `fullName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user`
    ADD PRIMARY KEY (`username`);

INSERT INTO `user` (username, password, fullName) VALUES
   ('longlanh1', '123', 'Nguyễn Thành Long'),
   ('longlanh2', '123', 'Nguyễn Long Thành'),
   ('longlanh3', '123', 'Long Long Long');