<?php
$servername = "localhost"; // Ganti dengan nama server Anda jika berbeda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "tws"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ruangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            font-family: "Prompt", sans-serif;
            font-weight: 200;
            font-style: normal;
        };
</style>
<body class="bg-[#F3F3F4]">
    <!-- Navbar -->
    <nav class="sticky bg-[#F6995C] w-full z-20 top-0 start-0">
        <div class="flex flex-row items-center justify-between mx-auto p-4">
            <div class="flex"> 
                <img src="../Asset/Logo_PENS.png" class="h-[70px]" alt="Pens Logo" />
                <span class="self-center text-[40px] font-bold whitespace-nowrap text-black" id="web_name">EEPIS LENDING SPACE</span>
            </div>
            <!-- <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button> -->
            <div class="hidden w-full md:block md:w-auto" id="navbar_button">
                <ul class="font-semibold flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                    <li>
                        <a href="/beranda" class="block py-2 px-3 hover:text-white text-[30px] md:p-0" id="beranda">Beranda</a>
                    </li>
                    <li>
                        <a href="/daftarruangan" class="block py-2 px-3 text-black rounded-none text-white border-b-[2px] border-white text-[30px] md:p-0 " id="daftar_ruangan">Daftar Ruangan</a>
                    </li>
                    <li>
                        <a href="/daftarruangan" class="block py-2 px-3 text-black rounded-none hover:text-white text-[30px] md:p-0" id="daftar_peminjaman">Daftar Pesan</a>
                    </li>
                    <li>
                        <a href="/peminjaman" class="block py-2 px-3 text-black rounded-none hover:text-white text-[30px] md:p-0" id="daftar_pesan">Input Peminjaman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex justify-center">
        <div class="flex h-full w-[1800px] mt-[40px] p-2 bg-white  dark:bg-white border border-black rounded-none shadow">
            <!-- Accordion -->
            <div id="accordion-collapse" data-accordion="collapse" data-active-classes="bg-[#EEEEEE] dark:bg-[#EEEEEE] text-black" class="containter flex flex-col place-content-center mx-auto">
                <?php           
                    // Array untuk menyimpan nama-nama gedung yang unik
                    $gedung_names = array();

                    // Query SQL untuk mengambil nama-nama gedung
                    $sql_gedung = "SELECT DISTINCT asal_gedung FROM ruang";
                    $result_gedung = $conn->query($sql_gedung);

                    // Memeriksa apakah ada data
                    if ($result_gedung->num_rows > 0) {
                        // Memasukkan nama-nama gedung ke dalam array
                        while($row_gedung = $result_gedung->fetch_assoc()) {
                            $gedung_names[] = $row_gedung["asal_gedung"];
                        }
                    }
                    $i = 0;
                    // Loop untuk setiap gedung
                    foreach ($gedung_names as $gedung_name) {
                        // Query SQL untuk mengambil data ruang berdasarkan gedung
                        $sql = "SELECT * FROM ruang WHERE asal_gedung = '$gedung_name'";
                        $result = $conn->query($sql);

                        // Memeriksa apakah ada data
                        if ($result->num_rows > 0) {
                            $i++;
                            // Mulai membuat accordion untuk gedung
                            echo '<!-- ' . $gedung_name . ' -->';
                            echo '<h2 id="accordion-collapse-heading-' . $i . '">';
                            echo '<button type="button" class="flex items-center justify-between bg-white dark:bg-white w-[1300px] p-5 font-medium rtl:text-right border border-black rounded-none gap-3" data-accordion-target="#accordion-collapse-body-' . $i . '" aria-expanded="false" aria-controls="accordion-collapse-body-' . $i . '">';
                            echo '<span class="text-[#3E72D8]">Gedung ' . $gedung_name . '</span>';
                            echo '<svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black hover:text-[#3E72D8]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">';
                            echo '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>';
                            echo '</svg>';
                            echo '</button>';
                            echo '</h2>';
                            echo '<div id="accordion-collapse-body-' . $i . '" class="hidden" aria-labelledby="accordion-collapse-heading-' . $i . '">';
                            echo '<div class="p-5 border border-b-0 border-black bg-white dark:bg-white">';
                            echo '<div class="divide-y divide-black">';
                            
                            // Output informasi ruang di dalam gedung
                            while($row = $result->fetch_assoc()) {
                                echo '<div>';
                                echo '<p class="mb-2 text-black">Nama Ruang: ' . $row["nama_ruang"] . '</p>';
                                echo '<p class="mb-2 text-black">Kapasitas Ruang: ' . $row["kapasitas_ruang"] . '</p>';
                                echo '<p class="mb-2 text-black">Lantai Gedung: ' . $row["lantai_gedung"] . '</p>';
                                echo '</div>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo "Tidak ada data untuk Gedung " . $gedung_name;
                        }
                    }
                    $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <footer class="flex fixed bottom-0 left-0 z-20 w-full bg-[#51829B] rounded-none shadow" id="copyright">
        <div class="items-center mx-auto max-w-screen-xl p-4">
            <span class="text-[17px] text-white sm:text-center">
                © 2024 Kelompok 4 - Teknologi Web Service. All rights reserved
                <!-- © 2024 <a href="https://sainsdata.pens.ac.id/" class="hover:underline" target="_blank">SDT22</a>. All Rights Reserved. -->
            </span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>