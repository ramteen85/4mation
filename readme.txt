*********************************** Completed By Ramteen Taheri ******************************************
*		                    Completed on: 22/6/2017						 *
**********************************************************************************************************

Install instructions:


- php artisan migrate:rollback
- php artisan migrate
- php artisan serve

Upon Database migration, you should be able to log in with a default admin account.
This Account cannot be deleted in the admin options menu.

username: admin
password: demo

Users should also be able to register straight away. When you first log in after registering,
there will be an intro video.


User Characteristics:

- Admin: 

The Administrator is a super user and he has complete control over all activities the can be performed.
The administrator can 

- view and delete system emails
- View, or delete Employees, teams and task details.
- send out announcements
- assign, edit or delete tasks
- see the admin menu in the navbar
- assign employees to a specific team, create or delete teams
- make another employee an administrator 
- revoke administrator privelages from an employee 

- Employees can 

- fill in their profiles
- view and check off tasks
- send private messages to everyone
- view teams


Features:

- Welcome Page Upon first Registration with Introduction Video
Also included in the navbar.

- Admin Account on database migration
Username: admin
Password: demo


- Home page 

First page of the website. Contains company information and email form.
All users can proceed to either log in, or register from here.

- Sign in page 
all admins and employees can sign in to their accounts here.

- registration page 
all new employees must register here. form validation included.

- Members area 

the page every user sees when they first log in.
Statistics, notifications and all public announcements will appear here.

- edit profile area

all users can view their own profile on this page, edit some of their details, select skills, describe themselves,
and change their password. 

- view profile area 

all users can view each other's profiles on this page 

- task area 
all users can view and check off their tasks on this page. This updates on the main and profile pages.

- Messaging System

Users can read private messages as well as send them to each other. 
This also has a Message read feature when the receiver has read the message.


- team page 

here a user can view all the teams, each member of each team and also view their profiles or message them

- admin page (3 pages)

visible and accessible to admins only. admins on this page can choose to:
- set tasks to specific employees
- read admin mail from the front page
- cancel tasks
- promote / demote an employee with admin rights
- fire an employeee
- assign employees to a team
- create or delete teams
- search for employees by e-mail, username or full name
- view all employees in a certain team
- post announcements
- includes AJAX autocomplete user search, task selection and team allocation.



- find workmates page

here, you can search for any workmate via their email address, first and last name or username.


+ much much more!
feel free to explore :-]
