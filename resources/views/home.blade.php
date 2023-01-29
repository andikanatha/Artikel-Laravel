@extends('layout.main')

@section('content')
    <div class="container">
        <!-- tentang -->
        <div id="page-tentang">
            <div class="tentang">
                <div class="container-title">
                <div class="box">
                    <div class="box-title">
                        <h2>Apa itu PerWeb</h2>
                    </div>
                </div>             
                </div>
                <div class="container-content">
                    <div class="box-content">
                        <div class="box-content-isi">
                            <p>Perpustakaan Website adalah suatu website yang dikembangkan untuk menunjang e-learning yang dapat diakses dimana saja. Website ini tentunya memiliki fitur - fitur yang menarik bagi siswa/i dan mahasiswa, website ini juga 100% gratis.</p>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <!-- End Tentang -->

        <!-- Artikel -->
        <div id="page-artikel">
            <div class="artikel">
                <div class="text-title">
                    <h1>Perpustakaan Website</h1>
                    <p>Fitur - fitur menarik Perpustakaan Website</p>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <h3>1. Article Terbaru</h3>
                            <p>Artikel yang berada dalam PERWEB adalah article terbaru, jadi dalam website ini konten nya selalu up to date</p>    
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>2. E-Book</h3>
                            <p>Dalam PERWEB juga tidak hanya artcle melainkan ada juga E-BOOK yang dapat di download dan baca kapan saja dan tidak di pungut biaya sepeserpun.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>3. Akses Kapan Saja</h3>
                            <p>PERWEB adalah sebuah website berbasis edukasi yang dapat diakses dimana saja dan kapanpun yang di inginkan.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>4. Gratis</h3>
                            <p>Didalam website ini juga tidak terdapat iklan maupun konten berbayar dan 100% gratis !!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end artikel -->

        <!-- footer -->
        <footer>
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="assets/rev-logo.png" alt="">
                </div>
                <div class="footer-bottom">
                    <p>PERWEB EDUCATION &copy; 2022</p>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>
    
@endsection    