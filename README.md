# School Demo

## Description
This is a project for a School demo and being able to add members and display them from a list of schools.

## Libraries used
This project was built by using CodeIgniter 3 MVC Framework in PHP

## Installation
This project can be installed either by downloading the file from the Github repository or by doing a pull from this project and saving it in your localhost.
The project also has the database in sql format found in the root folder called school_demo.sql. The name of the database is school_demo.

## Configuration
To ensure this project runs effectively, there are some configurations that would need to be done. 

### Config
	1. Navigate to the application folder -> config folder -> find the config.php file 
	2. find the $config['base_url']; variable.
	3. Change the $config['base_url'] = "{to the downloaded project folder in your localhost}"; E.g $config['base_url'] = "http://localhost/example";
	
### Database
	1. Navigate to the application folder -> config folder -> find the database.php file
	2. Change the username and password field to your database details or phpmyadmin login details in your local machine
	3. Example = 'username' => 'admin', 'password' => 'Admin123' 
	
## Test
This project uses Unit test library which is an inbuilt CodeIgniter framework to carry out test on the functions. 
The two primary classes that are being tested are the School and Members. To carry out test, the classes and functions are listed below.

### School Test
In order to run this test, the name of this class is School_test that holds all the test for the School Controller class. 
You would need to put the name of the {class/test function} in the url. e.g http://localhost/school_demo/school_test/{test_function}
The available functions found in the School_test are:

	test_all_school()
	test_school_by_id()
	test_members_by_school()

### Member Test
In order to run this test, the name of this class is Member_test that holds all the test for the Member Controller class. 
You would need to put the name of the {class/test function} in the url. e.g http://localhost/school_demo/member_test/{test_function}
The available functions found in the Member_test are:

	test_all_members()
	test_members_by_id()
