<p align="center">
    <h1 align="center">Тестовое задание</h1>
    <br>
</p>

<p align="center">
    <h2 align="center">PHP</h2>
    <br>
</p>

<pre>
В каком виде хотелось бы получить решение каждой заачи:

напишите для каждой задачи PHP страницу, на которой запускается скрипт php, ввод входных данных происходит в коде самого скрипта. ответ выводится на экран.

1) Напишите скрипт PHP, на входе которого подается дата в формате UNIX TIMESTAMP
А скрипт определяет, является ли дата выходным днем в России или нет.

2) Напишите скрипт PHP извлекающий имя файла из строки следующего вида:
Sample String : 'xyz://www.example.com/public_html/index.php?x=45&r=mmm'
результат: index.php

3) Напишите скрипт PHP который сотрирует массив array в порядке указанном в order 

$order[0] = 1;
$order[1] = 3; 
$order[2] = 4; 
$order[3] = 2; 

$array[0] = 2;
$array[1] = 1; 
$array[2] = 3; 
$array[3] = 4; 
$array[4] = 2; 
$array[5] = 1; 
$array[6] = 2; 

Результат                                                   
    [0] => 1                                                
    [1] => 1                                                
    [2] => 3                                                
    [3] => 4                                                
    [4] => 2                                                
    [5] => 2                                                
    [6] => 2           
</pre>

<p align="center">
    <h2 align="center">JS</h2>
    <br>
</p>

<pre>
    В каком виде хотелось бы получить решение каждой заачи:
    
    напишите для каждой задачи HTML страницу, на которой запускается скрипт, который запрашивает ввод входных данных и отображающий ответ.
    *данные из серии вводятся по одному, по очереди а не скопом. 

    1) Напишите скрипт на JS, заменяющий каждую букву в строке на другую букву на следующую по алфавиту.
    
    LetterCh("PYTHON");
    LetterCh("W3R");
    LetterCh("php");
    
    Output:
    
    QZUIPO
    X4S
    qIq

    2) Напишите скрипт на JS рассчитывающий сколько дней осталось до Рождеста по введенной дате.
    
    3) Напишите скрипт на JS достраивающий до минимально возможного палиндрома, добавляя необходимые символы в конец строки.
    
    палиндром образуется по следующему принципу - слово долно получиться ПОЛНОСТЬЮ СИММЕТРИЧНЫМ 
    
    abcddc   ->   abcdc+ba   -> abcd|dcba
    122    ->   122+1   ->    12|21
    
    вход:
    abcddc   
    122
    
    выход:
    abcddcba
    1221
</pre>

<p align="center">
    <h2 align="center">SQL</h2>
    <br>
</p>

<pre>
https://www.w3resource.com/sql-exercises/movie-database-exercise/joins-exercises-on-movie-database.php
Прямо на сайте можно исполнять запросы к базе данных
Для базы данных MOVIE необходимо написать запрос:

В качестве ответа к задаче необходимо предоставить SQL запрос, который выдает верный результат на указанном выше сайте. 

JOIN'ы

1) При помощи JOIN-ов Вывести таблицу - два столбца: содержащую все фамилии директоров и жанры кино в которых эти директора работают.  
Записи должны быть упорядочены по Фамилии директора по возрастанию (Allen первый)
Не должно быть дубликатов (дублирующихся записей в итоговой таблице)
Вывести эту таблицу только для тах жанров, которые начинаются с английской "C"  (Comedy и т.д.) 

Должно получиться примерно следующее: 
[dir_lname]	[gen_title]
Allen		Comedy
Darabont	Crime
.... и т.д.	

Подзапросы

2) Используя Подзапросы (Sub-Queary) напишите запрос который выведет названия всех фильмов под руководством директора по фамилии Nolan

Должно получиться примерно следующее: 
[mov_title]
????
????

* ОБРАТИТЕ ВНИМАНИЕ, в таблице movie_direction на этом сайте задвоились строчки, учтите это при выполнении заданий, чтобы в ответе ничего не двоилось.
SELECT * FROM movie_direction order by dir_id asc;

dir_id	mov_id
201	901
201	901
202	902
202	902
203	903
203	903
204	904
204	904
205	905
205	905
206	906
206	906
207	907
207	907
208	908
208	908
209	909
209	909
210	910
210	910
211	911
211	911
212	912
212	912
213	913
213	913
214	914
214	914
215	922
215	915
215	915
215	922
216	916
216	916
217	917
217	917
218	918
218	921
218	918
218	921
219	919
219	919
220	920
220	920
221	923
221	923
</pre>
