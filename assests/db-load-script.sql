USE bookstoredb;
CREATE TABLE products (
    id mediumint(8) unsigned NOT NULL auto_increment,
    Name varchar(255) default NULL,
    Price varchar(255) default NULL,
    ImageUrl varchar(255) default NULL,
    PRIMARY KEY (id)
) AUTO_INCREMENT=1;


INSERT INTO products (Name, Price, ImageUrl) VALUES 
("Atomic Habits", "15", "atomic-habits.png"),
("Deep Work", "20", "deep-work.png"),
("The 7 Habits of Highly Effective People", "18", "7-habits.png"),
("Getting Things Done", "22", "getting-things-done.png"),
("Make Time", "17", "make-time.png"),
("Essentialism", "19", "essentialism.png"),
("The Power of Habit", "16", "power-of-habit.png"),
("Eat That Frog", "14", "eat-that-frog.png");

