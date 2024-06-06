<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPIS Lending Space</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
        <!-- Navbar -->
        <nav class="sticky bg-[#F6995C] w-full z-20 top-0 start-0">
            <div class="flex flex-row items-center justify-between mx-auto p-4">
                <div class="flex"> 
                    <img src="Asset/Logo_PENS.png" class="h-[70px]" alt="Pens Logo" />
                    <span class="self-center text-[40px] font-bold whitespace-nowrap text-black" id="web_name">EEPIS LENDING SPACE</span>
                </div>
                <div class="hidden w-full md:block md:w-auto" id="navbar_button">
                    <ul class="font-semibold flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                        <li>
                            <a href="/beranda" class="block py-2 px-3 hover:text-white text-[30px] md:p-0" id="beranda">Beranda</a>
                        </li>
                        <li>
                            <a href="/daftarruangan" class="block py-2 px-3 text-black rounded-none hover:text-white text-[30px] md:p-0 " id="daftar_ruangan">Daftar Ruangan</a>
                        </li>
                        <li>
                            <a href="/daftarpesan" class="block py-2 px-3 text-black rounded-none text-white border-b-[2px] border-white text-[30px] md:p-0" id="daftar_peminjaman">Daftar Pesan</a>
                        </li>
                        <li>
                            <a href="/peminjaman" class="block py-2 px-3 text-black rounded-none hover:text-white text-[30px] md:p-0" id="daftar_peminjaman">Input Peminjaman</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="grid grid-row-2 justify-center">
            <div class="bg-white p-4 rounded-lg shadow-lg mt-[50px]">
                <h2 class="text-xl font-bold mb-4">Filter Pencarian</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="nrp" class="block text-sm font-medium text-gray-700">NRP Peminjam</label>
                        <input type="text" id="nrp" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="NRP Peminjam">
                    </div>
                    <div>
                        <label for="bulan" class="block text-sm font-medium text-gray-700">Bulan</label>
                        <select id="bulan" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Bulan Kegiatan</option>
                        </select>
                    </div>
                    <div>
                        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                        <select id="tahun" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Tahun Kegiatan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex flex-col max-w-[1800px] mt-[40px] p-2 bg-white border border-gray-200 rounded-none shadow ">
                <div class="flex flex-col place-content-center mx-auto">
                    <h2 class="text-xl font-bold mb-4">Daftar Pemesanan Ruangan</h2>

                    <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                        <div class="flex justify-between">
                            <div>
                                <p><span class="font-bold">Nama Peminjam:</span> Udin Harahap</p>
                                <p><span class="font-bold">NRP Peminjam:</span> 00001</p>
                                <p><span class="font-bold">Ormawa:</span> HIMIT</p>
                                <p><span class="font-bold">Nama Acara:</span> IT MOTION</p>
                                <p><span class="font-bold">Deskripsi Acara:</span> Acara Ulang Tahun HIMIT</p>
                                <p><span class="font-bold">Ruangan:</span> Lapangan Merah</p>
                                <p><span class="font-bold">Tanggal & Jam Pinjam:</span> 26-05-2024 07:00</p>
                                <p><span class="font-bold">Tanggal & Jam Selesai:</span> 26-05-2024 18:00</p>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <button class="bg-yellow-500 text-white px-4 py-2 rounded-md">Menunggu Persetujuan</button>
                                <button onclick="openModal('modal-1')" class="bg-blue-500 text-white px-4 py-2 rounded-md">Cek Tanda Tangan</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
                            </div>
                        </div>
                        <div id="modal-1" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-4 rounded-lg shadow-lg mx-auto">
                                <h3 class="text-lg font-bold mb-4">Tanda Tangan</h3>
                                <ul>
                                    <li>Dr. Tri Budi Santoso, S.T., M.T.</li>
                                    <li>Prof M. Udin Harun Al Rasyid S.Kom</li>
                                    <li>Ahmad Syauqi Ahsan, S.Kom., M.T.</li>
                                    <li>Nur Rosyid Mubtadai, S.Kom., M.T.</li>
                                    <li>Isbat Uzzin Nadhori, S.Kom., M.T.</li>
                                </ul>
                                <button onclick="closeModal('modal-1')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md">Close</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                        <div class="flex justify-between">
                            <div>
                                <p><span class="font-bold">Nama Peminjam:</span> Iwan Kuswani</p>
                                <p><span class="font-bold">NRP Peminjam:</span> 00002</p>
                                <p><span class="font-bold">Ormawa:</span> BEM</p>
                                <p><span class="font-bold">Nama Acara:</span> Studi Banding</p>
                                <p><span class="font-bold">Deskripsi Acara:</span> Studi banding BEM PENS dengan BEM POLTERA</p>
                                <p><span class="font-bold">Ruangan:</span> Theater D3</p>
                                <p><span class="font-bold">Tanggal & Jam Pinjam:</span> 17-05-2024 18:00</p>
                                <p><span class="font-bold">Tanggal & Jam Selesai:</span> 17-05-2024 21:00</p>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md">Permohonan Ditolak</button>
                                <button onclick="openModal('modal-2')" class="bg-blue-500 text-white px-4 py-2 rounded-md">Cek Tanda Tangan</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
                                <button onclick="opennote('note-1')" class="bg-[#23C6C8] text-white px-4 py-2 rounded-md">Cek Note</button>
                            </div>
                        </div>
                        <div id="modal-2" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-4 rounded-lg shadow-lg mx-auto">
                                <h3 class="text-lg font-bold mb-4">Tanda Tangan</h3>
                                <ul>
                                    <!-- Add signatures here as needed -->
                                    <li>Signature 1</li>
                                    <li>Signature 2</li>
                                    <li>Signature 3</li>
                                </ul>
                                <button onclick="closeModal('modal-2')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md">Close</button>
                            </div>
                        </div>
                        <div id="note-1" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-4 rounded-lg shadow-lg mx-auto">
                                <h3 class="text-lg font-bold mb-4">Note</h3>
                                <p>Acara Tidak Bermutu!!!!</p>
                                <button onclick="closenote('note-1')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md">Close</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                        <div class="flex justify-between">
                            <div>
                                <p><span class="font-bold">Nama Peminjam:</span> Aulia Aida</p>
                                <p><span class="font-bold">NRP Peminjam:</span> 00003</p>
                                <p><span class="font-bold">Ormawa:</span> HMCE</p>
                                <p><span class="font-bold">Nama Acara:</span> CEO 2023</p>
                                <p><span class="font-bold">Deskripsi Acara:</span> Kaderisasi HMCE 2023</p>
                                <p><span class="font-bold">Ruangan:</span> Lapangan Futsal</p>
                                <p><span class="font-bold">Tanggal & Jam Pinjam:</span> 14-05-2024 17:00</p>
                                <p><span class="font-bold">Tanggal & Jam Selesai:</span> 14-05-2024 21:00</p>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <button class="bg-green-500 text-white px-4 py-2 rounded-md">Permohonan Disetujui</button>
                                <button onclick="openModal('modal-3')" class="bg-blue-500 text-white px-4 py-2 rounded-md">Cek Tanda Tangan</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
                            </div>
                        </div>
                        <div id="modal-3" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-4 rounded-lg shadow-lg mx-auto">
                                <h3 class="text-lg font-bold mb-4">Tanda Tangan</h3>
                                <ul>
                                    <!-- Add signatures here as needed -->
                                    <li>Signature 1</li>
                                    <li>Signature 2</li>
                                    <li>Signature 3</li>
                                </ul>
                                <button onclick="closeModal('modal-3')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        function opennote(note) {
            document.getElementById(note).classList.remove('hidden');
        }
        function closenote(note) {
            document.getElementById(note).classList.add('hidden');
        }
    </script>

</body>
</html>
