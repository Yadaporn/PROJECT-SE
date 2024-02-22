<!DOCTYPE html>
<html lang="en">
<title>ห้องปฏิบัติการ</title>
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
                    
                </span>
        
                <div class="text header-text">
                  <span class="name">ดร.XXXX  XXXX</span>
                  <span class="profession">อาจารย์ภาควิชาวิศวกรรมคอมพิวเตอร์</span>
                </div>
        
            </div>
            
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

    <div class="top">
    <div class="head">
        ห้องปฏิบัติการ
    </div>
    <div class="add">
        เพิ่มทีละ 1 ห้อง
    </div>
    <div class="text-build">
        <a>อาคาร</a>
        <a>ห้อง</a>
        <a>จำนวนนิสิต</a>
    </div>
    <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown()" style="width:100px">อาคาร</button>
        <div class="dropdown-content" id="dropdownMenu">
            <a href="#">อาคาร 2</a>
            <a href="#">อาคาร 15</a>
            <a href="#">อาคาร 23</a>
        </div>
    </div>

    <div class="text-blockr">
        <textarea rows="4" cols="50"></textarea>
    </div>
    <div class="text-blockn">
        <textarea rows="4" cols="50"></textarea>
    </div>
    <button class="save-btn"><a href="สถานะ">Save</a></button>

    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }
    </script>
    </div>
    <div class="addfile">
        เพิ่มทีละ 1 ไฟล์
    </div>
    <div class="addfile" onclick="triggerFileInput()">
        <img src="{{ asset('img/addfile.png') }}" alt="Upload File">
        <input type="file" id="fileInput" accept=".xlsx" style="display: none;">
    </div>
    <div class="addfilet">
        ไฟล์นามสกุล .xlsx
    </div>
    <script>
        function triggerFileInput() {
            document.getElementById("fileInput").click();
        }

    </script>
</body>
</html>
