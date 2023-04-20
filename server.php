<?php 

// controllo se è stata fatta una richiesta post axios
if(isset($_POST['newTodo'])) {
    $newElement= [
        "name" => $_POST['newTodo'],
        "fatto" => false
    ];
    // prende la lista jspon
    $todoListJson = file_get_contents('todos.json');
    // la trasforma
    $todoList = json_decode($todoListJson);
    // pusho
    $todoList[] = $newElement;

    // ritrasforma
    $newTodoList = json_encode($todoList);

    // RIMETTO LISTA NEL JSON
    file_put_contents('todos.json' , $newTodoList);

} else {

// prende l'array dal json e lo salva 
$strFile = file_get_contents('todos.json');



// trasforma la stringa sopra in un array php
$todoList = json_decode($strFile);

// diciamo al browser che effettivamente che è un json
// il cambio del tipo va fatta prima
header('Content-Type: application/json');

// stampiamo sulla pagina l'array php in json cidificandolo con json_encode
//la stampa in pagina va fatta sempre per ultimo
echo json_encode($todoList);

}
?>