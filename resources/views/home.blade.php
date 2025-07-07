<!doctype html>
<html lang="pl">
  <head>
  @include('shared.header')

  </head>
  <body>

  @include('shared.navbar')

    <div id="start" class="mb-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-width: 1000px; margin: 0 auto;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/karuzela1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Amazing experiences!</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/karuzela2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Amazing views!</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/karuzela3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Beauty of nature!</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <div class="container mb-5">
      <div class="row">
          <h1>Themed zones</h1>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="card">
                  <img src="img/afrykanarium.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Africarium</h5>
                      <p class="card-text">The Africanarium is a place where you can discover the beauty and diversity of African nature. When visiting this specially designed aquarium, you can admire colorful tropical fish, reptile species and exotic birds. The Africanarium not only provides a great visual experience, but is also an educational space where you can learn more about African ecosystems and biodiversity conservation. It is an unforgettable experience for all nature and travel lovers.</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="card">
                  <img src="img/sahara.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Sahara</h5>
                      <p class="card-text">
                      In the Sahara area of the zoo, you can also see reptile species such as desert tortoises and snakes that survive in the harsh desert climate. In addition, colorful birds such as ostriches and falcons add charm to this unique environment. While exploring this zone, visitors can also learn about the unique adaptations that enable animals to survive in the harsh conditions of the Sahara. It is a fascinating place that provides not only entertainment, but also educates about the unique nature and the need to protect the natural environment of the Sahara.
                      </p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="card">
                  <img src="img/malpiarnia.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Monkey house</h5>
                      <p class="card-text">
                      The Monkey House is a charming place in the zoo where you can observe and enjoy close contact with a variety of monkey species. In this space you can see from lively capuchin monkeys to gentle lemurs. In addition, the Monkey House also provides environments that mimic the natural habitats of monkeys, allowing them to perform natural behaviors and providing them with appropriate living conditions. It is a fascinating place that allows you to get to know the world of monkeys closer and appreciate their amazing diversity.
                      </p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="card">
                  <img src="img/oceanarium.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Oceanarium</h5>
                      <p class="card-text">
                      Welcome to our fascinating oceanarium! Discover underwater life in our huge aquariums filled with fish, sharks, and sea turtles. Enjoy captivating shows featuring dolphins and seals showcasing their skills. We are committed to ocean conservation and public education. Come and experience the magical world of the oceans with us! We organize workshops and educational programs to raise awareness about the importance of marine ecosystems and promote sustainable practices, ensuring that future generations can continue to enjoy the beauty of the oceans.
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>

@include('shared.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
