<?php
session_start();
require_once('db.php"');
if ($_SESSION['name']) {
    $user = $_SESSION['name'];
    ?>

    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TwiTouch | Job Entry</title>

        <link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
        <link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
        <link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
        <link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
        <link href="img/favicon.png" rel="icon" type="image/png">
        <link href="img/favicon.ico" rel="shortcut icon">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/separate/vendor/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="css/separate/vendor/bootstrap-daterangepicker.min.css">
        <link rel="stylesheet" href="css/lib/clockpicker/bootstrap-clockpicker.min.css">
        <link rel="stylesheet" href="css/lib/summernote/summernote.css"/>
        <link rel="stylesheet" href="css/separate/pages/editor.min.css">
        <link rel="stylesheet" href="css/separate/vendor/bootstrap-select/bootstrap-select.min.css">
        <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
        <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="with-side-menu">
    <?php require_once "inc/header.php"; ?>

    <div class="mobile-menu-left-overlay"></div>
    <?php require_once "inc/sidebar.php"; ?>

    <div class="page-content">
        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>New Job Entry</h3>

                        </div>
                    </div>
                </div>
            </header>

            <form method="POST">
                <?php include "injection/job_entry.php"; ?>
                <section class="card card-blue-fill">
                    <header class="card-header">
                        Add Job Details
                    </header>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="exampleInput">Catagory Name</label>
                                    <select id="categorySelect" class="form-control category-select" name="catagory">
                                        <option> Please select Category</option>
                                        <?php
                                        $select = $con->query("SELECT * FROM job_catagory WHERE status='Active'");

                                        if ($select) {
                                            foreach ($select as $s) {
                                                ?>

                                                <option value="<?=$s['catagory'];?>"><?php echo $cat = $s['catagory'];  ?></option>
                                            <?php }
                                        } ?>
                                    </select>
                                </fieldset>
                            </div>
                        </div>


                        <div class="data-entry">
                            <div class="row">
                                <div class="col-lg-12">
                                    <section class="box-typical box-typical-padding">
                                        <h3 class="with-border">Question</h3>
                                        <div class="summernote-theme-1">
                                            <textarea class="summernote" name="question"></textarea>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="exampleInput">Answer</label>
                                        <textarea type="text" name="d_answer" class="form-control" id="exampleInput"
                                                  rows="3"></textarea>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                        <div class="url-link">

                            <div class="row">
                                <div class="col-lg-8">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold link" for="exampleInput">Link</label>

                                        <textarea type="text" name="u_answer" class="form-control" id="exampleInput" rows="3"></textarea>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="captcha">

                            <div class="row">
                                <div class="col-lg-8">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold Captcha" for="exampleInput">Captcha</label>

                                        <input type="text" name="c_answer" class="form-control" id="exampleInput" maxlength="7">
                                    </fieldset>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <input type="submit" name="submit" class="btn btn-rounded btn-inline" value="Submit"
                                   style="margin-left:10px"/>
                            <input type="submit" name="order" class="btn btn-rounded btn-inline" value="Reset"
                                   style="margin-left:10px"/>
                        </div>
                    </div>
                </section>
            </form>
            <section class="card card-blue-fill">
                <header class="card-header">
                    Job List
                </header>
                <div class="card-block">
                    <table id="table-sm" class="table table-bordered table-hover table-sm">
                        <thead>
                        <tr>
                            <th width="1">
                                Sl#
                            </th>
                            <th>Catagory</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th width="10"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php include "injection/job_list.php"; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            </section>

        </div><!--.container-fluid-->
    </div><!--.page-content-->

    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/tether/tether.min.js"></script>
    <script src="js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>

    <script type="text/javascript" src="js/lib/moment/moment-with-locales.min.js"></script>
    <script type="text/javascript"
            src="js/lib/eonasdan-bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="js/lib/clockpicker/bootstrap-clockpicker.min.js"></script>
    <script src="js/lib/clockpicker/bootstrap-clockpicker-init.js"></script>
    <script src="js/lib/daterangepicker/daterangepicker.js"></script>
    <script src="js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script>
        $(function () {
            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            cb(moment().subtract(29, 'days'), moment());

            $('#daterange').daterangepicker({
                "timePicker": true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                "linkedCalendars": false,
                "autoUpdateInput": false,
                "alwaysShowCalendars": true,
                "showWeekNumbers": true,
                "showDropdowns": true,
                "showISOWeekNumbers": true
            });

            $('#daterange2').daterangepicker();

            $('#daterange3').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });

            $('#daterange').on('show.daterangepicker', function (ev, picker) {
                /*$('.daterangepicker select').selectpicker({
                 size: 10
                 });*/
            });

            /* ==========================================================================
             Datepicker
             ========================================================================== */

            $('.datetimepicker-1').datetimepicker({
                widgetPositioning: {
                    horizontal: 'right'
                },
                debug: false
            });

            $('.datetimepicker-2').datetimepicker({
                widgetPositioning: {
                    horizontal: 'right'
                },
                format: 'LT',
                debug: false
            });
        });
    </script>
    <script type="text/javascript">
        function add_row() {
            var table = document.getElementById("myTable");
            var row = table.insertRow(2);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell2 = row.insertCell(2);
            var cell2 = row.insertCell(3);
            var cell2 = row.insertCell(5);

            cell1.innerHTML = "<textarea name='item_name' class='form-control'></textarea>";
        }
    </script>

    <script src="js/app.js"></script>
    <script src="js/calculation.js"></script>
    <script src="js/lib/summernote/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.summernote').summernote();

            $("#categorySelect").change(function() {
                if ($("#categorySelect").val() == "Data Entry") {
                    $(".data-entry").css("display", "block");
                    $(".url-link").css("display", "none");
                    $(".captcha").css("display", "none");
                } else if ($("#categorySelect").val() == "Facebook" || $("#categorySelect").val() == "Youtube") {
                    $(".captcha").css("display", "none");
                    $(".data-entry").css("display", "none");
                    $(".url-link").css("display", "block");
                } else if ($("#categorySelect").val() == "Captcha" ){
                    $(".captcha").css("display", "block");
                    $(".data-entry").css("display", "none");
                    $(".url-link").css("display", "none");
                }else {
                    $(".url-link, .data-entry, .captcha").css("display", "none");
                }
            }).trigger("change");
        });


    </script>
    </body>
    </html>

    <?php
} else {
    header("location: login.php");
}
?>