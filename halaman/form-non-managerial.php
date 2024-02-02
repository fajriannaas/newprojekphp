<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Non Managerial</title>
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
    </script>
</head>

<body>
<?php session_start(); ?>
<button class="bg-blue-500 text-white px-0 py-0 rounded" onclick="location.href='../index.php'">Kembali</button>

<h1>Competency Assesment</h1>
    <div id="data-container">
        <p id="departemen"><?php print_r($_SESSION['registration_data']['departemen']); ?></p>
    <div>
    <form action="../fungsi/simpan-data-non-managerial.php" method="post">
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
                <th colspan="4">Technical/Funtional Competency</th>
                <th colspan="7"></th>
            </tr>
            <tr>
                <td>Funtional Expertise :</td>
                <td><input type="radio" name="rad_fe_10" id="rad-low" value="1">
                </td>
                <td><input type="radio" name="rad_fe_10" id="rad-med" value="2">
                </td>
                <td><input type="radio" name="rad_fe_10" id="rad-high" value="3">
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
                    <input type="number" id="com_value10" name="com_value10">
                </td>
            </tr>
            
            <tr>
                <td colspan="4">Keterangan :</td>
                <td colspan="5">Total Score</td>
                <td>144</td>
                <td>
                    <input type="number" id="com_value11" name="com_value11">
                </td>
            </tr>
            <tr>
                <td>-</td>
                <td colspan="4">Klik pada kolom profile kompetensi yang sesuai</td>
                <td colspan="5">Person/Position Ratio</td>
                <td colspan="2"><input type="number" id="com_value12" name="com_value12"></td>
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
        <!-- Tombol Save -->
        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">
            Simpan
        </button>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/nonmanagerial.js"></script>
</body>
</html>
