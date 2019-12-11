drop database portfolio;
create database portfolio;

create table admins
(
    id int(11) unsigned auto_increment,
    username tinytext not null,
    email tinytext not null,
    password longtext not null,
    constraint admins_pk
        primary key (id)
);

insert into admins (id, username, email, password) VALUES (
    '1',
    'stolenbows',
    'stolenbows@gmail.com',
    '$2y$10$sRlr8mgKjYTzOUFoCO21QOeOiUzkQqJ8nmBXQVGcgK82M9KFOMnOS'
);

create table projects
(
    id int not null,
    title tinytext not null,
    tags tinytext not null,
    description mediumtext not null,
    content longtext not null
);

create table setup
(
    title tinytext not null,
    author tinytext not null,
    description mediumtext not null,
    keywords mediumtext not null
);

insert into setup (title, author, description, keywords) VALUES (
    'Patrick Roelofs',
    '',
    '',
    ''
);