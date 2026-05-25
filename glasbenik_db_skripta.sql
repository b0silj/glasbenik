CREATE DATABASE glasbenik;
USE glasbenik;

-- 1. Tabela za kontaktne podatke stranke
CREATE TABLE stranke (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime_priimek VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefon VARCHAR(20)
);

-- 2. Tabela za želene termine (povezana s stranko)
CREATE TABLE termini (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stranka_id INT NOT NULL,
    datum_termina DATE NOT NULL,
    FOREIGN KEY (stranka_id) REFERENCES stranke(id) ON DELETE CASCADE
);

-- 3. Tabela za sporočila (povezana s stranko)
CREATE TABLE sporocila (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stranka_id INT NOT NULL,
    vsebina TEXT,
    poslano_ob TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (stranka_id) REFERENCES stranke(id) ON DELETE CASCADE
);
