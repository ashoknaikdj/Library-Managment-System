#Library Management System

This is a simple Library Management System designed for Mangala Jyothi Vidyasamsthe and J H Patel Institute of Management and Technology Davanagere. The system allows administrators to manage books, student details, and track the issuance and return of books. It is built using HTML, CSS, PHP, and MySQL.

Features
Admin Login: Admins can log in and access a dashboard for managing books and student records.
Student Management: Add and update student details.
Book Management: Add, update, and delete books in the library.
Book Issuance: Issue books to students, track issuance and return dates.
Book Return: Track and update book returns.
View Records: View the list of issued and returned books.

Table of Contents
Features
Installation
Usage
File Structure
Contributions
License
Installation
Clone the repository:

bash
Copy code
git clone https://github.com/ashoknaikdj)/library-management-system.git
cd library-management-system

Configure Database:
Create a database in MySQL called lib.
Import the provided SQL script into your MySQL database.
Set up your development environment:

Make sure you have a local server running (e.g., XAMPP, WAMP, etc.).
Place the project folder inside your server's root directory (htdocs for XAMPP, or www for WAMP).
Configure Database Connection:

Update the database connection details in the relevant PHP files:
php
Copy code
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = ""; // Your MySQL password
$dbName = "lib";
Run the Application:

Open your browser and navigate to http://localhost/library-management-system.
Usage
Admin Login:
Navigate to the Admin login page and enter your credentials.
Book Management:
Admin can add, update, and delete books.
Issue Book:
Admin can issue books to students by entering their details and selecting the book.
Return Book:
Admin can process book returns and update records.
View Issued and Returned Books:
Admin can view lists of issued and returned books.

File Structure
bash
Copy code
.
├── lib/
│   ├── admin.html              # Admin dashboard
│   ├── adminmainpage.html       # Admin login page
│   ├── boo.html                 # Add book form
│   ├── book.php                 # Student page
│   ├── booksrc.php              # Book search for issuance
│   ├── bookdel.html             # Book return form
│   ├── booklist.php             # Available books listing
│   ├── bookreturn.php           # Book return record
│   └── bookdel1.php             # Book return handler
├── images/
│   ├── s3.jpg                   # Background image for main page
│   ├── m1.jpg                   # Background image for admin pages
├── index.html                   # Main page with links to admin and student sections
└── README.md                    # This README file
