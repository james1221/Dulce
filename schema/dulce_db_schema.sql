CREATE TABLE BurialRecord (
  person_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  wake_address VARCHAR(255) NULL,
  cemetery VARCHAR(150) NULL,
  contract_price FLOAT NULL,
  PRIMARY KEY(person_id),
  INDEX BurialRecord_FKIndex1(person_id)
);

CREATE TABLE Category (
  category_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  category_name VARCHAR(45) NULL,
  description VARCHAR(255) NULL,
  PRIMARY KEY(category_id)
);

CREATE TABLE Chapel (
  chapel_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  chapel_number INTEGER UNSIGNED NOT NULL,
  chapel_name VARCHAR(50) NOT NULL,
  chapel_description VARCHAR(255) NULL,
  PRIMARY KEY(chapel_id)
);

CREATE TABLE Deceased_Person (
  person_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  last_name VARCHAR(50) NULL,
  first_name VARCHAR(50) NULL,
  middle_name VARCHAR(50) NULL,
  birthdate DATE NULL,
  residence VARCHAR(255) NULL,
  death_date DATE NULL,
  death_place VARCHAR(255) NULL,
  PRIMARY KEY(person_id)
);

CREATE TABLE Informant (
  user_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  person_id INTEGER UNSIGNED NOT NULL,
  informant_name INTEGER UNSIGNED NULL,
  relation VARCHAR(50) NULL,
  PRIMARY KEY(user_id, person_id),
  INDEX Informant_FKIndex1(person_id),
  INDEX Informant_FKIndex2(user_id)
);

CREATE TABLE Live_Streaming (
  viewing_code INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  user_id INTEGER UNSIGNED NOT NULL,
  person_Id INTEGER UNSIGNED NOT NULL,
  chapel_id INTEGER UNSIGNED NOT NULL,
  viewing_password VARCHAR(25) NOT NULL,
  date DATE NULL,
  time DATETIME NULL,
  PRIMARY KEY(viewing_code),
  INDEX Live_Streaming_FKIndex1(chapel_id),
  INDEX Live_Streaming_FKIndex2(person_Id),
  INDEX Live_Streaming_FKIndex3(user_id)
);

CREATE TABLE Product (
  product_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  category_id INTEGER UNSIGNED NOT NULL,
  product_name VARCHAR(45) NULL,
  description VARCHAR(255) NULL,
  price FLOAT NULL,
  PRIMARY KEY(product_id),
  INDEX Product_FKIndex1(category_id)
);

CREATE TABLE Purchase (
  purchase_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  product_id INTEGER UNSIGNED NOT NULL,
  user_id INTEGER UNSIGNED NOT NULL,
  purchase_date DATE NULL,
  PRIMARY KEY(purchase_id, product_id),
  INDEX Purchase_FKIndex1(user_id),
  INDEX Purchase_FKIndex2(product_id)
);

CREATE TABLE Schedule (
  schedule_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  chapel_id INTEGER UNSIGNED NOT NULL,
  user_id INTEGER UNSIGNED NOT NULL,
  schedule_date DATE NULL,
  PRIMARY KEY(schedule_id),
  INDEX Schedule_FKIndex1(user_id),
  INDEX Schedule_FKIndex2(chapel_id)
);

CREATE TABLE User_Account (
  user_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  last_name VARCHAR(50) NULL,
  first_name VARCHAR(50) NULL,
  birthdate DATE NULL,
  location VARCHAR(255) NULL,
  password VARCHAR(50) NULL,
  PRIMARY KEY(user_id)
);


