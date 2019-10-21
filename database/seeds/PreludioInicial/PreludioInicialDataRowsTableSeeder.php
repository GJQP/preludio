<?php

use Illuminate\Database\Seeder;

class PreludioInicialDataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_type_id' => 1,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'data_type_id' => 1,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Nombre',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            'details' => '{"validation":{"rule":"required|regex:\\/^[a-zA-Z\\u00f1]+(([\',. -][a-zA-Z \\u00f1])?[a-zA-Z\\u00f1]*)*$\\/","messages":{"required":"El nombre es un campo obligatorio","regex":"Debe ingresar un nombre v\\u00e1lido"}}}',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'data_type_id' => 1,
                'field' => 'email',
                'type' => 'text',
                'display_name' => 'Correo',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"validation":{"rule":"required|email:rfc,dns","messages":{"required":"El correo es un campo obligatorio","email":"Debe ingresar un correo electr\\u00f3nico v\\u00e1lido"}}}',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'data_type_id' => 1,
                'field' => 'password',
                'type' => 'password',
                'display_name' => 'Contraseña',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"validation":{"edit":{"rule":"sometimes|min:8"},"add":{"rule":"min:8|required"},"messages":{"required":"La contrase\\u00f1a es un campo obligatorio","min":"La contrase\\u00f1a debe contener m\\u00e1s de 8 caracteres"}}}',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'data_type_id' => 1,
                'field' => 'remember_token',
                'type' => 'text',
                'display_name' => 'Remember Token',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'data_type_id' => 1,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Fecha Creación',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'data_type_id' => 1,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Fecha Modificación',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'data_type_id' => 1,
                'field' => 'avatar',
                'type' => 'image',
                'display_name' => 'Avatar',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"resize":{"width":"250","height":"250"},"quality":"70%","upsize":true}',
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'data_type_id' => 1,
                'field' => 'user_belongsto_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Rol',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}',
                'order' => 10,
            ),
            9 => 
            array (
                'id' => 10,
                'data_type_id' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Roles',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'order' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'data_type_id' => 1,
                'field' => 'settings',
                'type' => 'hidden',
                'display_name' => 'Ajustes',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 12,
            ),
            11 => 
            array (
                'id' => 12,
                'data_type_id' => 2,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'data_type_id' => 2,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'data_type_id' => 2,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'data_type_id' => 2,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'data_type_id' => 3,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'data_type_id' => 3,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Nombre',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'data_type_id' => 3,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Fecha Creación',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'data_type_id' => 3,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Fecha Modificación',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'data_type_id' => 3,
                'field' => 'display_name',
                'type' => 'text',
                'display_name' => 'Nombre a Mostrar',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            20 => 
            array (
                'id' => 21,
                'data_type_id' => 1,
                'field' => 'role_id',
                'type' => 'text',
                'display_name' => 'Rol',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"validation":{"rule":"required","messages":{"required":"Se debe asignar un rol al usuario"}}}',
                'order' => 9,
            ),
            21 => 
            array (
                'id' => 22,
                'data_type_id' => 6,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'data_type_id' => 6,
                'field' => 'nombre',
                'type' => 'text',
                'display_name' => 'Nombre',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"display":{"width":"6"}}',
                'order' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'data_type_id' => 6,
                'field' => 'rif',
                'type' => 'text',
                'display_name' => 'RIF',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"validation":{"rule":"unique:teatros,rif","messages":{"unique":"El RIF ingresado ya existe"}},"display":{"width":"3"}}',
                'order' => 4,
            ),
            24 => 
            array (
                'id' => 25,
                'data_type_id' => 6,
                'field' => 'direccion',
                'type' => 'text_area',
                'display_name' => 'Dirección',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"null":""}',
                'order' => 6,
            ),
            25 => 
            array (
                'id' => 26,
                'data_type_id' => 6,
                'field' => 'telefono',
                'type' => 'text',
                'display_name' => 'Teléfono',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            'details' => '{"validation":{"rule":["required","numeric","regex:\\/^0?(424|414|412|416|212)[0-9]{7}\\/"],"messages":{"regex":"Debe introducir un n\\u00famero v\\u00e1lido","numeric":"Solo puede ser num\\u00e9rico","required":"Campo requerido"}},"display":{"width":"3"}}',
                'order' => 7,
            ),
            26 => 
            array (
                'id' => 27,
                'data_type_id' => 6,
                'field' => 'facebook',
                'type' => 'text',
                'display_name' => 'Facebook',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"display":{"width":"3"},"null":""}',
                'order' => 8,
            ),
            27 => 
            array (
                'id' => 28,
                'data_type_id' => 6,
                'field' => 'twitter',
                'type' => 'text',
                'display_name' => 'Twitter',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"display":{"width":"3"},"null":""}',
                'order' => 9,
            ),
            28 => 
            array (
                'id' => 29,
                'data_type_id' => 6,
                'field' => 'instagram',
                'type' => 'text',
                'display_name' => 'Instagram',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"display":{"width":"3"},"null":""}',
                'order' => 10,
            ),
            29 => 
            array (
                'id' => 30,
                'data_type_id' => 6,
                'field' => 'fecha_creacion',
                'type' => 'date',
                'display_name' => 'Fecha Creación',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 11,
            ),
            30 => 
            array (
                'id' => 31,
                'data_type_id' => 6,
                'field' => 'fecha_modificacion',
                'type' => 'date',
                'display_name' => 'Fecha Modificación',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 12,
            ),
            31 => 
            array (
                'id' => 32,
                'data_type_id' => 7,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'data_type_id' => 7,
                'field' => 'nombre',
                'type' => 'text',
                'display_name' => 'Nombre',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"validation":{"rule":"required|min:3","messages":{"required":"El nombre es un campo obligatorio","min":"El nombre debe tener m\\u00e1s de 3 caracteres"}}}',
                'order' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'data_type_id' => 7,
                'field' => 'sinopsis',
                'type' => 'text_area',
                'display_name' => 'Sinopsis',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"validation":{"rule":"required|min:8","messages":{"required":"La sinopsis es un campo obligatorio","min":"La sinopsis debe tener m\\u00e1s de 8 caracteres"}}}',
                'order' => 3,
            ),
            34 => 
            array (
                'id' => 35,
                'data_type_id' => 7,
                'field' => 'fecha_creacion',
                'type' => 'date',
                'display_name' => 'Fecha Creación',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 4,
            ),
            35 => 
            array (
                'id' => 36,
                'data_type_id' => 7,
                'field' => 'fecha_modificacion',
                'type' => 'date',
                'display_name' => 'Fecha Modificación',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 5,
            ),
            36 => 
            array (
                'id' => 37,
                'data_type_id' => 8,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'data_type_id' => 8,
                'field' => 'obra_id',
                'type' => 'text',
                'display_name' => 'Obra Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"validation":{"rule":"required"}}',
                'order' => 2,
            ),
            38 => 
            array (
                'id' => 39,
                'data_type_id' => 8,
                'field' => 'teatro_id',
                'type' => 'select_dropdown',
                'display_name' => 'Teatro',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"validation":{"rule":"required"},"relationship":{"key":"id","label":"nombre"}}',
                'order' => 3,
            ),
            39 => 
            array (
                'id' => 40,
                'data_type_id' => 8,
                'field' => 'fecha_inicio',
                'type' => 'date',
                'display_name' => 'Fecha Inicio',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"description":"Ingresa la fecha en la que comienza la funci\\u00f3n a presentarse en el teatro seleccionado","validation":{"rule":"required|date","messages":{"required":"Debe indicarse la fecha en que inicia la presentaci\\u00f3n"}},"display":{"width":"3"}}',
                'order' => 8,
            ),
            40 => 
            array (
                'id' => 41,
                'data_type_id' => 8,
                'field' => 'fecha_fin',
                'type' => 'date',
                'display_name' => 'Fecha Fin',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"description":"Ingresa la fecha en la que finaliza la funci\\u00f3n a presentarse en el teatro seleccionado","validation":{"rule":"required|date|after:fecha_inicio","messages":{"required":"Debe indicarse la fecha en que finaliza la presentaci\\u00f3n","after":"La fecha en que finaliza debe ser un d\\u00eda despu\\u00e9s en que inicia"}},"display":{"width":"3"}}',
                'order' => 9,
            ),
            41 => 
            array (
                'id' => 42,
                'data_type_id' => 8,
                'field' => 'poster',
                'type' => 'image',
                'display_name' => 'Poster',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            'details' => '{"description":"Imagen a mostrarse esta debe estar en una escala de 3:2 (669px x 431px)","resize":{"width":"669","height":"431"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}],"display":{"width":"3"}}',
                'order' => 6,
            ),
            42 => 
            array (
                'id' => 43,
                'data_type_id' => 8,
                'field' => 'reparto',
                'type' => 'rich_text_box',
                'display_name' => 'Reparto',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7,
            ),
            43 => 
            array (
                'id' => 44,
                'data_type_id' => 8,
                'field' => 'fecha_creacion',
                'type' => 'date',
                'display_name' => 'Fecha Creación',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 11,
            ),
            44 => 
            array (
                'id' => 45,
                'data_type_id' => 8,
                'field' => 'fecha_modificacion',
                'type' => 'date',
                'display_name' => 'Fecha Modificación',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 12,
            ),
            45 => 
            array (
                'id' => 48,
                'data_type_id' => 6,
                'field' => 'teatro_hasmany_presentacione_relationship',
                'type' => 'relationship',
                'display_name' => 'presentaciones',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => '{"model":"App\\\\Presentacion","table":"presentaciones","type":"hasMany","column":"teatro_id","key":"id","label":"poster","pivot_table":"data_rows","pivot":"0","taggable":"0"}',
                'order' => 15,
            ),
            46 => 
            array (
                'id' => 50,
                'data_type_id' => 7,
                'field' => 'obra_hasone_presentacione_relationship',
                'type' => 'relationship',
                'display_name' => 'presentaciones',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => '{"model":"App\\\\Presentacion","table":"presentaciones","type":"hasOne","column":"obra_id","key":"id","label":"reparto","pivot_table":"data_rows","pivot":"0","taggable":"0"}',
                'order' => 6,
            ),
            47 => 
            array (
                'id' => 52,
                'data_type_id' => 6,
                'field' => 'user_id',
                'type' => 'select_dropdown',
                'display_name' => 'Usuario Asociado',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 1,
                'delete' => 0,
                'details' => '{"validation":{"rule":"required","messages":{"required":"Debe haber un usuario asociado"}},"relationship":{"key":"id","label":"email"}}',
                'order' => 2,
            ),
            48 => 
            array (
                'id' => 53,
                'data_type_id' => 6,
                'field' => 'imagenes',
                'type' => 'media_picker',
                'display_name' => 'Galería',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"base_path":"\\/teatros\\/{pk}\\/","max":10,"min":0,"allow_upload":true,"allow_move":false,"allow_delete":true,"allow_create_folder":true,"allow_rename":false,"allow_crop":true,"delete_files":true,"allowed":["image"],"quality":80,"thumbnails":[{"type":"fit","name":"thumb","width":250}]}',
                'order' => 14,
            ),
            49 => 
            array (
                'id' => 54,
                'data_type_id' => 6,
                'field' => 'activo',
                'type' => 'checkbox',
                'display_name' => 'Estatus',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"display":{"width":"3"}}',
                'order' => 5,
            ),
            50 => 
            array (
                'id' => 55,
                'data_type_id' => 8,
                'field' => 'imagenes',
                'type' => 'media_picker',
                'display_name' => 'Imágenes',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"base_path":"\\/presentaciones\\/{pk}\\/","max":10,"min":0,"allow_upload":true,"allow_move":false,"allow_delete":true,"allow_create_folder":true,"allow_rename":true,"allow_crop":true,"allowed":["image"],"quality":80,"thumbnails":[{"type":"fit","name":"thumb","width":250}]}',
                'order' => 10,
            ),
            51 => 
            array (
                'id' => 57,
                'data_type_id' => 1,
                'field' => 'email_verified_at',
                'type' => 'timestamp',
                'display_name' => 'Fecha Verificación',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            52 => 
            array (
                'id' => 59,
                'data_type_id' => 8,
                'field' => 'presentacione_belongsto_obra_relationship',
                'type' => 'relationship',
                'display_name' => 'obras',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Obra","table":"obras","type":"belongsTo","column":"obra_id","key":"id","label":"nombre","pivot_table":"data_rows","pivot":"0","taggable":"0"}',
                'order' => 13,
            ),
        ));
        
        
    }
}