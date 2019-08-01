<?php

namespace app\tests\examples;

/**
 * Class BUSExample
 */
class BUSExample
{
    /**
     * Returns data ArrayExcelBuilder.
     *
     * @return array
     */
    public static function getData()
    {
        // Sheet data
        $columns =
            array(
                0 =>
                    array(
                        0 =>
                            array(
                                'value' => 'Код проекта',
                                'bold' => true,
                            ),
                        1 =>
                            array(
                                'value' => 'Наименование проекта рус',
                                'bold' => true,
                            ),
                        2 =>
                            array(
                                'value' => 'Ведущий менеджер',
                                'bold' => true,
                            ),
                        3 =>
                            array(
                                'value' => 'Аккаунт-менеджер',
                                'bold' => true,
                            ),
                        4 =>
                            array(
                                'value' => 'Дата начала проекта',
                                'bold' => true,
                            ),
                        5 =>
                            array(
                                'value' => 'Дата окончания проекта',
                                'bold' => true,
                            ),
                        6 =>
                            array(
                                'value' => 'Клиент',
                                'bold' => true,
                            ),
                        7 =>
                            array(
                                'value' => 'Линия',
                                'bold' => true,
                            ),
                        8 =>
                            array(
                                'value' => 'Начало',
                                'bold' => true,
                            ),
                        9 =>
                            array(
                                'value' => 'Завершение',
                                'bold' => true,
                            ),
                    ),
                1 =>
                    array(
                        0 =>
                            array(
                                'value' => '21',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Московский Театр Оперетты',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Золкина Наталия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-19 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Московский Театр Оперетты',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Московский Театр Оперетты',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-19 23:59:59',
                            ),
                    ),
                2 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Московский Театр Оперетты',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-12-04 23:59:59',
                            ),
                    ),
                3 =>
                    array(
                        0 =>
                            array(
                                'value' => '1000',
                                'mergeRows' => 7,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт',
                                'mergeRows' => 7,
                            ),
                        2 =>
                            array(
                                'value' => 'Широкова Ирина ',
                                'mergeRows' => 7,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 7,
                            ),
                        4 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                                'mergeRows' => 7,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                                'mergeRows' => 7,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт',
                                'mergeRows' => 7,
                            ),
                        7 =>
                            array(
                                'value' => 'ДТиЗН',
                            ),
                        8 =>
                            array(
                                'value' => '2011-08-18 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2011-10-19 00:00:00',
                            ),
                    ),
                4 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Внутреннее тестирование входящих линий',
                            ),
                        8 =>
                            array(
                                'value' => '2011-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                            ),
                    ),
                5 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Табинфо',
                            ),
                        8 =>
                            array(
                                'value' => '2013-10-21 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                            ),
                    ),
                6 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Оптимизация процессов',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2014-09-16 00:00:00',
                            ),
                    ),
                7 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт СКУД',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                            ),
                    ),
                8 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт ОПС',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                            ),
                    ),
                9 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Все проекты',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                            ),
                    ),
                10 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт_тест',
                            ),
                        8 =>
                            array(
                                'value' => '2018-05-15 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-05-15 13:29:30',
                            ),
                    ),
                11 =>
                    array(
                        0 =>
                            array(
                                'value' => '5',
                                'mergeRows' => 4,
                            ),
                        1 =>
                            array(
                                'value' => 'Интерэктив Сервисез',
                                'mergeRows' => 4,
                            ),
                        2 =>
                            array(
                                'value' => 'Нилова Елена test',
                                'mergeRows' => 4,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 4,
                            ),
                        4 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                                'mergeRows' => 4,
                            ),
                        5 =>
                            array(
                                'value' => '2019-11-29 23:59:59',
                                'mergeRows' => 4,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Интерэктив Сервисез',
                                'mergeRows' => 4,
                            ),
                        7 =>
                            array(
                                'value' => 'Справки СМС',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2011-12-17 00:00:00',
                            ),
                    ),
                12 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Интерэктив Сервисез Ресепшн',
                            ),
                        8 =>
                            array(
                                'value' => '2007-11-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-01-01 00:00:00',
                            ),
                    ),
                13 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Мейк Ми Ресепшн',
                            ),
                        8 =>
                            array(
                                'value' => '2011-08-22 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-01-01 00:00:00',
                            ),
                    ),
                14 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'СМС Сервис',
                            ),
                        8 =>
                            array(
                                'value' => '2011-09-29 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2011-12-17 00:00:00',
                            ),
                    ),
                15 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Интерэктив Сервисез',
                            ),
                        8 =>
                            array(
                                'value' => '2012-02-27 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2015-01-27 00:00:00',
                            ),
                    ),
                16 =>
                    array(
                        0 =>
                            array(
                                'value' => '2000',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'Монитор Директ',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Чернова Екатерина ',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2009-02-26 00:00:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-13 00:00:00',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Монитор Директ',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'Монитор Ресепшн',
                            ),
                        8 =>
                            array(
                                'value' => '2009-02-26 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2017-12-31 00:00:00',
                            ),
                    ),
                17 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Монитор',
                            ),
                        8 =>
                            array(
                                'value' => '2014-08-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-13 00:00:00',
                            ),
                    ),
                18 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'МГТС_ГПОН_Монитор',
                            ),
                        8 =>
                            array(
                                'value' => '2014-11-20 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2017-12-13 13:28:00',
                            ),
                    ),
                19 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Монитор Рекрутинг',
                            ),
                        8 =>
                            array(
                                'value' => '2016-08-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-13 00:00:00',
                            ),
                    ),
                20 =>
                    array(
                        0 =>
                            array(
                                'value' => '86',
                                'mergeRows' => 6,
                            ),
                        1 =>
                            array(
                                'value' => 'ЮниКредит Банк',
                                'mergeRows' => 6,
                            ),
                        2 =>
                            array(
                                'value' => 'Кононенко Владимир ',
                                'mergeRows' => 6,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 6,
                            ),
                        4 =>
                            array(
                                'value' => '2010-06-23 00:00:00',
                                'mergeRows' => 6,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-29 00:00:00',
                                'mergeRows' => 6,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ЮниКредит Банк',
                                'mergeRows' => 6,
                            ),
                        7 =>
                            array(
                                'value' => 'ЮниКредит Банк',
                            ),
                        8 =>
                            array(
                                'value' => '2010-06-23 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-29 00:00:00',
                            ),
                    ),
                21 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ЮниКредитБанк_Ресепшн',
                            ),
                        8 =>
                            array(
                                'value' => '2010-07-18 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2010-12-31 00:00:00',
                            ),
                    ),
                22 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ЮКБ Продажи',
                            ),
                        8 =>
                            array(
                                'value' => '2011-07-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2011-12-19 00:00:00',
                            ),
                    ),
                23 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ЮниКредит Банк искон',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-24 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-26 03:00:00',
                            ),
                    ),
                24 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ЮниКредит Банк11',
                            ),
                        8 =>
                            array(
                                'value' => '2010-06-23 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-29 23:59:59',
                            ),
                    ),
                25 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ЮниКредит Банк22',
                            ),
                        8 =>
                            array(
                                'value' => '2010-06-23 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-29 23:59:59',
                            ),
                    ),
                26 =>
                    array(
                        0 =>
                            array(
                                'value' => '1002',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Школа Операторов',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Смирнова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Школа Операторов',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Школа Операторов',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                27 =>
                    array(
                        0 =>
                            array(
                                'value' => '1009',
                                'mergeRows' => 12,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Ресепшн',
                                'mergeRows' => 12,
                            ),
                        2 =>
                            array(
                                'value' => '',
                                'mergeRows' => 12,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 12,
                            ),
                        4 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                                'mergeRows' => 12,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 12,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Ресепшн',
                                'mergeRows' => 12,
                            ),
                        7 =>
                            array(
                                'value' => 'Ресепшн Брянск',
                            ),
                        8 =>
                            array(
                                'value' => '2012-07-19 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2015-02-28 00:00:00',
                            ),
                    ),
                28 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Ресепшн Житомир',
                            ),
                        8 =>
                            array(
                                'value' => '2012-07-19 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                29 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Ресепшн Тверь',
                            ),
                        8 =>
                            array(
                                'value' => '2012-07-19 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                30 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Ресепшн Орёл',
                            ),
                        8 =>
                            array(
                                'value' => '2012-07-19 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                31 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Ресепшн Узор',
                            ),
                        8 =>
                            array(
                                'value' => '2012-03-20 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                32 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Ресепшн',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                33 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтракт_Ресепшн',
                            ),
                        8 =>
                            array(
                                'value' => '2009-12-02 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                34 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Ресепшн Тамбов',
                            ),
                        8 =>
                            array(
                                'value' => '2013-08-09 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                35 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Ресепшн Минск',
                            ),
                        8 =>
                            array(
                                'value' => '2013-11-13 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                36 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'БПО Инвест',
                            ),
                        8 =>
                            array(
                                'value' => '2013-12-27 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                37 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Алматы',
                            ),
                        8 =>
                            array(
                                'value' => '2014-07-28 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                38 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Продажа услуг Ресепшн',
                            ),
                        8 =>
                            array(
                                'value' => '2014-08-07 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                39 =>
                    array(
                        0 =>
                            array(
                                'value' => '1001',
                                'mergeRows' => 13,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Рекрутинг',
                                'mergeRows' => 13,
                            ),
                        2 =>
                            array(
                                'value' => 'Смирнова Юлия ',
                                'mergeRows' => 13,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 13,
                            ),
                        4 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                                'mergeRows' => 13,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 13,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Рекрутинг',
                                'mergeRows' => 13,
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Брянск',
                            ),
                        8 =>
                            array(
                                'value' => '2012-02-13 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2015-02-28 00:00:00',
                            ),
                    ),
                40 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Житомир',
                            ),
                        8 =>
                            array(
                                'value' => '2011-05-10 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                41 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Орёл',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                42 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Тверь',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                43 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Миг кредит',
                            ),
                        8 =>
                            array(
                                'value' => '2012-01-19 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2013-03-21 00:00:00',
                            ),
                    ),
                44 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг СитиБанк',
                            ),
                        8 =>
                            array(
                                'value' => '2012-09-17 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                45 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Тамбов',
                            ),
                        8 =>
                            array(
                                'value' => '2012-10-22 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                46 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг_Орел_Сбер',
                            ),
                        8 =>
                            array(
                                'value' => '2013-01-28 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                47 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Алматы',
                            ),
                        8 =>
                            array(
                                'value' => '2013-03-21 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                48 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг_Брянск_ТКБ',
                            ),
                        8 =>
                            array(
                                'value' => '2013-07-08 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2013-11-01 00:00:00',
                            ),
                    ),
                49 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Великий Новгород',
                            ),
                        8 =>
                            array(
                                'value' => '2013-07-25 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2014-08-31 00:00:00',
                            ),
                    ),
                50 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг Кировоград',
                            ),
                        8 =>
                            array(
                                'value' => '2013-08-08 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                51 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Рекрутинг_Минск',
                            ),
                        8 =>
                            array(
                                'value' => '2013-10-24 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2014-12-31 00:00:00',
                            ),
                    ),
                52 =>
                    array(
                        0 =>
                            array(
                                'value' => '1004',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт отдел контроля качества',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Широкова Ирина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2012-08-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт отдел контроля качества',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Отдел контроля качества',
                            ),
                        8 =>
                            array(
                                'value' => '2012-08-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                53 =>
                    array(
                        0 =>
                            array(
                                'value' => '1005',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Отдел Планирования',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Маркова Маргарита ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2007-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Отдел Планирования',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Отдел Планирования',
                            ),
                        8 =>
                            array(
                                'value' => '2007-05-17 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                54 =>
                    array(
                        0 =>
                            array(
                                'value' => '166',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'МГТС',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Нестерова Анастасия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2013-07-05 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-11-06 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ МГТС',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'МГТС_ДжиПОН',
                            ),
                        8 =>
                            array(
                                'value' => '2013-07-05 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-11-06 23:59:59',
                            ),
                    ),
                55 =>
                    array(
                        0 =>
                            array(
                                'value' => '168',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Ситибанк_Аренда',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Золкина Наталия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2013-06-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-15 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Ситибанк_Аренда',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Ситибанк_Аренда',
                            ),
                        8 =>
                            array(
                                'value' => '2013-06-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-15 23:59:59',
                            ),
                    ),
                56 =>
                    array(
                        0 =>
                            array(
                                'value' => '1018',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Оптимизация процессов',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Широкова Ирина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2014-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Оптимизация процессов',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Оптимизация процессов',
                            ),
                        8 =>
                            array(
                                'value' => '2014-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                57 =>
                    array(
                        0 =>
                            array(
                                'value' => '1003',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Отдел Кадров',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Дунаева Дарья ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2005-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Отдел Кадров',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Отдел кадров',
                            ),
                        8 =>
                            array(
                                'value' => '2005-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                58 =>
                    array(
                        0 =>
                            array(
                                'value' => '1006',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Бухгалтерия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2005-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Бухгалтерия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Бухгалтерия',
                            ),
                        8 =>
                            array(
                                'value' => '2005-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                59 =>
                    array(
                        0 =>
                            array(
                                'value' => '1011',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт ВИП-операторы',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Иконникова Ольга ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2005-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт ВИП-операторы',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Вип-операторы',
                            ),
                        8 =>
                            array(
                                'value' => '2005-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                60 =>
                    array(
                        0 =>
                            array(
                                'value' => '251',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'МетЛайф Бэк-Офис',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Ремизова Анна ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2015-03-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-30 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ МетЛайф Бэк-Офис',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'МетЛайф Бэк-Офис',
                            ),
                        8 =>
                            array(
                                'value' => '2015-03-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2015-03-01 23:59:59',
                            ),
                    ),
                61 =>
                    array(
                        0 =>
                            array(
                                'value' => '252',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'МетЛайф Верификаторы',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Ремизова Анна ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2015-03-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-07-01 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ МетЛайф Верификаторы',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'МетЛайф Верификаторы',
                            ),
                        8 =>
                            array(
                                'value' => '2015-03-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-07-01 23:59:59',
                            ),
                    ),
                62 =>
                    array(
                        0 =>
                            array(
                                'value' => '263',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'Зара',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Утриванова Юлия ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2015-06-05 00:00:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-28 00:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Зара',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'Зара',
                            ),
                        8 =>
                            array(
                                'value' => '2015-06-05 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-28 00:00:00',
                            ),
                    ),
                63 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Зара Балтика',
                            ),
                        8 =>
                            array(
                                'value' => '2016-08-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2016-11-01 00:00:00',
                            ),
                    ),
                64 =>
                    array(
                        0 =>
                            array(
                                'value' => '1010',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Отдел Управления Проектами',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Широкова Ирина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Отдел Управления Проектами',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Отдел Управления Проектами',
                            ),
                        8 =>
                            array(
                                'value' => '2000-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                65 =>
                    array(
                        0 =>
                            array(
                                'value' => '313',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Национальный Кредит',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Потапова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2016-04-12 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Национальный Кредит',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Национальный Кредит',
                            ),
                        8 =>
                            array(
                                'value' => '2016-04-12 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-01 00:00:00',
                            ),
                    ),
                66 =>
                    array(
                        0 =>
                            array(
                                'value' => '319',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Теле2',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Утриванова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2016-06-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-28 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Теле2',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Теле2',
                            ),
                        8 =>
                            array(
                                'value' => '2016-06-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-28 00:00:00',
                            ),
                    ),
                67 =>
                    array(
                        0 =>
                            array(
                                'value' => '1007',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Техническая служба',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Зайцев Александр ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2007-01-01 00:00:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Техническая служба',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Техническая служба',
                            ),
                        8 =>
                            array(
                                'value' => '2007-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                68 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Техническая служба тест',
                            ),
                        8 =>
                            array(
                                'value' => '2007-01-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-11-28 23:59:59',
                            ),
                    ),
                69 =>
                    array(
                        0 =>
                            array(
                                'value' => '337',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Зара Балтика АйТиЭкс Меркен Б.В.',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Утриванова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2016-11-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-28 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Зара Балтика АйТиЭкс Меркен Б.В.',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Зара Балтики',
                            ),
                        8 =>
                            array(
                                'value' => '2016-11-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-28 00:00:00',
                            ),
                    ),
                70 =>
                    array(
                        0 =>
                            array(
                                'value' => '348',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'Киви Банк Исходящие',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Нилова Елена test',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2016-09-26 00:00:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-24 23:59:59',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Киви Банк Исходящие',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'Киви Банк Исходящие',
                            ),
                        8 =>
                            array(
                                'value' => '2016-09-26 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-12-13 00:00:00',
                            ),
                    ),
                71 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Киви Банк Совесть',
                            ),
                        8 =>
                            array(
                                'value' => '2016-10-31 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-12-13 00:00:00',
                            ),
                    ),
                72 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Киви Банк Совесть Украина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-04-20 14:37:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-24 23:59:59',
                            ),
                    ),
                73 =>
                    array(
                        0 =>
                            array(
                                'value' => '1020',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Отдел развития и сопровождения проектов',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Широкова Ирина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2016-11-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Отдел развития и сопровождения проектов',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Развитие и сопровождение проектов',
                            ),
                        8 =>
                            array(
                                'value' => '2016-11-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-01-01 00:00:00',
                            ),
                    ),
                74 =>
                    array(
                        0 =>
                            array(
                                'value' => '359',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'Уралсиб',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Манешина Яна  Сергеевна',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2016-12-28 11:42:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2019-09-28 00:00:00',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Уралсиб',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'Уралсиб',
                            ),
                        8 =>
                            array(
                                'value' => '2016-12-28 11:42:00',
                            ),
                        9 =>
                            array(
                                'value' => '2017-06-29 15:00:00',
                            ),
                    ),
                75 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Уралсиб',
                            ),
                        8 =>
                            array(
                                'value' => '2017-08-11 16:03:00',
                            ),
                        9 =>
                            array(
                                'value' => '2017-11-20 04:03:00',
                            ),
                    ),
                76 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Уралсиб',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-20 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-09-28 00:00:00',
                            ),
                    ),
                77 =>
                    array(
                        0 =>
                            array(
                                'value' => '360',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'Альфа-Банк',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Дунаева Алена ',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2017-02-01 00:00:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2019-12-12 23:59:59',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Альфа-Банк',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'Альфа Страхование',
                            ),
                        8 =>
                            array(
                                'value' => '2017-02-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-01-22 23:59:59',
                            ),
                    ),
                78 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Альфа-Банк_анкета',
                            ),
                        8 =>
                            array(
                                'value' => '2017-02-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-12-12 23:59:59',
                            ),
                    ),
                79 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Альфа-Банк_вторичка',
                            ),
                        8 =>
                            array(
                                'value' => '2017-08-30 12:29:00',
                            ),
                        9 =>
                            array(
                                'value' => '2017-12-06 09:42:00',
                            ),
                    ),
                80 =>
                    array(
                        0 =>
                            array(
                                'value' => '364',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Убер',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Золкин Андрей К',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-03-09 16:05:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2021-12-31 04:05:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Убер',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Убер привлечение водителей',
                            ),
                        8 =>
                            array(
                                'value' => '2017-03-09 16:05:00',
                            ),
                        9 =>
                            array(
                                'value' => '2021-12-31 04:05:00',
                            ),
                    ),
                81 =>
                    array(
                        0 =>
                            array(
                                'value' => '367',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Автодор: платные дороги',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Шманева Анастасия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-02-12 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-07-01 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Автодор: платные дороги',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Автодор: платные дороги',
                            ),
                        8 =>
                            array(
                                'value' => '2018-02-12 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-07-01 23:59:59',
                            ),
                    ),
                82 =>
                    array(
                        0 =>
                            array(
                                'value' => '1022',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Приведи Друга',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Смирнова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-04 11:35:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 23:35:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Приведи Друга',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Приведи Друга',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-04 11:35:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 23:35:00',
                            ),
                    ),
                83 =>
                    array(
                        0 =>
                            array(
                                'value' => '3002',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Школа Операторов',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Смирнова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:53:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Казахстан Телеконтакт Школа Операторов',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Школа Операторов',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:53:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                            ),
                    ),
                84 =>
                    array(
                        0 =>
                            array(
                                'value' => '3016',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Обучение в ШО (КМБ)',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Смирнова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:56:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Казахстан Телеконтакт Обучение в ШО (КМБ)',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Обучение в ШО (КМБ)',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:56:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                            ),
                    ),
                85 =>
                    array(
                        0 =>
                            array(
                                'value' => '3022',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Приведи друга',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Смирнова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:56:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Казахстан Телеконтакт Приведи друга',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Приведи друга',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:56:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                            ),
                    ),
                86 =>
                    array(
                        0 =>
                            array(
                                'value' => '4000',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Сазанова Анастасия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Сазанова Анастасия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:41:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Сазанова Анастасия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Сазанова Анастасия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:41:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                87 =>
                    array(
                        0 =>
                            array(
                                'value' => '4001',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Шолина Юлия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Шолина Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:47:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Шолина Юлия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Шолина Юлия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:47:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                88 =>
                    array(
                        0 =>
                            array(
                                'value' => '3003',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Отдел Кадров',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Бурхандинов Анаят ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:54:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Казахстан Телеконтакт Отдел Кадров',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Отдел Кадров',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:54:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                            ),
                    ),
                89 =>
                    array(
                        0 =>
                            array(
                                'value' => '3006',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Бухгалтерия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Бурхандинов Анаят ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:54:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Казахстан Телеконтакт Бухгалтерия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Бухгалтерия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:54:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                            ),
                    ),
                90 =>
                    array(
                        0 =>
                            array(
                                'value' => '3007',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Техническая служба',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Бурхандинов Анаят ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:55:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Казахстан Телеконтакт Техническая служба',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Казахстан Телеконтакт Техническая служба',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:55:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                            ),
                    ),
                91 =>
                    array(
                        0 =>
                            array(
                                'value' => '3008',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Казахстан Телеконтакт AXO',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Бурхандинов Анаят ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-05-22 12:55:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Казахстан Телеконтакт AXO',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Казахстан Телеконтакт AXO',
                            ),
                        8 =>
                            array(
                                'value' => '2017-05-22 12:55:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 00:00:00',
                            ),
                    ),
                92 =>
                    array(
                        0 =>
                            array(
                                'value' => '1023',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Телеконтакт Мотивация персонала от площадки',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Покатилова Наталья ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:01:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 23:01:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Телеконтакт Мотивация персонала от площадки',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Телеконтакт Мотивация персонала от площадки',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:01:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 23:01:00',
                            ),
                    ),
                93 =>
                    array(
                        0 =>
                            array(
                                'value' => '4004',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Дунаева Алена',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Дунаева Алена ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:23:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Дунаева Алена',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Дунаева Алена',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:23:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                94 =>
                    array(
                        0 =>
                            array(
                                'value' => '4005',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Золкин Андрей',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Золкин Андрей К',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:23:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Золкин Андрей',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Золкин Андрей',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:23:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                95 =>
                    array(
                        0 =>
                            array(
                                'value' => '4007',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Исаков Антон',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Исаков Антон ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:25:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Исаков Антон',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Исаков Антон',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:25:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                96 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Отдел Методологии и Сопровождения',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-27 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-08-27 00:00:00',
                            ),
                    ),
                97 =>
                    array(
                        0 =>
                            array(
                                'value' => '4008',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Кононенко Владимир',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кононенко Владимир ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:25:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Кононенко Владимир',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Кононенко Владимир',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:25:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                98 =>
                    array(
                        0 =>
                            array(
                                'value' => '4009',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Костикова Дарья',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Костикова Дарья ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:26:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Костикова Дарья',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Костикова Дарья',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:26:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                99 =>
                    array(
                        0 =>
                            array(
                                'value' => '4010',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Евдокимова Екатерина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Евдокимова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:26:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Евдокимова Екатерина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Евдокимова Екатерина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:26:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                100 =>
                    array(
                        0 =>
                            array(
                                'value' => '4011',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Потапова Екатерина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Потапова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:26:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Потапова Екатерина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Потапова Екатерина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:26:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                101 =>
                    array(
                        0 =>
                            array(
                                'value' => '4012',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Федунова Кристина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Федунова Кристина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:27:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Федунова Кристина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Федунова Кристина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:27:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                102 =>
                    array(
                        0 =>
                            array(
                                'value' => '4013',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Алексеева Ирина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Алексеева Ирина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:28:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Алексеева Ирина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Алексеева Ирина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:28:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                103 =>
                    array(
                        0 =>
                            array(
                                'value' => '4014',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Золкина Наталия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Золкина Наталия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:28:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Золкина Наталия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Золкина Наталия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:28:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                104 =>
                    array(
                        0 =>
                            array(
                                'value' => '4015',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Стригина Ольга',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Стригина Ольга ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:28:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Стригина Ольга',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Стригина Ольга',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:28:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                105 =>
                    array(
                        0 =>
                            array(
                                'value' => '4016',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Тарасова Юлия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Тарасова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:36:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Тарасова Юлия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Тарасова Юлия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:36:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                106 =>
                    array(
                        0 =>
                            array(
                                'value' => '4017',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Чернова Екатерина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Чернова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:37:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Чернова Екатерина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Чернова Екатерина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:37:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                107 =>
                    array(
                        0 =>
                            array(
                                'value' => '4018',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Юнг Юлия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Юнг Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:37:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Юнг Юлия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Юнг Юлия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:37:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                108 =>
                    array(
                        0 =>
                            array(
                                'value' => '4019',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Петрова Олеся',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Петрова Олеся ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:38:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Петрова Олеся',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Петрова Олеся',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:38:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                109 =>
                    array(
                        0 =>
                            array(
                                'value' => '4020',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Утриванова Юлия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Утриванова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:38:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Утриванова Юлия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Утриванова Юлия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:38:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                110 =>
                    array(
                        0 =>
                            array(
                                'value' => '4022',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Сайфарова Татьяна',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Сайфарова Татьяна ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-05 11:39:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Сайфарова Татьяна',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Сайфарова Татьяна',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-05 11:39:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                111 =>
                    array(
                        0 =>
                            array(
                                'value' => '4023',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Наталья Куприянова',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Наталья Куприянова ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-07 11:13:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Наталья Куприянова',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Наталья Куприянова',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-07 11:13:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                112 =>
                    array(
                        0 =>
                            array(
                                'value' => '4024',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Белянина  Мария',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Белянина  Мария ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-08 12:31:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Белянина  Мария',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Белянина  Мария',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-08 12:31:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                113 =>
                    array(
                        0 =>
                            array(
                                'value' => '4025',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Рафальская Юлия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Рафальская Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-13 11:58:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Рафальская Юлия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Рафальская Юлия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-13 11:58:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                114 =>
                    array(
                        0 =>
                            array(
                                'value' => '376',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'Филип Моррис',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Алена Чаузова ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-16 19:52:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-02 03:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Филип Моррис',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'Филип Моррис',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-16 19:52:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-12-30 07:52:00',
                            ),
                    ),
                115 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Филип Моррис Айкос',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-01 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-02 03:00:00',
                            ),
                    ),
                116 =>
                    array(
                        0 =>
                            array(
                                'value' => '4026',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Семёнова Валерия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Семёнова Валерия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-21 18:04:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Семёнова Валерия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Семёнова Валерия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-21 18:04:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                117 =>
                    array(
                        0 =>
                            array(
                                'value' => '4027',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Яна Манешина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-06-28 20:15:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Яна Манешина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Яна Манешина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-06-28 20:15:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                118 =>
                    array(
                        0 =>
                            array(
                                'value' => '4028',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Дмитрий Виноградов',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Дмитрий Виноградов ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-07-03 10:55:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Дмитрий Виноградов',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Дмитрий Виноградов',
                            ),
                        8 =>
                            array(
                                'value' => '2017-07-03 10:55:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                119 =>
                    array(
                        0 =>
                            array(
                                'value' => '4029',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Abakhanova Assel',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Абаханова Асель Нурхатовна',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2017-07-05 19:57:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Abakhanova Assel',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Abakhanova Assel',
                            ),
                        8 =>
                            array(
                                'value' => '2017-07-05 19:57:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                120 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Отбасы 365 ',
                            ),
                        8 =>
                            array(
                                'value' => '2018-01-30 13:29:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-01-30 13:35:00',
                            ),
                    ),
                121 =>
                    array(
                        0 =>
                            array(
                                'value' => '4030',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Михаил Анфимов',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Михаил Анфимов ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-08-14 13:55:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Михаил Анфимов',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Михаил Анфимов',
                            ),
                        8 =>
                            array(
                                'value' => '2017-08-14 13:55:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                122 =>
                    array(
                        0 =>
                            array(
                                'value' => '2065',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Данон Рус',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Самойлина Наталья ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-08-31 17:50:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-02 05:50:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Данон Рус',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Данон_ГЛ_внешняя',
                            ),
                        8 =>
                            array(
                                'value' => '2017-08-31 17:50:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-02 05:50:00',
                            ),
                    ),
                123 =>
                    array(
                        0 =>
                            array(
                                'value' => '4031',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Кобзев Илья',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кобзев Илья ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-09-22 16:28:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Кобзев Илья',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Кобзев Илья',
                            ),
                        8 =>
                            array(
                                'value' => '2017-09-22 16:28:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                124 =>
                    array(
                        0 =>
                            array(
                                'value' => '4032',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Козлов Павел',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Козлов Павел ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2017-09-26 17:49:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Козлов Павел',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Козлов Павел',
                            ),
                        8 =>
                            array(
                                'value' => '2017-09-26 17:49:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                125 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ДжиТиАй опрос',
                            ),
                        8 =>
                            array(
                                'value' => '2017-10-19 17:30:00',
                            ),
                        9 =>
                            array(
                                'value' => '2017-10-19 17:36:00',
                            ),
                    ),
                126 =>
                    array(
                        0 =>
                            array(
                                'value' => '4033',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Яковенко Нина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Яковенко Нина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-09-28 17:05:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Яковенко Нина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Яковенко Нина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-09-28 17:05:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                127 =>
                    array(
                        0 =>
                            array(
                                'value' => '387',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'КИВИ-Постаматы',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Попова Галина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-10-02 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-03 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ КИВИ-Постаматы',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'КИВИ-Постаматы',
                            ),
                        8 =>
                            array(
                                'value' => '2017-10-02 17:39:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-03 05:39:00',
                            ),
                    ),
                128 =>
                    array(
                        0 =>
                            array(
                                'value' => '389',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПепсиКо Программирование',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Федунова Кристина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-10-16 15:49:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-02-28 03:49:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПепсиКо Программирование',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПепсиКо Программирование',
                            ),
                        8 =>
                            array(
                                'value' => '2017-10-16 15:49:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-02-28 03:49:00',
                            ),
                    ),
                129 =>
                    array(
                        0 =>
                            array(
                                'value' => '4034',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Алиева Зарина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Алиева Зарина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-10-23 16:17:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Алиева Зарина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Алиева Зарина',
                            ),
                        8 =>
                            array(
                                'value' => '2017-10-23 16:17:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                130 =>
                    array(
                        0 =>
                            array(
                                'value' => '2067',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'ВВПГрупп',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Чернова Екатерина ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2017-10-26 13:39:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-10 11:37:01',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ВВПГрупп',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'ВВП Групп',
                            ),
                        8 =>
                            array(
                                'value' => '2017-10-26 13:39:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-10 11:37:01',
                            ),
                    ),
                131 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ВВПГрупп',
                            ),
                        8 =>
                            array(
                                'value' => '2018-01-12 13:28:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-01-14 01:28:00',
                            ),
                    ),
                132 =>
                    array(
                        0 =>
                            array(
                                'value' => '4035',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Старостин Георгий',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Старостин Георгий Викторович',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-10-30 12:30:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Старостин Георгий',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Старостин Георгий',
                            ),
                        8 =>
                            array(
                                'value' => '2017-10-30 12:30:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                133 =>
                    array(
                        0 =>
                            array(
                                'value' => '2068',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Империал Тобакко',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Белянина  Мария ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-11-01 12:55:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-30 23:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Империал Тобакко',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Империал Тобакко',
                            ),
                        8 =>
                            array(
                                'value' => '2017-11-01 12:55:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-30 23:00:00',
                            ),
                    ),
                134 =>
                    array(
                        0 =>
                            array(
                                'value' => '392',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПепсиКо - айСейлз',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Федунова Кристина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-11-10 16:33:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-28 04:33:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПепсиКо - айСейлз',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПепсиКо - айСейлз',
                            ),
                        8 =>
                            array(
                                'value' => '2017-11-10 16:33:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-28 04:33:00',
                            ),
                    ),
                135 =>
                    array(
                        0 =>
                            array(
                                'value' => '4036',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Славинскас Антон',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Славинскас Антон ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-11-15 10:33:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Славинскас Антон',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Славинскас Антон',
                            ),
                        8 =>
                            array(
                                'value' => '2017-11-15 10:33:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                136 =>
                    array(
                        0 =>
                            array(
                                'value' => '4037',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Шманева Анастасия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Шманева Анастасия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2017-12-12 15:45:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Шманева Анастасия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Шманева Анастасия',
                            ),
                        8 =>
                            array(
                                'value' => '2017-12-12 15:45:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                137 =>
                    array(
                        0 =>
                            array(
                                'value' => '2070',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'Хэдхантер ООО',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Козлов Павел ',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2018-01-24 11:31:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-14 03:00:00',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Хэдхантер ООО',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'Хэдхантер ООО',
                            ),
                        8 =>
                            array(
                                'value' => '2018-01-24 11:31:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-01-30 00:00:00',
                            ),
                    ),
                138 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Хэдхантер_верификаторы',
                            ),
                        8 =>
                            array(
                                'value' => '2018-02-19 14:24:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-02-19 14:25:00',
                            ),
                    ),
                139 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Хэдхантер_Телемаркетинг',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-01 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-14 03:00:00',
                            ),
                    ),
                140 =>
                    array(
                        0 =>
                            array(
                                'value' => '4038',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Кузнецова Юлия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кузнецова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-01-26 17:37:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Кузнецова Юлия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Кузнецова Юлия',
                            ),
                        8 =>
                            array(
                                'value' => '2018-01-26 17:37:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                141 =>
                    array(
                        0 =>
                            array(
                                'value' => '4039',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Тажитаева Мария',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Тажитаева Мария Евгеньевна',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-02-07 16:43:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Тажитаева Мария',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Тажитаева Мария',
                            ),
                        8 =>
                            array(
                                'value' => '2018-02-07 16:43:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                142 =>
                    array(
                        0 =>
                            array(
                                'value' => '3023',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Мотивация от площадок Казахстана',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Бурхандинов Анаят ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-02-20 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2099-12-31 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Мотивация от площадок Казахстана',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Мотивация от площадок Казахстана',
                            ),
                        8 =>
                            array(
                                'value' => '2018-02-20 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2099-12-31 23:59:59',
                            ),
                    ),
                143 =>
                    array(
                        0 =>
                            array(
                                'value' => '1026',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'ТКСет',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Золкин Андрей К',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2018-03-02 17:22:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2021-01-31 05:22:00',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ТКСет',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'ТКСет',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-02 17:22:00',
                            ),
                        9 =>
                            array(
                                'value' => '2021-01-31 05:22:00',
                            ),
                    ),
                144 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ТКСет',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-02 17:22:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-03-12 17:06:00',
                            ),
                    ),
                145 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ТКСет',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-02 17:22:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-03-12 17:06:00',
                            ),
                    ),
                146 =>
                    array(
                        0 =>
                            array(
                                'value' => '4040',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Белозерцева Наталия',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Белозерцева Наталия Владимировна',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2018-03-06 13:37:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Белозерцева Наталия',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Белозерцева Наталия',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-06 13:37:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                147 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'ХэдХантер',
                            ),
                        8 =>
                            array(
                                'value' => '2018-04-16 14:30:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-04-16 15:07:00',
                            ),
                    ),
                148 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Большой Улов',
                            ),
                        8 =>
                            array(
                                'value' => '2018-05-10 07:37:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-05-10 07:38:00',
                            ),
                    ),
                149 =>
                    array(
                        0 =>
                            array(
                                'value' => '4041',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Абразовский Андрей',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Абразовский Андрей ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-03-06 17:06:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Абразовский Андрей',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Абразовский Андрей',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-06 17:06:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                150 =>
                    array(
                        0 =>
                            array(
                                'value' => '4042',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Ратникова Лилия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Ратникова Лилия Мавлятовна',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-03-29 13:16:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Ратникова Лилия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Ратникова Лилия',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-29 13:16:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                151 =>
                    array(
                        0 =>
                            array(
                                'value' => '4043',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Зырянский Илья',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Зырянский Илья ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2018-03-29 13:24:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Зырянский Илья',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Зырянский Илья',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-29 13:24:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                152 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Работа.ру',
                            ),
                        8 =>
                            array(
                                'value' => '2018-03-30 17:15:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-04-04 17:55:00',
                            ),
                    ),
                153 =>
                    array(
                        0 =>
                            array(
                                'value' => '2075',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'РДВ-софт',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Зырянский Илья ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-04-04 18:22:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-04 06:22:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ РДВ-софт',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Работа.ру',
                            ),
                        8 =>
                            array(
                                'value' => '2018-04-04 18:22:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-04 06:22:00',
                            ),
                    ),
                154 =>
                    array(
                        0 =>
                            array(
                                'value' => '401',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Яндекс Такси',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Попова Галина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-04-23 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-16 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Яндекс Такси',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Яндекс Такси',
                            ),
                        8 =>
                            array(
                                'value' => '2018-04-23 12:43:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-10-08 23:59:59',
                            ),
                    ),
                155 =>
                    array(
                        0 =>
                            array(
                                'value' => '3357',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ХэдХантер',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Белозерцева Наталия Владимировна',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-04-16 15:06:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-16 03:06:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ХэдХантер',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ХэдХантер',
                            ),
                        8 =>
                            array(
                                'value' => '2018-04-16 15:06:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-16 03:06:00',
                            ),
                    ),
                156 =>
                    array(
                        0 =>
                            array(
                                'value' => '2077',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Джог Дог',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Славинскас Антон ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-04-17 12:26:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-17 00:26:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Джог Дог',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Джог Дог',
                            ),
                        8 =>
                            array(
                                'value' => '2018-04-17 12:26:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-17 00:26:00',
                            ),
                    ),
                157 =>
                    array(
                        0 =>
                            array(
                                'value' => '3358',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Бутик.ТВ',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Сайфарова Татьяна ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-04-18 14:46:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-18 02:46:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Бутик.ТВ',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Бутик.ТВ',
                            ),
                        8 =>
                            array(
                                'value' => '2018-04-18 14:46:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-18 02:46:00',
                            ),
                    ),
                158 =>
                    array(
                        0 =>
                            array(
                                'value' => '4044',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Маханова Асель',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Маханова Асель Едыгеевна',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-05-21 18:24:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Маханова Асель',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Маханова Асель',
                            ),
                        8 =>
                            array(
                                'value' => '2018-05-21 18:24:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                159 =>
                    array(
                        0 =>
                            array(
                                'value' => '1027',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'геймификация',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Потапова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-05-23 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-11-22 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ геймификация',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'геймификация',
                            ),
                        8 =>
                            array(
                                'value' => '2018-05-23 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-11-22 03:00:00',
                            ),
                    ),
                160 =>
                    array(
                        0 =>
                            array(
                                'value' => '4045',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Кабенова Жанна',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Кабенова Жанна ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2018-05-23 16:39:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Кабенова Жанна',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Кабенова Жанна',
                            ),
                        8 =>
                            array(
                                'value' => '2018-05-23 16:39:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                161 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Банк Хоум Кредит',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-01 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-10-01 00:00:00',
                            ),
                    ),
                162 =>
                    array(
                        0 =>
                            array(
                                'value' => '4046',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Козловский Павел',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Козловский Павел ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-05-30 13:32:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Козловский Павел',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Козловский Павел',
                            ),
                        8 =>
                            array(
                                'value' => '2018-05-30 13:32:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                163 =>
                    array(
                        0 =>
                            array(
                                'value' => '4047',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Кузнецов Михаил',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кузнецов Михаил ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-06-05 13:48:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Кузнецов Михаил',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Кузнецов Михаил',
                            ),
                        8 =>
                            array(
                                'value' => '2018-06-05 13:48:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                164 =>
                    array(
                        0 =>
                            array(
                                'value' => '4048',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Кобыляцкий Василий',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кобыляцкий Василий ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-06-13 16:06:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Кобыляцкий Василий',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Кобыляцкий Василий',
                            ),
                        8 =>
                            array(
                                'value' => '2018-06-13 16:06:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                165 =>
                    array(
                        0 =>
                            array(
                                'value' => '404',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Глория Джинс',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Евдокимова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-06-20 16:21:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-20 04:21:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Глория Джинс',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Глория Джинс',
                            ),
                        8 =>
                            array(
                                'value' => '2018-06-20 16:21:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-20 04:21:00',
                            ),
                    ),
                166 =>
                    array(
                        0 =>
                            array(
                                'value' => '4049',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Агафонов Сергей',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Агафонов Сергей Сергеевич',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-06-20 17:59:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Агафонов Сергей',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Агафонов Сергей',
                            ),
                        8 =>
                            array(
                                'value' => '2018-06-20 17:59:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                167 =>
                    array(
                        0 =>
                            array(
                                'value' => '405',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Планета творчества',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Агафонов Сергей Сергеевич',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-06-20 18:38:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-20 06:38:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Планета творчества',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Планета творчества',
                            ),
                        8 =>
                            array(
                                'value' => '2018-06-20 18:38:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-20 06:38:00',
                            ),
                    ),
                168 =>
                    array(
                        0 =>
                            array(
                                'value' => '4050',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Коротин Александр',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Коротин Александр Александрович',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => 'Корнейчук Артур Александрович',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-06-27 13:51:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Коротин Александр',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Коротин Александр',
                            ),
                        8 =>
                            array(
                                'value' => '2018-06-27 13:51:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                169 =>
                    array(
                        0 =>
                            array(
                                'value' => '412',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПепсиКо Джира',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Федунова Кристина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-08-15 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2023-02-14 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПепсиКо Джира',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПепсиКо Джира',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-15 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2023-02-14 03:00:00',
                            ),
                    ),
                170 =>
                    array(
                        0 =>
                            array(
                                'value' => '4051',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Украинец Денис',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Украинец Денис ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-08-23 14:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Украинец Денис',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Украинец Денис',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-23 14:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                171 =>
                    array(
                        0 =>
                            array(
                                'value' => '4052',
                                'mergeRows' => 3,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Бондаренко Татьяна',
                                'mergeRows' => 3,
                            ),
                        2 =>
                            array(
                                'value' => 'Бондаренко Татьяна ',
                                'mergeRows' => 3,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 3,
                            ),
                        4 =>
                            array(
                                'value' => '2018-08-23 14:06:00',
                                'mergeRows' => 3,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 3,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Бондаренко Татьяна',
                                'mergeRows' => 3,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Бондаренко Татьяна',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-23 14:06:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                172 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Фин Икс',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-03 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-09-11 00:00:00',
                            ),
                    ),
                173 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Книжный клуб семейного досуга',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-08 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-09-28 00:00:00',
                            ),
                    ),
                174 =>
                    array(
                        0 =>
                            array(
                                'value' => '5007',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Фин Икс',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Бондаренко Татьяна ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-03 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-02-25 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Фин Икс',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Фин Икс',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-03 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-02-25 03:00:00',
                            ),
                    ),
                175 =>
                    array(
                        0 =>
                            array(
                                'value' => '5008',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Манивео',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Украинец Денис ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-08-27 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-02-25 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Манивео',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Манивео',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-27 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-02-25 03:00:00',
                            ),
                    ),
                176 =>
                    array(
                        0 =>
                            array(
                                'value' => '1028',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Отдел Методологии и Сопровождения',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Исаков Антон ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-08-27 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-08-27 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Отдел Методологии и Сопровождения',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Отдел Методологии и Сопровождения',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-27 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-08-27 00:00:00',
                            ),
                    ),
                177 =>
                    array(
                        0 =>
                            array(
                                'value' => '2086',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ООО «ЭКСПОИНТ»',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кузнецов Михаил ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-08-28 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-02-27 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ООО «ЭКСПОИНТ»',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Экспоинт',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-28 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-02-27 03:00:00',
                            ),
                    ),
                178 =>
                    array(
                        0 =>
                            array(
                                'value' => '6001',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Медиа-Маркт-Сатурн',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-11 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-12 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Медиа-Маркт-Сатурн',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Медиа-Маркт',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-11 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-12 03:00:00',
                            ),
                    ),
                179 =>
                    array(
                        0 =>
                            array(
                                'value' => '6002',
                                'mergeRows' => 4,
                            ),
                        1 =>
                            array(
                                'value' => 'РН Банк',
                                'mergeRows' => 4,
                            ),
                        2 =>
                            array(
                                'value' => '',
                                'mergeRows' => 4,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 4,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-11 03:00:00',
                                'mergeRows' => 4,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-12 03:00:00',
                                'mergeRows' => 4,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ РН Банк',
                                'mergeRows' => 4,
                            ),
                        7 =>
                            array(
                                'value' => 'РН Банк.Заявки',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-11 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-12 03:00:00',
                            ),
                    ),
                180 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'РН Банк.Сделка',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-11 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-12 03:00:00',
                            ),
                    ),
                181 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'РН Банк.Архив',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-11 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-12 03:00:00',
                            ),
                    ),
                182 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'РН Банк.ВФД',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-11 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-12 03:00:00',
                            ),
                    ),
                183 =>
                    array(
                        0 =>
                            array(
                                'value' => '6004',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'МС Банк Рус',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-05 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-07 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ МС Банк Рус',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'МС Банк Рус',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-05 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-07 03:00:00',
                            ),
                    ),
                184 =>
                    array(
                        0 =>
                            array(
                                'value' => '1029',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => '&quot;Внутренний проект первой линии продаж_Украина&quot;',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Рафальская Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-08-31 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-02 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ &quot;Внутренний проект первой линии продаж_Украина&quot;',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => '&quot;Внутренний проект первой линии продаж_Украина&quot;',
                            ),
                        8 =>
                            array(
                                'value' => '2018-08-31 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-02 03:00:00',
                            ),
                    ),
                185 =>
                    array(
                        0 =>
                            array(
                                'value' => '4053',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Смирнов Андрей',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Смирнов Андрей Павлович',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-05 14:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Смирнов Андрей',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Смирнов Андрей',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-05 14:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                186 =>
                    array(
                        0 =>
                            array(
                                'value' => '2087',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Монитор_бег',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Чернова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-07 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-08 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Монитор_бег',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Рибук_бег',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-07 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-08 03:00:00',
                            ),
                    ),
                187 =>
                    array(
                        0 =>
                            array(
                                'value' => '413',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Озон вход',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Манешина Яна  Сергеевна',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-20 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-21 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ООО Интернет Решения',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Озон вход',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-20 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-21 03:00:00',
                            ),
                    ),
                188 =>
                    array(
                        0 =>
                            array(
                                'value' => '2088',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ООО Евразийская Ветеринарная Служба',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Чернова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-19 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-21 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ООО Евразийская Ветеринарная Служба',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Евразийская ветслужба',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-19 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-21 03:00:00',
                            ),
                    ),
                189 =>
                    array(
                        0 =>
                            array(
                                'value' => '4054',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Миролаев Александр',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Миролаев Александр ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-20 17:46:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Миролаев Александр',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Миролаев Александр',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-20 17:46:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                190 =>
                    array(
                        0 =>
                            array(
                                'value' => '414',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Джира. Телемаркетинг',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Евдокимова Екатерина ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-27 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-29 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Джира. Телемаркетинг',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Джира. Телемаркетинг',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-27 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-29 03:00:00',
                            ),
                    ),
                191 =>
                    array(
                        0 =>
                            array(
                                'value' => '4055',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПК Декина Александра',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Декина Александра ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-09-28 14:19:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПК Декина Александра',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПП Декина Александра',
                            ),
                        8 =>
                            array(
                                'value' => '2018-09-28 14:19:00',
                            ),
                        9 =>
                            array(
                                'value' => '2039-12-31 00:00:00',
                            ),
                    ),
                192 =>
                    array(
                        0 =>
                            array(
                                'value' => '3367',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Банк Хоум Кредит',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кабенова Жанна ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-01 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-02 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Банк Хоум Кредит',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Банк Хоум Кредит',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-01 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-02 03:00:00',
                            ),
                    ),
                193 =>
                    array(
                        0 =>
                            array(
                                'value' => '5010',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Форвард банк',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Украинец Денис ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-03 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-03 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Форвард банк',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Форвард банк',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-03 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-03 03:00:00',
                            ),
                    ),
                194 =>
                    array(
                        0 =>
                            array(
                                'value' => '1030',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Проект Менеджеры Украины',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Рафальская Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-03 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-03 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Проект Менеджеры Украины',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Проект Менеджеры Украины',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-03 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-03 03:00:00',
                            ),
                    ),
                195 =>
                    array(
                        0 =>
                            array(
                                'value' => '1031',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Отдел продаж_Украина',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Рафальская Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-03 03:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-03 03:00:00',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Отдел продаж_Украина',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Отдел продаж_Украина',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-03 03:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-03 03:00:00',
                            ),
                    ),
                196 =>
                    array(
                        0 =>
                            array(
                                'value' => '4056',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'ПП тестбаспользовательченко',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'testbususerchenko testbususer ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-04 00:00:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2019-11-29 23:59:59',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПП testbususerchenko testbususer',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'ПЛ testbususerchenko testbususer',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-04 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-11-30 23:59:59',
                            ),
                    ),
                197 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Новая 1',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-04 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-27 23:59:59',
                            ),
                    ),
                198 =>
                    array(
                        0 =>
                            array(
                                'value' => '415',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'Яндекс.Маркет Беру пишущие',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Козловский Павел ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-01 00:00:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2019-10-01 23:59:59',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Яндекс.Маркет',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'Яндекс.Маркет консультации',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-10-01 23:59:59',
                            ),
                    ),
                199 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Яндекс.Маркет Беру пишущие',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-01 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-10-01 23:59:59',
                            ),
                    ),
                200 =>
                    array(
                        0 =>
                            array(
                                'value' => '3368',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Линия Жизни',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Белозерцева Наталия Владимировна',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-10 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-04-10 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'Линия Жизни',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Линия Жизни',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-10 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-04-10 23:59:59',
                            ),
                    ),
                201 =>
                    array(
                        0 =>
                            array(
                                'value' => '3369',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Халык Банк',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Сайфарова Татьяна ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-10-12 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-12 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'Halyk bank',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Халык Банк',
                            ),
                        8 =>
                            array(
                                'value' => '2018-10-12 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-12 23:59:59',
                            ),
                    ),
                202 =>
                    array(
                        0 =>
                            array(
                                'value' => '418',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Балтика - продажи - пилот',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Исаков Антон ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-11-19 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-10-15 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ООО «Пивоваренная компания «Балтика»',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Балтика - продажи - пилот',
                            ),
                        8 =>
                            array(
                                'value' => '2018-11-19 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-10-15 23:59:59',
                            ),
                    ),
                203 =>
                    array(
                        0 =>
                            array(
                                'value' => '419',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'Создание нового проекта',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Антон Подколзин ',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2018-11-06 00:00:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2019-09-01 23:59:59',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'Добавление клиента У',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => 'Создание нового проекта',
                            ),
                        8 =>
                            array(
                                'value' => '2018-11-06 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-09-01 23:59:59',
                            ),
                    ),
                204 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'Создание линии',
                            ),
                        8 =>
                            array(
                                'value' => '2018-11-06 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2018-11-24 23:59:59',
                            ),
                    ),
                205 =>
                    array(
                        0 =>
                            array(
                                'value' => '2089',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => '122113313',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Антон Подколзин ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-11-14 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ КБ Юнистрим',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => '122113313',
                            ),
                        8 =>
                            array(
                                'value' => '2018-11-14 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-05-17 23:59:59',
                            ),
                    ),
                206 =>
                    array(
                        0 =>
                            array(
                                'value' => '4057',
                                'mergeRows' => 2,
                            ),
                        1 =>
                            array(
                                'value' => 'тест2222',
                                'mergeRows' => 2,
                            ),
                        2 =>
                            array(
                                'value' => 'Кузнецов Сергей Сергеевич',
                                'mergeRows' => 2,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 2,
                            ),
                        4 =>
                            array(
                                'value' => '2018-12-11 00:00:00',
                                'mergeRows' => 2,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-11 23:59:59',
                                'mergeRows' => 2,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ тест2222',
                                'mergeRows' => 2,
                            ),
                        7 =>
                            array(
                                'value' => '33тест2222',
                            ),
                        8 =>
                            array(
                                'value' => '2018-12-11 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-11 23:59:59',
                            ),
                    ),
                207 =>
                    array(
                        0 =>
                            array(
                                'value' => '',
                            ),
                        1 =>
                            array(
                                'value' => '',
                            ),
                        2 =>
                            array(
                                'value' => '',
                            ),
                        3 =>
                            array(
                                'value' => '',
                            ),
                        4 =>
                            array(
                                'value' => '',
                            ),
                        5 =>
                            array(
                                'value' => '',
                            ),
                        6 =>
                            array(
                                'value' => '',
                            ),
                        7 =>
                            array(
                                'value' => 'тест2222333',
                            ),
                        8 =>
                            array(
                                'value' => '2018-12-11 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-11 23:59:59',
                            ),
                    ),
                208 =>
                    array(
                        0 =>
                            array(
                                'value' => '4058',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Оравдв123',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кузнецов Сергей Сергеевич',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-12-11 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-11 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Оравдв123',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Оравдв123',
                            ),
                        8 =>
                            array(
                                'value' => '2018-12-11 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-11 23:59:59',
                            ),
                    ),
                209 =>
                    array(
                        0 =>
                            array(
                                'value' => '4060',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПП Нестерова Анастасия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Нестерова Анастасия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-12-12 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-12 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПП Нестерова Анастасия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПЛ Нестерова Анастасия',
                            ),
                        8 =>
                            array(
                                'value' => '2018-12-12 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-12 23:59:59',
                            ),
                    ),
                210 =>
                    array(
                        0 =>
                            array(
                                'value' => '4061',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПП Кубанова Юлия',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Кубанова Юлия ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-12-12 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-12 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПП Кубанова Юлия',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПЛ Кубанова Юлия',
                            ),
                        8 =>
                            array(
                                'value' => '2018-12-12 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-12 23:59:59',
                            ),
                    ),
                211 =>
                    array(
                        0 =>
                            array(
                                'value' => '4062',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'ПП Денисевич Андрей',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Денисевич Андрей ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2018-12-13 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-06-13 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ ПП Денисевич Андрей',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'ПЛ Денисевич Андрей',
                            ),
                        8 =>
                            array(
                                'value' => '2018-12-13 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-06-13 23:59:59',
                            ),
                    ),
                212 =>
                    array(
                        0 =>
                            array(
                                'value' => '420',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Колхоз Ягодка',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Денисевич Андрей ',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => '',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2019-01-23 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2020-01-23 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Колхоз Ягодка',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Колхоз Ягодка',
                            ),
                        8 =>
                            array(
                                'value' => '2019-01-23 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2020-01-23 23:59:59',
                            ),
                    ),
                213 =>
                    array(
                        0 =>
                            array(
                                'value' => '421',
                                'mergeRows' => 1,
                            ),
                        1 =>
                            array(
                                'value' => 'Тест',
                                'mergeRows' => 1,
                            ),
                        2 =>
                            array(
                                'value' => 'Коротин Александр Александрович',
                                'mergeRows' => 1,
                            ),
                        3 =>
                            array(
                                'value' => 'Корнейчук Артур Александрович',
                                'mergeRows' => 1,
                            ),
                        4 =>
                            array(
                                'value' => '2019-02-19 00:00:00',
                                'mergeRows' => 1,
                            ),
                        5 =>
                            array(
                                'value' => '2019-03-08 23:59:59',
                                'mergeRows' => 1,
                            ),
                        6 =>
                            array(
                                'value' => 'ЮЛ Юниаструм Входящие',
                                'mergeRows' => 1,
                            ),
                        7 =>
                            array(
                                'value' => 'Тест',
                            ),
                        8 =>
                            array(
                                'value' => '2019-02-19 00:00:00',
                            ),
                        9 =>
                            array(
                                'value' => '2019-03-08 23:59:59',
                            ),
                    ),
            );

        // Sheets
        $data = [
            [
                'sheetName' => 'Проекты',
                'isRowDirection' => true,
                'autoSize' => true,
                'showGridLines' => false,
                'data' => $columns,
            ],
        ];

        // Global cell options
        $defaultParams = [
            'styleArray' => [
                'alignment' => [
                    'horizontal' => 'center',
                    // general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only
                    'vertical' => 'center',
                    // bottom, top, center, justify, distributed - Excel2007 only
                ],
                'borders' => [
                    'bottom' => [
                        'borderStyle' => 'thin',
                        // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'top' => [
                        'borderStyle' => 'thin',
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'left' => [
                        'borderStyle' => 'thin',
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'right' => [
                        'borderStyle' => 'thin',
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'vertical' => [
                        'borderStyle' => 'thin',
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'horizontal' => [
                        'borderStyle' => 'thin',
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                ],
            ],
        ];

        return [
            'data' => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}
