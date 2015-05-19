<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
        

        <link href="http://<?php echo base_url(); ?>/assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/smoothness/jquery-ui-1.9.0.custom.css" rel="stylesheet" type="text/css" />

        <script src="http://<?php echo base_url(); ?>/assets/javascript/jquery-1.8.2.js"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/bootstrap.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/app.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/jquery-ui-1.9.0.custom.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="http://<?php echo base_url(); ?>/assets/javascript/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </head>
<body>
<table>
	<tr>
		<td><a href="http://<?php echo base_url(); ?>index.php" >
		<span><button>Home</button></span>
		</a></td>
		<td></td>
		<td><a href="http://<?php echo base_url(); ?>index.php/todo" >
	    <span><button>To Do List</button></span>
	    </a></td>
	    <td></td>
		<td><a href="http://<?php echo base_url(); ?>index.php/json" >
		<span><button>JSON To Do List</button></span>
		</a></td>
        <td></td>
        <td><a href="http://<?php echo base_url(); ?>index.php/about" >
        <span><button>About Us</button></span>
        </a></td>
	</tr>
</table>
</body>