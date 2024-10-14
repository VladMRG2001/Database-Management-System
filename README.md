# Database Management System

This project is an application for managing information related to a **modeling agency**, with a focus on tracking **participation in various events**. The system integrates a PHP-powered backend with a HTML front-end interface, allowing for dynamic and real-time data manipulation. The project runs locally on XAMPP (for serving web pages), while the database is managed using Microsoft SQL Server 2014.
<br>
## Features:
#### Real-Time Data Synchronization:
-> All changes made to the database (insert, update, or delete operations) via the web interface are immediately reflected in the Microsoft SQL Server database. <br>
-> Similarly, any direct changes in the Microsoft SQL Server database are instantly updated in the web interface, ensuring both ends are always in sync. <br>
#### Admin Panel for Controlled Access:
-> The application includes an exclusive Admin Panel for performing core database operations (adding, deleting, and modifying data). <br>
-> Admin access is granted through the "AdministratorBD" tab, where you must enter the password to unlock administrative functions.
#### Relational Database Structure:
-> The database is designed with multiple related tables to demonstrate a real-world database structure. <br>
-> Relationships between the tables are efficiently managed through foreign keys, ensuring data integrity and consistency.
#### Local Hosting with XAMPP:
-> The project is designed to run on a local XAMPP server for serving the web interface using Apache. <br>
-> Microsoft SQL Server 2014 handles the database management, with PHP facilitating communication between the web interface and the database.
#### Interactive Web Interface:
-> The front-end, built with **HTML** and styled for simplicity and ease of use, allows users to interact with the database seamlessly. <br>
-> It supports all basic CRUD operations (Create, Read, Update, Delete), providing direct feedback on database updates.
#### Error Handling & Input Validation:
-> The application includes basic input validation and error handling to ensure smooth operation and prevent common issues such as SQL injection or invalid inputs. <br>

## Technologies Used:
-> **Frontend**: HTML5, CSS (for styling) <br>
-> **Backend**: PHP (for server-side logic) <br>
-> **Database**: Microsoft SQL Server (2014) (for data storage and management) <br>
-> **Server Environment**: XAMPP (v 3.3.0) (Apache for the web server) <br>

## Requirements:
To run this project, you need the following:

-> **XAMPP**: Install XAMPP and ensure that **Apache** is running.
(Config Apache port to 80, if it is not). <br>
-> **Microsoft SQL Server 2014**: Set up Microsoft SQL Server 2014 as the database management system. <br>
-> **SQL Server Management Studio (SSMS)**: For managing the SQL Server database directly. <br>
-> **Web Browser**: Any web browser to access the localhost site (ex: Chrome). <br>

## How to Set Up and Run the Project:

#### 1. Install XAMPP:
-> Download and install XAMPP. <br>
-> Start **Apache** from the XAMPP control panel. <br>

#### 2. Set Up Microsoft SQL Server:
-> Install Microsoft SQL Server 2014. <br>
-> When launching Microsoft SQL Server 2014, ensure you connect to the server with the following details: <br>
	&emsp;-> **Server Type**: Database Engine <br>
	&emsp;-> **Server Name**: localhost <br>
-> Import the provided database file **"DataBase.bacpac"** (Databases -> Import Data-tier app -> Select file). <br>

#### 3. Download the Project Files:
-> Clone the project files folder (**"database" folder**) and place it in the **htdocs** folder inside your XAMPP installation directory. <br>

#### 4. Access the Application:
-> Open your web browser and go to **http://localhost/database/home.html**. <br>
-> From the home page, you can navigate to other sections and interact with the database through various tabs. <br>

#### 5. Admin Panel Access:
-> To perform administrative operations (adding, modifying, deleting data), go to the **administratorBD** tab. <br>
-> Enter the default password (**1234**) to access the Admin Panel. <br>
-> Once authenticated, you can manage database entries directly from the web interface.
