<?php return
[
    //--------------------------------------------------------------------------------------------------
    // View Objects
    //--------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : Copyright (c) 2012-2016, ZN Framework
    //
    //--------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------
    // Wizard
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Şablon sihirbazının hangi yapıları ayrıştıracağını belirtmek için kullanılır.
    //
    // keywords : for, if, while, foreach gibi kullanımlara izin ver.
    // printable: @@function:, @variable: kullanımına izin ver.
    // comments : {-- yorum satırı --} kullanımına izin ver.
    // tags     : {[ php codes ]} php tagları olarak kullanımına izin ver.
    // html     : #html kodlarını # kare symbolü ile kullanıma izin ver.
    //
    //--------------------------------------------------------------------------------------------------
    'wizard' =>
    [
        'keywords'      => true,
        'printable'     => true,
        'functions'     => true,
        'comments'      => true,
        'tags'          => true,
        'html'          => true
    ],

    //--------------------------------------------------------------------------------------------------
    // Pagination
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı sayfalama ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'pagination' =>
    [
        'prevName'      => '<',
        'nextName'      => '>',
        'firstName'     => '<<',
        'lastName'      => '>>',

        'totalRows'     => 50,
        'start'         => NULL,
        'limit'         => 10,
        'countLinks'    => 10,
        'type'          => 'classic', // classic, ajax

        'class' =>
        [
            'current'   => '',
            'links'     => '',
            'prev'      => '',
            'next'      => '',
            'last'      => '',
            'first'     => ''
        ],

        'style' =>
        [
            'current'   => '',
            'links'     => '',
            'prev'      => '',
            'next'      => '',
            'last'      => '',
            'first'     => ''
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Captcha
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı güvenlik kodu ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'captcha' =>
    [
        'text' =>
        [
            'length' => 6,
            'color'  => '255|255|255',
            'size'   => 10,
            'x'      => 65,
            'y'      => 13,
            'angle'  => 0,
            'ttf'    => []
        ],

        'background' =>
        [
            'color' => '80|80|80',
            'image' => []
        ],

        'border' =>
        [
            'status' => false,
            'color'  => '0|0|0'
        ],

        'size' =>
        [
            'width'  => 180,
            'height' => 40
        ],

        'grid' =>
        [
            'status' => true,
            'color'  => '50|50|50',
            'spaceX' => 12,
            'spaceY' => 4
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Calendar
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı takvim ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'calendar' =>
    [
        'prevName'      => '<<',
        'nextName'      => '>>',
        'dayType'       => 'short',
        'monthType'     => 'long',
        'type'          => 'classic', // classic, ajax

        'class' =>
        [
            'table'     => '',
            'monthName' => '',
            'dayName'   => '',
            'days'      => '',
            'links'     => '',
            'current'   => '',
        ],

        'style' =>
        [
            'table'     => '',
            'monthName' => '',
            'dayName'   => '',
            'days'      => '',
            'links'     => '',
            'current'   => '',
        ],

        'monthNames' =>
        [
            'tr' =>
            [
                'Ocak'      => 'Oca',
                'Şubat'     => 'Şub',
                'Mart'      => 'Mar',
                'Nisan'     => 'Nis',
                'Mayıs'     => 'May',
                'Haziran'   => 'Haz',
                'Temmuz'    => 'Tem',
                'Ağustos'   => 'Ağu',
                'Eylül'     => 'Eyl',
                'Ekim'      => 'Eki',
                'Kasım'     => 'Kas',
                'Aralık'    => 'Ara'
            ],

            'en' =>
            [
                'Janury'    => 'Jan',
                'February'  => 'Feb',
                'March'     => 'Mar',
                'April'     => 'Apr',
                'May'       => 'May',
                'June'      => 'Jun',
                'July'      => 'Jul',
                'August'    => 'Aug',
                'September' => 'Sep',
                'October'   => 'Oct',
                'November'  => 'Nov',
                'December'  => 'Dec'
            ]
        ],

        'dayNames' =>
        [
            'tr' =>
            [
                'Pazartesi' => 'Pzt',
                'Salı'      => 'Sal',
                'Çarşamba'  => 'Çar',
                'Perşembe'  => 'Per',
                'Cuma'      => 'Cum',
                'Cumartesi' => 'Cts',
                'Pazar'     => 'Paz'
            ],

            'en' =>
            [
                'Monday'    => 'Mon',
                'Tuesday'   => 'Tue',
                'Wednesday' => 'Wed',
                'Thursday'  => 'Thu',
                'Friday'    => 'Fri',
                'Saturday'  => 'Sat',
                'Sunday'    => 'Sun'
            ]
        ]
    ],

    //----------------------------------------------------------------------------------------------------
    // Terminal
    //----------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı konsol ayarı yapmak için kullanılır.
    //
    //----------------------------------------------------------------------------------------------------
    'terminal' =>
    [
    	'width' 		=> '800px',
    	'height' 		=> '350px',
    	'bgColor' 		=> '#000',
    	'barBgColor' 	=> '#222',
    	'textColor' 	=> '#ccc',
    	'textType' 		=> 'Consolas, monospace',
    	'textSize' 		=> '12px'
    ],

    //--------------------------------------------------------------------------------------------------
    // DataGrid
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı grid ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'datagrid' =>
    [
        //----------------------------------------------------------------------------------------------
        // Button Names
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: DataGrid'de yer alan butonların isimlerini düzenlemek için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'buttonNames' =>
        [
            'add'           => lang('ViewObjects', 'dbgrid:addButton'),
            'edit'          => lang('ViewObjects', 'dbgrid:editButton'),
            'update'        => lang('ViewObjects', 'dbgrid:updateButton'),
            'save'          => lang('ViewObjects', 'dbgrid:saveButton'),
            'close'         => lang('ViewObjects', 'dbgrid:closeButton'),
            'delete'        => lang('ViewObjects', 'dbgrid:deleteButton'),
            'deleteSelected'=> lang('ViewObjects', 'dbgrid:deleteSelectedName'),
            'deleteAll'     => lang('ViewObjects', 'dbgrid:deleteAllName')
        ],

        //----------------------------------------------------------------------------------------------
        // Button Names
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: DataGrid'de yer Arama ve yeni ekle veri kutularının var sayılan input
        // bilgisini değiştirmek için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'placeHolders' =>
        [
            'search'    => lang('ViewObjects', 'dbgrid:searchHolder'),
            'inputs'    => lang('ViewObjects', 'dbgrid:inputsHolder'),
        ],

        //----------------------------------------------------------------------------------------------
        // Style Element
        //----------------------------------------------------------------------------------------------
        //
        // Bu ayar değer alırsa gridin bulunduğu sayfada dahili <style> kullanımı aktif hale gelir.
        //
        //----------------------------------------------------------------------------------------------
        'styleElement' =>
        [
            //'#DBGRID_TABLE tr:nth-child(even)' => ['background' => '#E6F9FF'],
            //'#DBGRID_TABLE tr:nth-child(odd)'  => ['background' => '#FFF']
        ],

        //----------------------------------------------------------------------------------------------
        // Attributes
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: Grid'de yer alan buton ve linklere ait attibute yani özellik eklemek
        // için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'attributes'    =>
        [
            'table'         => ['class' => 'table table-bordered table-hover table-striped'],
            'editTables'    => ['style' => 'font-family:Arial; color:#888; font-size:14px;'],
            'columns'       => [],
            'search'        => ['style' => 'height:34px; color:#0085B2; border:solid 1px #0085B2; text-indent:10px; border-radius:4px'],
            'add'           => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer; border-radius:4px'],
            'deleteSelected'=> ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer; border-radius:4px'],
            'deleteAll'     => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer; border-radius:4px'],
            'save'          => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer; border-radius:4px'],
            'update'        => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer; border-radius:4px'],
            'delete'        => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer; border-radius:4px'],
            'edit'          => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer; border-radius:4px'],
            'listTables'    => [],
            'inputs'        =>
            [
                'text'      => ['style' => 'height:34px; color:#0085B2; border:solid 1px #0085B2; text-indent:10px; border-radius:4px'],
                'textarea'  => ['style' => 'height:120px; width:290px; color:#0085B2; border:solid 1px #0085B2; text-indent:10px; border-radius:4px'],
                'radio'     => [],
                'checkbox'  => [],
                'select'    => []
            ]
        ],

        //----------------------------------------------------------------------------------------------
        // Pagination
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: Yukardaki ayarlar aynen geçerlidir. Sadece Datagrid için farklı bir.
        // sayfalama görünümü dizayn edilmek istenirse yukarıdaki ayarların kullanımı değişmeyecek
        // şekilde kullanılabilir. Ortak bir sayfalama tasarımı kullanıyorsa zaten sayfalama
        // ayarlarının yukarıdaki mevcut ayarlarından yapılması tavsiye edilir.
        //
        //----------------------------------------------------------------------------------------------
        'pagination' =>
        [
            'style' =>
            [
                'links' => 'color:#0085B2;
                            width:30px; height:30px;
                            text-align:center;
                            padding-top:4px;
                            display:inline-block;
                            background:white;
                            border:solid 1px #ddd;
                            border-radius: 4px;
                            -webkit-border-radius: 4px;
                            -moz-border-radius: 4px;
                            text-decoration:none;',

                'current' => 'font-weight:bold;'
            ]
        ]
    ]
];
