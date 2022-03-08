-- create and select the database
DROP DATABASE IF EXISTS portfoliodatabase1;
CREATE DATABASE portfoliodatabase1;
USE portfoliodatabase1;  -- MySQL command

-- create the tables
CREATE TABLE developer (
  developerID       mediumint NOT NULL auto_increment,
  developerName     VARCHAR(255)   NOT NULL,
  biography			VARCHAR(2000),
  PRIMARY KEY (developerID)
);

CREATE TABLE skill (
  skillID        mediumint NOT NULL auto_increment,
  skill      VARCHAR(255)   NOT NULL,
  developerID     mediumint,
  PRIMARY KEY (skillID),
  FOREIGN KEY (developerID) REFERENCES developer(developerID)
);

CREATE TABLE education (
	educationID   mediumint NOT NULL auto_increment,
    school VARCHAR(255) NOT NULL,
    major VARCHAR(255) NOT NULL,
    developerID     mediumint,
	PRIMARY KEY (educationID),
    FOREIGN KEY (developerID) REFERENCES developer(developerID)
);

CREATE TABLE pictures (
	pictureID	mediumint NOT NULL auto_increment,
    pictureURL VARCHAR(255) NOT NULL,
    developerID	mediumint,
    PRIMARY KEY (pictureID),
    FOREIGN KEY (developerID) REFERENCES developer(developerID)
);

-- insert data into the database


INSERT INTO developer (developerName, biography) VALUES
('Carlo Santos', 'I am a Web Developer and am always looking to learn new skills. I have a background in communications and customer service. My many years of customer service have taught me how to effectively interact with stakeholders, how to be a team player and how to fully contribute to the success of a company. My current role as a Web Developer also has me working in the marketing team. I have been in charge of the online presence of new product integrations, promotions and sales in the US and EMEA regions. I look forward to working with all future clients.'),
('Jennah Hubenak', 'I am a Web Developer.  I am always looking for ways to learn new skills and hobbies.  I am an avid quilter and I have a larger sewing machine collection than I would like to admit.'),
('Taylor Hillis','While I am competent in the basics of several different fields of IT, I would consider my two areas of greatest expertise to IT networking & IT security. I have an extensive background in food service and customer service. My expierence in these fields have taught me several things including how to effectively interact with stakeholders, how to be a team player and how to fully contribute to the success of a company. While I have no IT work expierence I am very eager to gain expierence. I look forward to working for my future employers.'),
('Tamara Schrader','I am an aspiring IT professional who loves to learn and help people with technology. I have 20 years of experience working in customer service and as part of a team. I enjoy technology through building computers, troublshooting problems for friends, coding websites, and researching new platforms.');
 
INSERT INTO skill (skill, developerID) VALUES
('Project Management', 1),
('HTML5/CSS', 1),
('JavaScript', 1),
('MongoDB', 1),
('Github', 1),
('jQuery', 1),
('PostgreSQL', 1),
('Node.js', 1),
('Express', 1),
('Angular', 1),
('Project Management', 2),
('HTML5/CSS', 2),
('JavaScript', 2),
('Github', 2),
('Project Management', 3),
('HTML5/CSS', 3),
('JavaScript', 3),
('Project Management', 4),
('HTML5/CSS', 4),
('JavaScript', 4);

INSERT INTO education (school, major, developerID) VALUES
('Olympic College','Information Systems', 1),
('University of Washington','Communication', 1),
('Olympic College','Information Systems', 2),
('The University of Texas','Economics', 2),
('Olympic College','Information Systems', 3),
('Olympic College','Information Systems', 4);

INSERT INTO pictures () Values 
(),
(),
(),
(),
();

Select * from education
where developerID=2;
