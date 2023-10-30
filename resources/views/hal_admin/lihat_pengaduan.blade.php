<html>

<head>

    <title>PEMAJUAN HAM</title>
    <style type= "text/css">

    body {background-color : #ccc }

    .rangkasurat {width : 830px;margin:0 auto;background-color : #fff;padding: 20px;}

    table {border-bottom : 5px solid # 000; padding: 2px}

    .tengah {text-align : center;line-height: 10px;}

    .kanan {
            text-align: right;
        }

    .table1 {
   
    border-collapse: collapse;
    }
 
    .table1, td {
    
    padding: 14px 28px;
    }

     </style >

</head>

<body>

<div class = "rangkasurat">

     <table>


     <div class = "tengah">
      
         <h3>FORMULIR PENGADUAN</h3>

         <h3>DUGAAN PELANGGARAN HAK ASASI MANUSIA</h3>
     

         <p></p>

         <p></p>

</div>

                 
     </table >
     <br>

     <table class="table1 no-border table-hover">
                  <tr>
                  <td>Pada</td>
                  <td>hari</td>
                  <td width ="10px">{{ $single->created_at->locale('id')->isoFormat('dddd') }}</td> 
                  <td>tanggal</td> 
                  <td>{{ $single->created_at->format('d F Y') }}</td>
                  <td>saya :</td>      
                  </tr>
                </table>

                <table id="example2" class="table1 no-border table-hover">
                  <tr>
                    <td width ="100px"> Nama </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->warga->nama }}</td>     
                  </tr>
                    <td width ="100px"> Tempat Lahir </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->warga->tempat }}</td>     
                  </tr>

                  <tr>
                    <td width ="100px"> Tanggal Lahir </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->warga->tgl_lahir }}</td>     
                  </tr>

                  <tr>
                    <td width ="100px"> Pekerjaan </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->warga->pekerjaan }}</td>     
                  </tr>

                  <tr>
                    <td width ="100px"> Agama </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->warga->agama }}</td>     
                  </tr>

                  <tr>
                    <td width ="100px"> Alamat </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->warga->alamat }}</td>     
                  </tr>
                </table>

                <table id="example2" class="table1 no-border table-hover">
                  <thead>
                  <tr>
                    <td>
                        <font size="4"> Dengan didampingi saudara / kuasa hukum bernama :</font><br>
                    </td>   
                  </tr>
                  </tfoot>
                </table>

                <table id="example2" class="table no-border table-hover">
                  <tr>
                    <td> 1. </td>  
                    <td>{{ $single->nm_sdr_ksa_hkm }}</td>     
                  </tr>
                </table>

                <table id="example2" class="table no-border table-hover">
                  <thead>
                  <tr>
                    <td>
                        <font size="4"> Datang ke Kantor Wilayah Kalimantan Selatan untuk menyampaikan komunikasi dugaan pelanggaran hak asasi manusia yang saya hadapi / alami, sebagai berikut :</font><br>
                    </td>   
                  </tr>
                  </tfoot>
                </table>

                <table id="example2" class="table1 no-border table-hover">
                  <tr>
                    <td width =200px">1. Pokok Permasalahan </td> 
                    <td width ="1x">:</td> 
                    <td>{{ $single->pokok }}</td>     
                  </tr>

                  <tr>
                    <td width ="200px">2. Uraian permasalahan </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->uraian }}</td>     
                  </tr>

                  <tr>
                    <td width ="200px">3. Data dan Informasi </td>
                    <td width ="1x">:</td>  
                    <td>{{ $single->data_info }}</td>     
                  </tr>

                  <tr>
                    <td width ="200px">4. Hal - hal yang dimohon </td>  
                    <td width ="1x">:</td>
                    <td>{{ $single->hal_dimohon }}</td>     
                  </tr>
                </table>

                <table id="example2" class="table1 no-border table-hover">
                  <thead>
                  <tr>
                    <td>
                        <font size="4"> Demikian komunikasi ini saya / kami sampaikan dengan sebenarnya dan dapat dipertanggung jawabkan. </font><br>
                    </td>   
                  </tr>
                  </tfoot>
                </table> 

            <div class="kanan">
              <p>{{ $single->created_at->format('d F Y') }}</p>
              <p>Pengadu</p>
              <p>Tanda Tangan</p>
              <img src="{{ asset('lampiran/' . $single->upload_ttd) }}" width="100" height="50">
              <p>{{ $single->warga->nama }}</p>
            </div>
    </div>

</div>

</body>

<script>
  window.print();
</script>

</html>