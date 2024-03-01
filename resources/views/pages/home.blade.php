@extends('layouts.app')

@section('content')
    <section id="slider">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="bg-dark"></div>

                <img src="{{ asset('assets/images/sliders/slider.png') }}" class="home-slider img-fluid" alt="Slider 1">
                <div class="carousel-caption">
                    <h5>MODERN TASARIM, GÖZ ALICI GÜZELLİK</h5>
                    <h3>POSEIDON SERİSİ</h3>
                    <p class="d-none d-md-block">
                        Lorem ipsum dolor sit amet consectetur. Nisi sed viverra sem pellentesque in sociis ultrices. Tempor aliquam tincidunt in pretium mattis aliquam sit id at. Congue pellentesque consectetur id sit a malesuada sed. Felis cras aliquam donec egestas.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="bg-dark"></div>

                <img src="{{ asset('assets/images/sliders/slider.png') }}" class="home-slider img-fluid" alt="Slider 1">
                <div class="carousel-caption">
                    <h5>MODERN TASARIM, GÖZ ALICI GÜZELLİK</h5>
                    <h3>POSEIDON SERİSİ</h3>
                    <p class="d-none d-md-block">
                        Lorem ipsum dolor sit amet consectetur. Nisi sed viverra sem pellentesque in sociis ultrices. Tempor aliquam tincidunt in pretium mattis aliquam sit id at. Congue pellentesque consectetur id sit a malesuada sed. Felis cras aliquam donec egestas.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="bg-dark"></div>

                <img src="{{ asset('assets/images/sliders/slider.png') }}" class="home-slider img-fluid" alt="Slider 1">
                <div class="carousel-caption">
                    <h5>MODERN TASARIM, GÖZ ALICI GÜZELLİK</h5>
                    <h3>POSEIDON SERİSİ</h3>
                    <p class="d-none d-md-block">
                        Lorem ipsum dolor sit amet consectetur. Nisi sed viverra sem pellentesque in sociis ultrices. Tempor aliquam tincidunt in pretium mattis aliquam sit id at. Congue pellentesque consectetur id sit a malesuada sed. Felis cras aliquam donec egestas.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="bg-dark"></div>

                <img src="{{ asset('assets/images/sliders/slider.png') }}" class="home-slider img-fluid" alt="Slider 1">
                <div class="carousel-caption">
                    <h5>MODERN TASARIM, GÖZ ALICI GÜZELLİK</h5>
                    <h3>POSEIDON SERİSİ</h3>
                    <p class="d-none d-md-block">
                        Lorem ipsum dolor sit amet consectetur. Nisi sed viverra sem pellentesque in sociis ultrices. Tempor aliquam tincidunt in pretium mattis aliquam sit id at. Congue pellentesque consectetur id sit a malesuada sed. Felis cras aliquam donec egestas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container-fluid p-4 pb-5">
            <div class="row">
                <div class="img col-md-4 px-4">
                    <img src="{{ asset('assets/images/abouts/about.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-md-8 p-5">
                    <div class="content">
                        <h4>HAKKIMIZDA</h4>

                        <h2>SEREL SERAMİK</h2>

                        <div class="heading-sub-text mt-5">
                            30 yılı aşkın süredir SEREL markası ile seramik sağlık gereçleri üretimi yapan firmamız <span>ELGİNKAN Topluluğuna</span> bağlıdır.
                        </div>

                        <div class="icon-text mt-5">
                            <div class="row align-items-center">
                                <div class="icon col-md-2">
                                    <img src="{{ asset('assets/images/abouts/icon1.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="text col-md-10 px-4">
                                    <p>
                                        Kaliteden ödün vermeyen SEREL, yılların deneyimini, profesyonel yönetim anlayışı ile dünya pazarlarında; tasarruf, sağlık, estetik ve konfor özellikli ürünlerle sunan lider markalardandır.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="icon-text mt-5">
                            <div class="row align-items-center">
                                <div class="icon col-md-2">
                                    <img src="{{ asset('assets/images/abouts/icon2.png') }}" alt="">
                                </div>
                                <div class="text col-md-10 px-4">
                                    <p>
                                        Ürün geliştirme faaliyetlerinde; titiz, yenilikçi ve öncü bir yaklaşım sahibi olan SEREL, ürün geliştirme çalışmalarında kullanıcı ihtiyaçlarının tüm detaylarını gözetmekte ve özgün tasarımlara hayat vermektedir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="series-description">
        <div class="custom-container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="title">
                            <p>SEREL’DEN</p>
                            <p><span>SİZE ÖZEL SERİLER</span></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="description">
                            <p>
                                Çevre dostu ürünleriyle Türkiye’de bilinçli yapı oluşumunu destekleyen Serel, doğal kaynakları korumaya yönelik tasarlanmış, hijyeni ön planda tutan geniş ürün yelpazesi ile gelecek nesillere aydınlık bir yarın bırakmak için çalışıyor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="series-list">
        <div class="custom-container my-5">
            <div class="list">
                <div class="row">
                    <div class="bg-color"></div>
                    <div class="owl-carousel owl-theme py-5">
                        <div class="item">
                            <div class="card text-bg-dark">
                                <img src="{{ asset('assets/images/series/image1.png') }}" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <div class="row content">
                                        <div class="col-md-8 text">
                                            <p class="card-text">Şıklığı Banyonuza Yansıtın</p>
                                            <h5 class="card-title">Free Standing Lavabo</h5>
                                        </div>
                                        <a href="javascript:void(0)" class="link">İncele</a>
                                        <a href="javascript:void(0)" class="link-mobile"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card text-bg-dark">
                                <img src="{{ asset('assets/images/series/image2.png') }}" class="card-img" alt="...">

                                <div class="card-img-overlay">
                                    <div class="row content">
                                        <div class="col-md-8 text">
                                            <p class="card-text">Eşsiz tasarımı ile banyolarınıza modern bir görünüm kazandıracak</p>
                                            <h5 class="card-title">4 Life Serisi</h5>
                                        </div>
                                        <a href="javascript:void(0)" class="link">İncele</a>
                                        <a href="javascript:void(0)" class="link-mobile"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card text-bg-dark">
                                <img src="{{ asset('assets/images/series/image3.png') }}" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <div class="row content">
                                        <div class="col-md-8 text">
                                            <p class="card-text">Üstün hijyen teknolojisi ile favoriniz olacak</p>
                                            <h5 class="card-title">Rita Serisi</h5>
                                        </div>
                                        <a href="javascript:void(0)" class="link">İncele</a>
                                        <a href="javascript:void(0)" class="link-mobile"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card text-bg-dark">
                                <img src="{{ asset('assets/images/series/image2.png') }}" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <div class="row content">
                                        <div class="col-md-8 text">
                                            <p class="card-text">Banyonuzda Modern Görünüm</p>
                                            <h5 class="card-title">Hera Serisi</h5>
                                        </div>
                                        <a href="javascript:void(0)" class="link">İncele</a>
                                        <a href="javascript:void(0)" class="link-mobile"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="series-featured1">
        <div class="custom-container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-3">
                    <div class="text">
                        <h4>Estetiği ve konforu bir arada sunan <span>HELIOS SERİSİ</span></h4>

                        <p>
                            Lorem ipsum dolor sit amet consectetur. Massa nunc lobortis in gravida elementum sapien dictum nisi consequat.
                        </p>

                        <a href="javascript:void(0)" class="cst-border-white-link">İncele</a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="image">
                        <img src="{{ asset('assets/images/series/helios-series.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="series-featured2" style="background-image: url('{{ asset('assets/images/series/series-featured2.png') }}');">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
                    <div class="content">
                        <h4> Tasarruf ve tasarımın öncüsü <span>SAPPHIRE SERİSİ</span></h4>

                        <p>
                            Daha az suyla daha yüksek hijyen sağlayan teknolojisi ve zarif çizgileriyle tasarrufu ve tasarımı bir arada sunuyor.
                        </p>

                        <a href="javascript:void(0)" class="cst-color-link">İncele</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="technology">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-7">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-10">
                                <h3>Çevre Dostu Teknolojilerimiz</h3>
                                <div class="text">
                                    <p>
                                        SEREL; çevre dostu teknolojileri ile su tasarrufu ve hijyenin önemini vurgular. Bu teknolojiler, suyun verimli kullanımını sağlayarak çevreye duyarlı bir şekilde su tüketimini azaltır. Ayrıca, hijyenik yüzeyler sayesinde temizlik işlemleri kolaylaşır ve banyo hijyen standartlarını yükseltilir.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="images">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/images/technologies/pure-wash.png') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/images/technologies/hygiene-plus.png') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/images/technologies/easy-wash.png') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-end justify-content-end px-0">
                    <div class="services">
                        <div class="card">
                            <img src="{{ asset('assets/images/technologies/content.png') }}" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">
                                            <h5 class="card-title">Servis ve Bayi Ağı</h5>
                                            <div class="card-text">
                                                <p>
                                                    Bayilerimiz aracılığıyla ürünlerimizi yakından inceleme fırsatı bulurken, yetkili servislerimiz aracılığıyla da servis hizmet alabilirsiniz.
                                                </p>
                                            </div>

                                            <a href="javascript:void(0)" class="link">Bayi & Yetkili Servisler</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('js')
@endsection
