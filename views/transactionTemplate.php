<div class="transaction">
   <div class="container">
      <div class="transaction--title">
         <?php 
            echo (isset($_GET['transactionType']) && intval($_GET['transactionType']) == 0)? 
               'Depósito': 'Saque'; ?>
      </div>
      <div class="transaction--form">
         <div class="table-item--header">
            Valor
         </div>
         <form method="POST">
            <div class="table-item--form">
               <input type="text" name="amount" pattern="[0-9.,]{1,}"/>
            </div>
            <div class="transaction--buttons">
               <button type="submit">Confirmar</button>
               <a href="http://localhost:8080/cashmachine/index.php">Cancelar</a>
            </div>
         </form>
      </div>
   </div>
</div>
