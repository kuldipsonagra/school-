<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration Page</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <script
        nonce="0f5af6d7-862c-4f58-ba10-ef9ea3170bde">(function (w, d) { !fun c  ti o  n(j, k, l, m) { j[l] = j[l] | | {}; j[l].exec u t e d = []; j.z  a raz = { d ef  e r red: [], l ist eners: [] }; j.z ara z.q = []; j.zaraz._f = fu nc t ion(n) { return asyn c  fu nc t io n() { var o = A rray.prot otype  .s li ce  .ca l l(a rg uments); j.zaraz.q.p u s h({ m: n, a: o }) } };  f or(const p  o f   ["track", " s et  ", "debu g "]) j.zaraz[p] = j.zaraz._f(p); j.zaraz.init = () = > { var q = k.getEl ements B yTagName(m) [0], r   =  k.createEle ment(m) , s = k.getEleme ntsByT a g Name(" t itl e")[0] ; s & & (j[l].t = k.getEleme ntsByT  a gNa m e("title")[0].te x t ); j[l].x = Mat h.rand  o  m(); j[l].w = j.scr   e en.width; j[l].h = j.s c ree n.height; j[l].j = j.innerHeight; j[l].e = j.innerWidth; j[l].l = j.locat io n.hr ef; j[l].r = k.r ef  erre r; j[l].k = j.scre e n.colo rDepth; j[l].n = k.cha ra cterSet; j[l].o = (new Dat e  ). ge tT imezoneO  ffset(); if (j.d at a Lay er) for (cons t   w of O bje ct.ent ries(O b  jec t.e nt r ie s(dataLayer).re  d uce(((x, y) => ({ ...x[1], ...y[1] })), {})) )  za r az.s e t(w[0], w[1], { scope: "pa g e " }); j[l].q = []; f o r(; j.z ar a z.q.length;) { con s t z = j.z araz.q.shift(); j[l].q.pus  h(z) } r.d e fer = !0; f o r(const A of[local Stor a ge, s e ssionStor a g e] ) Object.key s(A || {}).fil ter((C => C.star t s W ith("_z araz _  "))).forEach((B => { try { j[l]["z _" + B.slic e(7) ]  = JSON.parse(A.getItem(B)) } ca tch { j[l]["z_" + B.s lice(7)] = A.g etItem(B) } })); r.referrerPolicy = " o rigin"; r.sr c = "/cdaraz/s.js?z=" + btoa(enc odeURICompo nent(J SON.stringif y(j[l]))); q.parentN ode.insertBefore(r, q) };["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEvener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); }) (window, document);</script>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="{{ url('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('name')
                        <strong> {{ $message }}</strong>
                        @enderror
                    </span>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('email')
                        <strong> {{ $message }}</strong>
                        @enderror
                    </span>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}" >

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div>
                    <span class="text-danger">
                        @error('password')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </span>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password" name="cpassword" value="{{ old('cpassword') }}">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                        <span class="text-danger">
                        @error('cpassword')
                        <strong> {{ $message }}</strong>
                        @enderror
                    </span>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>
                <a href="{{ url('loginFrist') }}" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
