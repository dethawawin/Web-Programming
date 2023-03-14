@extends('template')
@section('title', 'Profile')

@section('content')
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px;">
        <!-- PROFILE 1 -->
        <div class="columns is-justify-content-center">
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Bernadetha Emma Wawin</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span>2440015101 &nbsp|</span>
                    <span> &nbsp bernadetha.wawin@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Hallo! Saya biasa dipanggil Detha. 
                    Saat ini saya menempuh pendidikan sebagai mahasiswa semester 6 di jurusan Teknik Informatika dan Statistika, BINUS University. 
                    Mata kuliah yang menarik perhatian saya adalah machine learning, khususnya di bidang klasifikasi dan regresi. 
                    Hobi saya adalah menonton drama dan mendengarkan musik.  
                </p>
            </div>

            <figure class="ml-6 mt-6" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\detha.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
        </div>

    <!-- PROFILE 2 -->
        <div class="columns is-justify-content-center">
            <figure class="ml-6 mt-6 pt-auto" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\diana.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Diana Petrina Santoso</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span>2440015442 &nbsp|</span>
                    <span> &nbsp diana.petrina@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Haii!! Namaku Diana, Binusian24 dari jurusan Teknik Informatika dan Statistika. 
                    Selama perkuliahan ini, mata kuliah yang paling menarik perhatianku adalah Algorithm Design and Analysis karena di mata kuliah ini diberikan visualisasi berupa grafik dari algoritma-algoritma yang ada. 
                    Aktivitas yang paling aku senangi saat-saat ini adalah mendengarkan musik.
                </p>
            </div>
        </div>

        <!-- PROFILE 3 -->
        <div class="columns is-justify-content-center">
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Felicia Ferren</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span>2440113071 &nbsp|</span>
                    <span> &nbsp felicia.ferren@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Halo! Saya Felicia, Binusian24 jurusan Teknik Informatika dan Statistika. 
                    Saya tertarik terhadap dunia data science dan mata kuliah yang menarik bagi saya selama 3 tahun berkuliah adalah Machine Learning. 
                    Di luar kuliah, saya suka mendengarkan musik dan membaca. 
                </p>
            </div>

            <figure class="ml-6 mt-6" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\felicia.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
        </div>

    <!-- PROFILE 4 -->
        <div class="columns is-justify-content-center">
            <figure class="ml-6 mt-6 pt-auto" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\kania.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Kania Agatha</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span> 2440064702 &nbsp|</span>
                    <span> &nbsp kania.agatha@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Haiiiiii! Kenalin, aku Kania. 
                    Aku mahasiswa jurusan Teknik Informatika dan Statistika. 
                    Tahun ini merupakan tahun ke-3 ku berkuliah di BINUS University. 
                    Mata kuliah favorit ku selama berkuliah adalah HCI, karena aku tertarik pada dunia UI/UX. 
                    Hobiku adalah fotografi dan mengedit video.  
                </p>
            </div>
        </div>
    </section>
@endsection
