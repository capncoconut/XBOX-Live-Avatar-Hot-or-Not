XBOX-Live-Avatar-Hot-or-Not
===========================

This is the code for PUP's Avatar Hot or Not, feel free to do with it as you like and make many many hot or nots, or hot or not benches, hot or not politicians, hot or not ovens, hot or not dogs, hot or not republicans, hot or not democrats, hot or not stoves, well you get the picture. Also read the readme it has install info in there. 

#######################
#   README MOFOS   #
#######################

To get this SOB working you'll need the following things. 

1. a database with two tables.

2. a place to put these here files. 

ONCE uploaded to your server, github pages, whatever, open up "include_files/info.php" in a code editor and enter in your db info. 

NEXT create two tables in your relational DB (PostgreSQL, MySQL or other). 

TABLE ONE is called "flags", you'll create 3 columns, flag_id, profile_id and status. This table will let you know if people flag certain profiles/images as inaproproate etc...

Like So: 
![flags](http://i.imgur.com/FD1ZI.png)

TABLE TWO, call this "profiles" and make the following columns, gamer tag, email, img, img_icon, date_submitted.

Like So:
![profiles](http://i.imgur.com/usME5.png)

And now everything should be working as intended and you should have your very own PUP version of Avatar Hot or Not. One last thing, this code is licensed under Creative Commons License Attribution-NonCommercial-ShareAlike 3.0 Unported
