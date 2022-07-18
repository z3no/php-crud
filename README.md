# PHP CRUD

***

- **Team challenge:** `Michael` `Pablo` `Alex` `Zeno`
- **CRUD:** `Create Read Update Delete`

***

A new day, a new challenge, a team challenge. The group had to choose if this challenge would be a team challenge or a solo one.
It was a tie, but in the end we **flipped a coin** and the team won.
Our group is glad about it, because in the end this will prepare us better for the future when we start our development career.
Let's get started!

***

## The Mission
The mission is to create a CRUD system to store student, teacher, group and campus information in the database.
We will use the MVC structure that is provided. We will end up with at least 4 models and 4 controllers, but this could be more.

***

We'll divide the work as follows:
- `Michael` will make everything for students
- `Pablo` will make everything for campus
- `Alex` will make everything for teacher
- `Zeno` will make everything for group

As a group we will set up everything for _**git**_ and make the _**database**_.

## TO DO

### As a group
***
- [x] Set up our git
    - [x] Create a production branch
    - [x] Each of us creates their own branch to work
- [x] Make our database
    - [x] Tables
        - [x] group_table
          - id
          - name
          - teacher_id
          - campus_id
        - [x] student_table
          - id
          - name
          - email
          - group_id
        - [x] teacher_table
          - id
          - name
          - email
        - [x] campus_table
          - id
          - name
          - location
- [x] export with mysqldump
- [x] env file
- [x] Our database connection, Datasource class

### Individually
- [x] MVC Model
  - [x] Create Model Class
  - [x] Create Controller
  - [x] Create View
- [x] Overview of all records of your entity in a table
  - [ ] Each row has a button to edit or delete entity
  - [ ] Page should have a `create new` button
- [ ] Detailed overview of the selected entity
  - [ ] include a button to delete this entity
    - Edge case: A teacher cannot be removed if he is still assigned to a class
    - Edge case: If you remove a class, make sure to remove the link between the students and the class.
- [ ] Page to edit and existing entity
- [ ] Page to create a new entity

***

## Stand-up meeting 14/07/2022
***

Yesterday we managed to create our database, so our goal for today is to var_dump the data for each page and to get the controllers working to go from one page to another.

HomePage buttons where to go -> Student / Teacher / Group / Campus

GENERAL OVERVIEW

- General Overview of all records of that entity a table (each row has a button to edit or delete).
- Page should have a "create new" button.


DETAILED OVERVIEW

- include a button to delete this entity
- teacher cannot be removed if he is still assigned to a class (if you remove the link between the students and the class)


PAGE TO EDIT existing entity
PAGE TO CREATE a new entity


***

## Friday 15/07/2022
***

Friday was a day full of ups and downs for the group. The half of the group was at campus and the other half at home. Communication was rusty. 
Which complicated everything and we all went on our individual coding spree. We all managed to read the data but the next steps to create, update and delete where not discussed properly and we couldn't manage to make these work on friday.
Some of our group managed to work further during the weekend, Michael made extra branches for testing. Zeno couldn't be there because of his renovations.

***

## Monday 18/07/2022
***

So new day, fresh minds, totally refueled, but still a monday.
The most important thing at the moment is reflecting on what we did, how we did and what we can improve for the future.

So when we all had our read pages of our data, we found out it would have been easier to start a merge from that point.