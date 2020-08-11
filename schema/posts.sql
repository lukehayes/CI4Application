DROP TABLE IF EXISTS posts;

CREATE TABLE posts (
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(128) NOT NULL,
    content text NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO posts VALUES
(1,'Building an awesome startup with PHP','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2,'How I went from $0 to $10,000 monthly revenue','Scientists conclude that some programmers have a sense of humor.'),
(3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.');
