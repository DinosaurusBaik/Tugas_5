CREATE DATABASE mhs;

USE mhs;

CREATE TABLE identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(40),
    alamat VARCHAR(100),
    tgl_lhr DATE,
    jk CHAR(1),
    email VARCHAR(50)
);


INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email) 
VALUES 
('140810230048', 'Daniel', 'Hegarmana', '2005-03-13', 'L', 'danielbintang23001@gmail.com'),
('140810230046', 'Hamud', 'Ciseke', '2005-03-13', 'L', 'hamud23001@gmail.com'),
('140810230044', 'Fadhli', 'Bandung', '2005-03-13', 'L', 'fadhli23001@gmail.com'),
('140810230042', 'Danish', 'Ciseke', '2005-03-13', 'L', 'danish23001@gmail.com'),
('140810230040', 'Hafiz', 'Antapani', '2005-03-13', 'L', 'hafiz23001@gmail.com'),
('140810230038', 'Zahran', 'Hegarmana', '2005-03-13', 'L', 'zahran23001@gmail.com'),
('140810230036', 'Noel', 'Bandung', '2005-03-13', 'L', 'noel23001@gmail.com'),
('140810230034', 'Nazwa', 'Bandung', '2005-03-13', 'P', 'nazwa23001@gmail.com'),
('140810230032', 'Hana', 'Bandung', '2005-03-13', 'P', 'hana23001@gmail.com'),
('140810230030', 'Ode', 'Ciseke', '2005-03-13', 'P', 'ode23001@gmail.com'),
('140810230028', 'Bunga', 'Hegarmana', '2005-03-13', 'P', 'bunga23001@gmail.com');
