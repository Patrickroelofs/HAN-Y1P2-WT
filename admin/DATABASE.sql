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
    date            DATE            NOT NULL,
    title           TINYTEXT        NOT NULL,
    tags            TINYTEXT        NOT NULL,
    description     MEDIUMTEXT      NOT NULL,
    content         LONGTEXT        NOT NULL,

    CONSTRAINT blog_pk
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

/* ***************************** */
/**        Experiences           */
/* ***************************** */
CREATE TABLE experiences
(
    id				INT				NOT NULL,
    location		TINYTEXT		NOT NULL,
    title			TINYTEXT		NOT NULL,
    url				TINYTEXT		NOT NULL,
    date			TINYTEXT		NOT NULL,
    description		MEDIUMTEXT		NOT NULL
)