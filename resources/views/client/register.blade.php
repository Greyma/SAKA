@extends('client_layout.master')
@section('title')
  panier
@endsection
@section('content')
    <!--
      <style>
        .signup-container {
            display: flex;
            justify-content: center;
        }
        .signup-form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
    </style>
    -->


    <!-- start sign in -->
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h6 class="text-secondary text-uppercase mb-3 text-center">s'inscrire</h6>
              <h1 class="mb-1 text-center text-uppercase">s'inscrire informations</h1>
              <p class="text-secondary mb-5 text-center lead fs-4">Inscrivez-vous avec vos informations personnelles pour utiliser toutes les fonctionnalités du site</p>
            </div>
          </div>
        </div>

        <div class="signup-container">
            <div class="signup-form">
                <h4 style="text-align: center;">s'inscrire </h4>
                <br>
                <form action="#!">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <span>*essayer de saisir un mot de pass juste</span>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-dark btn-lg" type="submit">inscrire</button>
                    </div>
                    <div class="mt-4 text-center">
                        <p>Already have an account? <a href="signin.html">Log In</a></p>
                    </div>
                </form>
            </div>
        </div>

      </section>

<!-- end sign in -->
  @endsection
