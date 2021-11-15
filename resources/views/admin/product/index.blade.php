@extends('layouts.admin.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h3 style="text-align: center;">ตารางสินค้า</h3>
        </div>
        <!-- Basic Table -->
        <!-- #END# Basic Table -->
        <!-- Striped Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                    <a href="../../pages/forms/form_menu_add.php" class="btn btn-success" style="position:relative; right: -975px; bottom:-25px;">เพิ่มข้อมูล</a>
                        <h2>
                            ตารางสินค้า
                            <small>ตารางสินค้าของเว็บไซต์ไก่ทอดสูตรหาดใหญ่</small>
                        </h2>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id_product</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>ราคาสินค้า</th>
                                    <th>รูปภาพสินค้า</th>
                                    <th>แก้ไขข้อมูล</th>
                                    <th>ลบข้อมูล</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>น่องไก่</td>
                                    <td>40 บาท</td>
                                    <th><img src="../../images/img chicken/น่องไก่ทอดหาดใหญ่.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
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
                                    <td>คอไก่</td>
                                    <td>30 บาท</td>
                                    <th><img src="../../images/img chicken/คอไก่.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
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
                                    <td>โครงไก่</td>
                                    <td>30 บาท</td>
                                    <th><img src="../../images/img chicken/โครงไก่.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>ตีนไก่</td>
                                    <td>30 บาท</td>
                                    <th><img src="../../images/img chicken/ตีนไก่.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>ตูดไก่</td>
                                    <td>30 บาท</td>
                                    <th><img src="../../images/img chicken/ตูดไก่ทอด.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>ปีกไก่ทอด</td>
                                    <td>70 บาท</td>
                                    <th><img src="../../images/img chicken/ปีกไก่.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">7</th>
                                    <td>ปีกบนน่องเล็ก</td>
                                    <td>40 บาท</td>
                                    <th><img src="../../images/img chicken/ปีกบนน่องเล็ก.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">8</th>
                                    <td>สะโพกไก่</td>
                                    <td>40 บาท</td>
                                    <th><img src="../../images/img chicken/สะโพก.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">9</th>
                                    <td>อกไก่เสียบไม้</td>
                                    <td>30 บาท</td>
                                    <th><img src="../../images/img chicken/อกไก่เสียบไม้.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">10</th>
                                    <td>อกไก่ทอด</td>
                                    <td>70 บาท</td>
                                    <th><img src="../../images/img chicken/อกไก่ชิ้นใหญ่.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">11</th>
                                    <td>ข้าวเหนียว</td>
                                    <td>10 บาท</td>
                                    <th><img src="../../images/img chicken/ข้าวเหนียว.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr> 
                                <tr>
                                <th scope="row">12</th>
                                    <td>ตับไก่</td>
                                    <td>40 บาท</td>
                                    <th><img src="../../images/img chicken/ตับไก่.jpg"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <a href="../../pages/forms/form_menu_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                                            </div>
                                    </td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# With Material Design Colors -->
    </div>
</section>
@endsection