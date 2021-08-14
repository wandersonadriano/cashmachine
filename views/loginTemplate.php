<!DOCTYPE html>
<div class="loginpage">
    <div class="container">
        <div class="loginarea">
            <div class="loginarea--bankname">
                WBank
            </div>
            <div class="loginarea--form">
                <form method="POST" action="models/login.php">
                    <label>    
                        <i class="fas fa-user" aria-hidden="true" title="Nº da Conta"></i>
                        <input type="text" name="account_number" id="field-account_number" placeholder="Nº da conta" pattern="[0-9]{10}"/>
                    </label>
                    <br/><br/>
                    <label> 
                        <i class="fas fa-key" aria-hidden="true" title="Senha"></i>
                        <input type="password" name="account_password" id="field-passoword" placeholder="Senha"/>
                    </label>
                    <br/><br/>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/10b84a3888.js" crossorigin="anonymous"></script>

