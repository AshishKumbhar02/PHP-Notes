<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
Installation and Setup (XAMPP/WAMP/LAMP):
1. Setting Up XAMPP (Cross-Platform)
- XAMPP is a free, cross-platform software package that includes Apache (web server), MySQL (database), PHP, and Perl. 
- It works on Windows, macOS, and Linux.

Steps to Install XAMPP:
Steps 1: Download XAMPP:
- Visit "https://www.apachefriends.org/".
- Download the version suitable for operating system.

Steps 2: Install XAMPP:
- Run the installer and follow the setup wizard.
- During installation, select the components need (e.g., PHP, MySQL, Apache).

Steps 3: Start the Services:
- Open the XAMPP Control Panel.
- Start Apache and MySQL by clicking the "Start" buttons.

Steps 4: Test the Setup:
- PHP files in the htdocs folder (found in the XAMPP installation directory).
- Open a web browser and navigate to http://localhost/yourfile.php.
---------------------------------------------------------------------------------------------
2. Setting Up WAMP (Windows)
- WAMP is designed for Windows and includes Apache, MySQL, and PHP.

Steps to Install WAMP:
Steps 1: Download WAMP:
- Visit WAMP Server "https://www.wampserver.com/".
- Choose the version that matches operating system (32-bit or 64-bit).

Steps 2: Install WAMP:
- Run the installer and follow the instructions.
- Choose the installation directory (default is C:\wamp64).

Steps 3: Start the Server:
- Launch the WAMP server.
- Click on the WAMP icon in the taskbar and the icon turns green.

Steps 4: Test the Setup:
- PHP files in the www folder (found in the WAMP installation directory).
- Open a web browser and visit http://localhost/yourfile.php.
---------------------------------------------------------------------------------------------
3. Setting Up LAMP (Linux)
- LAMP is a stack that includes Linux, Apache, MySQL, and PHP, commonly used for web development on Linux systems.

Steps to Install LAMP:

Steps 1: Update Package Manager:    
sudo apt update

Steps 2: Install Apache:            
sudo apt install apache2
- Verify by visiting http://localhost in a web browser. See the default Apache page.

Steps 3: Install MySQL:
sudo apt install mysql-server

Secure MySQL installation:       sudo mysql_secure_installation

Steps 4: Install PHP:
sudo apt install php libapache2-mod-php php-mysql

Check PHP installation:
php -v

Steps 5: Restart Apache:
sudo systemctl restart apache2

Steps 6: Test the Setup:
- PHP files in the /var/www/html directory.
- Open a browser and visit http://localhost/yourfile.php
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------

-->