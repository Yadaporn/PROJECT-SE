<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Insert</title>
</head>
<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-black " style="display:none" id="mySidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    {{-- <img src="{{ asset('images/logo1.png') }}" > --}}
                </span>
        
                <div class="text header-text">
                    <span class="name">ฝ่ายทะเบียน</span>
                    {{-- <span class="profession">อาจารย์ภาควิชาวิศวกรรมคอมพิวเตอร์</span> --}}
                </div>
        
            </div>
            {{-- <i class='bx bx-chevron-right toggle'></i> --}}
        </header>
        <button class="w3-bar-item w3-button w3-large w3-padding-large w3-hover-red" 
        onclick="w3_close()">ปิดแถบเมนู </button>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">ข่าวสารการลงทะเบียนจัดตารางสอน</a>
        <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">รายวิชาที่สามารถเปิดสอนตามหลักสูตร</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">เพิ่มห้องเรียน</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">ตรวจสอบการลงทะเบียน</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">ตรวจสอบรายวิชารอพิจารณา</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-red">ออกจากระบบ</a>
    </div>
      
    <div id="main">
        <div class="w3-color">
            <button id="openNav" class="w3-button w3-color w3-large" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1 class="w3-font">ระบบจัดตารางสอน</h1>
            </div>
        </div>
    </div>


    {{-- เพิ่มรายละเอียด --}}


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
