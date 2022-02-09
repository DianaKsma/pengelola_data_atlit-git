<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case '':
        case 'home':
            file_exists('pages/home.php') ? include 'pages/home.php' : include "pages/404.php";
            break;

        case 'data_atlitread':
            file_exists('pages/admin/data_atlitread.php') ? include 
        'pages/admin/data_atlitread.php' : include "pages/404.php";
            break;

        case 'data_atlitcreate':
            file_exists('pages/admin/data_atlitcreate.php') ? include
        'pages/admin/data_atlitcreate.php' : include "pages/404.php";
            break;

        case 'data_atlitupdate':
            file_exists('pages/admin/data_atlitupdate.php') ? include
        'pages/admin/data_atlitupdate.php' : include "pages/404.php";
            break;

        case 'data_atlitdelete':
            file_exists('pages/admin/data_atlitdelete.php') ? include
        'pages/admin/data_atlitdelete.php' : include "pages/404.php";
                break;

        case 'data_pengurus_cabang_olahragaread' :
            file_exists('pages/admin/data_pengurus_cabang_olahragaread.php') ? include 
        'pages/admin/data_pengurus_cabang_olahragaread.php' : include "pages/404.php";
            break;

        case 'data_pengurus_cabang_olahragacreate' :
            file_exists('pages/admin/data_pengurus_cabang_olahragacreate.php') ? include
        'pages/admin/data_pengurus_cabang_olahragacreate.php' : include "pages/404.php";
            break;

        case 'data_pengurus_cabang_olahragaupdate' :
            file_exists('pages/admin/data_pengurus_cabang_olahragaupdate.php') ? include
        'pages/admin/data_pengurus_cabang_olahragaupdate.php' : include "pages/404.php";
             break;

        case 'data_cabang_olahragaread' :
            file_exists('pages/admin/data_cabang_olahragaread.php') ? include
        'pages/admin/data_cabang_olahragaread.php' : include "pages/404.php";
            break;

        case 'data_cabang_olahragacreate' :
            file_exists('pages/admin/data_cabang_olahragacreate.php') ? include
        'pages/admin/data_cabang_olahragacreate.php' : include "pages/404.php";
            break;

        case 'data_prestasi_atlitread' :
            file_exists('pages/admin/data_prestasi_atlitread.php') ? include
        'pages/admin/data_prestasi_atlitread.php' : include "pages/404.php";
            break;

        case 'data_prestasi_atlitcreate' :
            file_exists('pages/admin/data_prestasi_atlitcreate.php') ? include
        'pages/admin/data_prestasi_atlitcreate.php' : include "pages/404.php";
            break;

        case 'data_atlit_aktif_perbulanread' :
            file_exists('pages/admin/data_atlit_aktif_perbulanread.php') ? include
        'pages/admin/data_atlit_aktif_perbulanread.php' : include "pages/404.php";
            break;
        case 'data_atlit_aktif_perbulancreate' :
            file_exists('pages/admin/data_atlit_aktif_perbulancreate.php') ? include
        'pages/admin/data_atlit_aktif_perbulancreate.php' : include "pages/404.php";
            break;

        case 'data_anggota_aktifread' :
            file_exists('pages/admin/data_anggota_aktifread.php') ? include
        'pages/admin/data_anggota_aktifread.php' : include "pages/404.php";
            break;

        case 'data_anggota_aktifcreate' :
             file_exists('pages/admin/data_anggota_aktifcreate.php') ? include
        'pages/admin/data_anggota_aktifcreate.php' : include "pages/404.php";
            break;

        case 'data_sk_cabang_olahragaread' :
            file_exists('pages/admin/data_sk_cabang_olahragaread.php') ? include 
        'pages/admin/data_sk_cabang_olahragaread.php' : include "pages/404.php";
            break;

        case 'data_sk_cabang_olahragacreate' :
            file_exists('pages/admin/data_sk_cabang_olahragacreate.php') ? include
        'pages/admin/data_sk_cabang_olahragacreate.php' : include "pages/404.php";
            break;

        case 'data_sk_cabang_olahragaupdate' :
            file_exists('pages/admin/data_sk_cabang_olahragaupdate.php') ? include
        'pages/admin/data_sk_cabang_olahragaupdate.php' : include "pages/404.php";
            break;

        default:
            include "pages/404.php";
    }
} else {
    include "pages/home.php";
}