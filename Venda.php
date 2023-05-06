<?php


class Venda {

    public function Venda($cliente, $vendedor, $produto, $preco, $pagamento){


        if(isset($_POST)){

            require_once("inc/config.php");

            $query = "INSERT INTO VENDAS(cliente, vendedor, produto, preco, pagamento) VALUES('$cliente', '$vendedor', '$produto', '$preco', '$pagamento')";

            $result = mysqli_query($conn, $query);

            return true;

        }else{
            return false;
            header('Location: /index.php');
        }

    }

}