# swgoh-api-parse

Весь код аккуратненько подписан, собственно в основном индексе только форма которая забирает у пользователя ID гильдии, сам скрипт во втором индексе + хедере.

Если нужно поменять чтото в переводе, меняйте русские обозначения в headers.php
К sql базе пока не обращается, пока в процессе доработки.

Если вам нужно постоянно выгружать одну и ту же гильдию, то в файле index2.php закомментируйте первый блок, а во втором поменяйте в ссылке $idguild на нужный id, тогда вам нужны будут только файлы index2.php и  headers.php.

Если будут вопросы - пишите!




=========================================================================
#29.06.2018
Проект залит.
Пока вся обработка на php, дальше буду прикручивать заливку всего этого во временную бд и возможность работы с ней в пределах сессии.
