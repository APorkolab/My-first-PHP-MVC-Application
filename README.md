
# My-first-PHP-MVC-Application
It was a job interview task for a Java developer(!) position. Back then I refuse the submission due to my lack of PHP skills and because I've never done PHP application before, but "just for fun" I developed some kind of application now.
***The MySQL script of the database is also included (userdb.sql).***


# Text of the task

It's a really simple php application, based on an MVC pattern. I'd like to have a system which is implemented in core PHP (no framework or CMS can be used) and it is:  
  
- URL mapped (.htaccess rewrite)  
- Based on an MVC pattern  
- Object oriented  
- Uses database (MySQL)      Requirements:      The application should have 2 database tables: users (id, name) and advertisements (id, userid, title).  
* As a user I'd like a page that shows the list of the users existing in the system.  
* As a user I'd like a page that shows the list of the existing advertisements in the system (and the related user's name of course)  
* They should be different pages. 
* So the system should contain 3 pages:  
-> index, with the links to the user list and the advertisement list  
-> user list  
-> advertisement list  
-> The whole system should have a minimalist design (css)      In summary:      So it's a 3 paged application, with a minimal design, and database access, which is URL mapped, and based on an MVC pattern. No framework or CMS allowed to use.   I need the source of the application, which I expect to be about 6-8 files.   Here can be a difference of course.      Requirements regarding the implementation: 

- Must be object oriented!  
- Must have at least 1 layer under the Controller layer  
- Model and service methods should be separated. Model here should be   clear, used only for representation.  
- Must have a nice, and well documented code  
- A very simple css, in minimal style      This is important for us, it helps with the decision. If you can solve this, you definitely can fit to our project.  

Let me know if you have any questions.

Source:
E-mail from the HR manager of the company

# Content of .htaccess

    Options +FollowSymLinks
    RewriteEngine on
    RewriteRule ^([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ index.php?controller=$1&action=$2&id=$3 [NC,L]
