<!DOCTYPE html>
<html lang=es>
<head>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://www.microtech.es/hubfs/Fotos%20blog/inventario.jpg" alt="login form"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">BIENVENIDO</span>
                                        </div>

                                        <form method="post" class="needs-validation-login" novalidate>
                                            <div class="input-group mb3">
                                                <input class="form-control" type="text" placeholder="Usuario"
                                                    name="loginUsuario" required>

                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-user"></span>

                                                    </div>
                                                </div>
                                                <div class="invalid-freedback"></div>
                                            </div>

                                            <div class="input-group mb3">
                                                <input class="form-control" type="password" placeholder="Contraseña"
                                                    name="loginPassword" required>

                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>

                                                    </div>
                                                </div>
                                                <div class="invalid-freedback"></div>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="button">Iniciar
                                                    Sesion</button>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</head>

</html>

