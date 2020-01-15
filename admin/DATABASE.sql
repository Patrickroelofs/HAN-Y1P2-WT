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

INSERT INTO portfolio.blog (id, thumbnail, date, title, tags, description, content) VALUES (6, 'images/thumbnails/blog/Cats,anamazingmo/1341233255.jpeg', '2020-01-12', 'Cats, an amazing movie or a shitty piece of CGI?', 'Movie', 'Cats, not my piece of cake...', 'Miaow then turn around and show you my bum i like cats because they are fat and fluffy loved it, hated it, loved it, hated it. &#13;&#10;&#13;&#10;Hunt by meowing loudly at 5am next to human slave food dispenser soft kitty warm kitty little ball of furr yet love i heard this rumor where the humans are our owners, pfft, what do they know?! wake up wander around the house making large amounts of noise jump on top of your human&#39;s bed and fall asleep again. Lick the curtain just to be annoying meowing non stop for food furrier and even more furrier hairball get my claw stuck in the dog&#39;s ear cat gets stuck in tree firefighters try to get cat down firefighters get stuck in tree cat eats firefighters&#39; slippers but cat slap dog in face ooooh feather moving feather!.');
INSERT INTO portfolio.blog (id, thumbnail, date, title, tags, description, content) VALUES (7, 'images/thumbnails/blog/Science,isitreal/176512609.jpg', '2020-02-12', 'Science, is it real?', 'science', 'The strength of Science and its online journal sites rests with the strengths of its community of authors', 'Besides, you look good in a dress. What&#39;s a knock-out like you doing in a computer-generated gin joint like this? Did you come here for something in particular or just general Riker-bashing? Then maybe you should consider this: if anything happens to them, Starfleet is going to want a full investigation. Congratulations - you just destroyed the Enterprise. Smooth as an android&#39;s bottom, eh, Data? Wait a minute - you&#39;ve been declared dead. You can&#39;t give orders around here. I&#39;ve had twelve years to think about it. And if I had it to do over again, I would have grabbed the phaser and pointed it at you instead of them. The Federation&#39;s gone; the Borg is everywhere!');


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

INSERT INTO portfolio.messages (id, date, name, email, subject, content) VALUES (9, '2020-01-12', 'Thimothy Mack', 'Thimothy@mack.com', 'Hey man this is my subject!', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.');
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

INSERT INTO portfolio.projects (id, thumbnail, date, title, tags, description, content) VALUES (1, 'images/thumbnails/projects/EnergyChallenge/2027318271.jpg', '2020-01-08', 'Energy Challenge', 'UX Prototype', 'This project is about the course &#39;Interaction 4 Mobile&#39;. Our task: Work on a major consumer mobile platform for an energy company.', 'Hello World, How are you doing?

Im good!');
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