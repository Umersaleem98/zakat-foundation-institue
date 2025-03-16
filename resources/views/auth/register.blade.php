@include('layouts.head')


<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
  
                <div class="form-outline form-white mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" required />
                  <label class="form-label text-light">Full Name</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" required />
                  <label class="form-label text-light">Email</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" required />
                  <label class="form-label text-light">Password</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" name="password_confirmation" class="form-control form-control-lg" required />
                  <label class="form-label text-light">Confirm Password</label>
                </div>
  
                <button class="btn btn-info btn-lg px-5" type="submit">Register</button>
  
                <p class="mt-3">Already have an account? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>