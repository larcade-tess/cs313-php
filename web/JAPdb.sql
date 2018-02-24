CREATE TABLE forms (
form_id INTEGER PRIMARY KEY,
application VARCHAR(90), 
contract VARCHAR(90)
);

CREATE TABLE contact (
contact_id INT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL, 
last_name VARCHAR(30) NOT NULL,
phone VARCHAR(20) NOT NULL, 
email VARCHAR(30)
);

CREATE TABLE apartment (
apartment_id INTEGER PRIMARY KEY,
rented BOOL,
location VARCHAR (50),
price DECIMAL(20,2)
);

CREATE TABLE account (
account_form_id INTEGER CONSTRAINT account_form_fk REFERENCES forms(form_id),
account_contact_id INTEGER CONSTRAINT account_contact_fk REFERENCES contact(contact_id),
account_apartment_id INTEGER CONSTRAINT account_apartment_fk REFERENCES apartment(apartment_id)
);
