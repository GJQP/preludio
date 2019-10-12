<?php

use Illuminate\Database\Seeder;

class DB_1570917737TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 37,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 38,
                'locale' => 'en',
                'value' => 'Obra Id',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 39,
                'locale' => 'en',
                'value' => 'Teatro Id',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 40,
                'locale' => 'en',
                'value' => 'Fecha Inicio',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 41,
                'locale' => 'en',
                'value' => 'Fecha Fin',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 42,
                'locale' => 'en',
                'value' => 'Poster',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 43,
                'locale' => 'en',
                'value' => 'Reparto',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 44,
                'locale' => 'en',
                'value' => 'Fecha Creación',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 45,
                'locale' => 'en',
                'value' => 'Fecha Modificación',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 46,
                'locale' => 'en',
                'value' => 'obras',
                'created_at' => '2019-10-12 19:35:35',
                'updated_at' => '2019-10-12 19:35:35',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'Presentación',
                'created_at' => '2019-10-12 19:35:36',
                'updated_at' => '2019-10-12 19:35:36',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'Presentaciones',
                'created_at' => '2019-10-12 19:35:36',
                'updated_at' => '2019-10-12 19:35:36',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 14,
                'locale' => 'en',
                'value' => 'Presentaciones',
                'created_at' => '2019-10-12 19:36:29',
                'updated_at' => '2019-10-12 19:36:29',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Users',
                'created_at' => '2019-10-12 19:37:28',
                'updated_at' => '2019-10-12 19:37:28',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 47,
                'locale' => 'en',
                'value' => 'galeria_presentaciones',
                'created_at' => '2019-10-12 19:41:11',
                'updated_at' => '2019-10-12 19:41:11',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 22,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2019-10-12 19:43:55',
                'updated_at' => '2019-10-12 19:43:55',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 23,
                'locale' => 'en',
                'value' => 'Nombre',
                'created_at' => '2019-10-12 19:43:55',
                'updated_at' => '2019-10-12 19:43:55',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => 'RIF',
                'created_at' => '2019-10-12 19:43:55',
                'updated_at' => '2019-10-12 19:43:55',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 25,
                'locale' => 'en',
                'value' => 'Dirección',
                'created_at' => '2019-10-12 19:43:55',
                'updated_at' => '2019-10-12 19:43:55',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 26,
                'locale' => 'en',
                'value' => 'Teléfono',
                'created_at' => '2019-10-12 19:43:55',
                'updated_at' => '2019-10-12 19:43:55',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'Facebook',
                'created_at' => '2019-10-12 19:43:55',
                'updated_at' => '2019-10-12 19:43:55',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'Twitter',
                'created_at' => '2019-10-12 19:43:55',
                'updated_at' => '2019-10-12 19:43:55',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 29,
                'locale' => 'en',
                'value' => 'Instagram',
                'created_at' => '2019-10-12 19:43:56',
                'updated_at' => '2019-10-12 19:43:56',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'Fecha Creación',
                'created_at' => '2019-10-12 19:43:56',
                'updated_at' => '2019-10-12 19:43:56',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 31,
                'locale' => 'en',
                'value' => 'Fecha Modificación',
                'created_at' => '2019-10-12 19:43:56',
                'updated_at' => '2019-10-12 19:43:56',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 48,
                'locale' => 'en',
                'value' => 'presentaciones',
                'created_at' => '2019-10-12 19:43:56',
                'updated_at' => '2019-10-12 19:43:56',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Teatro',
                'created_at' => '2019-10-12 19:43:56',
                'updated_at' => '2019-10-12 19:43:56',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'Teatros',
                'created_at' => '2019-10-12 19:43:56',
                'updated_at' => '2019-10-12 19:43:56',
            ),
            28 => 
            array (
                'id' => 29,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 49,
                'locale' => 'en',
                'value' => 'teatros',
                'created_at' => '2019-10-12 19:46:23',
                'updated_at' => '2019-10-12 19:46:23',
            ),
            29 => 
            array (
                'id' => 30,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 32,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2019-10-12 20:07:17',
                'updated_at' => '2019-10-12 20:07:17',
            ),
            30 => 
            array (
                'id' => 31,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => 'Nombre',
                'created_at' => '2019-10-12 20:07:18',
                'updated_at' => '2019-10-12 20:07:18',
            ),
            31 => 
            array (
                'id' => 32,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 34,
                'locale' => 'en',
                'value' => 'Sinopsis',
                'created_at' => '2019-10-12 20:07:18',
                'updated_at' => '2019-10-12 20:07:18',
            ),
            32 => 
            array (
                'id' => 33,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => 'Fecha Creación',
                'created_at' => '2019-10-12 20:07:18',
                'updated_at' => '2019-10-12 20:07:18',
            ),
            33 => 
            array (
                'id' => 34,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 36,
                'locale' => 'en',
                'value' => 'Fecha Modificación',
                'created_at' => '2019-10-12 20:07:18',
                'updated_at' => '2019-10-12 20:07:18',
            ),
            34 => 
            array (
                'id' => 35,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 50,
                'locale' => 'en',
                'value' => 'presentaciones',
                'created_at' => '2019-10-12 20:07:18',
                'updated_at' => '2019-10-12 20:07:18',
            ),
            35 => 
            array (
                'id' => 36,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Obra',
                'created_at' => '2019-10-12 20:07:18',
                'updated_at' => '2019-10-12 20:07:18',
            ),
            36 => 
            array (
                'id' => 37,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Obras',
                'created_at' => '2019-10-12 20:07:18',
                'updated_at' => '2019-10-12 20:07:18',
            ),
            37 => 
            array (
                'id' => 38,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 51,
                'locale' => 'en',
                'value' => 'galeria_teatros',
                'created_at' => '2019-10-12 20:17:11',
                'updated_at' => '2019-10-12 20:17:11',
            ),
        ));
        
        
    }
}