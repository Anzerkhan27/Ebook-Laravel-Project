<h1 align="center"> EBOOK 
<p>Library Service</p>
</h1>

 <h1>About</h1>

 <br>

<h3> EBOOK is an Online Library web application project which built using (<a href="https://getbootstrap.com/" target="_blank">Bootstrap 4.6</a>, <a href="https://laravel.com" target="_blank">Laravel 9</a>). The main goal of this application is allow users to have an online access to their library for borrowing books.It allows Users to search for their Book in the database. The web-application has Admin user functionality which allows admins to add/edit or delete books in the Database. The web application  includes the following operations: CRUD and user authentication.</p>

<br>

<h1>Installation</h1>
  
* <h2>Clone the Github repository</h2>
  <h3>Inside the root folder of your local web development environment, open a new terminal window and clone the Github repository by using the command and change the directory in the newly formed project folder</h3>
  <p style="background-color:white; color:black;padding:5px; "> git clone </p>
  <br>

-   <h2>Install Composer Dependencies</h2>
    <h3>Enter the Command</h3>
    <br>
    <p style="background-color:white; color:black;padding:5px;"> composer install </p>

<br>

-   <h2>Install NPM Dependencies</h2>
    <h3>Enter the Commands: </h3>
    <br>
    <p style="background-color:white; color:black;padding:5px; "> npm install <br> npm run dev </p>

<br>

-   <h2>Copy the .env file</h2>
    <h3>Enter the Command: </h3>
    <br>
    <p style="background-color:white; color:black; padding:5px;"> cp .env.example .env  </p>

<br>

-   <h2>Generate an App encryption Key</h2>
    <h3>Enter the Command: </h3>
    <br>
    <p style="background-color:white; color:black; padding:5px;"> php artisan key:generate  </p>

<br>

-   <h2>Create an empty database for our application</h2>
    <h3> Use your favorite database management tool to create an empty database.
    Configure a username and password. </h3>
    <br>

*   <h2>Configure the .env file</h2>
    <p style="background-color:white; color:black; padding:5px;"> DB_CONNECTION=mysql<br>
    DB_HOST=127.0.0.1 <br>
    DB_PORT=3306<br>
    DB_DATABASE=laravel<br>
    DB_USERNAME=root<br>
    DB_PASSWORD=******** </p>
    <h3>Adjust the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD according to your database</h3>

<br>

-   <h2>Migrate the Database</h2>
    <p style="background-color:white; color:black; padding:5px;"> php artisan migrate  </p>
    <br>

*   <h2>Seed the Database</h2>
    <p style="background-color:white; color:black; padding:5px;"> php artisan db:seed </p>
    <br>

*   <h2>Open the Application</h2>
    <h3>Open the browser and go to your url</h3>
    <br>

<br>

<h1>Usage</h2>

<h2>User<h2>
<h3>Let's demonstrate the application usage for a normal user(not admin).

-   Homepage View
    ![My Image](/public/images/Welcome-page.png)

*   Browsing all the Books in the Database

    ![My Image 2](/public/images/Searching-books.png)
    ![My Image 2](/public/images/All_books.png)

*   Searching for a Particular Book

    ![My Image 2](/public/images/1-book.png)
    ![My Image 2](/public/images/2-book.png)

*   Detailed View of a resource(Book) by clicking Show Button

    ![My Image 2](/public/images/Show-books.png)
    ![My Image 2](/public/images/Book.png)

<h2>Admin<h2>
 <h3>Let's demonstrate the application usage for an Admin. We will Register as a Test User and demonstrate all the functionality of an Admin.

-   Registration page. Registering as Test User.
    ![My Image](/public/images/Register.png)

*   Notice After Logging/Registring in, the navbar includes a My account link.
    ![My Image](/public/images/Logged-in.png)

*   Lets Click at My account link in the navbar, which redirects us to User's Account Page. The Account Page cotains the User's details like Username and email address. It also shows how many Books has the User added in Database. Notice it says below the User details "No Books Added". Lets add some Books in the Database.

    ![My Image](/public/images/My-Account.png)

*   Click the Add new Book Button on the Accounts Page. We are redirected to a new web page. Lets fill in the new Book details that we want to add and click on create.

    ![My Image](/public/images/Add-book.png)

*   We are Redirected back to our Accounts Page, We can now see our being added. Notice we have an option for show, edit & Delete the Book that we have added. Demonstrating the CRUD functionality of the application.
    ![My Image](/public/images/Added-book.png)

*   Let us edit the Book we just created by clicking the edit button next to the book. We are Redericted to the edit Book page. Make some changes and press Update.
    ![My Image](/public/images/edit-book.png)
*   We are back to the Account Page and we can see the Book has been updated.
    ![My Image](/public/images/edited-book.png)
*   Lets make a search for it in the Homepage and Here it is. It pops up.
    ![My Image](/public/images/book-search.png)

*   We will now delete a resource/book that we just added. In our accounts page press the delete button and its gone!..
    ![My Image](/public/images/delete-book.png)

<h1>Further Development</h2>
<h3> The plan for further development is to create seperate routes for logging in for normal Users and Admin Users. The web-application should also allow Users to borrow books online for a due time. The scope for further development is large and I have planned it for Assignment 2</h3>

<br>
<h1>Refrences</h2>

<h3>ZeroOne. (2018, April 21). Laravel restrict users to only be able to see their own profile. Stack Overflow. Retrieved November 4, 2022, from <a href="https://stackoverflow.com/questions/49951125/laravel-restrict-users-to-only-be-able-to-see-their-own-profile">https://stackoverflow.com/questions/49951125/laravel-restrict-users-to-only-be-able-to-see-their-own-profile. </a>    </h3>

<br>

<h3>Kingsconsult. (2020, October 12). How to implement search functionality in Laravel 8 and Laravel 7 downwards. DEV Community 👩‍💻👨‍💻.<a href="https://dev.to/kingsconsult/how-to-implement-search-functionality-in-laravel-8-and-laravel-7-downwards-3g76.">https://dev.to/kingsconsult/how-to-implement-search-functionality-in-laravel-8-and-laravel-7-downwards-3g76</a>  </h3>

<br>

<h3>Gondalez, V. (2019, May 7). Laravel PHP framework tutorial - full course for beginners (2019). YouTube. Retrieved November 4, 2022, from <h3><a href="https://www.youtube.com/watch?v=ImtZ5yENzgE&amp;t=2635s">https://www.youtube.com/watch?v=ImtZ5yENzgE&amp;t=2635s</a>

<br>

<h3>Aschmelyun, A. (2021, July 6). Laravel-job-board/databaseseeder.php at main · Aschmelyun/Laravel-job-board. GitHub. Retrieved November 4, 2022, from <a href="https://github.com/aschmelyun/laravel-job-board/blob/main/database/seeders/DatabaseSeeder.php">https://github.com/aschmelyun/laravel-job-board/blob/main/database/seeders/DatabaseSeeder.php</a>
  </h3>

<br>
<h3>Chauhan, U. (2020, July 17). Bootstrap 5 sidebar user profile example. bbbootsrap. Retrieved November 4, 2022, from <a href="https://bbbootstrap.com/snippets/bootstrap-sidebar-user-profile-62301382 " >https://bbbootstrap.com/snippets/bootstrap-sidebar-user-profile-62301382 </a></h3>

<br>
<h3>Deyson. (n.d.). Bootstrap snippet. BS4 Search Bar. Free Bootstrap snippets and examples. Retrieved November 4, 2022, from   <a href="https://www.bootdey.com/snippets/view/bs4-search-Bar">https://www.bootdey.com/snippets/view/bs4-search-Bar </a></h3>
