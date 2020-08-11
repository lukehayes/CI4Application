DROP TABLE IF EXISTS posts;

CREATE TABLE posts (
    id integer NOT NULL PRIMARY KEY AUTOINCREMENT,
    title text NOT NULL,
    content text NOT NULL
);

INSERT INTO posts(id, title, content) VALUES
(1,'Building an awesome startup with PHP','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.');

INSERT INTO posts(id, title, content) VALUES
(2,'How I went from $0 to $10,000 monthly revenue','Scientists conclude that some programmers have a sense of humor.');

INSERT INTO posts(id, title, content) VALUES
(3,'Caffeination, Yes!','Worlds largest coffee shop open onsite nested coffee shop for staff only.');
