# COMP 3077 Final Project
## By: Niko Jones
### 110075949
### Jones94@uwindsor.ca

## The purpose of this README.md
The purpose of this is to answer any questions and state certain reasoning regarding marking points made on grading rubric.

# Requirements
### 1. Identify a business case of your choice to describe the catalogue that you want to develop. (e.g. books, cars, blinds, etc..)
### 0.5pts
A description (at least a paragraph) describing what this project is about. Can be placed in the "About" menu.

*My reasoning:* Even though this is put in the About menu, I am putting it here because I want to keep the page immersive. The business case of this choice is to specificly target manga and the exporation and reviewing of them online. This is a space to look at manga volumes and review them with fellow manga fans.

Business case: This can be a personal blog and sharing a collection online of a personal manga collection. This can include volumes of manga, magazines, etc. There are users that can be modified to include email addresses to implement email blasts, promotional material, and messages. Another business case of this that is adjacent to the previously stated is that of a web-store where you can source books and then sell them along to your customer base. The item-base is very targeted towards anime, manga, and manwha which allows for a targeted fanbase to form around the product.

### 2. Identify no less than 20 products, and each product may have at least 2 (or more) different options. (e.g. book cover type, car engine type, blind materials, etc...)
### 1pt
20 products included with minimum 2 options for each.

*My reasoning:* I have 40+ different books total. Each series chosen has at least 3 different volumes available, thus covering this requirement fully.

### 3. There needs to be a common template for the site that can be dynamically changed. Have at least 3 different templates for the site: e.g. three different desktop themes (different look, e.g. Thanksgiving Theme or Christmas Theme, or Regular Theme that automatically changes each season). 
### 3pts (+ 1pt)
3 site wide CSS template (ability to change the template)

*My reasoning:* I have a light theme and a dark theme, as well the ability to toggle between the two with the two inside the header of every page. It follows through in between pages visited. 
I also have a high-visibility mode that removes all colours and the possibility to misread colours. The toggle at the top cycles between the three themes when pressed. You can see the code for this in main.js. 
You can see that there are clearly three themes and the ability to change between them.

### 4. There needs to be dynamic HTML Forms on at least two pages. Example:  A form where you can calculate a quote for the car based on options selected.
### 2 pts
HTML forms x 2

*My reasoning:*
- Form 1
  - I have a sign-up and user system that requires you to log in before reccommending a series.
- Form 2
  - I have a recommendations tab that allows you to reccomend series for others to view. You must be logged in to reccomend a series.

### 5.PHP code and MySQL database well documented
### 5 pts
PHP documented files and MySQL database design included (see 7 below)

*My reasoning:* The code is commented. A lot of it is self explanatory and it is commented accordingly based on explaining the function of certain things.
The SQL in the *.php* files are commented as needed. The PHP that used is documented and the SQL (only creating tables) is commented appropriately as well.

### 6. All code must be properly commented. 
### 2pts
Proper code documents (comments) throughout all HTML/CSS and JS code files

*My reasoning:* I use basically all *.php* files to create the pages. The HTML/CSS/JS files are all commented where needed and on what their purpose is.

### 7. The project must have a help wiki page(s) to explain to the users how it works (at least 5 different pages). The context sensitive Help link to the corresponding page from the website should be available.
### 2.5 pts
5 Wiki pages (0.5 pt each)

*My reasoning:* The wiki pages are available to view through the nav bar under `Wiki` and the drop-down menu shows the different links you can visit to view the different wiki pages about the website. The wiki pages target different aspects of the website that are explained there.

### 9. The site must have a menu, and responsive (i.e. different screen sizes).
### 1 pt
One main menu

*My reasoning:* The main menu is the same across all pages and can be accessed the same way no matter the page you are on. This flexes to the screen you are on and adapts to mobile by compressing to the side as a drop down menu. This can be seen on a mobile site or by compressing your window to be horizontally compressed.

### 10. There needs to be at least 20 html pages and at least 1 external CSS, and 1 external JS file. Also, at least 20 images (copyright free) and at least 3 video or audio files. It is very important to make the site easy to modify (i.e. add/remove products in the catalogue so users can see fresh items). You can use JavaScript/JSON/CSS combinations for these but make sure it is clear and simple enough for a non-programmer to be able to update the site with basic instructions. (provide instructions in your help wiki page). 
### 4.5 pts

~20 Dynamic pages (1 pt)
*My reasoning:* I have 26 *.php* pages total that cover all access types including accessing books, reading reviews, sign-ups, and account management. They cover the knowledge to make both dynamic and static pages PHP, HTML, CSS, and JS.

1 CSS file (0.5 pts)
*My reasoning:* I have 1 *.css* file that contains all of the formatting and appropriate comments where needed on the explanation of use.
This file is located at the following path:
> FinalProject/assets/css/main.css

1 JS file (0.5 pts)
*My reasoning:* I have 1 *.js* file that contains all scripts that are required for special functions. The functions are commented appropriately for their purpose and explaining needed code.
This file is located at the following path:
> FinalProject/assets/js/main.js

20 images files (1 pt)
*My reasoning:* I have a photo for each of the book covers (over 40) that are available at the in the assets folder. They are referenced in the database and grabbed when accessing certain book titles.

3 audio/video files (1pt)
*My reasoning:* in the admin portal under `Account>Admin Guide`, you can find videos recorded on how to do certain tasks. There is also a video in the Wiki under `Wiki>Account` that shows the process of creating an account.
Here is the list of the locations of the three video files:
- `Account > Admin Guide`
- `Wiki > Account`
- `Wiki > Recommendations`

Instructions how to update contents (ie images/video/audio files) (0.5 pts)
*My reasoning:* In the admin page that is available in the menu under `Account>Admin Guide` and goes through how to add books and how to properly add them to the database.
You can update contents and books in the Admin Tools under `Account>Admin Tools` page. You can also change users to make them admins of the page.

### 11. Website must be made available online live; although you may use any hosting service, preferably use myweb.cs.uwindsor.ca 
### 0.5 pts
Provide live URL link that works

*My reasoning:* The link for this site can be found [here](https://jones94.myweb.cs.uwindsor.ca) or at `https://jones94.myweb.cs.uwindsor.ca`
Source code can be found [here](https://github.com/N1koJones/COMP-3077/tree/main/FinalProject) or at `https://github.com/N1koJones/COMP-3077/tree/main/FinalProject`

### 12. The site should have enough complexity in terms of fonts, menu boxes, transitions, etc. to demonstrate advanced and appropriate CSS functionality where needed. 
### 1 pt
Use of fonts, menu boxes, transitions, etc in CSS

*My reasoning:* I believe in K.I.S.S (Keep It Simple Stupid). I chose minimal variations of fonts to use throughout the entire website and kept it fairly simple and legible. There are adequate menu boxes, tranisitions, and containers in CSS. The container approach allows me to segment stuff that needs to be formatted the same way and keep it consistent with all of the themes and styles across the entire site.

### 13. Make sure the website has the proper meta tags - such as icon, title, description, keywords, etc. to be SEO (search engine) friendly.
### 1 pt
SEO optimization

*My reasoning:* The title, description, and keywords all are inside the header and section tags.