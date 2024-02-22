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
        <button onclick="window.location.href = 'เพิ่มห้อง';" class="w3-button w3-light-green">เพิ่มห้อง</button>
    </div>
    <br><br>
        <table class="table-custom">
            <tr>
                <th>ตึก</th>
                <th>ห้อง</th>
                <th>จำนวนนิสิต</th>
                <th>แก้ไข/ลบ</th>
            </tr>
            <tr>
                <td>23</td>
                <td>Lab Com 23</td>
                <td>50</td>
                <td><button onclick="window.location.href = 'แก้ไขห้อง';" class="w3-button w3-amber">แก้ไข</button>
                    <button onclick="openModal()" class="w3-button w3-red">ลบ</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()" >&times;</span>
                <img src="{{ asset('img/delete.jpg') }}" alt="Image" class="modal-img"> <!-- Add your image here -->
                <p>ยืนยันลบห้องนี้หรือไม่?</p>
                <button class="w3-button w3-light-green " onclick="deleteRoom(this)">ยืนยัน</button>
                <button class="w3-button w3-red" onclick="closeModal()">ยกเลิก</button> <!-- Close modal on "No" button click -->
            </div>
        </div>
        
        <script>
            // Function to open the modal
            function openModal() {
                var modal = document.getElementById("myModal");
                modal.style.display = "block";
            }
        
            // Function to close the modal
            function closeModal() {
                var modal = document.getElementById("myModal");
                modal.style.display = "none";
            }
        
            // Function to handle delete action
            function deleteRoom(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
            closeModal(); // Close the modal after deletion
            }
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
