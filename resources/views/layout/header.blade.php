<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0"> 
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> </title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ url('/') }}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ url('/') }}/assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
      <link href="{{ url('/') }}/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/vendors/jquery-minicolors/jquery.minicolors.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ url('/') }}/assets/css/main.min.css" rel="stylesheet" /> 
     <link href="{{ url('/') }}/assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style type="text/css">
      *{
         
      }
      .ibox, .card{
        padding:2px;
        border-radius: 0px;
      }
      h5{
        padding: 5px;
        font-weight: bold;
      }
      .table{
        padding:0px;

      }
      .table >thead{


      }
      .table >thead >tr >th{
      font-size: 12.5px;
        padding: 3px 3px 3px 3px;
        margin:0px; 
        
      }
      table.dataTable.table-sm > thead > tr > th {
 
      }

      .table >tbody >tr >td{
        font-size: 12px ; 
        font-family: bahnschrift;
        padding: 0px;
        padding-bottom: 0px;
        margin: 0px;
         
      }
      .card , .card-body{
        padding:3px;
        margin:0px;
        padding-bottom: 5px;
      }
      h1,h2,h3,h4,h5,h6{
          
      }
      h3{
        color:black;
        font-family: cairo;
      }
      .dropdown-menu .dropdown-item {
        padding: 3px;
        font-size: 10pt;
        margin-left: 3px;

      }
      .dropdown-menu{
        
      }
      label{
        font-weight: ;
        color:black;
      }
      .view-table-text {
        font-family: cairo;
        font-size: 15px;
        width: 20px;
      }
      .select2-container--default   {
        font-size: 12px;
        
        width: 100%;
      }
      .btn{
        font-weight:  bold;
         
           font-size: 12px;
         vertical-align:  middle;
      }
      .card .card-header span {
        color: navy;
        font-size: 20px;
      }
      
       select.form-control:not([size]):not([multiple]) {
       
        display:inline-block;
        
        font-weight: bold;
        height: autoauto;
        padding:none;
        margin:none;

      }
      .select2-container--default {
        font-size: 12px;
        margin:0px;
        padding:0px;
      }
      .clf 
      .nav-tabs
      .nav-item
      .nav-link
      {
        padding: 3px;
        font-size: 12px;
      }
      .nav
      .nav-item
      .nav-link
      {
        padding: 3px;
        padding-left:  7px;
      }
      .form-control{
        font-size: 12px;
         
      }
      label{
        font-size: 10pt;
        font-weight:bold;
        font-family:sans-serif;
      }
      .page-link {
        position: relative;
        display: block;
        padding: 5px;
        margin-left: -1px;
        line-height: 2px
        color: #007bff;
        background-color: #fff;
        border: 1px solid #ddd;
        font-size: 10px;
        font-weight: bold;
      }
      div.dataTables_wrapper div.dataTables_info {
        padding-top: 1px;
        font-size: 11px;
        white-space: nowrap;
        font-weight: bold;
      }

      
    </style>
</head>