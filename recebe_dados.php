
<?php 


//Teste se existe a ação
if(isset($_POST['action'])){

if ( $_POST['action'] =='cadastro'){
        echo  "\n <p>cadastro</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";

}else if($_POST['action']=='login'){
        echo "\n <p>login</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo"\n</pre>";
    //Senão teste se ação é login


}else if($_POST['action']=='senha'){
        echo "\n <p>senha</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";

    //Senão, teste se ação é recuperar senha

} else{
    header("location:index.php");
}
} else{
    header("location:index.php");
} 