INSERT INTO Users VALUES(1011152021,'Lucas','F', 26,'Male','University City','sixers76@yahoo.com','Passw0rd');
INSERT INTO Users VALUES(1011152022,'Noah', null, 24,'Male','Roxborough','rockets99@hotmail.com','abc2334');
INSERT INTO Users VALUES(1011152023,'Paul', 'S', 23,'Male','Flourtown','test6799@hotmail.com','Passw0rd');
INSERT INTO Users VALUES(1011152024,'Theo', 'Von', 23,'Male','Cherry Hill','qualityassured@gmail.com','Passw0rd');
INSERT INTO Users VALUES(1011152025,'Jay', null, 22,'Male','Wynnewood','testUser112@gmail.com','Aa123456');

INSERT INTO Users VALUES(101010, 'Jenna', 'Penn', 26, 'Female', 'Blue Bell', 'email1@yahoo.com', 'Pwdpwdpwd');
INSERT INTO Users VALUES(101011, 'Kelly', 'Rang', 27, 'Female', 'Pheonixville', 'email2@yahoo.com', 'Pwdpwdpwd!');
INSERT INTO Users VALUES(101012, 'Kylie', 'Jay', 28, 'Female', 'Norristown', 'email3@yahoo.com', 'Pwdpwdpwd!!');
INSERT INTO Users VALUES(101013, 'Jess', 'Kenn', 26, 'Female', 'Collegeville', 'email4@yahoo.com', 'Pwdpwdpwd1');
INSERT INTO Users VALUES(101014, 'Lexi', 'Green', 29, 'Female', 'Worchester', 'email5@yahoo.com', 'Pwdpwdpwd2');

INSERT INTO Biography VALUES(2000,1011152021,'being silly. having ridiculous amonts of fun wherever. being a smart ass. ohh and i can cook. ;)', 'funny');
INSERT INTO Biography VALUES(2001,1011152022,'full-time student, full-time square. i change from year to year. on the weekends i like to sit and home and prepare for the week ahead.','funny');
INSERT INTO Biography VALUES(2002,1011152023,'im a free culture nerd. i travel, talk, and teach.','informative');
INSERT INTO Biography VALUES(2003,1011152024,'straight to the point! i sugar coat, but i mean well. sarcastic and a clown. good friend to talk to. ','honest');
INSERT INTO Biography VALUES(2004,1011152025,'im from bucks county, pa. when i was a kid, i could walk to the end of my street and feed cows','sincere');

INSERT INTO Prompts VALUES(3233,1011152021,'Hiking / Outdoors activities','Straightforward');
INSERT INTO Prompts VALUES(3234,1011152022,'Watch cartoons / TV ','Optimistic');
INSERT INTO Prompts VALUES(3235,1011152023,'Spending time with family','Spontaneous');
INSERT INTO Prompts VALUES(3236,1011152024,'Read books','Fun + Outgoing');
INSERT INTO Prompts VALUES(3237,1011152025,'Going out with friends','Reliable + Loyal');

INSERT INTO Bio_Reactions VALUES(2234,1011152021, 101011,'Dislike');
INSERT INTO Bio_Reactions VALUES(2235,1011152022, 101012,'Like');
INSERT INTO Bio_Reactions VALUES(2236,1011152023, 101012,'Like');
INSERT INTO Bio_Reactions VALUES(2237,1011152024, 101013, 'Like');
INSERT INTO Bio_Reactions VALUES(2238,1011152025, 101012,'Dislike');

INSERT INTO Prompt_Reactions VALUES(1123,1011152021, 101011,'Like','Like');
INSERT INTO Prompt_Reactions VALUES(1124,1011152022, 101012,'Dislike','Like');
INSERT INTO Prompt_Reactions VALUES(1125,1011152023, 101012,'Like','Like');
INSERT INTO Prompt_Reactions VALUES(1126,1011152024, 101013,'Like','Like');
INSERT INTO Prompt_Reactions VALUES(1127,1011152025, 101012,'Like','Like');

INSERT INTO Biography VALUES(7777, 101010, 'Hi, I love to go shopping and spend time with my friends! My favorite season is summer and have 2 cats!', 'honest');
INSERT INTO Biography VALUES(8888, 101011, 'Hello!! My favorite hobbies are swimming and hiking! I have a German Shepard and we love the moutains!', 'silly');
INSERT INTO Biography VALUES(9999, 101012, 'Howdy!! I like to go walking in the park and riding horses! I love traveling and meeting new people:)', 'light-hearted');  
INSERT INTO Biography VALUES(6666, 101013, 'Marketing consultant by day, professional ice cream eater by night! I love having fun and meeting new people.', 'silly');
INSERT INTO Biography VALUES(5555, 101014, 'I am a night owl and love to go to the movies. I enjoy readig books and walking around the town at night.', 'edgy');

INSERT INTO prompts VALUES(123, 101010, 'Going to the gym', 'Committed');
INSERT INTO prompts VALUES(234, 101011, 'Hiking / Outdoors activities', 'Optimistic');
INSERT INTO prompts VALUES(345, 101012, 'Yoga / Pilates', 'Reliable + Loyal');
INSERT INTO prompts VALUES(456, 101013, 'Sleeping in', 'Fun + Outgoing');
INSERT INTO prompts VALUES(567, 101014, 'Going to the gym', 'Spontaneous');

INSERT INTO BIO_REACTIONS VALUES(3344, 101010, 1011152021, 'Like');
INSERT INTO BIO_REACTIONS VALUES(4455, 101011, 1011152022, 'Like');
INSERT INTO BIO_REACTIONS VALUES(5566, 101012, 1011152023, 'Dislike');
INSERT INTO BIO_REACTIONS VALUES(6677, 101013, 1011152024, 'Like');
INSERT INTO BIO_REACTIONS VALUES(7788, 101014, 1011152025, 'Dislike');

INSERT INTO PROMPT_REACTIONS VALUES(6789, 101010, 1011152021, 'Like', 'Like');
INSERT INTO PROMPT_REACTIONS VALUES(9876, 101011, 1011152022, 'Like', 'Dislike');
INSERT INTO PROMPT_REACTIONS VALUES(7689, 101012, 1011152023, 'Dislike', 'Dislike');
INSERT INTO PROMPT_REACTIONS VALUES(8769, 101013, 1011152024, 'Like', 'Like');
INSERT INTO PROMPT_REACTIONS VALUES(6987, 101014, 1011152025, 'Dislike','Like');
