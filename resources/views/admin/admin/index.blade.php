@extends('layouts.admin.admin')
@section('content')

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
       
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Hat Yai Style Fried Chicken Shop Website</a>.
                </div>
            </div>
            <!-- #Footer -->
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3 style="text-align: center;">ตารางผู้จัดทำ</h3>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <a href="../../pages/forms/form_admin_add.php" class="btn btn-success"style="position:relative; right: -1035px; bottom:-25px;">เพิ่มข้อมูล</a>
                            <h2>
                                ตารางผู้จัดทำ
                                <small>ตารางผู้จัดทำของเว็บไซต์ไก่ทอดสูตรหาดใหญ่</small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id_admin</th>
                                        <th>ที่อยู่</th>
                                        <th>ชื่อ - ผู้จัดทำ</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>Email</th>
                                        <th>รูปผู้จัดทำ</th>
                                        <th>เเก้ไขข้อมูล</th>
                                        <th>ลบข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>จ.กรุงเทพมหานคร</td>
                                        <td>ชวพล โตสุข</td>
                                        <td>086-322-1267</td>
                                        <td>chavapol030228orn@gmail.com</td>
                                        <th><img src="../../images/admin rit.jpg"></th>
                                        <td>
                                        <div class="d-flex align-items-center">
                                        <a href="../../pages/forms/form_admin_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                                </div>
                                        </td>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                                </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>จ.นนทบุรี</td>
                                        <td>วรากร เขื่อนเมือง</td>
                                        <td>094-335-8577</td>
                                        <td>HeropYou56@gmail.com</td>
                                        <th><img src="../../images/admin pluk.jpg"></th>
                        
                                        <td>
                                        <div class="d-flex align-items-center">
                                        <a href="../../pages/forms/form_admin_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                                </div>
                                        </td>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>จ.นนทบุรี</td>
                                        <td>ธนกิตต์ มหามาตย์</td>
                                        <td>083-814-8626</td>
                                        <td>kirigaya4206@gamil.com</td>
                                        <th><img src="../../images/admin tae.jpg"></th>
                                        
                                        <td>
                                        <div class="d-flex align-items-center">
                                        <a href="../../pages/forms/form_admin_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                                </div>
                                        </td>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                                </div>
                                        </td>
                                       
                                    </tr>
                                  
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
            <!-- #END# With Material Design Colors -->
        </div>
    </section>