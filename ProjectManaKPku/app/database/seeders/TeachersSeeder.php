<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
                'name' => "Prof. Arif",
                'majors' => "Kimia",
                'work_experience' => "15 tahun mengajar kimia di Universitas Kota",
                'attended' => "Sekolah Tinggi Kimia Negeri",
                'skills' => "Kimia Organik, Kimia Analitik, Manajemen Laboratorium",
                'email' => "arif@gmail.com",
                'password' => bcrypt('password'),
                'username' => "arif",
                'nationality' => "Indonesia",
                'gender' => "Laki-laki",
                'Additional_information' => "Menerbitkan makalah riset tentang kimia hijau",
                'Hobbys' => "Memasak, Berkebun",
                'age' => 40,
                'image' => "Teachers_1.jpg",
                'about' => "Dedikasi untuk menanamkan cinta pada keajaiban reaksi kimia pada siswa.",
                'description' => "Prof. Arif berfokus pada membuat kimia menjadi mata pelajaran yang menarik untuk siswa.",
                'phone' => "+6281122334455",
                ]);
            DB::table('teachers')->insert([
                'name' => "Dr. Anisa",
                'majors' => "Sejarah",
                'work_experience' => "12 tahun mengajar sejarah di SMA Heritage",
                'attended' => "Universitas Studi Sejarah",
                'skills' => "Penelitian Arsip, Historiografi, Sejarah Budaya",
                'email' => "anisa@gmail.com",
                'password' => bcrypt('password'),
                'username' => "anisa",
                'nationality' => "Indonesia",
                'gender' => "Perempuan",
                'Additional_information' => "Mengadakan seminar tentang sejarah lokal",
                'Hobbys' => "Traveling, Menulis",
                'age' => 38,
                'image' => "Teachers_2.jpeg",
                'about' => "Passionate mengenai memperkenalkan kisah-kisah masa lalu pada siswa.",
                'description' => "Dr. Anisa membawa sejarah menjadi hidup dalam pendekatan mengajar yang menarik.",
                'phone' => "+6281556677889",
                ]);

        DB::table('teachers')->insert([
            'name' => "Dr. Budi",
                'majors' => "Bahasa Indonesia",
                'work_experience' => "10 tahun mengajar bahasa Indonesia di SMP Bahagia",
                'attended' => "Universitas Sastra",
                'skills' => "Sastra, Tata Bahasa, Sastra Daerah",
                'email' => "budi@gmail.com",
                'password' => bcrypt('password'),
                'username' => "budi",
                'nationality' => "Indonesia",
                'gender' => "Laki-laki",
                'Additional_information' => "Mengembangkan kurikulum bahasa Indonesia",
                'Hobbys' => "Musik, Menulis",
                'age' => 34,
                'image' => "Teachers_3.jpeg",
                'about' => "Passionate dalam mengajarkan keindahan bahasa Indonesia kepada siswa.",
                'description' => "Dr. Budi berfokus pada memperkaya pemahaman siswa terhadap kekayaan budaya lewat bahasa.",
                'phone' => "+628144332211",
                ]);
        DB::table('teachers')->insert([
            'name' => "Susi Nurhayati",
                'majors' => "Matematika",
                'work_experience' => "8 tahun mengajar matematika di SMA Cemerlang",
                'attended' => "Universitas Matematika",
                'skills' => "Aljabar, Geometri, Statistika",
                'email' => "susi@gmail.com",
                'password' => bcrypt('password'),
                'username' => "susi",
                'nationality' => "Indonesia",
                'gender' => "Perempuan",
                'Additional_information' => "Menjadi tutor matematika di luar jam kerja",
                'Hobbys' => "Berlari, Seni Kriya",
                'age' => 31,
                'image' => "Teachers_4.jpg",
                'about' => "Mengajarkan matematika dengan cara yang menyenangkan bagi siswa.",
                'description' => "Susi Nurhayati ingin memperlihatkan bahwa matematika bisa dinikmati.",
                'phone' => "+628188776655",

                ]);
                DB::table('teachers')->insert([
                    'name' => "Andi Prasetyo",
                'majors' => "Ekonomi",
                'work_experience' => "12 tahun mengajar ekonomi di Universitas Ekonomi Makmur",
                'attended' => "Fakultas Ekonomi",
                'skills' => "Ekonomi Mikro, Ekonomi Makro, Manajemen Keuangan",
                'email' => "andi@gmail.com",
                'password' => bcrypt('password'),
                'username' => "andi",
                'nationality' => "Indonesia",
                'gender' => "Laki-laki",
                'Additional_information' => "Mempunyai bisnis sendiri di bidang konsultan keuangan",
                'Hobbys' => "Berenang, Koleksi koin",
                'age' => 42,
                'image' => "Teachers_5.jpg",
                'about' => "Mengajarkan ilmu ekonomi untuk kehidupan sehari-hari.",
                'description' => "Andi Prasetyo berusaha mengajarkan konsep ekonomi dengan cara praktis.",
                'phone' => "+628177889900",
                ]);

                DB::table('teachers')->insert([
                    'name' => "Fitri Rachmawati",
                    'majors' => "Sastra Inggris",
                    'work_experience' => "8 tahun mengajar sastra Inggris di Universitas Bahasa",
                    'attended' => "Sekolah Sastra Inggris",
                    'skills' => "Kesusastraan, Penerjemahan, Penulisan Kreatif",
                    'email' => "fitri@gmail.com",
                    'password' => bcrypt('password'),
                    'username' => "fitri",
                    'nationality' => "Indonesia",
                    'gender' => "Perempuan",
                    'Additional_information' => "Aktif menulis artikel untuk majalah bahasa",
                    'Hobbys' => "Melukis, Menonton film",
                    'age' => 33,
                    'image' => "Teachers_6.jpg",
                    'about' => "Membuat pembelajaran bahasa Inggris menyenangkan.",
                    'description' => "Fitri Rachmawati ingin memperkaya pemahaman siswa tentang sastra Inggris.",
                    'phone' => "+628155667722",

                ]);

                DB::table('teachers')->insert([
                    'name' => "Drs. Cahyo",
                'majors' => "Teknik Sipil",
                'work_experience' => "8 tahun sebagai insinyur sipil",
                'attended' => "Teknik Universitas Jaya",
                'skills' => "Desain struktural, manajemen proyek konstruksi",
                'email' => "cahyo@gmail.com",
                'password' => bcrypt('password'),
                'username' => "cahyo",
                'nationality' => "Indonesia",
                'gender' => "Laki-laki",
                'Additional_information' => "Terlibat dalam proyek pembangunan jembatan terkenal",
                'Hobbys' => "Mendaki gunung, Menyelam",
                'age' => 38,
                'image' => "Teachers_7.png",
                'about' => "Mengajarkan prinsip-prinsip teknik sipil yang inovatif.",
                'description' => "Drs. Cahyo adalah seorang insinyur sipil yang berdedikasi dalam mengajar prinsip-prinsip konstruksi pada mahasiswa.",
                'phone' => "+6281666666666",

                ]);
                DB::table('teachers')->insert([
                    'name' => "Dr. Dita",
                'majors' => "Manajemen Bisnis",
                'work_experience' => "10 tahun di industri manajemen",
                'attended' => "Akademi Bisnis Maju",
                'skills' => "Manajemen keuangan, analisis pasar",
                'email' => "dita@gmail.com",
                'password' => bcrypt('password'),
                'username' => "dita",
                'nationality' => "Indonesia",
                'gender' => "Perempuan",
                'Additional_information' => "Konsultan manajemen untuk perusahaan terkemuka",
                'Hobbys' => "Traveling, Yoga",
                'age' => 42,
                'image' => "Teachers_8.jpg",
                'about' => "Membimbing mahasiswa dalam strategi bisnis yang inovatif.",
                'description' => "Dr. Dita adalah seorang praktisi manajemen berpengalaman yang memberikan wawasan bisnis kepada mahasiswa.",
                'phone' => "+6281555555555",


                ]);

                DB::table('teachers')->insert([
                    'name' => "Dr. Indra",
                    'majors' => "Teknologi Informasi",
                    'work_experience' => "12 tahun sebagai ahli keamanan jaringan",
                    'attended' => "Institut Komputer Inovatif",
                    'skills' => "Keamanan jaringan, pengembangan perangkat lunak",
                    'email' => "indra@gmail.com",
                    'password' => bcrypt('password'),
                    'username' => "indra",
                    'nationality' => "Indonesia",
                    'gender' => "Laki-laki",
                    'Additional_information' => "Pembicara dalam konferensi keamanan IT",
                    'Hobbys' => "Berlari, Membaca",
                    'age' => 41,
                    'image' => "Teachers_9.jpg",
                    'about' => "Mengajarkan teknologi informasi dengan pendekatan praktis.",
                    'description' => "Dr. Indra adalah seorang pakar keamanan jaringan yang membagikan pengetahuannya kepada mahasiswa.",
                    'phone' => "+6281444444444",



                ]);
                DB::table('teachers')->insert([
                    'name' => "Dra. Fara",
                'majors' => "Desain Grafis",
                'work_experience' => "7 tahun sebagai desainer grafis",
                'attended' => "Sekolah Desain Digital Kreatif",
                'skills' => "Desain visual, pengembangan web",
                'email' => "fara@gmail.com",
                'password' => bcrypt('password'),
                'username' => "fara",
                'nationality' => "Indonesia",
                'gender' => "Perempuan",
                'Additional_information' => "Penerima penghargaan desain terkemuka",
                'Hobbys' => "Melukis, Mendengarkan musik",
                'age' => 33,
                'image' => "Teachers_10.png",
                'about' => "Menginspirasi mahasiswa melalui desain visual yang kreatif.",
                'description' => "Dra. Fara adalah seorang desainer grafis yang membantu mahasiswa mengembangkan keterampilan desain mereka.",
                'phone' => "+6281333333333",



                ]);


    }
}
