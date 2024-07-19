CREATE DATABASE medicine_management;

USE medicine_management;

CREATE TABLE medicines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE reminders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medicine_id INT,
    reminder_time TIME,
    FOREIGN KEY (medicine_id) REFERENCES medicines(id)
);

CREATE TABLE reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medicine_id INT,
    report_date DATE,
    status VARCHAR(255),
    FOREIGN KEY (medicine_id) REFERENCES medicines(id)
);
