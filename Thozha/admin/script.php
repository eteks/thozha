<!--/.fluid-container-->

<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="assets/scripts.js"></script>


<!-- data table -->
<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/DT_bootstrap.js"></script>
<script>
    $(function () {

    });
</script>

<script src="vendors/jGrowl/jquery.jgrowl.js"></script>

<script>
$(function () {
$('.tooltip').tooltip();
$('.tooltip-left').tooltip({placement: 'left'});
$('.tooltip-right').tooltip({placement: 'right'});
$('.tooltip-top').tooltip({placement: 'top'});
$('.tooltip-bottom').tooltip({placement: 'bottom'});

$('.popover-left').popover({placement: 'left', trigger: 'hover'});
$('.popover-right').popover({placement: 'right', trigger: 'hover'});
$('.popover-top').popover({placement: 'top', trigger: 'hover'});
$('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});

$('.notification').click(function () {
var $id = $(this).attr('id');
switch ($id) {
case 'notification-sticky':
$.jGrowl("Stick this!", {sticky: true});
break;

case 'notification-header':
$.jGrowl("A message with a header", {header: 'Important'});
break;

default:
$.jGrowl("Hello world!");
break;
}
});
});
</script>



<link href="vendors/chosen.min.css" rel="stylesheet" media="screen">
