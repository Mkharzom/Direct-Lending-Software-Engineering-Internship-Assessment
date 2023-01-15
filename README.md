# Direct-Lending-Software-Engineering-Internship-Assessment

The Direct Lending Software Engineering Internship Assessment is a web application that allows users to submit their personal information such as name, date of birth, address, postcode, and state. The application also includes a feature that automatically fills in the state field based on the postcode entered by the user.

To build and run the application, you will need a web server that supports PHP, such as Apache. You will also need to have a MySQL database server installed and running.

First, you will need to download the DL.rar from :

https://github.com/Mkharzom/Direct-Lending-Software-Engineering-Internship-Assessment/raw/main/DL.rar

then extract it to a directory on your computer. Inside the DL.rar, you will find a file called dldb.sql. This file contains the structure of the database that the application uses.

Next, you will need to import the dldb.sql file into your MySQL server. You can do this by using a tool such as phpMyAdmin. Once the database has been imported, you should now have a new database called dldb on your MySQL server.

After that, you will need to copy the extracted folder to your web server's root directory, usually it's htdocs if you using xampp ----> C:\xampp\htdocs\

Finally, open your web browser and navigate to the URL http://127.0.0.1/dl, you should now see the application running on your local machine. Now you can test the application by entering some data into the form and clicking the submit button. The data will be saved to the database and you will be able to query it.


Assumptions :
assumes that the postcodes are only 3 postcodes: 35000, 50000 and 80000 and only returns the corresponding states.
assumes that there is no need to make input form for postcodes.
assumes that Database is Mysql and using xampp.
asuumes that the program uses "root" as the MySQL username and assumes there is no password set for the root user.
