<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    *{
        outline: none;
    }
    .font-green1{
        color:#3A7338;
    }
    .font-gray1{
        color:#59595C;
    }
    .font-gray2{
        color:#919396;
    }
    .spacing-maintext{
        letter-spacing: 0.5em;
    }
    .button-green1{
        background: #48803C;
    }
    .kotakwarna1{
        background:rgba(166, 168, 171, 0.3);
    }
    .kotakwarna2{
        background:rgba(199, 181, 112, 0.3);
    }
    .kotakwarna3{
        background:rgba(120, 149, 164, 0.3);
    }
    .active::after {
        content: " ";
        display: block;
        height: 3px;
        background-color: #148D3D;
        width: 50%;
    }
    .outline-none{
        outline : none !important;
    }
    /* Show in Large desktops and laptops */
    @media (min-width: 1200px) {
        /* .bgcontent1 {
            background-image: url('{{ asset('images/herbalpreneur/herbalpreneur-content2.png') }}');
        }
        .bgcontent2{
            background-image: url('{{ asset('images/herbalpreneur/herbalpreneur-bottom-head.png') }}');
        }
        .bgcontent3{
            background-image: url('{{ asset('images/herbalpreneur/herbalpreneur-bottom-head-back.png') }}');
        }
        .bgcontent4{
            background-image: url('{{ asset('images/herbalpreneur/herbalpreneur-bottom-img.png') }}');
        } */
    }
    /*Hide in Other Small Devices */
    /* Landscape tablets and medium desktops */
    @media (min-width: 992px) and (max-width: 1199px) {
        .bgcontent1 {
            background-image: none;
        }
        .bgcontent2 {
            background-image: none;
        }
        .bgcontent3 {
            background-image: none;
        }
        .bgcontent4 {
            background-image: none;
        }
    }
    /* Portrait tablets and small desktops */
    @media (min-width: 768px) and (max-width: 991px) {
        .bgcontent1 {
            background-image: none;
        }
        .bgcontent2 {
            background-image: none;
        }
        .bgcontent3 {
            background-image: none;
        }
        .bgcontent4 {
            background-image: none;
        }
    }
    /* Landscape phones and portrait tablets */
    @media (max-width: 767px) {
        .bgcontent1 {
            background-image: none;
        }
        .bgcontent2 {
            background-image: none;
        }
        .bgcontent3 {
            background-image: none;
        }
        .bgcontent4 {
            background-image: none;
        }
    }
    /* Portrait phones and smaller */
    @media (max-width: 480px) {
        .bgcontent1 {
            background-image: none;
        }
        .bgcontent2 {
            background-image: none;
        }
        .bgcontent3 {
            background-image: none;
        }
        .bgcontent4 {
            background-image: none;
        }
    }
    .slider{
        max-height: 350px;
    }
</style>
</head>
<body>
<div class="">

        <div class="hidden lg:block">
            <div class="bg-cover lg:bg-center justify-end py-16 transform scale-100 px-4 lg:px-20" >
                <div class="lg:w-3/5 float-right">
                    <div class="lg:block hidden relative lg:mt-40 w-10/12 lg:ml-40 my-10 py-10 tracking-wider font-lemonmilk text-xl sm:text-xl md:text-2xl">
                        <!-- <img src="{{ asset('images/kotak.svg') }}" class="transform scale-75 absolute z-50 -ml-10 mx-auto -mt-10 lg:-mt-16" alt="kotak"> -->
                        <h1 class="rounded-lg py-3 pr-5 title-size font-medium pl-6 font-gray1 uppercase">SEGALA INFORMASI KAMI <br> UNTUK <b class="font-green1" style="font-weight:1000;">MENJALIN HUBUNGAN</b></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="block lg:hidden">
            <div class="">
                <div class="h-screen slider">
                    <img class="w-full h-full object-cover object-center transform scale-100 object-left-top active" src="{{ asset('images/blog/header.jpg') }}" alt="">
                </div>
                <div class="mx-auto mt-20 pb-10">
                    <div class="relative my-5 tracking-wider font-lemonmilk ">
                        <img src="{{ asset('images/kotak.svg') }}" class="transform scale-75 absolute z-50 mx-auto -mt-10 lg:-mt-16" alt="kotak">
                        <h1 class="rounded-lg py-6 pr-5 title-size font-medium pl-16 font-gray1 uppercase">SEGALA INFORMASI KAMI <br> UNTUK <b class="font-green1" style="font-weight:1000;">MENJALIN HUBUNGAN</b></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto flex flex-1 items-center justify-between gap-x-12 lg:py-8 pb-12 px-5 lg:px-20 mt-3 mb-6">
            {{--  <ul class="mx-auto flex gap-x-32 gap-y-4 flex-wrap">
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><a href="http://rajaherbal.test/artikel" class="uppercase tracking-wider underline-green-half-text font-medium font-gray1 font-lemonmilk">Posting
                        Umum</a></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><a href="http://rajaherbal.test/artikel" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk">Gaya Hidup</a></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><a href="http://rajaherbal.test/artikel" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk">Edukasi</a></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><a href="http://rajaherbal.test/artikel" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk">Kesehatan</a></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><a href="http://rajaherbal.test/artikel" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk">Produk</a></li>
            </ul>  --}}
            <ul class="mx-auto flex gap-x-32 gap-y-4 flex-wrap">
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><button onclick="showTabs(event,'all')" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk active tablinks outline-none">Posting
                        Umum</button></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><button onclick="showTabs(event,'lifestyle')" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk tablinks outline-none">Gaya Hidup</button></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><button onclick="showTabs(event,'education')" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk tablinks outline-none">Edukasi</button></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><button onclick="showTabs(event,'health')" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk tablinks outline-none">Kesehatan</button></li>
                <li class="lg:border-b-0 border-b w-full lg:w-auto"><button onclick="showTabs(event,'product')" class="uppercase tracking-wider font-medium font-gray1 font-lemonmilk tablinks outline-none">Produk</button></li>
            </ul>
        </div>


        <div class="mx-4 lg:mx-auto lg:px-20">
            <div class="flex flex-col">
                <div class="bg-cover bg-center lg:p-24 flex">

                    <div class="py-4 text-3xl tracking-wider lg:pt-40">
                        <div class="mx-4 lg:mx-0 lg:w-32">
                            <h2 class="font-normal text-base font-gray1 lg:text-white uppercase underline-white-half-text font-lemonmilk">Gaya
                                Hidup</h2>
                        </div>

                        <div class="mx-4 lg:mx-0 lg:flex pt-10">
                            <div class="my-auto lg:my-0 lg:w-1/2">
                                <h1 class="lg:pb-5 lg:mt-0 mt-20 lg:mb-0 lg:mb-0 mb-5 text-xl lg:text-4xl font-bold uppercase text-white tracking-wider font-lemonmilk">Menikmati Liburan
                                    Dengan
                                    Anak</h1>
                                <a class="rounded-lg bg-green-600 text-white w-25 text-sm text-center px-6
                                py-2 tracking-normal uppercase font-lemonmilk"
                                   href="#">Telusuri</a>
                            </div>
                            <div class="lg:block hidden w-1/3">
                                <p class="text-base tracking-normal text-white text-justify">
                                    Semangat pagi kami termotivasi akan rasa syukur atas karunia
                                    tuhan terhadap negeri tercinta Indonesia Misi kami adalah membuat
                                    produk Kesehatan hasil kekayaan alam Indonesia yang berlimpah menjadi
                                    pilihan utama masyarakat Indonesia.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="mx-0 lg:mx-20 my-10 lg:mt-0 pt-10">
            <div class="px-4 lg:mx-0 lg:text-center w-full">
                <p class="mx-auto text-lg lg:text-2xl font-medium font-green1 uppercase font-lemonmilk tracking-wider mb-4">Informasi Umum Untuk Tetap Update Bersama Rajaherbal</p>
                <p class="mx-auto text-xl lg:mt-0 mt-5 lg:text-4xl font-light font-gray1 trackin uppercase font-lemonmilk lg:my-4 tracking-wider">Blog Kami</p>
            </div>



            <div id="all" class="tabcontent">
                <div class="mx-4 lg:mx-auto mt-12 lg:mt-20 lg:px-10 text-center">
                    <div class="lg:flex flex-wrap">
                        
                    </div>
                </div>

            </div>

            <div id="lifestyle" class="tabcontent hidden">
                <div class="mx-4 lg:mx-auto mt-12 lg:mt-20 lg:px-10 text-center">
                    <div class="lg:flex flex-wrap">
                        
                    </div>
                </div>
            </div>

            <div id="education" class="tabcontent hidden">
                <div class="mx-4 lg:mx-auto mt-12 lg:mt-20 lg:px-10 text-center">
                    <div class="lg:flex flex-wrap">
                        
                    </div>
                </div>
            </div>

            <div id="health" class="tabcontent hidden">
                <div class="mx-4 lg:mx-auto mt-12 lg:mt-20 lg:px-10 text-center">
                    <div class="lg:flex flex-wrap">
                        
                    </div>
                </div>
            </div>

            <div id="product" class="tabcontent hidden">
                <div class="mx-4 lg:mx-auto mt-12 lg:mt-20 lg:px-10 text-center">
                    <div class="lg:flex flex-wrap">
                        
                    </div>
                </div>
            </div>

            <div class="lg:mx-auto mx-0 px-0 my-10 lg:px-20 text-center rounded-xl">
                
            </div>
        </div>
    </div>


    <div class="py-20 lg:py-8 mt-10 lg:mt-20 bg-cover bg-center bg-no-repeat">
        <div class="flex w-full">
            <div class="lg:block hidden flex-1 p-10"></div>
            <div class="lg:w-1/3">
                <img class="w-2/3 mx-auto lg:mx-0 mt-16" src="{{ asset('images/produk/sahitext.png') }}">
                <a href="{{ url('produk') }}"><p class="font-lemonmilk lg:ml-20 mt-32 lg:mt-24 lg:text-left text-center uppercase text-2xl text-white underline-hijau-mid-produk">Telusuri</p></a>
            </div>
        </div>
    </div>

    <script>
        function showTabs(evt, tab) {
            console.log(evt, 'evt')
            var i, tabcontent, tablinks;
            tabcontent = $(".tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = $(".tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            $("#" + tab).css('display', 'block');
            evt.currentTarget.className += " active";
        }
    </script>    
</body>
</html>
