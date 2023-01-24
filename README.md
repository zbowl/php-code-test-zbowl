# ePostCard

ePostCard is a simple web application that allows you to send a postcard to a friend. 

## Features

* Create and send a unique Link of the postcard to anyone (e.g. http://epostcard.com/123456)
* Live preview the front and back of the postcard before sending/saving
  

## Features to come

* Postcard
  * Ability to flip the postcard
* Allow for custom images to be uploaded for the front and back of the postcard
* Allow for longitudes and latitudes
  * Use Google Maps or Open Street Maps API to display the location on the postcard
* Allow user to draw their own signature on the postcard
* Add a QR code to the postcard
* Save a list of contacts for the user to send postcards to.
    
### ToDo
- [ ] Form Inputs
  - [ ] Recipients Name
  - [ ] Recipients Address
    - [ ] Street
    - [ ] City
    - [ ] State
    - [ ] Zip
    - [ ] Message textarea for the postcard (maybe a wysiwyg editor)*
- [ ] Form Validation
  - [ ] Required Fields
- [ ] Form Submission
    - [ ] Save postcard to database
    - [ ] Generate a unique link for the postcard

- [ ] Postcard
  - [ ] Display the postcard
  - [ ] Ability to flip the postcard

#### Back End
- [ ] Migrations
    - [ ] Create a table for postcards
    - [ ] Create a table for contacts
    - [ ] Create a table for user postcards


## Stack
* Laravel 9
* Vue 3
* TailwindCSS 3
* Inertia

# Questions

* Will there be a user system?
  * No, this is a simple application that will not require a user system.
  * The user will be able to create a postcard and send it to a friend. The friend will be able to view the postcard by visiting the link that was generated for the postcard.
  * The user will be able to save the postcard to their account and view it later. (Future feature)
* Will there be a database?
  * Yes, there will be a database to store the postcards and contacts.
* What Fonts will be used?
* Database: MySQL or Postgres?
* Database Design: 
  * PostCard
    * id
    * recipients_name
    * street1
    * street2
    * city
    * state
    * zip
    * message 
    * created_at
    * updated_at
 

  * Contact
    * id
    * name
    * street1
    * street2
    * city
    * state
    * zip
    * created_at
    * updated_at

  * User PostCard
    * id
    * user_id
    * postcard_id
    * created_at
    * updated_at
  * User Contact
    * id
    * user_id
    * contact_id
    * created_at
    * updated_at
