<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SabziBazaar - Organic Food HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
    rel="shortcut icon"
    type="image/x-icon"
    href="assets/img/favicon.ico"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/glightbox.min.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Plugin css -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <!-- ======= Loader Section ======= -->
    @include('utilities.loader')

    <!-- ======= Header Section ======= -->
    
    @include('utilities.header')


    <!-- ======= Main Section ======= -->
    <main class="main__content_wrapper">
        <div class="container">
            <div class="row">
                <h1 class="section__heading--maintitle text-center" style="margin: 40px 0;">Sabzi Bazaar Introduction</h1>
                <p class="deals__banner--content__desc">Welcome to Sabzi Bazaar, your one-stop destination for fresh and high-quality vegetables. Our journey began with a simple vision: to bring the freshest produce from farm to table, ensuring that our customers enjoy nutritious and delicious vegetables every day. At Sabzi Bazaar, we believe in supporting local farmers and promoting sustainable farming practices. Our team is dedicated to sourcing a diverse range of vegetables, from everyday staples to exotic varieties, all at competitive prices. We are committed to providing exceptional service, convenience, and a delightful shopping experience. Join us in our mission to make healthy eating accessible and enjoyable for everyone. Thank you for choosing Sabzi Bazaar, where freshness meets quality.</p>
            </div>

        </div>
        
        <div class="container py-5">            
            <div class="row my-5">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h2 class="section__heading--maintitle">Specialty of Us
                    </h2>
                    <p class="deals__banner--content__desc mt-5">
                        At Sabzi Bazaar, we pride ourselves on our unique specialties that set us apart in the market. Our commitment to delivering only the freshest and highest quality vegetables is at the core of everything we do. We carefully handpick our produce directly from trusted local farmers who practice sustainable and organic farming methods. This ensures that you receive vegetables that are not only nutritious but also free from harmful chemicals and pesticides. Our extensive variety of seasonal and exotic vegetables caters to diverse culinary needs, allowing you to explore new flavors and create wholesome meals. Additionally, we offer personalized customer service, home delivery options, and an easy-to-navigate online platform to make your shopping experience seamless and enjoyable. At Sabzi Bazaar, we are dedicated to bringing the farm-to-table experience to your doorstep with a touch of excellence. 
                    </p>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img class="img-fluid h-100" src="assets/img/optimize/about-1.jpg">
                </div>
            </div>
        </div>

        <div class="container py-5">            
            <div class="row my-5">
                <div class="col-lg-6 order-lg-1 order-1">
                    <img class="img-fluid h-100" src="assets/img/optimize/about-3.jpg">
                </div>
                <div class="col-lg-6 order-lg-2 order-2">
                    <h2 class="section__heading--maintitle">What do we do?
                    </h2>
                    <p class="deals__banner--content__desc mt-5">
                        At Sabzi Bazaar, we specialize in providing a wide array of fresh, high-quality vegetables to our customers. Our primary focus is on sourcing the best produce directly from local farmers who adhere to sustainable and organic farming practices. By doing so, we ensure that our customers receive vegetables that are not only fresh and flavorful but also healthy and free from harmful chemicals. We offer an extensive selection of vegetables, ranging from everyday staples to unique, exotic varieties, catering to all your culinary needs. In addition to our superior product selection, we are committed to offering exceptional customer service, including convenient home delivery options and a user-friendly online shopping experience. Our goal is to make fresh, nutritious vegetables easily accessible to everyone, helping you to maintain a healthy lifestyle with ease and convenience.
                    </p>
                </div>
            </div>
        </div>

        <div class="container py-5">            
            <div class="row my-5">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h2 class="section__heading--maintitle">How You Could Benefit?

                    </h2>
                    <p class="deals__banner--content__desc mt-5">
                        At Sabzi Bazaar, we understand the importance of fresh, quality ingredients in creating delicious and nutritious meals. Whether you are a busy housewife, a passionate cooking enthusiast, or a professional chef, our extensive selection of fresh vegetables can elevate your culinary creations. Housewives can delight in the convenience of having a variety of fresh produce delivered straight to their doorstep, making meal preparation simpler and more enjoyable. Cooking experts will appreciate the diverse range of exotic and seasonal vegetables, allowing them to experiment with new recipes and flavors. Our commitment to quality means you can trust that every vegetable from Sabzi Bazaar is packed with nutrients, enhancing the taste and health benefits of your dishes. By choosing Sabzi Bazaar, you not only save time and effort but also ensure that every meal you prepare is made with the finest ingredients, bringing joy and satisfaction to your kitchen.
                    </p>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img class="img-fluid h-100" src="assets/img/optimize/about-4.jpg">
                </div>
            </div>
        </div>
        
        <div class="container py-5">            
            <div class="row my-5">
                <div class="col-lg-6 order-lg-1 order-1">
                    <img class="img-fluid h-100" src="assets/img/optimize/about-2.jpg">
                </div>
                <div class="col-lg-6 order-lg-2 order-2">
                    <h2 class="section__heading--maintitle">What do we expect from you?

                    </h2>
                    <p class="deals__banner--content__desc mt-5">
                        At Sabzi Bazaar, we believe in building a community centered around trust, quality, and mutual respect. From our valued customers, we expect a shared commitment to these principles. We hope that you, as a part of our community, will provide us with your honest feedback and suggestions, helping us continuously improve our products and services. Your engagement and support are crucial in fostering a sustainable relationship with our local farmers, who rely on your appreciation and patronage of their fresh, organic produce. Additionally, we encourage you to explore the variety of vegetables we offer, try new recipes, and share your culinary experiences with us. By staying informed about our seasonal offerings and promotions, and by recommending Sabzi Bazaar to friends and family, you can help us grow and continue delivering the best farm-to-table experience. Together, we can make healthy, delicious eating a delightful part of everyday life.                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- ======= Service Section ======= -->
     @include('utilities.services')

    <!-- ======= Footer Section ======= -->
    
    @include('utilities.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('assets/js/vendor/popper.js')}}" defer="defer"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}" defer="defer"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/glightbox.min.js')}}"></script>

    <!-- Customscript js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script src="{{ asset('assets/js/vegetable.js')}}"></script>
</body>