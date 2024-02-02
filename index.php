<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jembo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white rounded p-6" id="form">
    <h1>Isi Data Karyawan</h1>
    <br>
    <br>
        <form action="fungsi/simpan-data-karyawan.php" method="post">
            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold text-gray-600">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- NIK (Nomor Induk Karyawan) -->
            <div class="mb-4">
            <label for="nik" class="block text-sm font-semibold text-gray-600">NIK</label>
            <input type="text" id="nik" name="nik" class="mt-1 p-2 w-full border rounded-md">
             </div>

             <!-- Tanggal -->
            <div class="mb-4">
            <label for="tanggal" class="block text-sm font-semibold text-gray-600">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" class="mt-1 p-2 w-full border rounded-md">
             </div>

             <!-- Departemen (Opsi Pilihan) -->
            <div class="mb-4">
                <label for="departemen" class="block text-sm font-semibold text-gray-600">Departemen</label>
                <select id="departemen" name="departemen" class="mt-1 p-2 w-full border rounded-md">
                    <option>Pilih :</option>
                    <option value="Plant-A">Plant-A</option>
                    <option value="Plant-B">Plant-B</option>
                    <option value="Plant-C">Plant-C</option>
                    <option value="Plant-D">Plant-D</option>
                    <option value="Plant-E">Plant-E</option>
                    <option value="CSO">CSO</option>
                    <option value="Facility">Facility</option>
                    <option value="IT">IT</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Finance & Accounting">Finance & Accounting</option>
                    <option value="General Affair">General Affair</option>
                    <option value="Human Capital">Human Capital</option>
                    <option value="Internal Control">Internal Control</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Process Engineering">Process Engineering</option>
                    <option value="Procurement">Procurement</option>
                    <option value="Production Planning">Production Planning</option>
                    <option value="Quality Assurance">Quality Assurance</option>
                    <option value="Salesupport">Sales Support</option>
                    <option value="Sales">Sales</option>
                    <!-- Tambahkan opsi departemen lainnya sesuai kebutuhan -->
                </select>
            </div>

            <!-- Posisi Jabatan (Opsi Pilihan) -->
            <div class="mb-4">
                <label for="jabatan" class="block text-sm font-semibold text-gray-600">Posisi Jabatan</label>
                <select id="jabatan" name="jabatan" class="mt-1 p-2 w-full border rounded-md">
                    <option value="pilih :">Pilih :</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Staff">Staff</option>
                    <option value="Foremen">Foremen</option>
                    <option value="Operator">Operator</option>
                    <!-- Tambahkan opsi jabatan lainnya sesuai kebutuhan -->
                </select>
            </div>


            <input type="submit" value="Submit" onclick="submitForm()" class="bg-blue-500 text-white px-4 py-2 rounded-md">
        </form>
    </div>
    
       
            <?php
            /*
                require('module/koneksi.php');

                $sql = "SELECT id, username, created FROM pageform";
                $result = $conn->query($sql);
            
                
            
                // Tutup koneksi
                $conn->close();
                */
                ?>
           <script>
                function submitForm(e) {
                    e.preventDefault();
                    // Mendapatkan nilai posisi jabatan dari elemen seleksi
                    var jabatan = document.getElementById("jabatan").value;
                    var nama = document.getElementById("nama").value;
                    var nik = document.getElementById("nik").value;
                    var tanggal = document.getElementById("tanggal").value;
                    var departemen = document.getElementById("departemen").value;

                    // Validasi: Memeriksa apakah semua input sudah diisi
                     if (!nama || !nik || jabatan === "pilih :" || departemen === "pilih :") {
                     alert("Harap isi semua data dengan benar.");
                     return;
                     }
            
                    // Menentukan halaman yang sesuai berdasarkan posisi jabatan
                    var redirectPage = "";
                    if (jabatan === "Supervisor" || jabatan === "Foremen") {
                        redirectPage = "managerial.php";
                    } else if (jabatan === "Staff" || jabatan === "Operator") {
                        redirectPage = "non-managerial.php";
                    } else {
                        // Handle kondisi lain jika diperlukan
                        alert("Semua data harus di isi");
                        return;
                    }
            
                    // Membuat URL dengan query parameters
                    var url = redirectPage + "?nama=" + encodeURIComponent(nama) +
                              "&nik=" + encodeURIComponent(nik) +
                              "&tanggal=" + encodeURIComponent(tanggal) +
                              "&departemen=" + encodeURIComponent(departemen) +
                              "&jabatan=" + encodeURIComponent(jabatan);
            
                    // Mengarahkan pengguna ke halaman yang sesuai dengan URL yang berisi query parameters
                    window.location.href = url;
                }
            </script>
</body>
</html>
