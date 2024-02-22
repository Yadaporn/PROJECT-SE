<!DOCTYPE html>
<html lang="en">
<title>ผลการลงทะเบียนรายวิชาที่เปิดสอน</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
</head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-black " style="display:none" id="mySidebar">
    <header>
        <div class="image-text">
            <span class="image">
                {{-- <img src="{{ asset('images/logo1.png') }}" > --}}
            </span>
    
            <div class="text header-text">
              <span class="name">ดร.XXXX  XXXX</span>
              <span class="profession">อาจารย์ภาควิชาวิศวกรรมคอมพิวเตอร์</span>
            </div>
    
        </div>
        {{-- <i class='bx bx-chevron-right toggle'></i> --}}
    </header>
    <button class="w3-bar-item w3-button w3-large w3-padding-large w3-hover-red" 
    onclick="w3_close()">ปิดแถบเมนู </button>
    <a href="registersubject" class="w3-bar-item w3-button w3-padding-large w3-hover-green">ลงทะเบียนรายวิชาที่จะเปิดสอน</a>
    <a href="แก้ไขห้อง" class="w3-bar-item w3-button w3-padding-large w3-hover-green">ลงทะเบียนการขอใช้ห้องในการสอน</a>
    <a href="result" class="w3-bar-item w3-button w3-padding-large w3-hover-green">ผลการลงทะเบียนรายวิชาที่จะสอน | ห้องในการสอน</a>
    <a href="tablelast" class="w3-bar-item w3-button w3-padding-large w3-hover-green">ตารางสอน</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-green">รายวิชาที่สามารถเปิดสอนตามหลักสูตร</a>
    <a href="login" class="w3-bar-item w3-button w3-padding-large w3-hover-red">ออกจากระบบ</a>
</div>
  
<div id="main">
    <div class="w3-color">
        <button id="openNav" class="w3-button w3-color w3-large" onclick="w3_open()">&#9776;</button>
        <div class="w3-container">
            <h1 class="w3-font">รายวิชาที่สามารถเปิดสอนตามหลักสูตร</h1>
        </div>
    </div>




    <div class="container py-2">
      <h1 class="w3-font">ผลการลงทะเบียนรายวิชาที่เปิดสอน</h1>
      <table class="table-custom ">
    <thead>
      <tr>
        <th scope="col">ลำดับ</th>
        <th scope="col">รหัสวิชา</th>
        <th scope="col">ชื่อวิชา</th>
        <th scope="col">หน่วยกิต</th>
        <th scope="col">หมู่</th>
        <th scope="col">วัน</th>
        <th scope="col">เวลา</th>
        <th scope="col">ห้อง</th>
        <th scope="col">สาขา-ชั้นปี</th>
        <th scope="col">จำนวนนิสิต</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>03603341-60</td>
        <td>Software Engineering</td>
        <td>3</td>
        <td>บรรยาย-800</td>
        <td>ศุกร์</td>
        <td>9:00-12:00</td>
        <td>1412</td>
        <td>T12-3,T12-4</td>
        <td>100</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>03603341-60</td>
        <td>Software Engineering</td>
        <td>1</td>
        <td>ปฏิบัติ-830</td>
        <td>ศุกร์</td>
        <td>13:00-16:00</td>
        <td>Lab Com23</td>
        <td>T12-3,T12-4,T12-5+</td>
        <td>50</td>
      </tr>
      <tr>
      <th scope="row">3</th>
        <td>03603341-60</td>
        <td>Software Engineering</td>
        <td>1</td>
        <td>ปฏิบัติ-831</td>
        <td>ศุกร์</td>
        <td>16:00-19:00</td>
        <td>Lab Com23</td>
        <td>T12-3,T12-4,T12-5+</td>
        <td>50</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>03603111-60</td>
        <td>Programming Fundamentals I</td>
        <td>2</td>
        <td>บรรยาย-800</td>
        <td>จันทร์</td>
        <td>8:00-10:00</td>
        <td>Lab Com23</td>
        <td>T12-1,T12-2,T12-3</td>
        <td>50</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>03603111-60</td>
        <td>Programming Fundamentals I</td>
        <td>1</td>
        <td>ปฏิบัติ-830</td>
        <td>จันทร์</td>
        <td>10:00-13:00</td>
        <td>Lab Com23</td>
        <td>T12-1,T12-2,T12-3</td>
        <td>50</td>
      </tr>
      <tr>
      <th scope="row">6</th>
      <td>03603111-60</td>
        <td>Programming Fundamentals I</td>
        <td>1</td>
        <td>ปฏิบัติ-831</td>
        <td>จันทร์</td>
        <td>13:00-16:00</td>
        <td>Lab Com23</td>
        <td>T12-1,T12-2,T12-3</td>
        <td>25</td>
      </tr>
    </tbody>
  </table><br>
      <a href="subject" class="btn btn-light text-black " style="float:right;"><right>แก้ไข</right></a>
      </div>
    
    <script>
      function w3_open() {
          document.getElementById("main").style.marginLeft = "25%";
          document.getElementById("mySidebar").style.width = "25%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("openNav").style.display = 'none';
      }
      
      function w3_close() {
          document.getElementById("main").style.marginLeft = "0%";
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("openNav").style.display = "inline-block";
      }
  </script>
</body>
</html>