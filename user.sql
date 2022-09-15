CREATE TABLE `user` (
    `user_id` int(11) NOT NULL,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `fullName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

INSERT INTO `user` (user_id, username, password, fullName) VALUES
   (1, 'longlanh1', '123', 'Nguyễn Thành Long'),
   (2, 'longlanh2', '123', 'Nguyễn Long Thành'),
   (3, 'longlanh3', '123', 'Long Long Long');