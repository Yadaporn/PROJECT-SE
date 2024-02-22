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
    <link rel="stylesheet" href="{{ asset('css/styleclass.css') }}">
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




    <h2 class="w3-font">Classroom Timetable</h2>
    <table class="table-custom">
        <thead>
            <tr>
                <th></th>
                <th class="time">08:00 - 09:00</th>
                <th class="time">09:00 - 10:00</th>
                <th class="time">10:00 - 11:00</th>
                <th class="time">11:00 - 12:00</th>
                <th class="time">12:00 - 13:00</th>
                <th class="time">13:00 - 14:00</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="room">Room 101</td>
                <td class="subject">Math</td>
                <td class="teacher">Mr. Smith</td>
                <td class="subject">English</td>
                <td class="teacher">Ms. Johnson</td>
                <td class="empty"></td>
                <td class="empty"></td>
            </tr>
            <tr>
                <td class="room">Room 102</td>
                <td class="subject">Science</td>
                <td class="teacher">Ms. Davis</td>
                <td class="empty"></td>
                <td class="empty"></td>
                <td class="subject">History</td>
                <td class="teacher">Mr. Thompson</td>
            </tr>
            <tr>
                <td class="room">Room 103</td>
                <td class="empty"></td>
                <td class="empty"></td>
                <td class="subject">Art</td>
                <td class="teacher">Mrs. Martinez</td>
                <td class="subject">Physical Education</td>
                <td class="teacher">Mr. Wilson</td>
            </tr>
            <tr>
                <td class="room">Room 104</td>
                <td class="subject">Geography</td>
                <td class="teacher">Mr. Lee</td>
                <td class="subject">Computer Science</td>
                <td class="teacher">Ms. Brown</td>
                <td class="subject">Music</td>
                <td class="teacher">Mr. Garcia</td>
            </tr>
            <tr>
                <td class="room">Room 105</td>
                <td class="empty"></td>
                <td class="subject">French</td>
                <td class="teacher">Ms. Clark</td>
                <td class="empty"></td>
                <td class="empty"></td>
                <td class="empty"></td>
            </tr>
        </tbody>
    </table>
    
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