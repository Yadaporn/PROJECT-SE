<!DOCTYPE html>
<html>
<title>รายวิชาที่สามารถเปิดสอนตามหลักสูตร</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
  <!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  <h1 class="text py-2 w3-font">Import หลักสูตร</h1> </tr>
  <div class="dropdown py-2"> 
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          หลักสูตร
      </button>
      <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
      <a href="/import" class="btn btn-success text-black">Import</a> <br><br>
      <div class="dropdown py-2"> 
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              หลักสูตร
          </button>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
      <a href="" class="btn btn-success text-black ">เพิ่มรายวิชา</a> 
  </div>
  <h6 class="text py-2 w3-font">หลักสูตรปี 60 วิศวกรรมศาสตร์คอมพิวเตอร์และสารสนเทศศาสตร์(T12) ชั้นปีที่ 4 ภาคปลาย</h6>
  <table class="table-custom" style="width:100%">
      <thead>
          <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">รหัสวิชา</th>
              <th scope="col">รหัสวิชา-ปีหลักสูตร</th>
              <th scope="col">ชื่อวิชา</th>
              <th scope="col">บรรยาย</th>
              <th scope="col">ปฏิบัติ</th>
              <th scope="col">แก้ไข</th>
              <th scope="col">ลบ</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th scope="row">1</th>
              <td>03603341</td>
              <td>03603341-60</td>
              <td>Software Engineering</td>
              <td>4(3-3-8)</td>
              <td>-</td>
              <td><a href="/insert" class="btn btn-warning btn-sm text-black">แก้ไข</a></td>
              <td><a href="/delete" class="btn btn-danger btn-sm text-black">ลบ</a></td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>03603312</td>
              <td>03603312-60</td>
              <td>Probabiliti and Statistics for Informatics</td>
              <td>3(3-0-6)</td>
              <td>-</td>
              <td><a href="/insert" class="btn btn-warning btn-sm text-black">แก้ไข</a></td>
              <td><a href="/delete" class="btn btn-danger btn-sm text-black">ลบ</a></td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>03603323</td>
              <td>03603323-60</td>
              <td>Introduction to Embedded Systems</td>
              <td>3(3-0-6)</td>
              <td>-</td>
              <td><a href="/insert" class="btn btn-warning btn-sm text-black">แก้ไข</a></td>
              <td><a href="/delete" class="btn btn-danger btn-sm text-black">ลบ</a></td>
          </tr>
          <tr>
              <th scope="row">4</th>
              <td>03603324</td>
              <td>03603324-60</td>
              <td>Embedded Systems Laboraory</td>
              <td>-</td>
              <td>1(0-3-2)</td>
              <td><a href="/insert" class="btn btn-warning btn-sm text-black">แก้ไข</a></td>
              <td><a href="/delete" class="btn btn-danger btn-sm text-black">ลบ</a></td>
          </tr>
      </tbody>
  </table>
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
