/*Table for article category*/
CREATE TABLE category(
    id INT(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY (id)
);

ALTER TABLE category AUTO_INCREMENT = 1;

/*Table for user*/
CREATE TABLE users(

    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (email)
);

/*Table for article*/
CREATE TABLE article(

    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content VARCHAR(255) NOT NULL,
    categoryId INT(11) NOT NULL,
    publishDate DATETIME NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (categoryId) REFERENCES category(id)
);

ALTER TABLE article AUTO_INCREMENT = 1;

/*Some dummy account inserted in database*/
INSERT INTO users(fullname, email, password)
VALUES('Admin', 'admin@gmail.com', 'admin'),
    ('peter', 'peter@gmail.com', 'peter'),
    ('ninja', 'ninja@gmail.com', 'ninja');

/*Basic new catagory inserted in category table*/
INSERT INTO category(name)
VALUES('Global Politics'),
    ('Stock Market'),
    ('Weather'),
    ('E-Sports');

/*Demo article inserted*/
INSERT INTO article(title, content, categoryId, publishDate)
    VALUES("As Russian Losses Mount in Ukraine Putin ",'The Russian president has rejected requests from commanders in the field that they be allowed to retreat from Kherson a vital city in Ukraines south.', 1, '2000-01-01 15:10:10'),
        ('Elton John a Favorite of Trump Performs at the Biden White House',
        'The British pop superstar who had avoided performing for President Bidens predecessor was also presented with the National Humanities Medal.',
        1,'2000-02-01 15:10:10'),

        ('How Paul LePage Running to Lead Maine ','Mr. LePage a former governor who is seeking to reclaim the office has along with his wife.',1,
            '2000-02-01 15:10:10'),

        ('Federer and Nadal Were the Best of Rivals.','One of the greatest rivalries in tennis history will end in harmony on Friday when Roger Federer plays his final competitive match with Rafael Nadal as his doubles partner.',1,
            '2000-03-01 15:10:10'),

        ('The World Cups Carnival Comes at a Cost','The tournament is at heart a feeling and FIFA and Qatar may be forgetting that no amount of spending is a substitute.',2,
            '2000-04-01 15:10:10'),

        ('Celtics Say Suspending Coach Ime Udoka Was a Matter of Conscience','The Celtics said Udoka violated unspecified team rules prompting a one-year suspension.',2,
            '2000-05-01 15:10:10'),

        ('Article on Importance of Education','Education entails acquiring knowledge to have a greater understanding of the various disciplines that will be used in our everyday lives. ',2,'2000-06-01 15:10:10'),


        ('Mental Aspect of Educations Importance','Education is meant to hone talent sharpen our mindsets and educate us on a myriad of things. In school we cover a variety of topics such as history arithmetic geography politics and so on. These subjects ',3,
            '2000-07-01 15:10:10'),

        ('Article on Importance of Education in Our Life','The importance of education and its significance can be understood through the life of an ignorant and illiterate person who has never had the chance to visit the school and is experiencing. ',3,
            '2000-08-01 15:10:10'),

        ('What Are Some Benefits of Exercise?',' Exercise improves brain health and learning. It can help people sleep better. When you exercise your body makes chemicals that help you feel good. Exercise lowers your chances of depression and decreases feelings of anxiety.',3,
            '2000-09-01 15:10:10'),

        ('How Can I Get Aerobic Exercise?','Like other muscles the heart enjoys a good workout. Aerobic exercise is any type of exercise that gets the heart pumping and gets you breathing harder.',4,
            '2000-10-01 15:10:10'),

        ('What About Strength Training?','Strengthening the heart muscles and bones is not the only important goal of exercise. Exercise can also help the body stay flexible meaning that your muscles and joints stretch and bend easily.',4,
            '2000-11-01 15:10:10');






