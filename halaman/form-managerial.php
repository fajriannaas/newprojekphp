<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Managerial</title>
    <script>
        // Membaca query parameters dari URL
        var urlParams = new URLSearchParams(window.location.search);
        
        // Menetapkan nilai ke elemen HTML sesuai dengan data dari query parameters
        document.getElementById("nama").innerText = "Nama: " + urlParams.get("nama");
        document.getElementById("nik").innerText = "NIK: " + urlParams.get("nik");
        document.getElementById("departemen").innerText = "Departemen: " + urlParams.get("departemen");
        document.getElementById("jabatan").innerText = "Posisi Jabatan: " + urlParams.get("jabatan");

        var currentDate = new Date().toISOString().split('T')[0];
        document.getElementById("assessmentDate").value = currentDate;

        console.log(urlParams.get("nama"));
    </script>
</head>


<body>
    <?php
    session_start();

    
    ?>

    <button class="bg-blue-500 text-white px-0 py-0 rounded" onclick="location.href='../index.php'">Kembali</button>
<h1>Competency Assesment</h1>
    <div id="data-container">
        <p id="departemen"><?php print_r($_SESSION['registration_data']['departemen']); ?></p>
    <div>
    <form action="../fungsi/simpan-data-managerial.php" method="post">
        <table border="1" width="50%" height="30px">
          
                <tr style="background-color: aqua;">
                    <th>
                        <p id="jabatan"><?php print_r($_SESSION['registration_data']['jabatan']); ?></p>
                    </th>
                    <th colspan="6">
                        <p id="nama"><?php print_r($_SESSION['registration_data']['nama']); ?></p>
                    </th>
                    <th>
                        <p id="nik"><?php print_r($_SESSION['registration_data']['nik']); ?></p>
                    </th>
                    <th colspan="4">Date
                        <p><?php print_r($_SESSION['registration_data']['tanggal']); ?></p>
                    </div>
                    
                    </th>
                </tr>
                <tr style="background-color: aqua;">
                    <th rowspan="2">Competency</th>
                    <th colspan="3">Importance</th>
                    <th colspan="5">Profile</th>
                    <th colspan="2">Score</th>
                </tr>
                <tr style="background-color: aqua;">
                    <th>Low</th>
                    <th>Med</th>
                    <th>High</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>Pos.</th>
                    <th>Pers.</th>
                </tr>
                <tr style="background-color: yellow;">
                    <th colspan="4">Core Competency</th>
                    <th colspan="7"></th>
                </tr>
                <tr>
                    <td>Communication</td>
                    <td><input type="radio" name="rad_com_1" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_com_1" id="rad-med" value="1">
                    </td>
                    <td><input type="radio" name="rad_com_1" id="rad-high" value="1">
                    </td>
                    <td><input type="radio" id="rad" name="rad_prof_1" value="3">
                    </td>
                    <td><input type="radio" id="rad" name="rad_prof_1" value="6">
                    </td>
                    <td><input type="radio" id="rad" name="rad_prof_1" value="9">
                    </td>
                    <td><input type="radio" id="rad" name="rad_prof_1" value="12">
                    </td>
                    <td><input type="radio" id="rad" name="rad_prof_1" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value" name="com_value" >
                          </td>
                    
                </tr>
                <tr>
                    <td>Competency</td>
                    <td><input type="radio" name="rad_comp_2" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_comp_2" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_comp_2" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad2" name="rad_prof_2" value="3">
                    </td>
                    <td><input type="radio" id="rad2" name="rad_prof_2" value="6">
                    </td>
                    <td><input type="radio" id="rad2" name="rad_prof_2" value="9">
                    </td>
                    <td><input type="radio" id="rad2" name="rad_prof_2" value="12">
                    </td>
                    <td><input type="radio" id="rad2" name="rad_prof_2" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value2" name="com_value2">
                    </td>
                </tr>
                <tr>
                    <td>Organizational Awareness</td>
                    <td><input type="radio" name="rad_orawa_3" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_orawa_3" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_orawa_3" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad3" name="rad_prof_3" value="3">
                    </td>
                    <td><input type="radio" id="rad3" name="rad_prof_3" value="6">
                    </td>
                    <td><input type="radio" id="rad3" name="rad_prof_3" value="9">
                    </td>
                    <td><input type="radio" id="rad3" name="rad_prof_3" value="12">
                    </td>
                    <td><input type="radio" id="rad3" name="rad_prof_3" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value3" name="com_value3">
                    </td>
                </tr>
                <tr>
                    <td>Integrity</td>
                    <td><input type="radio" name="rad_in_4" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_in_4" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_in_4" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad4" name="rad_prof_4" value="3">
                    </td>
                    <td><input type="radio" id="rad4" name="rad_prof_4" value="6">
                    </td>
                    <td><input type="radio" id="rad4" name="rad_prof_4" value="9">
                    </td>
                    <td><input type="radio" id="rad4" name="rad_prof_4" value="12">
                    </td>
                    <td><input type="radio" id="rad4" name="rad_prof_4" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value4" name="com_value4">
                    </td>
                </tr>
                <tr>
                    <td>Teamwork & Cooperation</td>
                    <td><input type="radio" name="rad_tc_5" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_tc_5" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_tc_5" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad5" name="rad_prof_5" value="3">
                    </td>
                    <td><input type="radio" id="rad5" name="rad_prof_5" value="6">
                    </td>
                    <td><input type="radio" id="rad5" name="rad_prof_5" value="9">
                    </td>
                    <td><input type="radio" id="rad5" name="rad_prof_5" value="12">
                    </td>
                    <td><input type="radio" id="rad5" name="rad_prof_5" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value5" name="com_value5">
                    </td>
                </tr>
                <tr>
                    <td>Commitment to Continuos Learning</td>
                    <td><input type="radio" name="rad_ccl_6" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_ccl_6" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_ccl_6" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad6" name="rad_prof_6" value="3">
                    </td>
                    <td><input type="radio" id="rad6" name="rad_prof_6" value="6">
                    </td>
                    <td><input type="radio" id="rad6" name="rad_prof_6" value="9">
                    </td>
                    <td><input type="radio" id="rad6" name="rad_prof_6" value="12">
                    </td>
                    <td><input type="radio" id="rad6" name="rad_prof_6" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value6" name="com_value6">
                    </td>
                </tr>
                <tr>
                    <td>Initiative</td>
                    <td><input type="radio" name="rad_int_7" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_int_7" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_int_7" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad7" name="rad_prof_7" value="3">
                    </td>
                    <td><input type="radio" id="rad7" name="rad_prof_7" value="6">
                    </td>
                    <td><input type="radio" id="rad7" name="rad_prof_7" value="9">
                    </td>
                    <td><input type="radio" id="rad7" name="rad_prof_7" value="12">
                    </td>
                    <td><input type="radio" id="rad7" name="rad_prof_7" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value7" name="com_value7">
                    </td>
                </tr>
                <tr>
                    <td>Adaptibility</td>
                    <td><input type="radio" name="rad_ad_8" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_ad_8" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_ad_8" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad8" name="rad_prof_8" value="3">
                    </td>
                    <td><input type="radio" id="rad8" name="rad_prof_8" value="6">
                    </td>
                    <td><input type="radio" id="rad8" name="rad_prof_8" value="9">
                    </td>
                    <td><input type="radio" id="rad8" name="rad_prof_8" value="12">
                    </td>
                    <td><input type="radio" id="rad8" name="rad_prof_8" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value8" name="com_value8">
                    </td>
                </tr>
                <tr>
                    <td>HSE Awareness</td>
                    <td><input type="radio" name="rad_hse_9" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_hse_9" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_hse_9" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad9" name="rad_prof_9" value="3">
                    </td>
                    <td><input type="radio" id="rad9" name="rad_prof_9" value="6">
                    </td>
                    <td><input type="radio" id="rad9" name="rad_prof_9" value="9">
                    </td>
                    <td><input type="radio" id="rad9" name="rad_prof_9" value="12">
                    </td>
                    <td><input type="radio" id="rad9" name="rad_prof_9" value="15">
                    </td>
                    <td>9

                    </td>
                    <td>
                        <input type="number" id="com_value9" name="com_value9">
                    </td>
                </tr>

                <tr style="background-color: yellow;">
                    <th colspan="4">Managerial Competency</th>
                    <th colspan="7"></th>
                </tr>
                <tr>
                    <td>Leading & Developing</td>
                    <td><input type="radio" name="rad_ld_10" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_ld_10" id="rad-med" value="1">
                    </td>
                    <td><input type="radio" name="rad_ld_10" id="rad-high" value="1">
                    </td>
                    <td><input type="radio" id="rad10" name="rad_prof_10" value="3">
                    </td>
                    <td><input type="radio" id="rad10" name="rad_prof_10" value="6">
                    </td>
                    <td><input type="radio" id="rad10" name="rad_prof_10" value="9">
                    </td>
                    <td><input type="radio" id="rad10" name="rad_prof_10" value="12">
                    </td>
                    <td><input type="radio" id="rad10" name="rad_prof_10" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value10" name="com_value10" >
                          </td>
                    
                </tr>
                <tr>
                    <td>Financial Management</td>
                    <td><input type="radio" name="rad_fm_11" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_fm_11" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_fm_11" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad11" name="rad_prof_11" value="3">
                    </td>
                    <td><input type="radio" id="rad11" name="rad_prof_11" value="6">
                    </td>
                    <td><input type="radio" id="rad11" name="rad_prof_11" value="9">
                    </td>
                    <td><input type="radio" id="rad11" name="rad_prof_11" value="12">
                    </td>
                    <td><input type="radio" id="rad11" name="rad_prof_11" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value11" name="com_value11">
                    </td>
                </tr>
                <tr>
                    <td>Strategic Thinking</td>
                    <td><input type="radio" name="rad_st_12" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_st_12" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_st_12" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad12" name="rad_prof_12" value="3">
                    </td>
                    <td><input type="radio" id="rad12" name="rad_prof_12" value="6">
                    </td>
                    <td><input type="radio" id="rad12" name="rad_prof_12" value="9">
                    </td>
                    <td><input type="radio" id="rad12" name="rad_prof_12" value="12">
                    </td>
                    <td><input type="radio" id="rad12" name="rad_prof_12" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value12" name="com_value12">
                    </td>
                </tr>
                <tr>
                    <td>Language</td>
                    <td><input type="radio" name="rad_langu_13" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_langu_13" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_langu_13" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad13" name="rad_prof_13" value="3">
                    </td>
                    <td><input type="radio" id="rad13" name="rad_prof_13" value="6">
                    </td>
                    <td><input type="radio" id="rad13" name="rad_prof_13" value="9">
                    </td>
                    <td><input type="radio" id="rad13" name="rad_prof_13" value="12">
                    </td>
                    <td><input type="radio" id="rad13" name="rad_prof_13" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value13" name="com_value13">
                    </td>
                </tr>
                <tr>
                    <td>Resource Management</td>
                    <td><input type="radio" name="rad_rm_14" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_rm_14" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_rm_14" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad14" name="rad_prof_14" value="3">
                    </td>
                    <td><input type="radio" id="rad14" name="rad_prof_14" value="6">
                    </td>
                    <td><input type="radio" id="rad14" name="rad_prof_14" value="9">
                    </td>
                    <td><input type="radio" id="rad14" name="rad_prof_14" value="12">
                    </td>
                    <td><input type="radio" id="rad14" name="rad_prof_14" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value14" name="com_value14">
                    </td>
                </tr>
                <tr>
                    <td>Problem Solving & Judgement</td>
                    <td><input type="radio" name="rad_psj_15" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_psj_15" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_psj_15" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad15" name="rad_prof_15" value="3">
                    </td>
                    <td><input type="radio" id="rad15" name="rad_prof_15" value="6">
                    </td>
                    <td><input type="radio" id="rad15" name="rad_prof_15" value="9">
                    </td>
                    <td><input type="radio" id="rad15" name="rad_prof_15" value="12">
                    </td>
                    <td><input type="radio" id="rad15" name="rad_prof_15" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value15" name="com_value15">
                    </td>
                </tr>
                
                <tr style="background-color: yellow;">
                    <th colspan="4">Technical/Funtional Competency</th>
                    <th colspan="7"></th>
                </tr>
                <tr>
                    <td>Funtional Expertise :</td>
                    <td><input type="radio" name="rad_fe_16" id="rad-low" value="1">
                    </td>
                    <td><input type="radio" name="rad_fe_16" id="rad-med" value="2">
                    </td>
                    <td><input type="radio" name="rad_fe_16" id="rad-high" value="3">
                    </td>
                    <td><input type="radio" id="rad16" name="rad_prof_16" value="3">
                    </td>
                    <td><input type="radio" id="rad16" name="rad_prof_16" value="6">
                    </td>
                    <td><input type="radio" id="rad16" name="rad_prof_16" value="9">
                    </td>
                    <td><input type="radio" id="rad16" name="rad_prof_16" value="12">
                    </td>
                    <td><input type="radio" id="rad16" name="rad_prof_16" value="15">
                    </td>
                    <td>15

                    </td>
                    <td>
                        <input type="number" id="com_value16" name="com_value16">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="4">Keterangan :</td>
                    <td colspan="5">Total Score</td>
                    <td>192</td>
                    <td>
                        <input type="number" id="com_value17" name="com_value17">
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td colspan="4">Klik pada kolom profile kompetensi yang sesuai</td>
                    <td colspan="5">Person/Position Ratio</td>
                    <td colspan="2"><input type="number" id="com_value18" name="com_value18"></td>
                </tr>
        </table>
        
        <h6>Berdasarkan diskusi yang dilakukan:</h6>
        <!-- Komentar -->
        <div class="mb-4">
            <label for="keterangan" class="block text-sm font-semibold text-gray-600">Kekuatan yang menonjol</label>
            <textarea id="keterangan" name="kekuatan" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>
        <br>
        <br>
        <!-- Komentar -->
        <div class="mb-4">
            <label for="keterangan" class="block text-sm font-semibold text-gray-600">Kelemahan yang menonjol</label>
            <textarea id="keterangan" name="kelemahan" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>
        <br>
        <!-- Komentar -->
        <div class="mb-4">
            <label for="keterangan" class="block text-sm font-semibold text-gray-600">Tindakan</label>
            <textarea id="keterangan" name="tindakan" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>
        <br>
        <br>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/managerial.js"></script>

    <script>
    function saveData() {
        // Simulasikan keberhasilan penyimpanan data
        // Gantilah bagian berikut dengan logika penyimpanan data sesungguhnya
        var simpanBerhasil = true;

        if (simpanBerhasil) {
            alert('Data berhasil disimpan!');
            // Submit form setelah berhasil menyimpan data
            document.querySelector('form').submit();
        } else {
            alert('Maaf, terjadi kesalahan. Data tidak berhasil disimpan.');
        }
    }
</script>

    
    <!-- Tombol Save -->
    <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">
            Simpan
        </button>
</form>
        
    

    <?php
    /*
                require('module/koneksi.php');

                $sql = "SELECT id, username, created FROM pagefrom";
                $result = $conn->query($sql);
            
                
            
                // Tutup koneksi
                $conn->close();
                */
                ?>
</form>
</body>
</html>
