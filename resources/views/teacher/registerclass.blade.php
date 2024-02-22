<!DOCTYPE html>
<html lang="en">
<title>ลงทะเบียนการขอใช้ห้องในการสอน</title>
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
            <h1 class="w3-font">ระบบจัดตารางสอน</h1>
        </div>
    </div>




    <div class="container py-2">
        <h2 class="w3-font">ลงทะเบียนรายวิชาที่จะเปิดสอน</h2>

        <label for="course">หลักสูตร</label>
        <select name="course">
            <option>หลักสูตรปี 55</option>
            <option>หลักสูตรปี 59</option>
            <option>หลักสูตรปี 60</option>
            <option>หลักสูตรปี 65</option>
        </select>

        <label class="ms-3" for="year">ปีการศึกษา</label>
        <select>
            <option>2563</option>
            <option>2564</option>
            <option>2565</option>
            <option>2566</option>
        </select>
        
        <label class="ms-3" for="semester">ภาคการศึกษา</label>
        <select>
            <option>ภาคต้น</option>
            <option>ภาคปลาย</option>
        </select>
        <label class="ms-3" for="class">ชื่อ/รหัสวิชา</label>
        <input type="text" placeholder="ค้นหา">
        
        <label class="ms-3" for="a">จำนวนหมู่บรรยาย</label>
        <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <label class="ms-3" for="a">จำนวนหมู่ปฏิบัติ</label>
        <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>


        <button class="btn btn-success btn-sm ms-4"><a href="result">ยืนยัน</button>
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