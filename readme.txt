START DEVELOPMENT ON LOCAL MACHINE
__________________________________

For Mac users:

1. Download and unzip WordPress software: https://wordpress.org/download/. Save folder whereever you like. I chose to save it in my projects folders. Just remember where you save yours.

2. Download and install MAMP: https://www.mamp.info/en/mamp/mac/.

3. Open MAMP, navigate to MAMP > Preferences... > Web Server.

4. Find the Document Root setting and click the Select button to choose the WordPress folder you've downloaded and unzipped. Then, click the OK button.

5. In MAMP, click the Start Servers button to open MAMP locally.

6. Navigate to your sites and go through the WordPress setup configuration steps to setup a new database.

    * In http://yourlocalhost.com/phpMyAdmin/, create a new database by clicking on the New  option located on the light blue left sidebar.
    
    * At the top on the databases table, create a new database. Then navigate to the database created (should appear on the left sidebar).

    * Create a new user by navigating to the Priveledges tab at the top of the dashboard. Then click 'Add user account' at the bottom.

    * Input options for: Username and Password. Leave everything else at their default setting. Then, at the bottom under Global priveledges, click the 'Check all' option to enable all priveledges to the new user. Then, on the bottom right, click 'Go'.

7. Navigate back to the WordPress installation and enter in the information from the database you've just created. Then click Submit. After that process completes, click Run the install.

8. Next, enter Site Title, Username, Password, and Email information. Leave Search Engine Visibility unchecked. Then, install WordPress. 

6. Clone remote repository from GitHub: https://github.com/connorocampo/wpbinge. Move this folder to wordpress > wp-content > themes folder to start development locally.