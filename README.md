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

