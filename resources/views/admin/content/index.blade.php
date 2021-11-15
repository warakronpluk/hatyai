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
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
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
                <h3 style="text-align: center;">ตารางคอนเทนต์</h3>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <a href="../../pages/forms/form_contents_add.php" class="btn btn-success" style="position:relative; right: -1200px; bottom:-25px;">เพิ่มข้อมูล</a>
                            <h2>
                                ตารางคอนเทนต์
                                <small>ตารางคอนเทนต์ของเว็บไซต์ไก่ทอดสูตรหาดใหญ่</small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id_content</th>
                                        <th>เนื้อหา</th>
                                        <th>status</th>
                                        <th>รูปประกอบเนื้อหา</th>
                                        <th>เเก้ไขข้อมูล</th>
                                        <th>ลบข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>ไก่กับไช่อะไรเกิดก่อนกัน<br>คำตอบคือไก่เกิดก่อน โดยทีมวิจัยจาก <br>มหาวิทยาลัย Sheffield และ Warwick ในประเทศอังกฤษ <br>ได้ค้นพบโปรตีน Ovocledidin-17 (OC-17) ซึ่งจำเป็นในการเริ่มต้น<br>และเร่งกระบวนการตกผลึกของเปลือกไข่ให้แข็ง<br>ทำให้ไก่สามารถออกไข่ได้ภายใน 24 ชั่วโมง<br>(เป็นเหตุผลว่าทำไมแม่ไก่ถึงสามารถออกไข่ฟองใหญ่ ๆ ให้เรากินได้ทุกวัน)<br>ซึ่งเป็นโปรตีนที่มีเฉพาะในรังไข่ของไก่เท่านั้น จึงสรุปได้ว่าไก่เกิดก่อนไข่<br>เพราะไก่ต้องมีโปรตีนตัวนี้ก่อนถึงจะออกไข่ได้</td>
                                        <th>รูปภาพหน้าเกร็ดความรู้ 01</th>
                                        <th><img src="../../images/chickenoregg.jpg"></th>
                                        <td>
                                        <div class="d-flex align-items-center">
                                        <a href="../../pages/forms/form_contents_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
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
                                        <td>ควบคุมน้ำหนักให้อยู่ในเกณฑ์ <br>น้ำหนักที่เหมาะสมขึ้นอยู่กับปัจจัยหลายอย่าง<br>เช่น เพศ ส่วนสูง อายุ และพันธุกรรม การมีน้ำหนักเกินมีผลในการเพิ่มความเสี่ยง<br>ต่อการเกิดโรคต่าง ๆ เช่น โรคหัวใจและโรคมะเร็ง ไขมันส่วนเกินในร่างกาย<br>มาจากการทานอาหารที่มีปริมาณแคลอรีมากกว่าที่ร่างกายต้องการ<br>ซึ่งอาจได้มาจากอาหารหลายแหล่ง เช่น โปรตีน ไขมัน คาร์โบไฮเดรต<br>หรือแอลกอฮอล์ แต่ไขมันเป็นแหล่งแคลอรีที่สำคัญที่สุด<br>การออกกำลังกายเป็นหนึ่งวิธีที่จะช่วยลดปริมาณแคลอรีที่เราได้รับเข้าไปในร่างกายในแต่ละวัน และยังช่วยให้ร่างกายรู้สึกสดชื่นได้อีกด้วย</td>
                                        <th>รูปภาพหน้าเกร็ดความรู้ 02</th>
                                        <th><img src="../../images/body -bg.jpg"></th>
                                        
                                        <td>
                                        <div class="d-flex align-items-center">
                                        <a href="../../pages/forms/form_contents_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
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
                                        <td>เเค่ขยับก็เท่ากับออกกำลังกาย<br>เป็นที่ทราบกันดีว่าการทานอาหารที่มีแคลอรีมากและออกกำลังกายไม่เพียงพอ<br>จะทำให้เกิดการสะสมไขมันส่วนเกิน ทำให้ร่างกายมีน้ำหนักเพิ่มมากขึ้น<br>การออกกำลังกายจะช่วยเผาผลาญแคลอรีที่เกิน<br>ทำให้หัวใจและระบบไหลเวียนโลหิตทำงานอย่างมีประสิทธิภาพ<br>อาจเดินขึ้น-ลงบันไดแทนการใช้ลิฟท์ หรือในระยะทางใกล้ ๆ ใช้การเดินแทนการใช้รถ จำไว้ว่าไม่จำเป็นต้องเป็นนักกีฬาเท่านั้นที่ต้องออกกำลังกาย ทุกคนสามารถออกกำลังกายเพื่อสุขภาพที่ดีได้</td>
                                        <th>รูปภาพหน้าเกร็ดความรู้ 03</th>
                                        <th><img src="../../images/muscle -bg.jpg"></th>
                                        
                                        <td>
                                        <div class="d-flex align-items-center">
                                        <a href="../../pages/forms/form_contents_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>  
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
    
@endsection