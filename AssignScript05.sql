/*
    Husain Haq
    Databases
    Assignment 5
*/
/* Now in BabyName database*/
USE BabyName;
/* Shows all the current tables from babyname database*/
SHOW TABLES
    FROM BabyName;
/*Shows all columns and their data types*/
DESCRIBE BabyName;
/*Shows the names of the year of 1998*/
SELECT * FROM BabyName
    WHERE year = 1998;

SELECT * FROM BabyName
    WHERE (year = 1998 AND name = 'Husain');
/* Using count, this will find the most popular names*/
SELECT MAX(count) AS PopularName
    FROM BabyName;
/*Most popular name in 1984*/
SELECT gender, year, name,  MAX(count) AS PopularName
    FROM BabyName
    WHERE year = 1984
    GROUP BY gender;
/*How many different names regardless of year*/
SELECT place, COUNT(name)
    FROM BabyName
    GROUP BY place;
/*Shows the information of all names related to mine*/
SELECT name, COUNT(*) AS numberOFNames, year
    FROM BabyName
    WHERE name LIKE "%Hus%"
    GROUP BY name, year
    ORDER BY name ASC;
/*Name count for the year 1974*/
SELECT year, COUNT(name)
    FROM BabyName
    WHERE year = 1974
    GROUP BY year;
/*Count the number of rows*/
SELECT COUNT(*) AS NumberOfRows
    FROM BabyName;
/*How many names are there for Male and Female in the year 1962*/
SELECT gender, year, COUNT(name) AS NumberOfNames
    FROM BabyName
    WHERE year = 1962
    GROUP BY gender;