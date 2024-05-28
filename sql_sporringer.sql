CREATE DATABASE arsoppgaveMoki;

INSERT INTO arsoppgaveMoki.nyhetsbrevKunde (fornavn, etternavn, epost) VALUES (hei, triks, vict@ggg.com);

CREATE TABLE arsoppgaveMoki.nyhetsbrevKunde (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fornavn VARCHAR(100) NOT NULL,
    etternavn VARCHAR(100) NOT NULL,
    epost VARCHAR(100) NOT NULL
);

DELETE FROM arsoppgaveMoki.nyhetsbrevKunde WHERE id = 1;

SELECT * FROM nyhetsbrevKunde;