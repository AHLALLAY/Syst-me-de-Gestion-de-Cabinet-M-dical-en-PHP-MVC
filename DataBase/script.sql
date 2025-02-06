CREATE DATABASE cabinet_medicale;

CREATE TABLE "user" (
    user_id SERIAL PRIMARY KEY,
    f_name VARCHAR(50) NOT NULL,
    l_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    pwd_hashed VARCHAR(255) NOT NULL,
    roles VARCHAR(50) NOT NULL,
    birthday DATE,
    joined_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE appointment (
    app_id SERIAL PRIMARY KEY,
    app_date TIMESTAMP NOT NULL,
    patient_id INT REFERENCES "user"(user_id),
    doctor_id INT REFERENCES "user"(user_id)
);