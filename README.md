Задача:
    Создать 3 сущности со следующими полями:
    Регион (название, транислит)
    Населенный пункт (название, транислит, ссылка на регион)
    Район (название, транислит, ссылка на населенный пункт)
    Используя средства Laravel необходимо реализовать список населенных пунктов и связанных районов, фильтра с возможностью поиска по названию населенного пункта и района.
    * Создать миграцию с тестовой площадки на прод.

Структура бд:
    https://drive.google.com/file/d/1UjIVRoetgmNT7bjbstP_XXBIFUZaGJYm/view?usp=sharing

Созданы две миграции:
    create_default_struct - создание структуры бд
    create_test_data - заполение тестовыми данными бд