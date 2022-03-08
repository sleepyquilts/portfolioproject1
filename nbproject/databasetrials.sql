-- create and select the database
DROP DATABASE IF EXISTS portfoliodatabase2;
CREATE DATABASE portfoliodatabase2;
USE portfoliodatabase2;  -- MySQL command

-- create the tables
CREATE TABLE developer (
  developerID   INT(11)  NOT NULL   AUTO_INCREMENT,
  fullname	VARCHAR(50) 	NOT NULL,
  PRIMARY KEY (developerID)
);

CREATE TABLE education (
	educationID   INT(11)  NOT NULL   AUTO_INCREMENT,
    school VARCHAR(255) NOT NULL,
    major VARCHAR(255) NOT NULL,
	PRIMARY KEY (educationID)
);

CREATE TABLE skills (
	skillsID INT(11)  NOT NULL   AUTO_INCREMENT,
    skils VARCHAR(255) NOT NULL,
    developerID INT,
    PRIMARY KEY (skillsID),
    FOREIGN KEY (developerID) REFERENCES developer.developerID
);


-- insert data into the database
INSERT INTO developer VALUES
(1,'Carlo Santos');
INSERT INTO education VALUES
(1,'OLYMPIC COLLEGE','INFORMATION SYSTEMS');
INSERT INTO skills VALUES
(123,'HTML5/CSS'),
(234,'PROJECT MANAGEMENT'),
(345,'JAVASCRIPT'),
(456,'MONGODB'),
(567,'GITHUB'),
(678,'JQUERY'),
(789,'POSTGRESQL'),
(890,'NODE.JS'),
(901,'EXPRESS'),
(101,'ANGULAR');

SELECT * 
FROM developer
	INNER JOIN education
	ON education.educationID = developer.developerID
    INNER JOIN skills;
    
    