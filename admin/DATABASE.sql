/* ***************************** */
/**        START                 */
/* ***************************** */
DROP    DATABASE IF EXISTS      portfolio;
CREATE  DATABASE                portfolio;
USE                             portfolio;

DROP TABLE IF EXISTS admins;
DROP TABLE IF EXISTS messages;
DROP TABLE IF EXISTS projects;
DROP TABLE IF EXISTS setup;
DROP TABLE IF EXISTS blog;
DROP TABLE IF EXISTS experiences;


/* ***************************** */
/**        Admins                */
/* ***************************** */
CREATE TABLE admins
(
    id              INT             UNSIGNED    AUTO_INCREMENT,
    username        VARCHAR(255)    NOT NULL    UNIQUE,
    email           VARCHAR(255)    NOT NULL    UNIQUE,
    password        LONGTEXT        NOT NULL,

    CONSTRAINT admins_pk
        PRIMARY KEY (id)
);

INSERT INTO admins (username, email, password) VALUES (
    'stolenbows',
    'stolenbows@gmail.com',
    '$2y$10$sRlr8mgKjYTzOUFoCO21QOeOiUzkQqJ8nmBXQVGcgK82M9KFOMnOS'
);


/* ***************************** */
/**        Projects              */
/* ***************************** */
CREATE TABLE projects
(
    id              INT				UNSIGNED	AUTO_INCREMENT,
    thumbnail		TINYTEXT		NOT NULL,
    date            DATE            NULL,
    title           TINYTEXT        NULL,
    tags            TINYTEXT        NULL,
    description     MEDIUMTEXT      NULL,
    content         LONGTEXT        NULL,

    CONSTRAINT projects_pk
		PRIMARY KEY (id)
);

INSERT INTO projects VALUES (
	'1',
	'images/thumbnails/thumbnail_energy.jpg',
	'2019-12-14',
	'Energy Challenge',
	'UX Prototype',
	'This project is about the course ''Interaction 4 Mobile''. Our task: Work on a major consumer mobile platform for an energy company.',
	''
),
(
	'2',
	'images/thumbnails/thumbnail_honig.jpg',
	'2019-12-14',
	'Honigevents',
	'Back-end System',
	'Honigevents is an event management system for the company HonigEvents who organize events at the Honigcomplex in Nijmegen, The Netherlands.',
	''
),
(
	'3',
	'images/thumbnails/thumbnail_nzayi.jpg',
	'2019-12-14',
	'Nzayi',
	'Website',
	'Nzayi is a design bureau in Angola, their site was designed by Vladimir da Costa and developed by me.',
	''
),
(
	'4',
	'images/thumbnails/thumbnail_kaluanda.jpg',
	'2019-12-14',
	'Kaluandafest',
	'Website',
	'The website for Kaluandafest 2019 is live! Kaluandafest is a yearly event in Angola.',
	''
),
(
	'5',
	'images/thumbnails/thumbnail_retail.jpg',
	'2019-12-14',
	'The future of Retail',
	'UX Prototype',
	'Devise and elaborate a concept as a group project for Adidas. The ultimate goal was to develop a prototype that could be used in a kiosk within a retail environment.',
	''
),
(
	'6',
	'images/thumbnails/thumbnail_divingfortreasure.PNG',
	'2019-12-14',
	'Diving for Treasure',
	'Processing game',
	'Diving for Treasure is a little Processing game in the style of Spongebob the Squarepants.',
	''
);


/* ***************************** */
/**        Setup                 */
/* ***************************** */
CREATE TABLE setup
(
    title           TINYTEXT        NOT NULL,
    author          TINYTEXT        NOT NULL,
    description     MEDIUMTEXT      NOT NULL,
    keywords        MEDIUMTEXT      NOT NULL
);

INSERT INTO setup (title, author, description, keywords) VALUES (
    'Patrick Roelofs',
    'Patrick Roelofs',
    'Patrick Roelofs is student, designer and developer in the Netherlands.',
    'Developer, Designer, Interaction, UX, Webdeveloper, HTML, CSS, PHP, JS'
);

/* ***************************** */
/**        Blog                  */
/* ***************************** */
CREATE TABLE blog
(
    id              INT				UNSIGNED	AUTO_INCREMENT,
    thumbnail		TINYTEXT		NOT NULL,
    date            DATE            NULL,
    title           TINYTEXT        NULL,
    tags            TINYTEXT        NULL,
    description     MEDIUMTEXT      NULL,
    content         LONGTEXT        NULL,

    CONSTRAINT projects_pk
        PRIMARY KEY (id)
);

/* ***************************** */
/**        Messages              */
/* ***************************** */
CREATE TABLE messages
(
	id				INT				UNSIGNED	AUTO_INCREMENT,
	date			DATE			NOT NULL,
	name			TINYTEXT		NOT NULL,
	email			TINYTEXT		NOT NULL,
	subject			MEDIUMTEXT		NOT NULL,
	content			LONGTEXT		NOT NULL,

	CONSTRAINT messages_pk
		PRIMARY KEY (id)
);

INSERT INTO messages (date, name, email, subject, content)
VALUES ('2020-1-1', 'Patrick Roelofs', 'Stolenbows@gmail.com', 'My message', 'My Message Text');

/* ***************************** */
/**        Experiences           */
/* ***************************** */
CREATE TABLE experiences
(
    id				INT				NOT NULL,
    section         INT             NOT NULL,
    location		TINYTEXT		NOT NULL,
    title			TINYTEXT		NOT NULL,
    url				TINYTEXT		NOT NULL,
    date			TINYTEXT		NOT NULL,
    description		MEDIUMTEXT		NOT NULL
)