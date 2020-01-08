CREATE TABLE admins
(
	id       INT UNSIGNED AUTO_INCREMENT
		PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	email    VARCHAR(255) NOT NULL,
	password LONGTEXT     NOT NULL,
	CONSTRAINT email
		UNIQUE (email),
	CONSTRAINT username
		UNIQUE (username)
);

INSERT INTO portfolio.admins (id, username, email, password) VALUES (1, 'stolenbows', 'stolenbows@gmail.com', '$2y$10$sRlr8mgKjYTzOUFoCO21QOeOiUzkQqJ8nmBXQVGcgK82M9KFOMnOS');
CREATE TABLE blog
(
	id          INT UNSIGNED AUTO_INCREMENT
		PRIMARY KEY,
	thumbnail   TINYTEXT   NOT NULL,
	date        DATE       NULL,
	title       TINYTEXT   NULL,
	tags        TINYTEXT   NULL,
	description MEDIUMTEXT NULL,
	content     LONGTEXT   NULL
);


CREATE TABLE experiences
(
	id          INT        NOT NULL,
	location    TINYTEXT   NOT NULL,
	title       TINYTEXT   NOT NULL,
	url         TINYTEXT   NOT NULL,
	date        TINYTEXT   NOT NULL,
	description MEDIUMTEXT NOT NULL
);


CREATE TABLE messages
(
	id      INT UNSIGNED AUTO_INCREMENT
		PRIMARY KEY,
	date    DATE       NOT NULL,
	name    TINYTEXT   NOT NULL,
	email   TINYTEXT   NOT NULL,
	subject MEDIUMTEXT NOT NULL,
	content LONGTEXT   NOT NULL
);

INSERT INTO portfolio.messages (id, date, name, email, subject, content) VALUES (1, '2020-01-01', 'Patrick Roelofs', 'Stolenbows@gmail.com', 'My message', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.');
INSERT INTO portfolio.messages (id, date, name, email, subject, content) VALUES (2, '2018-01-18', 'Patrick Roelofs', 'Stolenbows@gmail.com', 'My message 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.');
CREATE TABLE projects
(
	id          INT UNSIGNED AUTO_INCREMENT
		PRIMARY KEY,
	thumbnail   TINYTEXT   NOT NULL,
	date        DATE       NULL,
	title       TINYTEXT   NULL,
	tags        TINYTEXT   NULL,
	description MEDIUMTEXT NULL,
	content     LONGTEXT   NULL
);

INSERT INTO portfolio.projects (id, thumbnail, date, title, tags, description, content) VALUES (1, 'images/thumbnails/projects/EnergyChallenge/2027318271.jpg', '2020-01-08', 'Energy Challenge', 'UX Prototype', 'This project is about the course ''Interaction 4 Mobile''. Our task: Work on a major consumer mobile platform for an energy company.', '');
INSERT INTO portfolio.projects (id, thumbnail, date, title, tags, description, content) VALUES (2, 'images/thumbnails/projects/Honigevents/770097395.jpg', '2020-01-08', 'Honigevents', 'Back-end System', 'Honigevents is an event management system for the company HonigEvents who organize events at the Honigcomplex in Nijmegen, The Netherlands.', '');
INSERT INTO portfolio.projects (id, thumbnail, date, title, tags, description, content) VALUES (3, 'images/thumbnails/projects/Nzayi/566241017.jpg', '2020-01-08', 'Nzayi', 'Website', 'Nzayi is a design bureau in Angola, their site was designed by Vladimir da Costa and developed by me.', '');
INSERT INTO portfolio.projects (id, thumbnail, date, title, tags, description, content) VALUES (4, 'images/thumbnails/projects/Kaluandafest/248926262.jpg', '2020-01-08', 'Kaluandafest', 'Website', 'The website for Kaluandafest 2019 is live! Kaluandafest is a yearly event in Angola.', '');
INSERT INTO portfolio.projects (id, thumbnail, date, title, tags, description, content) VALUES (5, 'images/thumbnails/projects/ThefutureofRetai/2016028883.jpg', '2020-01-08', 'The future of Retail', 'UX Prototype', 'Devise and elaborate a concept as a group project for Adidas. The ultimate goal was to develop a prototype that could be used in a kiosk within a retail environment.', '');
INSERT INTO portfolio.projects (id, thumbnail, date, title, tags, description, content) VALUES (6, 'images/thumbnails/projects/DivingforTreasur/569589182.PNG', '2020-01-08', 'Diving for Treasure', 'Processing game', 'Diving for Treasure is a little Processing game in the style of Spongebob the Squarepants.', '');
CREATE TABLE setup
(
	title       TINYTEXT   NOT NULL,
	author      TINYTEXT   NOT NULL,
	description MEDIUMTEXT NOT NULL,
	keywords    MEDIUMTEXT NOT NULL
);

INSERT INTO portfolio.setup (title, author, description, keywords) VALUES ('Patrick Roelofs', 'Patrick Roelofs', 'Patrick Roelofs is student, designer and developer in the Netherlands.', 'Developer, Designer, Interaction, UX, Webdeveloper, HTML, CSS, PHP, JS');