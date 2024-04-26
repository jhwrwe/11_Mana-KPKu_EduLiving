<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert([
            'name' => "Universitas shin",
            'course' => "Matematika",
            'criteria' => "Memerlukan minimal gelar Sarjana Matematika",
            'aboutcourse' => "Program studi ini mengkaji teori matematika tingkat lanjut dan aplikasinya dalam ilmu komputer, fisika, dan keuangan. Mahasiswa akan mempelajari analisis dan penyelesaian masalah kompleks menggunakan aljabar, kalkulus, dan statistik.",
            'image' => "School_1.jpg",
        ]);
        DB::table('schools')->insert([
            'name' => "Sekolah Seni ABC",
                'course' => "Seni Rupa",
                'criteria' => "Wajib pengumpulan portofolio seni",
                'aboutcourse' => "Mendalami sejarah seni dan seni kontemporer. Program ini melibatkan beragam media seni, seperti lukisan, patung, instalasi seni, dan seni pertunjukan. Mahasiswa akan berkembang melalui praktik kreatif dan penelitian untuk mengekspresikan diri melalui seni.",
                'image' => "School_2.jpeg",
        ]);
        DB::table('schools')->insert([
            'name' => "Teknik Universitas Jaya",
                'course' => "Teknik Sipil",
                'criteria' => "Minimal gelar Sarjana Teknik Sipil",
                'aboutcourse' => "Program ini membahas desain struktural, konstruksi, dan teknik lingkungan. Mahasiswa akan belajar tentang bahan konstruksi, metode pemodelan, dan pemecahan masalah teknis dalam lingkup infrastruktur.",
                'image' => "School_3.jpeg",
                ]);
        DB::table('schools')->insert([
            'name' => "Akademi Bisnis Maju",
                'course' => "Manajemen Bisnis",
                'criteria' => "Persyaratan minimal gelar Sarjana Manajemen",
                'aboutcourse' => "Fokus pada analisis pasar, manajemen keuangan, dan strategi bisnis. Mahasiswa akan memahami prinsip-prinsip manajemen dan keterampilan kewirausahaan untuk sukses di dunia bisnis.",
                'image' => "School_4.jpg",
                ]);
        DB::table('schools')->insert([
            'name' => "Institut Komputer Inovatif",
            'course' => "Teknologi Informasi",
            'criteria' => "Memerlukan gelar Sarjana Teknologi Informasi",
            'aboutcourse' => "Studi tentang pengembangan perangkat lunak, keamanan jaringan, dan kecerdasan buatan. Mahasiswa akan terlibat dalam proyek nyata untuk menerapkan solusi IT inovatif.",
            'image' => "School_5.jpg",
            ]);
        DB::table('schools')->insert([
            'name' => "Universitas Kreatifitas Berkarya",
                'course' => "Seni Kreatif",
                'criteria' => "Dibutuhkan portofolio seni kreatif",
                'aboutcourse' => "Menjelajahi berbagai ekspresi seni dan teknik kreatif. Program ini menggabungkan seni tradisional dengan media digital untuk membangun keterampilan kreatif yang beragam.",
                'image' => "School_6.jpg",
                ]);
        DB::table('schools')->insert([
            'name' => "Sekolah Mode Terkemuka",
                'course' => "Desain Mode",
                'criteria' => "Persyaratan khusus dalam desain mode",
                'aboutcourse' => "Mendalami sejarah mode, kreativitas, dan industri. Mahasiswa akan belajar desain pakaian, teknik jahit, dan tren mode saat ini.",
                'image' => "School_7.jpg",
                ]);
        DB::table('schools')->insert([
            'name' => "Kampus Sastra Indah",
            'course' => "Sastra",
            'criteria' => "Wajib memiliki latar belakang sastra",
            'aboutcourse' => "Studi mendalam tentang berbagai teks sastra dan penulisan kreatif. Mahasiswa akan menganalisis karya sastra klasik dan kontemporer untuk memperluas pemahaman sastra.",
            'image' => "School_8.jpg",
            ]);
        DB::table('schools')->insert([
            'name' => "Sekolah Kuliner Rasa",
            'course' => "Kuliner",
            'criteria' => "Dibutuhkan pengalaman dalam industri kuliner",
            'aboutcourse' => "Mempelajari seni memasak, manajemen restoran, dan inovasi kuliner. Program ini menggabungkan teknik memasak klasik dengan tren masakan global.",
            'image' => "School_9.jpg",
            ]);
        DB::table('schools')->insert([
            'name' => "Kampus Musik Harmoni",
                'course' => "Musik",
                'criteria' => "Dibutuhkan keahlian dalam alat musik",
                'aboutcourse' => "Belajar teori musik, kinerja musik, dan komposisi. Mahasiswa akan mempraktikkan instrumen musik dan mengeksplorasi berbagai genre musik.",
                'image' => "School_10.jpg",
                ]);
        DB::table('schools')->insert([
            'name' => "Sekolah Desain Digital Kreatif",
            'course' => "Desain Grafis",
            'criteria' => "Dibutuhkan portofolio desain digital",
            'aboutcourse' => "Mempelajari desain visual, animasi, dan pengembangan web. Program ini mempersiapkan mahasiswa untuk karir dalam industri desain dan teknologi.",
            'image' => "Schools_11.jpg",
            ]);

    }
}
