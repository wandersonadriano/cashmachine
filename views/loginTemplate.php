<div class="loginpage">
    <div class="container">
        <div class="loginarea">
            <div class="logo">
                <img src="assets/images/logo_by_logaster.png"/>
                <span class="logo-name">Bank</span>
            </div>
            <div class="loginarea--form">
                <form method="POST" action="models/login.php">
                    <label>    
                        <i class="fas fa-user" aria-hidden="true" title="Nº da Conta"></i>
                        <input type="text" name="account_number" id="field-account_number" placeholder="Nº da conta"/>
                    </label>
                    
                    <label> 
                        <i class="fas fa-key" aria-hidden="true" title="Senha"></i>
                        <input type="password" name="account_password" id="field-passoword" placeholder="Senha"/>
                    </label>
                    
                    <button type="submit">Entrar</button>
                </form>
                <a href="#">Esqueceu a senha?</a>
            </div>
        </div>
    </div>
</div>

