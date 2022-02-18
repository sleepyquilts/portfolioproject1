-- create and select the database
DROP DATABASE IF EXISTS portfoliodatabase1;
CREATE DATABASE portfoliodatabase1;
USE portfoliodatabase1;  -- MySQL command

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
    skill VARCHAR(255) NOT NULL,
    PRIMARY KEY (skillsID)
);


-- insert data into the database
INSERT INTO developer VALUES
(1,'Carlo Santos'),
(2, 'Jennah Hubenak'),
(3, 'Taylor Hillis'),
(4, 'Tamara Schrader');
INSERT INTO education VALUES
(1,'OLYMPIC COLLEGE','INFORMATION SYSTEMS'),
(2, 'OLYMPIC COLLEGE','INFORMATION SYSTEMS'),
(3,'OLYMPIC COLLEGE','INFORMATION SYSTEMS'),
(4,'OLYMPIC COLLEGE','INFORMATION SYSTEMS');
INSERT INTO skills VALUES
(1,'HTML5/CSS'),
(2,'HTML5/CSS'),
(3,'HTML5/CSS'),
(4,'HTML5/CSS');

SELECT *
FROM developer
	INNER JOIN education
	ON education.educationID = developer.developerID
    INNER JOIN skills
    ON skills.skillsID = developer.developerID;
    
    