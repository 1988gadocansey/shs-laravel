<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title> @yield('title', app_name())</title>


    <!-- uikit -->
    <link rel="stylesheet" href="{!! url('assets/plugins/uikit/css/uikit.almost-flat.min.css') !!} " media="all">


    <link rel="stylesheet" href="{!! url('assets/css/main.min.css') !!}" media="all">
    <link rel="stylesheet" href="{!! url('assets/css/combined.min.css') !!}" media="all">

    <link rel="stylesheet" href="{!! url('plugins/sweet-alert/sweet-alert.min.css') !!}" media="all">
    <!-- font awesome -->
    <link rel="stylesheet" href="{!! url('assets/css/select2.min.css') !!}" media="all">
    <link rel="stylesheet" href="{!! url('assets/css/dropify.css') !!}" media="all">
    <link rel="stylesheet" href="{!! url( 'datatables/css/jquery.dataTables.min.css')  !!}" >
    <link rel="stylesheet" href="{!! url( 'datatables/css/dataTables.uikit.min.css')  !!}" >
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 


    @yield('style')

</head>
<body class="top_menu">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <div class="main_logo_top">
                    <a href="/dashboard"><img src="assets/img/logo.png" alt="" height="15" width="71"/></a>
                    <span  style="color:white"  >Welcome {{@Auth::user()->name }} |  Designation : {{@Auth::user()->role }}</span>
                </div>

                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">16</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge">
                                <div class="md-card-content">
                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                        <li class="uk-width-1-2 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (12)</a></li>
                                        <li class="uk-width-1-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (4)</a></li>
                                    </ul>
                                    <ul id="header_alerts" class="uk-switcher uk-margin">
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-cyan">ao</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Consequatur ut repudiandae.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Et sunt qui quod aut laborum et nisi.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Sunt sequi.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Beatae quibusdam sed possimus pariatur optio repellendus.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-light-green">qi</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Et voluptatum ut.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Est et nostrum dignissimos suscipit nihil animi voluptatem quam.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Similique iure et.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Laborum et alias veritatis accusamus sit consequatur quod.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Repellendus consequuntur.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Nesciunt et id eum quas est soluta aut et.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Repudiandae accusantium.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Et fugit ipsum quia non ducimus quo.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Eos earum qui.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Accusamus nisi vitae dolorem et vel repudiandae ratione tenetur.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Rerum accusantium.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Ut voluptatem eos sapiente hic qui molestiae.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Id molestias.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Excepturi delectus rem doloribus quia fugiat.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" style="height: auto;width: 30px" src="albums/profile/gad.jpg" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="page_user_profile.html">My profile</a></li>
                                    <li><a href="page_settings.html">Settings</a></li>
                                    <li><a href='{!! url("/logout") !!}'>Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>

        </div>
    </header><!-- main header end -->
    <div id="top_bar">
        <div class="md-top-bar">
            <ul id="menu_top" class="uk-clearfix">
                <li class="uk-hidden-small"><a href="dashboard"><i class="material-icons">&#xE88A;</i></a></li>
                <li data-uk-dropdown class="uk-hidden-small">

                    @if( @Auth::user()->role!='FO')
                    <a href="#"><i class="sidebar-menu-icon material-icons md-18">school</i><span>Administration Module</span></a>
                    <div class="uk-dropdown uk-dropdown-scrollable">
                        <ul class="uk-nav uk-nav-dropdown">
                            <li><a href='{!! url("students") !!}'>Students</a></li>
                            <li><a href='{!! url("add_students") !!}'>Add Students</a></li>

                            <li><a href='{!! url("grading_system") !!}'>Create Grading System</a></li>
                            <li><a href='{!! url("add_students") !!}'>View Grading Systems</a></li>

                             
                        </ul>
                    </div>
                </li>
                <li data-uk-dropdown class="uk-hidden-small">
                    <a href="#"><i class="sidebar-menu-icon material-icons md-18">book</i><span>Academics Modules</span></a>
                    <div class="uk-dropdown uk-dropdown-scrollable">
                        <ul class="uk-nav uk-nav-dropdown">
                            <li><a href='{!! url("/calender") !!}'>Academic Calender</a></li>
                            <li><a href='{!! url("/create_programme") !!}'>Add Programmes</a></li>
                            <li><a href='{!! url("/programmes") !!}'>View Programmes</a></li>
                            <li><a href='{!! url("/create_course") !!}'>Add Courses</a></li>
                            <li><a href='{!! url("/courses") !!}'>View Courses</a></li>
                            <li><a href='{!! url("/mount_course") !!}'>Mount Courses</a></li>
                            <li><a href='{!! url("/mounted_view") !!}'>View Mounted Courses</a></li>

                            <li><a href='{!! url("create_bank") !!}'>Register Students</a></li>
                            <li><a href='{!! url("/registered_courses") !!}'>Enter Marks</a></li>


                            <li><a href='{!! url("/attendanceSheet") !!}'>Print Attendance Sheet</a></li>
                        </ul>
                    </div>
                </li>
                @endif
                 
                <li data-uk-dropdown class="uk-hidden-small">
                    <a href="#"> <i class="sidebar-menu-icon material-icons">work</i><span>Finance Module</span></a>
                    <div class="uk-dropdown uk-dropdown-scrollable">
                        <ul class="uk-nav uk-nav-dropdown">
                            <!--<li><a href='{!! url("createproduct") !!}'>Add Payments products</a></li>
                            <li><a href='{!! url("create_bank") !!}'>View Payments</a></li>
                              <li><a href='{!! url("create_bank") !!}'>Make Payments</a></li> -->
                            <li><a href='{!! url("create_bank") !!}'>Create Banks</a></li>
                            <li><a href='{!! url("banks") !!}'>View Banks</a></li>
                            <li><a href='{!! url("create_fees") !!}'>Create Fees</a></li>
                            <li><a href='{!! url("upload_fees") !!}'>Upload New Fees</a></li>
                            <li><a href='{!! url("view_fees") !!}'>View Fees</a></li>

                            <li><a href='{!! url("pay_fees") !!}'>Pay Fees</a></li>
                            <li><a href='{!! url("pay_transcript") !!}'>Pay Transcript</a></li>
                            <li><a href='{!! url("pay_fees_penalty") !!}'>Late Registration payment</a></li>
                            <li><a href='{!! url("view_payments_master") !!}'>Master Fee Payment Report</a></li>

                            <li><a href='{!! url("owing_paid") !!}'>Owing reports</a></li>
                            <li><a href='{!! url("view_payments") !!}'>Transactions Ledger</a></li>

                            <li><a href='{!! url("fee_summary") !!}'>Fee Summary</a></li>
                            <li><a href='{!! url("printReceipt") !!}'>Print Lost Receipt</a></li>
                            <!--<li><a href='{!! url("pay_resit") !!}'>Pay Resit</a></li>
                            <li><a href='{!! url("pay_attestation") !!}'>Pay Attestation</a></li>
                            <li><a href='{!! url("pay_proficiency") !!}'>Pay English Proficiency</a></li>
                            
                            -->
                        </ul>
                    </div>
                </li>
                
                @if(@Auth::user()->role!='FO')
                <li data-uk-dropdown class="uk-hidden-small">
                    <a href="#"> <i class="sidebar-menu-icon material-icons">work</i><span>Staff Module</span></a>
                    <div class="uk-dropdown uk-dropdown-scrollable">
                        <ul class="uk-nav uk-nav-dropdown">

                            <li><a href='{!! url("fee_summary") !!}'>Add Staff</a></li>
                            <li><a href='{!! url("getStaffCSV") !!}'>Upload Staff Data</a></li>

                            <li><a href='{!! url("staff") !!}'>View Staff</a></li>
                        </ul>
                    </div>
                </li>
                <li data-uk-dropdown class="uk-hidden-small">
                    <a href="#"> <i class="sidebar-menu-icon material-icons">work</i><span>Laiason Module</span></a>
                    <div class="uk-dropdown uk-dropdown-scrollable">
                        <ul class="uk-nav uk-nav-dropdown">

                            <li><a href='{!! url("fee_summary") !!}'>View Attachment Data</a></li>

                            <li><a href='{!! url("fee_summary") !!}'>Attachment Reports</a></li>
                            <li><a href='{!! url("fee_summary") !!}'>Close or open online system</a></li>

                        </ul>
                    </div>
                </li>
                <li data-uk-dropdown class="uk-hidden-small">
                    <a href="#"> <i class="sidebar-menu-icon material-icons">people</i><span>Users</span></a>
                    <div class="uk-dropdown uk-dropdown-scrollable">
                        <ul class="uk-nav uk-nav-dropdown">
                            <li><a href='{!! url("fee_summary") !!}'>View Users</a></li>


                        </ul>
                    </div>
                </li>
                @endif
                <li data-uk-dropdown class="uk-hidden-small">
                    <a href="#"> <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span><span>Settings</span></a>
                    <div class="uk-dropdown uk-dropdown-scrollable">
                        <ul class="uk-nav uk-nav-dropdown">
                            <li><a href='{!! url("/synchronizations") !!}'>System Synchronizations</a></li>

                            <li><a href='{!! url("/settings") !!}'>System Settings</a></li>

                            <li><a href='{!! url("/logout") !!}'>Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">




            @yield('content')


        </div>
    </div><!-- common functions -->
    <script src="{!! url('assets/js/common.min.js') !!}"></script>
    <script src="{!! url('assets/js/dropify.min.js') !!}"></script>
    <script src="{!! url('assets/js/file_input.min.js') !!}"></script>
    <!-- uikit functions -->
    <script src="{!! url('assets/js/uikit_custom.min.js') !!}"></script>

    <!-- altair common functions/helpers -->
    <script src="{!! url('assets/js/altair_admin_common.min.js') !!}"></script>
    <script src="{!! url('assets/js/uikit/uikit.min.js') !!}"></script>


    <script src='{!! url( "assets/plugins/sweet-alert/sweet-alert.min.js")  !!}' ></script>

    <script src="{!! url('assets/js/vue.min.js') !!}"></script>
    <script src="{!! url('assets/js/vue-form.min.js') !!}"></script>
    <script src="{!! url('assets/js/jquery-ui.min.js') !!}"></script>
    <script src="{!! url('assets/tableexport/tableExport.js') !!}"></script>
    <script src="{!! url('assets/tableexport/jquery.base64.js') !!}"></script>

    <script src="{!! url('assets/tableexport/html2canvas.js') !!}"></script>

    <script src="{!! url('assets/tableexport/jspdf/libs/sprintf.js') !!}"></script>

    <script src="{!! url('assets/tableexport/jspdf/jspdf.js') !!}"></script>
    <script src="{!! url('assets/tableexport/jspdf/libs/base64.js') !!}"></script>
    <script src="{!! url('datatables/js/jquery.dataTables.min.js') !!}"></script>

    <script src="{!! url('datatables/js/dataTables.uikit.min.js') !!}"></script> 
    <script src="{!! url('datatables/js/plugins_datatables.min.js') !!}"></script>
    <script src="{!! url('datatables/js/datatables_uikit.min.js') !!}"></script> 

    @yield('js')

    <script type="text/javascript">
                $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                });    </script>
    <script>
                // load parsley config (altair_admin_common.js)
                altair_forms.parsley_validation_config();
                // load extra validators
                altair_forms.parsley_extra_validators();    </script>

    <script src="{!! url('assets/js/jquery.form.js') !!}"></script>
    <script src="{!! url('assets/js/jquery.validate.min.js') !!}"></script>

    <script language="javascript" type="text/javascript">
                function printDiv(divID) {
                //Get the HTML of div
                var divElements = document.getElementById(divID).innerHTML;
                        //Get the HTML of whole page
                        var oldPage = document.body.innerHTML;
                        //Reset the page's HTML with div's HTML only
                        document.body.innerHTML =
                        "<html><head><title></title></head><body>" +
                        divElements + "</body>";
                        //Print Page
                        window.print();
                        //Restore orignal HTML
                        document.body.innerHTML = oldPage;
                }
    </script>
    <script>
        function recalculateSum()
        {
        var num1 = parseFloat(document.getElementById("pay").value);
                var num2 = parseFloat(document.getElementById("bill").value);
                document.getElementById("amount_left").value = (num2 - num1);
        }
        function MM_openBrWindow(theURL, winName, features) { //v2.0
        window.open(theURL, winName, features);
        }

        function recalculateTranAmt(){
        var copies = document.getElementById("copies").value;
                var price = parseFloat(document.getElementById("price").value);
                document.getElementById("amount").value = (copies * price);
        }
    </script>
    <script>


        $(document).ready(function(){

        function checkFormElements(){}



        $("#insertPaymentRow").bind('click', function(){

        var numOrgs = $(" table#paymentTable tr[payment_row]").length + 1;
                var newOrg = $("table#paymentTable tr:first ").clone(true);
                $(newOrg).children(' td#insertPaymentCell ').html('<button  type="button" id="removePaymentRow_' + numOrgs + '" class="md-btn md-btn-danger md-btn-small uk-margin-small-top" ><i class="sidebar-menu-icon material-icons">remove</i>  Remove</button>');
                var amountLine = $(newOrg).children('td')[2];
                $(amountLine).children(':last-child').prop('value', '');
                var amountInput = $(amountLine).children(':last-child');
                $(amountInput).prop('id', 'amt_' + numOrgs);
                $(newOrg).attr('id', 'paymentRow_' + numOrgs);
                $(newOrg).insertAfter($("table#paymentTable tr:last"));
                $('#removePaymentRow_' + numOrgs).bind("click", function(){
// $(amountInput).trigger('keyup');
        $('#paymentRow_' + numOrgs).remove();
                var count = 0;
                });
// $('#amt_'+numOrgs).bind('focus',function(){
//   console.log('hello from here');
// });

//});


                $('#paymentTable .pay_type  :selected').parent().each(function(){
        if ($(this).prop('selectedIndex') <= 0){
        //$('#new_payment_individual_form :submit').prop('disabled','disabled');
        //  $('#alertInfo').css('display','block').html("Please select a payment type!");
        }
        });
//console.log($(this).prop('name')+"->"+$('#paymentTable .pay_type  :selected').parent().length);

                });
                $('#save').on('click', function(e) {
        return (function(modal){ modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing data<br/><img class='uk-thumbnail uk-margin-top' src='{!! url('assets/img/spinners/spinner_success.gif')  !!}' /></div>"); setTimeout(function(){ modal.hide() }, 50000) })();
                });
                });    </script>
    <!-- google web fonts -->
    <script>
                WebFontConfig = {
                google: {
                families: [
                        'Source+Code+Pro:400,700:latin',
                        'Roboto:400,300,500,700,400italic:latin'
                ]
                }
                };
                (function() {
                var wf = document.createElement('script');
                        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                        wf.type = 'text/javascript';
                        wf.async = 'true';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(wf, s);
                })();      </script>
    <script src="{!!url('assets/plugins/tablesorter/dist/js/jquery.tablesorter.min.js')!!}"></script>
    <script src="{!!url('assets/plugins/tablesorter/dist/js/jquery.tablesorter.widgets.min.js')!!}"></script>
    <script src="{!!url('assets/plugins/tablesorter/dist/js/widgets/widget-alignChar.min.js')!!}"></script>
    <script src="{!!url('assets/plugins/tablesorter/dist/js/widgets/widget-columnSelector.min.js')!!}"></script>
    <script src="{!!url('assets/plugins/tablesorter/dist/js/widgets/widget-print.min.js')!!}"></script>
    <!--  tablesorter functions -->
    <script src="{!!url('assets/js/pages/plugins_tablesorter.min.js')!!}"></script>
    
</body>
</html>