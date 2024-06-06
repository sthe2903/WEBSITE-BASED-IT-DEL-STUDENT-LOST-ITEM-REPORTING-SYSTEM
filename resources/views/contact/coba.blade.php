<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
   <style>
     th{
       background-color: rgb(37, 125, 116);color: white;
     }
     table{
       border-color:rgb(37, 125, 116);
       border:1;
       border-block-color: rgb(37, 125, 116);
       
     }
     th td{
       color:black;
     }
   </style>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-security'></i>
      <span class="logo_name">Laporkan Saja!</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#find">
            <i class='bx bx-box' ></i>
            <span class="links_name">Data Menemukan</span>
          </a>
        </li>
        <li>
          <a href="#hilang">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Data Kehilangan</span>
          </a>
        </li>
        <li>
          <a href="#laporan">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Pengambilan</span>
          </a>
        </li>
        <li>
          <a href="home">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        
      </div>
    </nav>
    <div class="home-content">
      
      <div class="sales-boxes">
        <div class="recent-sales box">
          <form action="contact" method="GET" style="margin-left: 400px;">
            <input type="text" name="cari" placeholder="Cari ID Barang" value="{{ old('cari') }}" style="width: 50%;height:30px;background-color:hsl(0, 0%, 89%);color:rgb(255, 255, 255);border:none;">
            <input type="submit" value="CARI" class="btn btn-info" style="height:28px;width:40px;border-radius:3px;background-color:rgb(32, 87, 96);border:none;color:white;" >
          </form>
          <div class="title" style="text-decoration: black;" id="find">Daftar Barang Ditemukan</div>
          <div class="sales-details">
            <table class="details" border="1" style="justify-content: center;">
              <tr>
                <th>ID Barang</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Nama Penemu</th>
                <th>Telepon</th>
                <th>Status</th>
                <th>Lokasi</th>
                <th>Aksi</th>                
              </tr>
              @foreach ($pena as $barang)
              <tr>
                <td>{{ $barang['id'] }}</td>
                <td><img src="{{  asset('asset/menemukan/'.$barang->gambar) }}" alt="" width="80px" height="80px"></td>
                <td style="text-align: center">{{ $barang['barang'] }}</td>
                <td style="text-align: center"> {{ $barang['penemu'] }}</td>
                <td style="text-align: center">{{ $barang['telepon'] }}</td>
                <td><button style="background-color:hsl(169, 70%, 35%);color:white;border:none;width:50px;height:30px">{{ $barang['status'] }}</button></td>
                <td style="text-align: center">{{ $barang['lokasi'] }}</td>
                <td>
                  <a href="/edit-menemukan/{{ $barang->id }}" title="Edit Student"><button style="background-color: rgb(0, 229, 255);border:none;width:50px;border-radius:5px;" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                  <form method="POST" action="{{ url('/contact' . '/' . $barang->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                   <button style="background-color: rgb(254, 67, 67);border:none;width:50px;border-radius:3px;"> <a href="/delete-menemukan/{{$barang['id']}}"  style="text-decoration: none;color:white;"  title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                </button></form>
                </td>
              </tr>
              @endforeach
            </table>
      </div>
    </div>
      </div>
      <br><br>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title" style="text-decoration: black;" id="hilang">Daftar Kehilangan</div>
          <div class="sales-details">
            <table class="details" border="1">
              <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Nama Penemu</th>
                <th>Telepon</th>
                <th>Deskrisi</th>
                <th>Lokasi</th>
                <th>Aksi</th>                
              </tr>
              @foreach ($formk as $item)
              <tr>
                <td><img src="{{  asset('asset/kehilangan/'.$item->gambar) }}" alt="" width="80px" height="80px"></th>
                <td>{{ $item['barang'] }}</th>
                <td>{{ $item['pemilik'] }}</th>
                <td>{{ $item['telepon'] }}</th>
                <td>{{ $item['deskripsi'] }}</th>
                <td>{{ $item['lokasi'] }}</th>
                <td>
                  <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button style="background-color: rgb(254, 67, 67);border:none;width:50px;border-radius:3px;"><a href="/delete-kehilangan/{{$item['id']}}" style="text-decoration: none;color:white;" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                </button></form></th>    
              </tr>
              @endforeach
            </table>
      </div>
    </div>
      </div>
      <br><br>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title" style="text-decoration: black;" id="laporan">Laporan Pengambilan Barang</div>
          <div class="sales-details">
            <table class="details" border="1">
              <tr>
                <th>ID Barang</th>
                <th>Nama Pengambil</th>
                <th>Nama Barang</th>
                <th>NIM</th>
                <th>Telepon</th>
                <th>Waktu Pengambilan</th>
              </tr>
              @foreach ($ambil as $taken)
              <tr>
                <td>{{ $taken['id_barang'] }}</td>
                <td>{{ $taken['pengambil'] }}</td>
                <td>{{ $taken['barang'] }}</td>
                <td>{{ $taken['nim'] }}</td>
                <td>{{ $taken['telepon'] }}</td>
                <td>{{ $taken['created_at'] }}</td>
              </tr>
              @endforeach
            </table>
      </div>
    </div>
      </div>
  </section>
 <br><br><br><br><br><br>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

