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