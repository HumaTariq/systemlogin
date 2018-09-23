CREATE TABLE user (
    user_id int (11) AUTO_INCREMENT PRIMARY KEY not null,
	user_first varchar(40) not null,
	user_last varchar(40) not null,
	user_email varchar(40) not null,
	user_pwd varchar(40) not null
);

INSERT INTO user (user_first, user_last, user_email, user_pwd) 
VALUES ('Daniel', 'Nielsen' 'usemmyuys@gmail.com', 'Admin', 'test123');