  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>{{ config('app.name') }} - @yield('title')</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          body {
              background-image: url('https://source.unsplash.com/1920x1080/?nature');
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
              min-height: 100vh;
              position: relative;
          }

          body::before {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: rgba(0, 0, 0, 0.5);
          }

          .auth-card {
              background: rgba(255, 255, 255, 0.7);
              border-radius: 15px;
              box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
              backdrop-filter: blur(10px);
              padding: 2.5rem;
          }

          .auth-wrapper {
              min-height: 100vh;
              display: flex;
              align-items: center;
              justify-content: center;
              position: relative;
              z-index: 1;
          }

          .brand-logo {
              text-align: center;
              margin-bottom: 2rem;
          }

          .brand-logo img {
              max-width: 150px;
              margin-bottom: 1rem;
          }

          .form-control {
              border-radius: 8px;
              padding: 0.8rem 1rem;
              border: 1px solid #ddd;
          }

          .form-control:focus {
              box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
              border-color: #0d6efd;
          }

          .btn-primary {
              border-radius: 8px;
              padding: 0.8rem 2rem;
              font-weight: 600;
          }
      </style>
  </head>
  <body>
      <div class="auth-wrapper">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-8">
                      <div class="auth-card">
                          <div class="brand-logo">
                              <img src="{{ asset('images/logo.png') }}" alt="Logo">
                              <h4 class="text-center mb-0">{{ config('app.name') }}</h4>
                          </div>
                          @yield('content')
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
