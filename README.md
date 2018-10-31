# StreamViewer Web Project
-> In this WebProject the consumers can view top ranked livestreams from Youtube and participate in the chat sessions while they watch the video.

-> In this project i have used HTML, CSS, JavaScript and Ajax to design the client side of the application and 
PHP(run using XAMPP) is used on the server side of the application. For storing the chat information, php database is used. 
Google+ API and Youtube API's are utilised to implement the login functionality and injecting the livestream video's into 
the Website.

-> The following functionalities are implemented in the project:
  - User is asked to login using Google Account when he visits the StreamViewer Website
  - User is presented with multiple livestreams to choose from on the home page. These are sourced from YT live api and 
    sorted based on time and date the video was posted.
  - User will be able to click on a livestream to watch it. When the user clicks on the Video, it opens up in a new webpage 
    with a chat session.
  - User will be able to see the associated chat session while watching the Natalie's stream.
  - User will be able to post messages to the chat session for the livestream he's viewing
  - All messages from Kevin to Natalie's livestream chat are stored in the php's mysql database

-> posts.db file consists of the database name, table name and table structure to be created in php's mysql database i.e phpmyadmin(http://localhost/phpmyadmin/).
