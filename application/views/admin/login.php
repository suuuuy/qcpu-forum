<div class="large-3 large-centered columns">
    <div class="login-box">
        <div class="row">
            <div class="column large-12 small-10 medium-11 text-center">
                <img class="qcpu-logo admin-qc" src="<?=base_url('assets/img/banner.png');?>" alt="QCPU Logo">
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <form action="<?=base_url('admin/login');?>" method="post">
                    <div class="row">
                        <div class="large-12 columns">
                            <input type="text" name="username" placeholder="Username" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 large-centered columns">
                            <input type="submit" class="button expand" value="Log In"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>