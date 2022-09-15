{extends file="template.tpl"}

{block name="title"}Login{/block}

{block name="content"}

<section class="vh-100 gradient-custom shadow">
    <div class="container py-5 h-90">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <div class="form-outline form-white mb-4">
                                <input type="text" id="username" class="form-control form-control-lg" placeholder="Username"/>
                            </div>
                            <div class="form-outline form-white mb-5">
                                <input type="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
                            </div>
                            <button class="btn btn-outline-light btn-lg px-5 mt-5" type="button" onclick=buttonLogin()>Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{/block}