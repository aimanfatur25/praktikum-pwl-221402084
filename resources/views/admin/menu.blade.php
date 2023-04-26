@extends('main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Begin Page Content -->
    
          
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="font-family: 'Oswald' , cursive ;">Hai! <br/>Selamat datang di promweb</h1>
                        <p>
                            Belajar Pemrograman Web mulai dari HTML
                        </p>
                        <a class="btn btn-success" href="#" role="button">Mulai Sekarang</a>
                    </div>
    
                    <div class="col">
                        <img src="{{ asset('img/jollyroger.png') }}" alt="hero icon" width="600">
                    </div>
                </div>
            </div>
        </section>
        <script src="js/bootstrap.bundle.js"></script>

    </div>
    <!-- /.container-fluid -->
@endsection
