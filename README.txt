# TSSI-test

Wordpress Username: Erwin02
Wordpress Password: Pimples02
DB name: wp

Instruction on how to install using xampp:

1. First run xampp control panel, click start "Apache" and "MySQL" and click "MySQL" admin to show the database.
2. After clicking "MySQL" admin, you can now create your database.
3. After creating a database, download the latest version of Wordpress and put it in this folder C:/Program Files/XAMPP/htdocs.
4. Open the wp-config and modify the following : 
	Replace“database_name_here” with the name of your database, which in my case is “WP”
	Replace “username_here” with “root” and leave “password_here” blank
	Save the file and close it.
5. Open your browser and go to http://localhost/wp/.

Instruction on how to deploy my Wordpress Theme.

1. Run the xampp and copy my wp folder to your C:/Program Files/XAMPP/htdocs.
2. Go to http://localhost/wp/ and log in my Wordpress Account above.

Instruction on how to run the sass.

1. Open cmd in your computer.
2. Type cd>xampp, cd>htdocs, cd>wp, cd>wp-content, cd>themes, cd>wp-abscbn-child
3. After reaching the path type compass watch, try to modify in each .scss file to see on how it watch in your CMD.
